@extends('layouts/master')

@section('title',$prod->meta_t ? $prod->meta_t : 'ilve-shop.com.ua - товар - придбати '.$prod->category->name.',
'.$prod->style->name.', '.$prod->name.'.')

@section('keywords', $prod->meta_k ? $prod->meta_k : 'ilve-shop.com.ua, придбати '.$prod->category->name.'
'.$prod->style->name.' , купити '.$prod->category->name.' '.$prod->style->name.' , купити
'.$prod->category->name.' у стилі '.$prod->style->name. ' , придбати ' .$prod->category->name.' '.$prod->name.'')

@section('descr', $prod->meta_d ? $prod->meta_d : $prod->short_text)

@section('content')
<div id="back-to-info" class="info-gallery w-clearfix">
    <div class="div-block-26">
        @if ($prod->style->code != 'other')
        <a href="{{route($prod->style->code)}}" class="title-cat-scheda">{{$prod->style->name}}</a>
        @endif
        <a href="{{route('category', $prod->category->code)}}" class="title-cat-scheda fktlgt"></a>
        <a href="{{route('category', $prod->category->code)}}" class="link-block-3 w-inline-block">
            <img src="{{ Storage::url('static/') }}block-arrow.svg" width="21" alt="" class="image-12">
            <div class="p-small">{{ $prod->category->name }}</div>
        </a>
        <h1 class="title-product">{{ $prod->name }}</h1>
        @if(!empty($prod->price))
        <div class="price">Від {{number_format(round($prod->price, -3), 0, '.', ' ')}} грн.</div>
        @endif
        <p>{{ $prod->short_text }}</p>

        <a href="{{route('product-info', $prod->code)}}" rel="nofollow" class="button w-inline-block" data-ix="button">
            <div>Бажаєте придбати або співпрацювати?</div>
            <div class="line-link dark"></div>
            <img src="{{ Storage::url('static/') }}arrow.svg" width="18" alt="" class="arrow">
        </a>
    </div>
    <div class="carousel vertical-mobile-gallery"
        data-flickity='{ "imagesLoaded": true, "wrapAround": true, "pageDots": true, "prevNextButtons": false}'>
        <img src="{{Storage::url($prod->iamge)}}" alt="">
        @foreach ($prod->images as $image)
        <img src="{{Storage::url($image->image)}}" alt="">
        @endforeach

    </div>
    <div class="vertical-gallery">
        <div class="content-img-product" data-ix="big-image">
            <img src="{{Storage::url($prod->iamge)}}" alt="" class="image-7">
        </div>
        @foreach ($prod->images as $image)
        <div class="content-img-product" data-ix="big-image">
            <img src="{{Storage::url($image->image)}}" alt="" class="image-7">
        </div>
        @endforeach
    </div>
</div>
{!! $prod->plus !!}
{!! $prod->features !!}

@endsection