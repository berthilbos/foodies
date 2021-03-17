<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Restaurantmanage;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function show(Restaurant $restaurant)
    {
        return view('restaurants.show', ['restaurant' => $restaurant]);
    }

    public function index()
    {
        $restaurants = Restaurant::latest()->paginate(5);
        return view('restaurant', compact('restaurants'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
