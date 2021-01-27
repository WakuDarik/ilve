@extends('layouts/master')

@section('title', __('ultracombi.seo.title') )
@section('keywords',__('ultracombi.seo.keywords') )
@section('descr', __('ultracombi.seo.descr') )

@section('content')

<div id="back-to-black" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/')}}ILVE_Ultracombi_Hero.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/')}}ILVE_Ultracombi_Hero.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="ilve" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">@lang('ultracombi.h1')</h1>
    </div>
</div>
<div id="ilvetext-block_5e80a1d2c34c3" class="block-01 w-row ilve-text">
    <div class="col1-s w-col w-col-5">
        <h2>@lang('ultracombi.convect.h2')</h2>
    </div>
    <div class="col1-r w-col w-col-7">
        <p>@lang('ultracombi.convect.p')</p>
    </div>
</div>
<div id="imagetextandlink-block_5e80a1eac34c4" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/')}}ILVE_Ultracombi_TFT.jpg" alt="ilve">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2></h2>
        <ul>
            {!! __('ultracombi.advantages') !!}
        </ul>
    </div>
</div>
<div id="centertextandimage-block_5e80a240c34c6" class="block-center centertextandimage-block">
    <h2 class="heading-12  no-btm">@lang('ultracombi.convect2.h2')</h2>
    <div class="line-hawk">@lang('ultracombi.convect2.p')</div> <img
        src="{{Storage::url('static/')}}ILVE_Ultracombi_Bread.jpg" alt="ilve">
</div>

<div id="ilveicontext-block_5e80a2fbc34cb" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <h3>@lang('ultracombi.hot.h2')</h3>
        <p>@lang('ultracombi.hot.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <h3>@lang('ultracombi.grill.h2')</h3>
        <p>@lang('ultracombi.grill.p')</p>
    </div>
</div>
<div id="centertextandimage-block_5e80a32cc34cc" class="block-center centertextandimage-block">
    <h2 class="heading-12  no-btm">@lang('ultracombi.stem.h2')</h2>
    <div class="line-hawk">@lang('ultracombi.stem.p')</div>
    <img src="{{Storage::url('static/')}}ILVE_Ultracombi_Steam.jpg" alt="ilve">
</div>

<div id="ilveicontext-block_5e80a353c34cd" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <h3>@lang('ultracombi.sous_vide.h2')</h3>
        <p>@lang('ultracombi.sous_vide.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <h3>@lang('ultracombi.voter_back.h2')</h3>
        <p>@lang('ultracombi.voter_back.p')</p>
    </div>
</div>

<div id="centertextandimage-block_5e80a383c34ce" class="block-center centertextandimage-block">
    <h2 class="heading-12  no-btm">@lang('ultracombi.microvawe.h2')</h2>
    <div class="line-hawk">@lang('ultracombi.microvawe.p')</div> <img
        src="{{Storage::url('static/')}}ILVE_Ultracombi_MW.jpg" alt="ilve">
</div>

<div id="twocolsgrey-block_5e80a444c34d1" class="block-3 w-row twocolsgrey-block invert">
    <div class="col-3-img w-col w-col-6">
        <img src="{{Storage::url('static/')}}645STCHSW_BK_Gen_Front.png" alt="ilve" class="image-11">
    </div>
    <div class="col3-txt w-col w-col-6">
        <h2>@lang('ultracombi.p_p_glass.h2')</h2>
        <p>@lang('ultracombi.p_p_glass.p')</p>
        <a href="{{route('category-style', ["cooking-and-storage-systems", "professional-plus"])}}" class="button w-inline-block" data-ix="button">
            <div>@lang('ultracombi.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt="ilve"
                class="arrow">
        </a>
    </div>
</div>
<div id="twocolsgrey-block_5e80a491c34d2" class="block-3 w-row twocolsgrey-block invert">
    <div class="col-3-img w-col w-col-6">
        <img src="{{Storage::url('static/')}}645SLHSW_SS_Gen_Front.png" alt="ilve" class="image-11">
    </div>
    <div class="col3-txt w-col w-col-6">
        <h2>@lang('ultracombi.p_p_steel.h2')</h2>
        <p>@lang('ultracombi.p_p_steel.p')</p>
        <a href="{{route('category-style', ["cooking-and-storage-systems", "professional-plus"])}}" class="button w-inline-block" data-ix="button">
            <div>@lang('ultracombi.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt="ilve"
                class="arrow">
        </a>
    </div>
</div>
<div id="twocolsgrey-block_5e80a4dac34d3" class="block-3 w-row twocolsgrey-block " style="padding-bottom: 100px;">
    <div class="col-3-img w-col w-col-6">
        <img src="{{Storage::url('static/')}}645SCHSW_MGG_Gen_Front.png" alt="ilve" class="image-11">
    </div>
    <div class="col3-txt w-col w-col-6">
        <h2>@lang('ultracombi.nostalgie.h2')</h2>
        <p>@lang('ultracombi.nostalgie.p')</p>
        <a href="{{route('category-style', ["cooking-and-storage-systems", "professional-plus"])}}" class="button w-inline-block" data-ix="button">
            <div>@lang('ultracombi.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt="ilve"
                class="arrow">
        </a>
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