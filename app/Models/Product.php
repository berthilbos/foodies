<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;
class Product extends Model
{
/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'food_name', 'size', 'price', 'restaurant_id',
];



public function path(){
    return route('orders.order', $this);
}

public function restaurants(){

    return $this->belongsTo(Restaurant::class, 'restaurant_id');
}



}
