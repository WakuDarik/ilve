@extends('layouts/master')

@section('title', 'Оренда інструментів у Львові і Львівській області | Орендувати ')

@section('keywords','Оренда інструментів, Інструмент у Львові і Львівській
області, Оренда ')

@section('descr','Орендувати на день за найвигіднішими цінами у Львові та Львівській області.')

@section('content')
<div id="back-to-info" class="info-gallery w-clearfix">
    <div class="div-block-26">
        <a href="{{route($prod->style->code)}}" class="title-cat-scheda">{{$prod->style->name}}</a>
        <a href="{{route('category', $prod->category->code)}}" class="title-cat-scheda fktlgt"></a>
        <a href="{{route('category', $prod->category->code)}}" class="link-block-3 w-inline-block">
            <img src="{{ Storage::url('static/') }}block-arrow.svg" width="21" alt="" class="image-12">
            <div class="p-small">{{ $prod->category->name }}</div>
        </a>
        <h1 class="title-product">{{ $prod->name }}</h1>
        @if(isset($prod->price) && $prod->price != 0)
        <div class="price">Від {{number_format($prod->price, 0, '.', ' ')}} грн.</div>
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