@extends('layouts/master')

@section('title', __('professional-plus.seo.title') )
@section('keywords',__('professional-plus.seo.keywords') )
@section('descr', __('professional-plus.seo.descr') )

@section('content')

<div id="back-to-info" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/prof-plus/')}}Hero_Professional_Plus.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/prof-plus/')}}Hero_Professional_Plus.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="ilve prof-plus" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">Professional Plus</h1>
    </div>
</div>
<div id="ilvetext-block_5e70a8490a5ab" class="block-01 w-row ilve-text">
    <div class="col1-s w-col w-col-5">
        <h2>@lang('professional-plus.uniq.h2')</h2>
        {!! __('professional-plus.uniq.p') !!}
    </div>
    <div class="col1-r w-col w-col-7">

    </div>
</div>
<div id="ilvegallery-block_5e70a8840a5ac" class="carousel editorial-carousel"
    data-flickity='{ "imagesLoaded": true , "wrapAround": true, "pageDots": false}'>
    <img src="{{Storage::url('static/prof-plus/')}}P15FWE3_SS_IAG_34.jpg" alt="ilve prof-plus">
    <img src="{{Storage::url('static/prof-plus/')}}P15FWE3_SS_IAG_DET_01-1.jpg" alt="ilve prof-plus">
    <img src="{{Storage::url('static/prof-plus/')}}P15FWE3_SS_IAG_DET_02.jpg" alt="ilve prof-plus">
    <img src="{{Storage::url('static/prof-plus/')}}P15FWE3_SS_IAG_GEN_01.jpg" alt="ilve prof-plus">
    <img src="{{Storage::url('static/prof-plus/')}}P15FWE3_SS_IAG_GEN_02.jpg" alt="ilve prof-plus">
    <img src="{{Storage::url('static/prof-plus/')}}OV91SLT3_HPT125FC_SS_Set_Det_01.jpg" alt="ilve prof-plus">
    <img src="{{Storage::url('static/prof-plus/')}}OV91SLT3_HPT125FC_SS_Set_Det_03.jpg" alt="ilve prof-plus">
    <img src="{{Storage::url('static/prof-plus/')}}OV91SLT3_HPT125FC_SS_Set_Gen_01.jpg" alt="ilve prof-plus">
    <img src="{{Storage::url('static/prof-plus/')}}OV91SLT3_HPT125FC_SS_Set_Sco_01.jpg" alt="ilve prof-plus">
    <img src="{{Storage::url('static/prof-plus/')}}CSTARBK_KHVI90TC_RT9020SBS_MGNOP_Set_Det_01.jpg"
        alt="ilve prof-plus">
    <img src="{{Storage::url('static/prof-plus/')}}CSTARBK_KHVI90TC_RT9020SBS_MGNOP_Set_Det_02.jpg"
        alt="ilve prof-plus">
    <img src="{{Storage::url('static/prof-plus/')}}CSTARBK_KHVI90TC_RT9020SBS_MGNOP_Set_Det_03.jpg"
        alt="ilve prof-plus">
    <img src="{{Storage::url('static/prof-plus/')}}CSTARBK_KHVI90TC_RT9020SBS_MGNOP_Set_Det_04.jpg"
        alt="ilve prof-plus">
    <img src="{{Storage::url('static/prof-plus/')}}CSTARBK_KHVI90TC_RT9020SBS_MGNOP_Set_Gen_01.jpg"
        alt="ilve prof-plus">
    <img src="" alt="ilve prof-plus">
