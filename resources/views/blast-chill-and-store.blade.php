@extends('layouts/master')

@section('title', __('blast.seo.title') )
@section('keywords',__('blast.seo.keywords') )
@section('descr', __('blast.seo.descr') )


@section('content')


<div id="back-to-black" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/')}}Conservazione_Abbattimento_Hero.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/')}}Conservazione_Abbattimento_Hero.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="ilve" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">@lang('blast.h1')</h1>
    </div>
</div>
<h2 class="has-text-align-center">@lang('blast.function')</h2>
<div id="ilveicontext-block_5e70cec265c20" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Positive_Blast_Chill.svg" width="81" alt="ilve">
        <h3>@lang('blast.plus_blust.h3')</h3>
        <p>@lang('blast.plus_blust.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Proofing.svg" width="81" alt="ilve">
        <h3>@lang('blast.ideal_support.h3')</h3>
        <p>@lang('blast.ideal_support.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70ceed65c21" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Defrosting_Slow_Cooking.svg" width="81" alt="ilve">
        <h3>@lang('blast.reblust.h3')</h3>
        <p>@lang('blast.reblust.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Freezing_Room_to-20.svg" width="81" alt="ilve">
        <h3>@lang('blast.blust.h3')</h3>
        <p>@lang('blast.blust.p')</p>
    </div>
</div>
<div id="centertextandimage-block_5e70e9fa98bfa" class="block-center centertextandimage-block">
    <h2 class="heading-12">@lang('blast.vakum')</h2> <img src="{{Storage::url('static/')}}Conservazione_Sottovuoto.png"
        alt="ilve">
</div>
<div id="ilveicontext-block_5e70cf5565c24" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Bell_Chamber.svg" width="81" alt="ilve">
        <h3>@lang('blast.bell.h3')</h3>
        <p>@lang('blast.bell.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}4_Sealing_Levels.svg" width="81" alt="ilve">
        <h3>@lang('blast.consolidation.h3')</h3>
        <p>@lang('blast.consolidation.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70cf8065c25" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}4_m3_Vacuum.svg" width="81" alt="ilve">
        <h3>@lang('blast.vacuum_pump.h3')</h3>
        <p>@lang('blast.vacuum_pump.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Marinating.svg" width="81" alt="ilve">
        <h3>@lang('blast.marinating.h3')</h3>
        <p>@lang('blast.marinating.p')</p>
    </div>
</div>
<div id="ilveicontext-block_5e70cfb765c26" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Low_consumption.svg" width="81" alt="ilve">
        <h3>@lang('blast.consumption.h3')</h3>
        <p>@lang('blast.consumption.p')</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Capacity.svg" width="81" alt="ilve">
        <h3>@lang('blast.capacity.h3')</h3>
        <p>@lang('blast.capacity.p')</p>
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