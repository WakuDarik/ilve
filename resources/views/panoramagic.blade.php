@extends('layouts/master')

@section('title', __('panoramagic.seo.title') )
@section('keywords',__('panoramagic.seo.keywords') )
@section('descr', __('panoramagic.seo.descr') )

@section('content')
<div id="back-to-info" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/panoramagic/')}}MenuStili_Panoramagic.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/panoramagic/')}}MenuStili_Panoramagic.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="ilve panoramagic" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">Panoramagic</h1>
    </div>
</div>
<div id="ilvetext50-block_5eb044950d9ec" class="block-01 w-row">
    <div class="col1-s w-col w-col-6 w-col-stack">
        <h2>@lang('panoramagic.uniq.h2')</h2>
    </div>
    <div class="col1-r w-col w-col-6 w-col-stack">
        <p>@lang('panoramagic.uniq.p')</p>
        <p>&nbsp;</p>
        <p>Дизайн Panoramagic</p>
    </div>
</div>
<div id="ilvegallery-block_5eb044c60d9ed" class="carousel editorial-carousel"
    data-flickity='{ "imagesLoaded": true , "wrapAround": true, "pageDots": false}'>
    <img src="{{Storage::url('static/panoramagic/')}}OV30PMT3_SS_Set_Det_01.jpg" alt="ilve panoramagic">
    <img src="{{Storage::url('static/panoramagic/')}}OV30PMT3_SS_Set_Sco_01.jpg" alt="ilve panoramagic">
    <img src="{{Storage::url('static/panoramagic/')}}OV91PMT3_SS_Set_Det_01.jpg" alt="ilve panoramagic">
    <img src="{{Storage::url('static/panoramagic/')}}OV91PMT3_SS_Set_Det_02.jpg" alt="ilve panoramagic">
    <img src="{{Storage::url('static/panoramagic/')}}PM128DE3_SS_DET_01.jpg" alt="ilve panoramagic">
    <img src="{{Storage::url('static/panoramagic/')}}PM128DE3_SS_DET_02.jpg" alt="ilve panoramagic">
    <img src="{{Storage::url('static/panoramagic/')}}PM128DE3_SS_GEN_01.jpg" alt="ilve panoramagic">
    <img src="{{Storage::url('static/panoramagic/')}}PM128DE3_SS_GEN_02.jpg" alt="ilve panoramagic">
</div>
<div id="imagetextandlink-block_5eb045190d9f6" class="block-2 w-row imagetextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/panoramagic/')}}Forni_Grandi_Dimensioni.png" alt="ilve panoramagic">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('panoramagic.oven.h2')</h2>
        <p>@lang('panoramagic.oven.p')</p>
        <a href="{{route('technologies-of-ovens')}}" class="button w-inline-block" data-ix="button">
            <div>@lang('panoramagic.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18"
                alt="ilve panoramagic" class="arrow">
        </a>
    </div>
</div>
<div id="imagetextandlink-block_5eb045910d9f7" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/panoramagic/')}}Blocco_Cottura.jpg" alt="ilve panoramagic">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('panoramagic.surfaces.h2')</h2>
        <p>@lang('panoramagic.surfaces.p')</p>
    </div>
</div>
<div id="relatedblock-block_5eb045e40d9f8" class="correlati related-to-black">
    <div class="related-row w-row">
        <h4 class="title-correlati">@lang('panoramagic.goods')</h4>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('panoramagic.surfaces2.h2')</h2>
            <p class="paragraph-7 white">{!! __('panoramagic.surfaces2.p') !!}</p>
            <a href="{{route('category-style', ["range-cookers", "panoramagic"])}}"
                class="button dark small w-inline-block" data-ix="button">
                <div class="white">@lang('panoramagic.surfaces2.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve panoramagic" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/panoramagic/')}}PM128DS3_SS_HOOD_Gen_Front_Thumb.png"
                alt="ilve panoramagic">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('panoramagic.hoob.h2')</h2>
            <p class="paragraph-7 white">@lang('panoramagic.hoob.p')</p>
            <a href="{{route('category-style', ["hoods", "panoramagic"])}}" class="button dark small w-inline-block"
                data-ix="button">
                <div class="white">@lang('panoramagic.hoob.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve panoramagic" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/panoramagic/')}}APM120_SS_Gen_Front.png" alt="ilve panoramagic">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('panoramagic.hoob.h2')</h2>
            <p class="paragraph-7 white">@lang('panoramagic.hoob.p')</p>
            <a href="{{route('category-style', ["ovens-and-cooking-and-storage-systems", "panoramagic"])}}"
                class="button dark small w-inline-block" data-ix="button">
                <div class="white">@lang('panoramagic.hoob.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve panoramagic" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/panoramagic/')}}OV91PMT3_SS_Gen_Front.png" alt="ilve panoramagic">
        </div>
    </div>
</div>
@endsection