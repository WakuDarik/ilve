@extends('layouts/master')

@section('title', __('hob.seo.title') )
@section('keywords',__('hob.seo.keywords') )
@section('descr', __('hob.seo.descr') )

@section('content')

<div id="back-to-black" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/')}}Tecnologie_Piani_Cottura_Hero.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/')}}Tecnologie_Piani_Cottura_Hero.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="ilve" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">@lang('hob.h1')</h1>
    </div>
</div>
<div id="centertextandimage-block_5e70d10a1ad29" class="block-center centertextandimage-block">
    <h2 class="heading-12">{!! __('hob.h2') !!}</h2> <img
        src="{{Storage::url('static/')}}Bruciatori_Dual.jpg" alt="ilve">
</div>
<div id="ilveicontext-block_5e70d1271ad2a" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Dual_Burners-1.svg" width="81" alt="ilve">
        <h3>@lang('hob.double_power.h2')</h3>
        <p>@lang('hob.double_power.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}TotalBlack_FlameSpreader-1.svg" width="81" alt="ilve">
        <h3>@lang('hob.black_latun.h2')</h3>
        <p>@lang('hob.black_latun.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70d1711ad2b" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Cast_Iron_Supports-1.svg" width="81" alt="ilve">
        <h3>@lang('hob.haight_pro.h2')</h3>
        <p>@lang('hob.haight_pro.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Specialised_Hobs-1.svg" width="81" alt="ilve">
        <h3>@lang('hob.castiron_stands.h2')</h3>
        <p>@lang('hob.castiron_stands.p')</p>
    </div>
</div>
<div id="centertextandimage-block_5e70d1d01ad2d" class="block-center centertextandimage-block">
    <h2 class="heading-12">@lang('hob.gas_plus')</h2> <img src="{{Storage::url('static/')}}Plus_Piani_Gas.jpg" alt="ilve">
</div>
<div id="ilveicontext-block_5e70d1f11ad2e" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}8mm.svg" width="81" alt="ilve">
        <h3>@lang('hob.solid_burner.h2')</h3>
        <p>@lang('hob.solid_burner.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Switch_On_Knobs.svg" width="81" alt="ilve">
        <h3>@lang('hob.handle_controll.h2')</h3>
        <p>@lang('hob.handle_controll.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70d23b1ad2f" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Safety_Valve.svg" width="81" alt="ilve">
        <h3>@lang('hob.safety_valve.h2')</h3>
        <p>@lang('hob.safety_valve.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Tilted_Flame.svg" width="81" alt="ilve">
        <h3>@lang('hob.fier.h2')</h3>
        <p>@lang('hob.fier.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70d2971ad30" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Multi_Gas_Burners.svg" width="81" alt="ilve">
        <h3>@lang('hob.multi_gas.h2')</h3>
        <p>@lang('hob.multi_gas.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Triple_Crown.svg" width="81" alt="ilve">
        <h3>@lang('hob.tripel_burner.h2')</h3>
        <p>@lang('hob.tripel_burner.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70d2cd1ad31" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Brass_Spreader.svg" width="81" alt="ilve">
        <h3>@lang('hob.brass_burner.h2')</h3>
        <p>@lang('hob.brass_burner.p')</p>
    </div>
</div>
<div id="centertextandimage-block_5e70d3111ad33" class="block-center centertextandimage-block">
    <h2 class="heading-12">@lang('hob.induction_plus')</h2> <img src="{{Storage::url('static/')}}Plus_Piani_Induzione.jpg"
        alt="ilve">
</div>
<div id="ilveicontext-block_5e70d3211ad34" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Heat_Indicator.svg" width="81" alt="ilve">
        <h3>@lang('hob.indicator.h2')</h3>
        <p>@lang('hob.indicator.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Automatic_Stop.svg" width="81" alt="ilve">
        <h3>@lang('hob.timer.h2')</h3>
        <p>@lang('hob.timer.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70d37f1ad35" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Integrated_Extraction-1.svg" width="81" alt="ilve">
        <h3>@lang('hob.hood.h2')</h3>
        <p>@lang('hob.hood.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Bridge_Control.svg" width="81" alt="ilve">
        <h3>@lang('hob.sinergy_comtroll.h2')</h3>
        <p>@lang('hob.sinergy_comtroll.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70d3da1ad36" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Booster.svg" width="81" alt="ilve">
        <h3>@lang('hob.speed.h2')</h3>
        <p>@lang('hob.speed.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Slide_Controls.svg" width="81" alt="ilve">
        <h3>@lang('hob.speed.h2')</h3>
        <p>@lang('hob.speed.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70d4211ad37" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Child_Safety.svg" width="81" alt="ilve">
        <h3>@lang('hob.child_safe.h2')</h3>
        <p>@lang('hob.child_safe.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Power_Limiting.svg" width="81" alt="ilve">
        <h3>@lang('hob.safe_network.h2')</h3>
        <p>@lang('hob.safe_network.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70d45d1ad38" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Overheating_Protection.svg" width="81" alt="ilve">
        <h3>{!! __('hob.safe_temp.h2') !!}</h3>
        <p>@lang('hob.safe_network.p')</p>
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