<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Axlon\PostalCodeValidation\Rules\PostalCode;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AreaController extends Controller
{
    use HasFactory;

    public function path()
    {
    }

    public function index(Request $request)
    {
        $this->validatePostalCode();

        $customerPostalCode = strtolower($request->input('customerPostalCode'));

        $customerRegion = substr($customerPostalCode, 0, 2);


        $results = Restaurant::with('times:id,start,stop')->whereHas('areas', function ($q) use ($customerRegion) {
            $q->where('area', '=', $customerRegion);
        })->get();
            

        $now = carbon::now()->format("H:i:s");
        ;
        foreach ($results as $result) {
            if ($result->times->start <= $now) {
                $result->times->start = 'Open untill '.$result->times->stop."";
            } elseif ($result->times->start >= $now) {
                $result->times->start = 'Closed untill '.$result->times->start."";
            }
        }

        $results = $results->sortByDesc('times.start');


        return view('searchresults', ['customerPostalCode' => $customerPostalCode, 'results' => $results]);
    }

    protected function validatePostalCode()
    {
        request()->validate([
                'customerPostalCode' => 'required',
                'customerPostalCode' => [PostalCode::for('NL')]

                ]);
    }
}
