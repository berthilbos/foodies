<?php
namespace App\Http\Controllers;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Time;
use Illuminate\Support\Facades\DB;
class RestaurantmanageController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
function __construct()
{
$this->middleware('permission:restaurant-list|restaurant-create|restaurant-edit|restaurant-delete', ['only' => ['index','show']]);
$this->middleware('permission:restaurant-create', ['only' => ['create','store']]);
$this->middleware('permission:restaurant-edit', ['only' => ['edit','update']]);
$this->middleware('permission:restaurant-delete', ['only' => ['destroy']]);
}
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$restaurants = Restaurant::latest()->paginate(5);
return view('restaurants.index',compact('restaurants'))
->with('i', (request()->input('page', 1) - 1) * 5);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('restaurants.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
    request()->validate([
        'restaurant_name' => 'required',
        'email' => 'required',
        'street' => 'required',
        'house_number' => 'required',
        'postal_code' => 'required',
        'city' => 'required',
        'phone' => 'required',
        'start' => 'required',
        'stop' => 'required',
        ]);
//saves inputfield (except start and stop) to DB Restaurant table first
Restaurant::create($request->all());

//get postalcode to areas table and save to DB    
$area = substr($request->input('postal_code'),0,2);
DB::table('areas')->insert(array('area' => $area));

//get times and save to DB
$start = $request->input('start');
$stop = $request->input('stop');
DB::table('times')->insert(array('stop' => $stop, 'start' => $start));


//get area id from added row in area table 
$areaIdCollection = DB::table('areas')->where('area', $area)->get();
$areaID = $areaIdCollection[0]->id;

// Get Id from added restaurant table row, based on name and add it to the area_restuarant table together with the area ID. 
$restaurantname = $request->input('restaurant_name');
$restaurant = DB::table('restaurants')->where('restaurant_name', $restaurantname)->pluck('id');
$restaurantid = $restaurant->get(0);
DB::table('area_restaurant')->insert(array('restaurant_id' => $restaurantid, 'area_id' => $areaID ));

return redirect()->route('restaurants.index')
->with('success','Restaurant created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\Product  $product
* @return \Illuminate\Http\Response
*/
public function show(Restaurant $restaurant)
{
return view('restaurants.show',compact('restaurant'));
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Product  $product
* @return \Illuminate\Http\Response
*/
public function edit(Restaurant $restaurant)
{
return view('restaurants.edit',compact('restaurant'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Product  $product
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Restaurant $restaurant)
{
request()->validate([
    'restaurant_name' => 'required',
    'email' => 'required',
    'street' => 'required',
    'house_number' => 'required',
    'postal_code' => 'required',
    'city' => 'required',
    'phone' => 'required',
]);


$restaurant->update($request->all());
return redirect()->route('restaurants.index')
->with('success','restaurant updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Product  $product
* @return \Illuminate\Http\Response
*/
public function destroy(Restaurant $restaurant)
{
$restaurant->delete();
return redirect()->route('restaurants.index')
->with('success','restaurant deleted successfully');
}
}
