@extends('layouts/master')

@section('title', __('technologies.seo.title') )
@section('keywords',__('technologies.seo.keywords') )
@section('descr', __('technologies.seo.descr') )

@section('content')
<div id="back-to-black" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/')}}nvBNt_QQ.jpeg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/')}}nvBNt_QQ.jpeg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="ilve" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">{!! __('technologies.h1') !!}</h1>
    </div>
</div>
<div id="ilvetext-block_5e70c60f701aa" class="block-01 w-row ilve-text">
    <div class="col1-s w-col w-col-5">
        <h2>@lang('technologies.ovens.h2')</h2>
    </div>
    <div class="col1-r w-col w-col-7">
        <p>@lang('technologies.ovens.p')</p>
    </div>
</div>
<div id="centertextandimage-block_5e70c63e701ab" class="block-center centertextandimage-block">
    <img src="{{Storage::url('static/')}}Cavity-80M-turnsplit_CLEAN.png" alt="ilve">
</div>
<div id="ilveicontext-block_5e70c67a701ac" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Quick_Start-1.svg" width="81" alt="ilve">
        <h3>@lang('technologies.quic_start.h2')</h3>
        <p>@lang('technologies.quic_start.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Triple_Glass_Door-1.svg" width="81" alt="ilve">
        <h3>@lang('technologies.doors.h2')</h3>
        <p>@lang('technologies.doors.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70c6dc701ad" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Steam_Discharge-1.svg" width="81" alt="ilve">
        <h3>@lang('technologies.stem.h2')</h3>
        <p>@lang('technologies.stem.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Cooking_Probe-1.svg" width="81" alt="ilve">
        <h3>@lang('technologies.zond.h2')</h3>
        <p>@lang('technologies.zond.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70c743701ae" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Temperature_Control-1.svg" width="81" alt="ilve">
        <h3>{!! __('technologies.t_controll.h2') !!}</h3>
        <p>@lang('technologies.t_controll.p')</p>
        <p><img class="alignnone  wp-image-3199" src="{{Storage::url('static/')}}Grafico_Controllo_Temp.svg" alt="ilve"
                width="440" height="148" /></p>
    </div>
</div>
<div id="centertextandimage-block_5e70c7fa701af" class="block-center centertextandimage-block">
    <h2 class="heading-12">@lang('technologies.coock_controll')</h2> <img
        src="{{Storage::url('static/')}}Cottura_e_Controllo.jpg" alt="ilve">
</div>
<div id="ilveicontext-block_5e70c81e701b0" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Tangential_Ventilation.svg" width="81" alt="ilve">
        <h3>{!! __('technologies.t_blast.h2') !!}</h3>
        <p>@lang('technologies.t_blast.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Folding_Grill_Coil-.svg" width="81" alt="ilve">
        <h3>{!! __('technologies.grill.h2') !!}</h3>
        <p>@lang('technologies.grill.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70c897701b1" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Soft_Closing-1.svg" width="81" alt="ilve">
        <h3>{!! __('technologies.soft_door.h2') !!}</h3>
        <p>@lang('technologies.soft_door.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Easy-clean-enamel.svg" width="81" alt="ilve">
        <h3>@lang('technologies.clean.h2')</h3>
        <p>@lang('technologies.clean.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70c8f6701b2" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Temp_30-320_1.svg" width="81" alt="ilve">
        <h3>{!! __('technologies.temp.h2') !!}</h3>
        <p>@lang('technologies.temp.p')</p>
    </div>
</div>
<div id="centertextandimage-block_5e70c92a701b3" class="block-center centertextandimage-block">
    <h2 class="heading-12">@lang('technologies.assortiment')</h2> <img
        src="{{Storage::url('static/')}}Gamma_Forni_Ilve.jpg" alt="ilve">
</div>
<div id="ilveicontext-block_5e70c958701b4" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Combined_Cooking.svg" width="81" alt="ilve">
        <h3>@lang('technologies.combi_coock.h2')</h3>
        <p>@lang('technologies.combi_coock.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Steam.svg" width="81" alt="ilve">
        <h3>@lang('technologies.stam2.h2')</h3>
        <p>@lang('technologies.stam2.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70c99a701b5" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Microwave.svg" width="81" alt="ilve">
        <h3>@lang('technologies.microvawe.h2')</h3>
        <p>@lang('technologies.microvawe.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Convection.svg" width="81" alt="ilve">
        <h3>@lang('technologies.convetion.h2')</h3>
        <p>@lang('technologies.convetion.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70c9cc701b6" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Temp_400.svg" width="81" alt="ilve">
        <h3>@lang('technologies.pizza.h2')</h3>
        <p>@lang('technologies.pizza.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Even_Cooking.svg" width="81" alt="ilve">
        <h3>@lang('technologies.baking.h2')</h3>
        <p>@lang('technologies.baking.p')</p>
    </div>
</div>
<div id="centertextandimage-block_5e70ca2c701b7" class="block-center centertextandimage-block">
    <h2 class="heading-12  no-btm">@lang('technologies.tft.h2')</h2>
    <div class="line-hawk">@lang('technologies.tft.h2')</div> <img src="{{Storage::url('static/')}}Display_TFT.jpg"
        alt="ilve">
</div>
<div id="ilveicontext-block_5e70ca76701b8" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}4_3_Inch_Display-1.svg" width="81" alt="ilve">
        <h3>@lang('technologies.sensor.h2')</h3>
        <p>@lang('technologies.sensor.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Two_Ovens_Control-1.svg" width="81" alt="ilve">
        <h3>@lang('technologies.controll.h2')</h3>
        <p>@lang('technologies.controll.p')</p>
    </div>
</div>
<div id="imagesandcaptions-block_5e70cae2701b9" class="block-4 imagesandcaptions-block w-row">
    <div class="col4-s w-col w-col-12">
        <h3>@lang('technologies.majestic')</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Controllo_Majestic_1.jpg" alt="ilve" class="img-didascalia">
        <div class="p-small">@lang('technologies.majestic_temp')</div>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Controllo_Majestic_2.jpg" alt="ilve" class="img-didascalia">
        <div class="p-small">@lang('technologies.majestic_time')</div>
    </div>
</div>]

<script>
    document.getElementById('back-to-black-burger').style.filter = 'invert(1)'
    document.getElementById('back-to-black-logo').style.filter = 'invert(1)'

    let nav = document.querySelectorAll('.content-link-menu .link-nav');
    nav.forEach((elem) => {
        elem.classList.remove('dark')
    })

</script>
@endsection