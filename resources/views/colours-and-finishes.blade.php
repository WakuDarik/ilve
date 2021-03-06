@extends('layouts/master')


@section('title', __('colors.seo.title') )
@section('keywords',__('colors.seo.keywords') )
@section('descr', __('colors.seo.descr') )


@section('content')

<div id="back-to-black" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/')}}Colori_Finiture_Hero.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/')}}Colori_Finiture_Hero.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="ilve" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">@lang('colors.h1')</h1>
    </div>
</div>
<div id="centertextandimage-block_5e70d5b5db1f7" class="block-center centertextandimage-block">
    <h2 class="heading-12  no-btm">@lang('colors.combi_color.h2')</h2>
    <div class="line-hawk">@lang('colors.combi_color.p')</div>
    <img src="{{Storage::url('static/')}}Molteplici_combinazioni_di_colori.png" alt="ilve">
</div>
<div id="imagetextandlink-block_5e70d5dbdb1f8" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/')}}Colori_RAL.jpg" alt="ilve">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('colors.ral.h2')</h2>
        <p>@lang('colors.ral.p')</p>
    </div>
</div>
<div class="block-4 w-row pd-btm">
    <div class="col4-s w-col w-col-12">
        <h2>@lang('colors.decor')</h2>
    </div>
</div>
<div id="ilveicontext-block_5e70ddc8abedd" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}B_White.svg" width="81" alt="ilve">
        <h3>@lang('colors.colors.wh')</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}A_AntiqueWhite.svg" width="81" alt="ilve">
        <h3>@lang('colors.colors.aw')</h3>
    </div>
</div>
<div id="ilveicontext-block_5e70de09abede" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}SS_Inox.svg" width="81" alt="ilve">
        <h3>@lang('colors.colors.ss')</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}N_GlossyBlack.svg" width="81" alt="ilve">
        <h3>@lang('colors.colors.b')</h3>
    </div>
</div>
<div id="ilveicontext-block_5e70de4aabedf" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}M_GrafiteMat.svg" width="81" alt="ilve">
        <h3>@lang('colors.colors.mg')</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}BL_Blue.svg" width="81" alt="ilve">
        <h3>@lang('colors.colors.mb')</h3>
    </div>
</div>
<div id="ilveicontext-block_5e70de6eabee0" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}VS_EmeraldGreen.svg" width="81" alt="ilve">
        <h3>@lang('colors.colors.eg')</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}RB_BorgognaRed.svg" width="81" alt="ilve">
        <h3>@lang('colors.colors.bu')</h3>
    </div>
</div>
<div id="gallerytextandlink-block_5e7220ed76b60" class="block-2 w-row gallerytextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <div class="carousel carousel-inside"
            data-flickity='{ "imagesLoaded": true, "wrapAround": true, "pageDots": true, "prevNextButtons": false}'>
            <img src="{{Storage::url('static/')}}Color_Of_The_Year_Living_Coral.jpg" alt="ilve">
            <img src="{{Storage::url('static/')}}Color_Of_The_Year__Light_Green.jpg" alt="ilve">
        </div>
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('colors.year_color.h2')</h2>
        <p>@lang('colors.year_color.p')</p>
    </div>
</div>
<script>
    document.getElementById('back-to-black-burger').style.filter = 'invert(1)'
    document.getElementById('back-to-black-logo').style.filter = 'invert(1)'

    let nav = document.querySelectorAll('.content-link-menu .link-nav');
    nav.forEach((elem) => {
        elem.classList.remove('dark')
    })

</script>
@endsection