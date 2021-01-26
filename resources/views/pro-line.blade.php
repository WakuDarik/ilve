@extends('layouts/master')


@section('title', __('pro-line.seo.title') )
@section('keywords',__('pro-line.seo.keywords') )
@section('descr', __('pro-line.seo.descr') )

@section('content')

<div id="back-to-info" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/pro-line/')}}Hero_Pro_Line.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/pro-line/')}}Hero_Pro_Line.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="ilve pro-line" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">Pro Line</h1>
    </div>
</div>
<div id="ilvetext-block_5e70ace8ad30f" class="block-01 w-row ilve-text">
    <div class="col1-s w-col w-col-5">
        <h2>@lang('pro-line.uniq.h2')</h2>
    </div>
    <div class="col1-r w-col w-col-7">
        {!! __('pro-line.uniq.p') !!}
    </div>
</div>
<div id="ilvegallery-block_5e70ad0dad310" class="carousel editorial-carousel"
    data-flickity='{ "imagesLoaded": true , "wrapAround": true, "pageDots": false}'>
    <img src="{{Storage::url('static/pro-line/')}}L096WMP_GRD_AGK_34-1.jpg" alt="ilve pro-line">
    <img src="{{Storage::url('static/pro-line/')}}L096WMP_GRD_AGK_DET_01-1.jpg" alt="ilve pro-line">
    <img src="{{Storage::url('static/pro-line/')}}L096WMP_GRD_AGK_GEN_01.jpg" alt="ilve pro-line">
    <img src="{{Storage::url('static/pro-line/')}}OV90SLKMP_HCL90SCK_AGK90_SS_Set_Sco_01.jpg" alt="ilve pro-line">
    <img src="{{Storage::url('static/pro-line/')}}OV90SLKMP_HCL90SCK_AGK90_SS_Set_Gen_01.jpg" alt="ilve pro-line">
    <img src="{{Storage::url('static/pro-line/')}}OV90SLKMP_HCL90SCK_AGK90_SS_Set_Det_03.jpg" alt="ilve pro-line">
    <img src="{{Storage::url('static/pro-line/')}}OV90SLKMP_HCL90SCK_AGK90_SS_Set_Det_02-1.jpg" alt="ilve pro-line">
    <img src="{{Storage::url('static/pro-line/')}}OV90SLKMP_HCL90SCK_AGK90_SS_Set_Det_01.jpg" alt="ilve pro-line">
