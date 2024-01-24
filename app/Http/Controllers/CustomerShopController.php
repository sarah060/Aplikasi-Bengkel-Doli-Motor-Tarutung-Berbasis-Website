<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class CustomerShopController extends Controller
{
    public function index(){
        $shop = Shop::get()->all();        
        return view('customer.shop', compact('shop'));
    }
}
