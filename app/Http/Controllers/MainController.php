<?php

namespace App\Http\Controllers;

use App\Category;
use App\Currency;
use App\Optcion;
use App\Product;
use App\Style;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

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

    public function productInfo($code)
    {
        $prod = Product::where('code', $code)->first();
        return view('product-info', compact('prod'));
    }
    public function sendEmailReminder(Request $request, $id)
    {

        // Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
        //     $m->from('hello@app.com', 'Your Application');

        //     $m->to($user->email, $user->name)->subject('Your Reminder!');
        // });
    }
    public function order(Request $request, $code)
    {
        $prod = Product::where('code', $code)->first();
        Mail::send('mail', ['prodName' => $prod->name,  'body' => 'A test mail'], function ($m) use ($prod) {

            $m->from('pankratiev@chlen.com', 'Your Application');

            $m->to('waku108@gmail.com')->subject('Your Reminder!');
        });
        session()->flash('status', 'Запит відправлено. Дякуємо!');
        return redirect()->route('index');
    }

    public function changeCurency($currencyCode)
    {
        $currency = Currency::ByCode($currencyCode)->firstOrFail();
        session(['currency' => $currency->code]);
        return redirect()->back();
    }

    public function changeLocale($locale)
    {
        $avalibale = ['ua', 'ru'];
        if (!in_array($locale, $avalibale)) $locale = config('app.locale');

        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }

    public function test()
    {
        $category = Product::get();
        return view('test', compact('category'));
    }
}
