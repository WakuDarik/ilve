<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Style;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function prod($style, $product)
    {
        $prod = Product::where('code', $product)->first();
        $styles = Style::get();
        return view('styles.product', compact('prod', 'styles'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        $styles = Style::get();
        return view('category', compact('category', 'styles'));
    }

    public function categoryStyle($code, $style)
    {
        $category = Category::where('code', $code)->first();
        $styles = Style::get();
        $thisStyle = Style::where('code', $style)->first();
        return view('category', compact('category', 'styles', 'thisStyle'));
    }
}
