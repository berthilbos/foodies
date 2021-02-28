<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Restaurantmanage extends Model
{


    protected $fillable = [
        'restaurant_name', 'email', 'street',  'house_number',  'house_number_addition',  'postal_code', 'city', 'phone',
    ];
    protected $attributes = [
        'time_id' => 1, 'restaurant_type_id' => 2,
    ];

}










