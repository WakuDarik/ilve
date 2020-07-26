<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
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
        return view('auth.goods.index', compact('goods'));
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

        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $key => $image) {
                $images[$key] = new Product_Image(array('image' => $image->store($date->year . '/' . $date->month . '/' . $date->day)));
                $images[$key] = $goods->images()->save($images[$key]);
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

        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $key => $image) {
                $images[$key] = new Product_Image(array('image' => $image->store($date->year . '/' . $date->month . '/' . $date->day)));
                $images[$key] = $product->images()->save($images[$key]);
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
        $category = Category::where('code', $code)->first();
        $styles = Style::get();
        $thisStyle = Style::where('code', $style)->first();
        return view('auth.goods.index', compact('goods'));
    }
}
