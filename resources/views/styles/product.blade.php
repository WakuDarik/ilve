@extends('layouts/master')
@section('title', $prod->meta_t ? $prod->meta_t : __('product.seo.title').' '.$prod->category->__('name').'
'.$prod->style->name.' '.$prod->name.'.')

@section('keywords', $prod->meta_k ? $prod->meta_k : __('product.seo.keywords') )

@section('descr', $prod->meta_d ? $prod->meta_d : __('product.seo.descr'))

@section('content')
<div id="back-to-info" class="info-gallery w-clearfix">
    <div class="div-block-26">
        @if ($prod->style->code != 'other')
        <a href="{{route($prod->style->code)}}" class="title-cat-scheda">{{$prod->style->name}}</a>
        @endif
        <a href="{{route('category', $prod->category->code)}}" class="title-cat-scheda fktlgt"></a>
        <a href="{{route('category', $prod->category->code)}}" class="link-block-3 w-inline-block">
            <img src="{{ Storage::url('static/') }}block-arrow.svg" width="21" alt="ilve" class="image-12">
            <h2 class="p-small">{{ $prod->category->__('name') }}</h2>
        </a>
        <h1 class="title-product">{{ $prod->name }}</h1>
        @if(!empty($prod->price))
        <div class="price">@lang('product.from') {{number_format(round($prod->price_convert, -3), 0, '.', ' ')}} грн.
        </div>
        @endif
        <p>{{ $prod->__('short_text') }}</p>

        <a href="{{route('product-info', $prod->code)}}" rel="nofollow" class="button w-inline-block" data-ix="button">
            <div>@lang('product.coop')</div>
            <div class="line-link dark"></div>
            <img src="{{ Storage::url('static/') }}arrow.svg" width="18" alt="ilve" class="arrow">
        </a>
    </div>
    <div class="carousel vertical-mobile-gallery"
        data-flickity='{ "imagesLoaded": true, "wrapAround": true, "pageDots": true, "prevNextButtons": false}'>
        <img src="{{Storage::url($prod->iamge)}}" alt="ilve">
        @foreach ($prod->images as $image)
        <img src="{{Storage::url($image->image)}}" alt="ilve">
        @endforeach

    </div>
    <div class="vertical-gallery">
        <div class="content-img-product" data-ix="big-image">
            <img src="{{Storage::url($prod->iamge)}}" alt="ilve" class="image-7">
        </div>
        @foreach ($prod->images as $image)
        <div class="content-img-product" data-ix="big-image">
            <img src="{{Storage::url($image->image)}}" alt="ilve" class="image-7">
        </div>
        @endforeach
    </div>
</div>
{!! $prod->__('plus') !!}
{!! $prod->__('features') !!}
@if(sizeof($prod->options) !== 0)
<div id="content-options-container" class="content-options" style="padding-bottom: 100px;">
    <h2>@lang('product.price')</h2>
    <div class="cassetto" data-ix="cassetto">
        <img src="../../../storage/static/product/plus.svg" width="16" alt="ilve" class="plus">
        <h3 class="title-varianti-2">@lang('product.cost')</h3>
        <div class="main-features-container">
            @foreach ($prod->options as $option)
            <div class="columns-13 w-row">
                <div class="col-piani w-col w-col-6 w-col-small-6 w-col-tiny-6">
                    <div>{{$option->__('option')}}</div>
                </div>
                <div class="col-piani w-col w-col-6 w-col-small-6 w-col-tiny-6">
                    <div>{{number_format(round($option->price_convert, -3), 0, '.', ' ')}} грн.</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
@endsection