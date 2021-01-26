@extends('layouts/master')

@section('title', __('colonna_stellata.seo.title') )
@section('keywords',__('colonna_stellata.seo.keywords') )
@section('descr', __('colonna_stellata.seo.descr') )

@section('content')

<div id="back-to-black" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/')}}Hero_ColonnaStellata.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/')}}Hero_ColonnaStellata.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="ilve" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">@lang('colonna_stellata.h1')</h1>
    </div>
</div>
<div id="ilvetext-block_5e70b263fc881" class="block-01 w-row ilve-text">
    <div class="col1-s w-col w-col-5">
        <h2>@lang('colonna_stellata.h2')</h2>
    </div>
    <div class="col1-r w-col w-col-7">
        <p>@lang('colonna_stellata.p')</p>
    </div>
</div>
<div id="ilvegallery-block_5e70b27dfc882" class="carousel editorial-carousel"
    data-flickity='{ "imagesLoaded": true , "wrapAround": true, "pageDots": false}'>
    <img src="{{Storage::url('static/')}}CCSTAR_N_MGP_Gen_Front-1.jpg" alt="ilve">
    <img src="{{Storage::url('static/')}}Hero_ColonnaStellata.jpg" alt="ilve">
    <img src="{{Storage::url('static/')}}CCSTAR_PP_SS_Gen_Front-1.jpg" alt="ilve">
</div>
<div id="centertextandimage-block_5e70b2d8fc886" class="block-center centertextandimage-block">
    <h2 class="heading-12">@lang('colonna_stellata.ultracombi')</h2> <img
        src="{{Storage::url('static/')}}Colonna_Stellata_Sezione_Forno-1.jpg" alt="ilve">
</div>
<div id="ilveicontext-block_5e70b52efc887" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Combined_Cooking.svg" width="81" alt="ilve">
        <h3>@lang('colonna_stellata.combicookc')</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Microwave.svg" width="81" alt="ilve">
        <h3>@lang('colonna_stellata.microviwe')</h3>
    </div>
</div>
<div id="ilveicontext-block_5e70c1e8fe89f" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Convection.svg" width="81" alt="ilve">
        <h3>@lang('colonna_stellata.convektion')</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Steam.svg" width="81" alt="ilve">
        <h3>@lang('colonna_stellata.stem')</h3>
    </div>
</div>
<div id="centertextandimage-block_5e70c23cfe8a0" class="block-center centertextandimage-block">
    <h2 class="heading-12">@lang('colonna_stellata.cheel')</h2> <img src="{{Storage::url('static/')}}Colonna_Stellata_Sezione_Abbattitore-1.jpg"
        alt="ilve">
</div>
<div id="ilveicontext-block_5e70c262fe8a1" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Positive_Blast_Chill.svg" width="81" alt="ilve">
        <h3>@lang('colonna_stellata.plus_blast')</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Defrosting_Slow_Cooking.svg" width="81" alt="ilve">
        <h3>@lang('colonna_stellata.reblust')</h3>
    </div>
</div>
<div id="ilveicontext-block_5e70c2affe8a2" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Proofing.svg" width="81" alt="ilve">
        <h3>@lang('colonna_stellata.controll')</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Freezing_Room_to-20.svg" width="81" alt="ilve">
        <h3>@lang('colonna_stellata.blust')</h3>
    </div>
</div>
<div id="centertextandimage-block_5e70c303fe8a3" class="block-center centertextandimage-block">
    <h2 class="heading-12">@lang('colonna_stellata.vakum')</h2> <img
        src="{{Storage::url('static/')}}Colonna_Stellata_Sezione_Sottovuoto-1.jpg" alt="ilve">
</div>
<div id="ilveicontext-block_5e70c329fe8a4" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Bell_Chamber.svg" width="81" alt="ilve">
        <h3>@lang('colonna_stellata.bell')</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}4_Sealing_Levels.svg" width="81" alt="ilve">
        <h3>@lang('colonna_stellata.germetesation')</h3>
    </div>
</div>
<div id="ilveicontext-block_5e70c360fe8a5" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}4_m3_Vacuum.svg" width="81" alt="ilve">
        <h3>@lang('colonna_stellata.vakum_pomp')</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Capacity.svg" width="81" alt="ilve">
        <h3>@lang('colonna_stellata.capacity')</h3>
    </div>
</div>
<div id="ilveicontext-block_5e70c39afe8a6" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Marinating.svg" width="81" alt="ilve">
        <h3>@lang('colonna_stellata.marinating')</h3>
    </div>
</div>
<div id="imagetextandlink-block_5e70c3d1fe8a7" class="block-2 w-row imagetextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/')}}CSTAR_SS_Gen_34_02.png" alt="ilve">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('colonna_stellata.best_tehnologe.h2')</h2>
        {!! __('colonna_stellata.best_tehnologe.p') !!}
    </div>
</div>
@endsection