</div>
<div id="imagetextandlink-block_5e70a8ca0a5b2" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/prof-plus/')}}P15FWE3_SS_IAG_DET_01.jpg" alt="ilve prof-plus">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('professional-plus.kitchen.h2').</h2>
        <p>@lang('professional-plus.kitchen.p')</p>
        <a href="/hob-technologies" class="button w-inline-block" data-ix="button">
            <div> @lang('professional-plus.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt="ilve prof-plus"
                class="arrow">

        </a>
    </div>
</div>
<div id="imagetextandlink-block_5e70a8fc0a5b3" class="block-2 w-row imagetextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/prof-plus/')}}645SLZT4_SS_Gen_Front.jpg" alt="ilve prof-plus">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('professional-plus.ovens.h2')</h2>
        {!! __('professional-plus.ovens.p') !!}
        <a href="/technologies-of-ovens-and-cooking-and-storage-systems" class="button w-inline-block" data-ix="button">
            <div> @lang('professional-plus.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt="ilve prof-plus"
                class="arrow">
        </a>
    </div>
</div>
<div id="imagetextandlink-block_5e70a9580a5b4" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/prof-plus/')}}P128WE3_SS_DET_02.jpg" alt="ilve prof-plus">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('professional-plus.handles.h2').</h2>
        <p>@lang('professional-plus.handles.p')</p>
    </div>
</div>
<div id="imagetextandlink-block_5e70a9850a5b5" class="block-2 w-row imagetextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/prof-plus/')}}CCSTAR_PP_SS_Gen_Front.jpg" alt="ilve prof-plus">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('professional-plus.star_column.h2').</h2>
        <p>@lang('professional-plus.star_column.p')</p>
        <a href="/colonna-stellata" class="button w-inline-block" data-ix="button">
            <div> @lang('professional-plus.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt="ilve prof-plus"
                class="arrow">
        </a>
    </div>
</div>
<div id="colorblocks-block_5e70a9da0a5b6" class="gallery-colors-content">
    <div class="block-center">
        <div class="line-2">@lang('professional-plus.colors_info.h2')</div>
        <h2 class="heading-12">@lang('professional-plus.colors_info.p')</h2>
    </div>
    <div class="carousel abaco-carousel">
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/prof-plus/')}}P096W_WH_Gen_Front.png" alt="ilve prof-plus">
            <div class="color-titles-box">
                @lang('professional-plus.colors.wh') <br>
                @lang('professional-plus.finishing.s') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/prof-plus/')}}P096W_SS_Gen_Front.png" alt="ilve prof-plus">
            <div class="color-titles-box">
                @lang('professional-plus.colors.ss') <br>
                @lang('professional-plus.finishing.s') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/prof-plus/')}}P096W_MG_Gen_Front.png" alt="ilve prof-plus">
            <div class="color-titles-box">
                @lang('professional-plus.colors.mg') <br>
                @lang('professional-plus.finishing.s') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/prof-plus/')}}P096W_BK_Gen_Front.png" alt="ilve prof-plus">
            <div class="color-titles-box">
                @lang('professional-plus.colors.b') <br>
                @lang('professional-plus.finishing.s') </div>
        </div>
    </div>
</div>
<div id="relatedblock-block_5e70aabe0a5c0" class="correlati related-to-black">
    <div class="related-row w-row">
        <h4 class="title-correlati">
            @lang('professional-plus.goods') </h4>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white"> @lang('professional-plus.plate.h2') </h2>
            <p class="paragraph-7 white">
                @lang('professional-plus.plate.p') </p>
            <a href="/range-cookers/professional-plus" class="button dark small w-inline-block" data-ix="button">
                <div class="white"> @lang('professional-plus.plate.slogan') </div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve prof-plus" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/prof-plus/')}}P15FW_SS_HOOD_Gen_Front_Cat_Thumb.png" alt="ilve prof-plus">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('professional-plus.hoobs.h2')</h2>
            <p class="paragraph-7 white">
                @lang('professional-plus.hoobs.p')</p>
            <a href="/hoods/professional-plus" class="button dark small w-inline-block" data-ix="button">
                <div class="white">@lang('professional-plus.hoobs.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve prof-plus" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/prof-plus/')}}AGQ150_SS_Gen_Front_Cat_Thumb.png" alt="ilve prof-plus">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('professional-plus.levels_colonna.h2')</h2>
            <p class="paragraph-7 white">
                @lang('professional-plus.levels_colonna.p')</p>
            <a href="/styles/professional-plus-en/colonna-stellata-cstar" class="button dark small w-inline-block"
                data-ix="button">
                <div class="white">@lang('professional-plus.levels_colonna.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve prof-plus" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/prof-plus/')}}CSTAR_SS_Gen_Front_Cat_Thumb.png" alt="ilve prof-plus">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('professional-plus.oven2.h2')</h2>
            <p class="paragraph-7 white">
                @lang('professional-plus.oven2.p') </p>
            <a href="/ovens-and-cooking-and-storage-systems/professional-plus" class="button dark small w-inline-block"
                data-ix="button">
                <div class="white">@lang('professional-plus.oven2.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve prof-plus" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/prof-plus/')}}645SLHSW_SS_Gen_Front_Cat_Thumb.png" alt="ilve prof-plus">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('professional-plus.gas_panels.h2')</h2>
            <p class="paragraph-7 white">
                @lang('professional-plus.gas_panels.p')</p>
            <a href="/gas-hobs/professional-plus" class="button dark small w-inline-block" data-ix="button">
                <div class="white"> @lang('professional-plus.gas_panels.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve prof-plus" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/prof-plus/')}}HAP125FD_Cat_Thumb.png" alt="ilve prof-plus">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('professional-plus.induction_panels.h2')</h2>
            <p class="paragraph-7 white">
                @lang('professional-plus.induction_panels.p')</p>
            <a href="/induction-hobs/professional-plus" class="button dark small w-inline-block" data-ix="button">
                <div class="white">@lang('professional-plus.induction_panels.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve prof-plus" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/prof-plus/')}}HVI90AGTC_BK_Gen_Front_Cat_Thumb.png" alt="ilve prof-plus">
        </div>
    </div>
</div>
@endsection