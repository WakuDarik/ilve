@extends('layouts/master')

@section('title', __('majestic.seo.title') )
@section('keywords',__('majestic.seo.keywords') )
@section('descr', __('majestic.seo.descr') )

@section('content')

<div id="back-to-info" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/majestic/')}}majestic-p-1600.jpeg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/majestic/')}}majestic-p-1600.jpeg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="ilve" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">Majestic</h1>
    </div>
</div>
<div id="ilvetext-block_5e5e6f2d1da2e" class="block-01 w-row ilve-text">
    <div class="col1-s w-col w-col-5">
        <h2>@lang('majestic.uniq.h2')</h2>
    </div>
    <div class="col1-r w-col w-col-7">
        {!! __('majestic.uniq.p') !!}
    </div>
</div>
<div id="ilvegallery-block_5e67cbadfef46" class="carousel editorial-carousel"
    data-flickity='{ "imagesLoaded": true , "wrapAround": true, "pageDots": false}'>
    <img src="{{Storage::url('static/majestic/')}}M127DNE3_WHB_AM120_AMB_GEN_01.jpg" alt="ilve">
    <img src="{{Storage::url('static/majestic/')}}M127DNE3_WHB_AM120_AMB_DET_01.jpg" alt="ilve">
    <img src="{{Storage::url('static/majestic/')}}M127DNE3_WHB_AM120_AMB_DET_02.jpg" alt="ilve">
    <img src="{{Storage::url('static/majestic/')}}M127DNE3_WHB_AM120_AMB_GEN_02.jpg" alt="ilve">
</div>
<div id="imagetextandlink-block_5e70a45d40ca0" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/majestic/')}}M127DNE3_WHB_AM120_AMB_DET_01-1.jpg" alt="ilve">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('majestic.kitchen.h2')</h2>
        <p>@lang('majestic.kitchen.p')</p>
        <a href="/hob-technologies" class="button w-inline-block" data-ix="button">
            <div>@lang('majestic.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt="ilve"
                class="arrow">
        </a>
    </div>
</div>
<div id="imagetextandlink-block_5e947a992c512" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/majestic/')}}Living_Coral_Forno.png" alt="ilve">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('majestic.hub.h2')</h2>
        {!! __('majestic.hub.p') !!}
        <a href="/technologies-of-ovens-and-cooking-and-storage-systems" class="button w-inline-block" data-ix="button">
            <div>@lang('majestic.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt="ilve"
                class="arrow">
        </a>
    </div>
</div>
<div id="imagetextandlink-block_5e70a4d440ca1" class="block-2 w-row imagetextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/majestic/')}}M15SDNE3_LC_DET_9.jpg" alt="ilve">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('majestic.hoob.h2')</h2>
        <p>@lang('majestic.hoob.p')</p>
    </div>
</div>
<div id="colorblocks-block_5e5e93ff8dc67" class="gallery-colors-content">
    <div class="block-center">
        <div class="line-2">@lang('majestic.colors_info.h2')</div>
        <h2 class="heading-12">{!! __('majestic.colors_info.h2') !!}</h2>
    </div>
    <div class="carousel abaco-carousel">
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_AWB_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.aw') <br>
                @lang('majestic.finishing.o') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_AWC_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.aw') <br>
                @lang('majestic.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_AWG_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.aw') <br>
                @lang('majestic.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_AWP_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.aw') <br>
                @lang('majestic.finishing.m') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BKB_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.b') <br>
                @lang('majestic.finishing.o') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BKC_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.b') <br>
                @lang('majestic.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BKG_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.b') <br>
                @lang('majestic.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BKP_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.b') <br>
                @lang('majestic.finishing.m') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BUB_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.bu') <br>
                @lang('majestic.finishing.o') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BUC_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.bu') <br>
                @lang('majestic.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BUG_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.bu') <br>
                @lang('majestic.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BUP_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.bu') <br>
                @lang('majestic.finishing.m') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_EGB_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.eg') <br>
                @lang('majestic.finishing.o') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_EGC_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.eg') <br>
                @lang('majestic.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_EGG_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.eg') <br>
                @lang('majestic.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_EGP_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.eg') <br>
                @lang('majestic.finishing.m') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MBB_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.mb') <br>
                @lang('majestic.finishing.o') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MBC_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.mb') <br>
                @lang('majestic.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MBG_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.mb') <br>
                @lang('majestic.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MBP_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.mb') <br>
                @lang('majestic.finishing.m') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MGB_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.mg') <br>
                @lang('majestic.finishing.o') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MGC_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.mg') <br>
                @lang('majestic.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MGG_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.mg') <br>
                @lang('majestic.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MGP_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.mg') <br>
                @lang('majestic.finishing.m') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_SSB_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.ss') <br>
                @lang('majestic.finishing.o') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_SSC_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.ss') <br>
                @lang('majestic.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_SSG_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.ss') <br>
                @lang('majestic.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_SSP_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.ss') <br>
                @lang('majestic.finishing.m') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_WHB_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.wh') <br>
                @lang('majestic.finishing.o') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_WHC_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.wh') <br>
                @lang('majestic.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_WHG_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.wh') <br>
                @lang('majestic.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_WHP_Gen_Front.png" alt="ilve">
            <div class="color-titles-box">
                @lang('majestic.colors.wh') <br>
                @lang('majestic.finishing.m') </div>
        </div>
    </div>
</div>
<div id="relatedblock-block_5e70a6c940cc7" class="correlati related-to-black">
    <div class="related-row w-row">
        <h4 class="title-correlati">
            @lang('majestic.goods') </h4>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('majestic.plates.h2')</h2>
            <p class="paragraph-7 white">@lang('majestic.plates.p')</p>
            <a href="/range-cookers/majestic" class="button dark small w-inline-block" data-ix="button">
                <div class="white">@lang('majestic.plates.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/majestic/')}}M15FDN_WHB_HOOD_Gen_Front_Cat_Thumb.png" alt="ilve">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('majestic.plates.h2')</h2>
            <p class="paragraph-7 white">@lang('majestic.plates.p')</p>
            <a href="/hoods/majestic" class="button dark small w-inline-block" data-ix="button">
                <div class="white">@lang('majestic.plates.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/majestic/')}}AM150_WH_Gen_Front_Cat_Thumb.png" alt="ilve">
        </div>
    </div>
</div>

@endsection