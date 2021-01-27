@extends('layouts/master')


@section('title', __('pizza.seo.title') )
@section('keywords',__('pizza.seo.keywords') )
@section('descr', __('pizza.seo.descr') )


@section('content')

<div id="back-to-black" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/')}}ILVE_Forno400_Hero.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/')}}ILVE_Forno400_Hero.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="ilve" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">@lang('pizza.h1')</h1>
    </div>
</div>
<div id="ilvetext-block_5e809acb6a965" class="block-01 w-row ilve-text">
    <div class="col1-s w-col w-col-5">
        <h2>@lang('pizza.pizza_home.h2')</h2>
    </div>
    <div class="col1-r w-col w-col-7">
        <p>@lang('pizza.pizza_home.p')</p>
    </div>
</div>
<div id="imagetextandlink-block_5e809ae16a966" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/')}}ILVE_Forno400_Deflettori.jpg" alt="ilve">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('pizza.temerature.h2')</h2>
        <p>@lang('pizza.temerature.p')</p>
    </div>
</div>
<div id="centertextandimage-block_5e809b686a968" class="block-center centertextandimage-block">
    <h2 class="heading-12  no-btm">@lang('pizza.haight.h2')</h2>
    <div class="line-hawk">@lang('pizza.haight.p')</div> <img src="{{Storage::url('static/')}}ILVE_Forno400_TFT.jpg"
        alt="ilve">
</div>

<div id="ilveicontext-block_5e809b966a969" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Temp_30-400-1.svg" width="81" alt="ilve">
        <h3>@lang('pizza.of_to')</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Temperature_Control-1.svg" width="81" alt="ilve">
        <h3>@lang('pizza.controll')</h3>
    </div>
</div>

<div id="ilveicontext-block_5e809bf86a96a" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Tangential_Ventilation.svg" width="81" alt="ilve">
        <h3>@lang('pizza.tangents')</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Child_Safety.svg" width="81" alt="ilve">
        <h3>Child safety</h3>
    </div>
</div>

<div id="imagetextandlink-block_5e809c266a96b" class="block-2 w-row imagetextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/')}}ILVE_Forno400_Acccessori.jpg" alt="ilve">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('pizza.accessories.h2')</h2>
        <p>@lang('pizza.accessories.p')</p>
    </div>
</div>

<div id="twocolsgrey-block_5e809c5e6a96c" class="block-3 w-row twocolsgrey-block invert">
    <div class="col-3-img w-col w-col-6">
        <img src="{{Storage::url('static/')}}645SZTCT4_BK_Gen_Front.png" alt="ilve" class="image-11">
    </div>
    <div class="col3-txt w-col w-col-6">
        <h2>@lang('pizza.p_p_glass.h2')</h2>
        <p>@lang('pizza.p_p_glass.p')</p>
        <a href="{{route('prod', ['nostalgie', '645SNZT4'])}}" class="button w-inline-block" data-ix="button">
            <div>@lang('pizza.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt="ilve"
                class="arrow">
        </a>
    </div>
</div>

<div id="twocolsgrey-block_5e809d056a96d" class="block-3 w-row twocolsgrey-block invert">
    <div class="col-3-img w-col w-col-6">
        <img src="{{Storage::url('static/')}}645SLZT4_SS_Gen_Front.png" alt="ilve" class="image-11">
    </div>
    <div class="col3-txt w-col w-col-6">
        <h2>@lang('pizza.p_p_steel.h2')</h2>
        <p>@lang('pizza.p_p_steel.p')</p>
        <a href="{{route('prod', ['nostalgie', '645SNZT4'])}}" class="button w-inline-block" data-ix="button">
            <div>@lang('pizza.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt="ilve"
                class="arrow">
        </a>
    </div>
</div>
<div id="twocolsgrey-block_5e809dce6a96e" class="block-3 w-row twocolsgrey-block " style="padding-bottom: 100px;">
    <div class="col-3-img w-col w-col-6">
        <img src="{{Storage::url('static/')}}645SCZT4_MGG_Gen_Front.png" alt="ilve" class="image-11">
    </div>
    <div class="col3-txt w-col w-col-6">
        <h2>@lang('pizza.nostalgie.h2')</h2>
        <p>@lang('pizza.nostalgie.p')</p>
        <a href="{{route('prod', ['nostalgie', '645SNZT4'])}}" class="button w-inline-block" data-ix="button">
            <div>@lang('pizza.discover')</div>
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