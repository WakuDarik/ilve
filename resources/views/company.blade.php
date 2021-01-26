@extends('layouts/master')

@section('title', __('company.seo.title') )
@section('keywords',__('company.seo.keywords') )
@section('descr', __('company.seo.descr') )

@section('content')

<div id="back-to-info" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0)), to(rgba(255, 255, 255, 0))), url('');
background-image: linear-gradient(180deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url('');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="ilve" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line title-colored-black">@lang('company.slogan').</h1>
    </div>
</div>
<div id="ilvetext-block_5e749dd0b0182" class="block-01 w-row ilve-text">
    <div class="col1-s w-col w-col-5">
        <h2>@lang('company.company')</h2>
    </div>
    <div class="col1-r w-col w-col-7">
        {!! __('company.first_p') !!}
    </div>
</div>
<div id="imagetextandlink-block_5e749e04b0183" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/')}}ILVE_Azienda_Live_CCSTAR_PP_SS_Gen_Front.jpg" alt="ilve">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('company.second_p.h2'),</h2>
        {!! __('company.second_p.text') !!}
    </div>
</div>
<div id="imagetextandlink-block_5e749e19b0184" class="block-2 w-row imagetextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/')}}ILVE_Azienda_Cook_P128WE3_SS_DET_03.jpg" alt="ilve">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('company.threed_p.h2'),</h2>
        {!! __('company.threed_p.text') !!}
    </div>
</div>
<div id="imagetextandlink-block_5e749e3ab0185" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/')}}ILVE_Azienda_Love_M127DNE3_WHB_AM120_AMB_DET_01.jpg" alt="ilve">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('company.forth_p.h2'),</h2>
        {!! __('company.forth_p.text') !!}
    </div>
</div>
<div id="twocolsgrey-block_5e749facb0186" class="block-3 w-row twocolsgrey-block invert">
    <div class="col-3-img w-col w-col-6">
        <img src="{{Storage::url('static/')}}ILVE_Azienda_Cert_MPD10SNE3_MGP_ANB100_DET_02.jpg" alt="ilve"
            class="image-11">
    </div>
    <div class="col3-txt w-col w-col-6">
        <h2>@lang('company.fivth_p.h2'),</h2>
        {!! __('company.fivth_p.text') !!}
    </div>
</div>
@endsection