</div>
<div id="imagetextandlink-block_5e70ae12ad314" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/pro-line/')}}L096WMP_MG_HOBS_Zenith.png" alt="ilve pro-line">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('pro-line.uniq.h2')</h2>
        <p>@lang('pro-line.uniq.p')</p>
        <a href="/hob-technologies" class="button w-inline-block" data-ix="button">
            <div>@lang('pro-line.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt="ilve pro-line"
                class="arrow">

        </a>
    </div>
</div>
<div id="imagetextandlink-block_5e70ae3bad315" class="block-2 w-row imagetextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/pro-line/')}}OV80SLK_SS_Gen_Front.jpg" alt="ilve pro-line">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('pro-line.oven.h2')</h2>
        {!! __('pro-line.oven.p') !!}
        <a href="/technologies-of-ovens-and-cooking-and-storage-systems" class="button w-inline-block" data-ix="button">
            <div>@lang('pro-line.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt="ilve pro-line"
                class="arrow">
        </a>
    </div>
</div>
<div id="imagetextandlink-block_5e70ae89ad316" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/pro-line/')}}L096WMP_GRD_AGK_34.jpg" alt="ilve pro-line">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('pro-line.functionality.h2')</h2>
        <p>@lang('pro-line.functionality.p')</p>
    </div>
</div>
<div id="colorblocks-block_5e70aeb6ad317" class="gallery-colors-content">
    <div class="block-center">
        <div class="line-2">@lang('pro-line.colors_info.h2')</div>
        <h2 class="heading-12">@lang('pro-line.colors_info.p')</h2>
    </div>
    <div class="carousel abaco-carousel">
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/pro-line/')}}L09CW_AW_Gen_Front.png" alt="ilve pro-line">
            <div class="color-titles-box">
                @lang('pro-line.colors.aw') <br>
                @lang('pro-line.finishing.s') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/pro-line/')}}L09CW_BU_Gen_Front.png" alt="ilve pro-line">
            <div class="color-titles-box">
                @lang('pro-line.colors.bu') <br>
                @lang('pro-line.finishing.s') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/pro-line/')}}L09CW_MG_Gen_Front.png" alt="ilve pro-line">
            <div class="color-titles-box">
                @lang('pro-line.finishing.g')<br>
                @lang('pro-line.finishing.s') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/pro-line/')}}L09CW_SS_Gen_Front.png" alt="ilve pro-line">
            <div class="color-titles-box">
                @lang('pro-line.colors.ss') <br>
                @lang('pro-line.finishing.s') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/pro-line/')}}L09CW_WH_Gen_Front.png" alt="ilve pro-line">
            <div class="color-titles-box">
                @lang('pro-line.colors.wh') <br>
                @lang('pro-line.finishing.s') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/pro-line/')}}L096WMP_GRD_Gen_Front.png" alt="ilve pro-line">
            <div class="color-titles-box">
                @lang('pro-line.colors.lg') <br>
                @lang('pro-line.finishing.b') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/pro-line/')}}L096WMP_MGD_Gen_Front.png" alt="ilve pro-line">
            <div class="color-titles-box">
                @lang('pro-line.colors.mg') <br>
                @lang('pro-line.finishing.b') </div>
        </div>
    </div>
</div>
<div id="relatedblock-block_5e70af2bad321" class="correlati related-to-black">
    <div class="related-row w-row">
        <h4 class="title-correlati">
            @lang('pro-line.goods') </h4>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('pro-line.plates.h2') </h2>
            <p class="paragraph-7 white">
                @lang('pro-line.plates.p')
            </p>
            <a href="/range-cookers/pro-line" class="button dark small w-inline-block" data-ix="button">
                <div class="white">@lang('pro-line.plates.slogan') </div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve pro-line" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/pro-line/')}}L128W_MG_HOOD_Gen_Front_Cat_Thumb.png" alt="ilve pro-line">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('pro-line.hoob2.h2')</h2>
            <p class="paragraph-7 white">@lang('pro-line.hoob2.p')</p>
            <a href="/hoods/pro-line" class="button dark small w-inline-block" data-ix="button">
                <div class="white">@lang('pro-line.hoob2.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve pro-line" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/pro-line/')}}AGK120_SS_Gen_Front_Cat_Thumb.png" alt="ilve pro-line">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('pro-line.oven2.h2')</h2>
            <p class="paragraph-7 white">@lang('pro-line.oven2.p')
            </p><a href="/ovens-and-cooking-and-storage-systems/pro-line" class="button dark small w-inline-block"
                data-ix="button">
                <div class="white">@lang('pro-line.oven2.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve pro-line" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/pro-line/')}}OV80SLK_SS_Gen_Front_Cat_Thumb.png" alt="ilve pro-line">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('pro-line.gas_panels.h2')</h2>
            <p class="paragraph-7 white">@lang('pro-line.gas_panels.p')
            </p><a href="/gas-hobs/pro-line" class="button dark small w-inline-block" data-ix="button">
                <div class="white">@lang('pro-line.gas_panels.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve pro-line" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/pro-line/')}}HCL75SCK_SS_Gen_Front_Cat_Thumb.png" alt="ilve pro-line">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('pro-line.induction_panels.h2')</h2>
            <p class="paragraph-7 white">@lang('pro-line.induction_panels.p')
            </p><a href="/induction-hobs/pro-line" class="button dark small w-inline-block" data-ix="button">
                <div class="white">@lang('pro-line.induction_panels.slogan') </div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve pro-line" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/pro-line/')}}KHVI75TC_BK_Gen_Front_Cat_Thumb.png" alt="ilve pro-line">
        </div>
    </div>
</div>
@endsection