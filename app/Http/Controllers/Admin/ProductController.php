<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Optcion;
use App\Product;
use App\Product_Image;
use App\Style;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = Product::get();
        $styles = Style::get();
        $categories = Category::get();
        return view('auth.goods.index', compact('goods', 'styles', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::get();
        $styles = Style::get();
        return view('auth.goods.form', compact('categories', 'styles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $date = Carbon::now();

        $params = $request->all();
        $params['code'] = Controller::generate_chpu($params['name']);

        unset($params['iamge']);

        if ($request->has('iamge')) {
            $path = $request->file('iamge')->store($date->year . '/' . $date->month . '/' . $date->day);
            $params['iamge'] = $path;
        }

        $prods = Product::create($params)->id;

        $goods = Product::find($prods);

        $images = [];
        $optcions = [];
        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $key => $image) {
                $images[$key] = new Product_Image(array('image' => $image->store($date->year . '/' . $date->month . '/' . $date->day)));
                $images[$key] = $goods->images()->save($images[$key]);
            }
        }

        foreach ($params['option'] as $key => $optcion) {
            if (!empty($optcion) && !empty($request->input('priceOption')[$key])) {
                $optcions[$key] = new Optcion(array('option' => $optcion, 'price' =>  $params['priceOption'][$key]));
                $optcions[$key] = $goods->options()->save($optcions[$key]);
            }
        }

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categories = $product->category;
        $styles = $product->style;
        return view('auth.goods.form', compact('product', 'categories', 'styles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $date = Carbon::now();

        $params = $request->all();
        $params['code'] = Controller::generate_chpu($params['name']);

        unset($params['iamge']);

        if ($request->has('iamge')) {
            Storage::delete($product->iamge);
            $path = $request->file('iamge')->store($date->year . '/' . $date->month . '/' . $date->day);
            $params['iamge'] = $path;
        }

        $images = [];
        $optcions = [];

        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $key => $image) {
                $images[$key] = new Product_Image(array('image' => $image->store($date->year . '/' . $date->month . '/' . $date->day)));
                $images[$key] = $product->images()->save($images[$key]);
            }
        }

        $product->options()->delete();

        foreach ($params['option'] as $key => $optcion) {
            if (!empty($optcion) && !empty($request->input('priceOption')[$key])) {
                $optcions[$key] = new Optcion(array('option' => $optcion, 'price' =>  $params['priceOption'][$key]));
                $optcions[$key] = $product->options()->save($optcions[$key]);
            }
        }
        //dd();
        $product->update($params);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        Storage::delete($product->images()->get('image')->pluck('image')->all());
        $product->images()->delete();
        Storage::delete($product->iamge);

        $product->delete();
        return redirect()->route('products.index');
    }

    public function delMoreImg(Request $request)
    {
        Storage::delete(Product_Image::where('id', $request->img_id)->get('image')->pluck('image')->all());
        Product_Image::where('id', $request->img_id)->delete();
        return 'ok';
    }

    public function categoryStyleAdm($code, $style)
    {
        $categories = Category::get();
        $styles = Style::get();
        $category = Category::where('code', $code)->first();
        $style = Style::where('code', $style)->first();
        $goods = Product::where(['category_id' => $category->id, 'style_id' => $style->id])->get();
        return view('auth.goods.index', compact('goods', 'category', 'style', 'categories', 'styles'));
    }

    public function sort(Request $request)
    {
        if ($request->category == 'NULL' && $request->styles == 'NULL') {
            return redirect()->route('products.index');
        } elseif ($request->category == 'NULL') {
            $styles = Style::get();
            $categories = Category::get();
            $styleNow = Style::firstWhere('id', $request->styles);
            $goods = $styleNow->styleProducts;
            return view('auth.goods.index', compact('goods', 'categories', 'styles'));
        } elseif ($request->styles == 'NULL') {
            $categories = Category::get();
            $styles = Style::get();
            $categoryNow = Category::firstWhere('id', $request->category);
            $goods = $categoryNow->categoryProducts;
            return view('auth.goods.index', compact('goods', 'categories', 'styles'));
        } else {
            $styles = Style::get();
            $styleNow = Style::firstWhere('id', $request->styles);

            $categories = Category::get();
            $categoryNow = Category::firstWhere('id', $request->category);

            $goods = $styleNow->styleProductsByCategory($request->category);
            return view('auth.goods.index', compact('goods', 'categories', 'styles'));
        }

        // dd($props);
    }
}
