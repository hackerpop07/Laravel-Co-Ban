<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productCOntroller extends Controller
{
    public function viewCalculator()
    {
        return view("ProductDiscountCalculator.view");
    }

    public function calculator(Request $request)
    {
        $description = $request->description;
        $price = $request->price;
        $discount_percent = $request->discount_percent;
        $DiscountAmount = $price * $discount_percent * 0.01;
        return view("ProductDiscountCalculator.display_discount", compact(['description', 'DiscountAmount', 'discount_percent', 'price']));
    }
}
