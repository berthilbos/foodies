<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
class ShoppingController extends Controller
{
    public function put(Request $request){

    $this->validateShoppingCart();

    $restaurant = $request->input('restaurant');
    $product = $request->input('product');
    $price = floatval($request->input('price'));
    $quantity = floatval($request->input('quantity'));
    $productTotalPrice = $price*$quantity;
    $restaurantid = DB::table('products')->where('food_name', $product)->pluck('restaurant_id');
    $url = $restaurantid->all()[0];
    
    
    if($request->session()->has('order')){
    session()->push('order', ['restaurant' => $restaurant, 'product' => $product, 'price' => $price, 'quantity' => $quantity, 'productTotalPrice' => $productTotalPrice]);

    header('Location: restaurants/'.$url);
    }
    
    else{
    $_SESSION['order'] = array();    
    session()->push('order', ['restaurant' => $restaurant, 'product' => $product, 'price' => $price, 'quantity' => $quantity, 'productTotalPrice' => $productTotalPrice]);

    header('Location: restaurants/'.$url);
    }
    
}

    public function get(){

    $value = session()->get('order');
    dd($value);
}

    public function delete(){
    session()->forget('order');
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

    public function order($id){

    $products = Product::find($id)->with('restaurants:id,restaurant_name')->get();
    
    $product =  $products->find($id);
    
    
    return view('orders.order',compact('product'));
}

    public function purchase(Request $request)
{
    
    return view('orders.confirm');

}
    public function show(){

      

        return view('orders.show');

    }

    protected function validateShoppingCart()
        {
             request()->validate([
                'restaurant' => 'required',
                'product' => 'required',
                'price' => 'required',
                'quantity' => 'required'
                ]);
        }

}



