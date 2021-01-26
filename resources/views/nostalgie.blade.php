@extends('layouts/master')

@section('title', __('nostalgie.seo.title') )
@section('keywords',__('nostalgie.seo.keywords') )
@section('descr', __('nostalgie.seo.descr') )

@section('content')

<div id="back-to-info" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/nostalgie/')}}cucina-2.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/nostalgie/')}}cucina-2.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="ilve nostalgie" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line" >Nostalgie</h1>
    </div>
</div>
<div id="ilvetext50-block_5e5f8b46b2ec2" class="block-01 w-row">
    <div class="col1-s w-col w-col-6 w-col-stack">
        <h2>@lang('nostalgie.uniq.h2')</h2>
    </div>
    <div class="col1-r w-col w-col-6 w-col-stack">
        {!! __('nostalgie.uniq.p') !!}
    </div>
</div>
<div id="ilvegallery-block_5e5f9262c09a9" class="carousel editorial-carousel"
    data-flickity='{ "imagesLoaded": true , "wrapAround": true, "pageDots": false}'>
    <img src="{{Storage::url('static/nostalgie/')}}PD10SNE3_MGP_ANB100_GEN_01.jpg" alt="ilve nostalgie">
    <img src="{{Storage::url('static/nostalgie/')}}PD10SNE3_MGP_ANB100_DET_01.jpg" alt="ilve nostalgie">
    <img src="{{Storage::url('static/nostalgie/')}}PD10SNE3_MGP_ANB100_DET_02.jpg" alt="ilve nostalgie">
    <img src="{{Storage::url('static/nostalgie/')}}PD10SNE3_MGP_ANB100_DET_03.jpg" alt="ilve nostalgie">
    <img src="{{Storage::url('static/nostalgie/')}}OV60SNT3_HCB70SDN_RN9020SBS_DN60A08_MGB_Set_Det_01.jpg" alt="ilve nostalgie">
    <img src="{{Storage::url('static/nostalgie/')}}OV91SNT3_HCB90FCN_AG120_WHG_Set_Gen_01.jpg" alt="ilve nostalgie">
    <img src="{{Storage::url('static/nostalgie/')}}OV91SNT3_HCB90FCN_AG120_WHG_Set_Det_03.jpg" alt="ilve nostalgie">
    <img src="{{Storage::url('static/nostalgie/')}}OV91SNT3_HCB90FCN_AG120_WHG_Set_Det_02.jpg" alt="ilve nostalgie">
    <img src="{{Storage::url('static/nostalgie/')}}OV91SNT3_HCB90FCN_AG120_WHG_Set_Det_01.jpg" alt="ilve nostalgie">
    <img src="{{Storage::url('static/nostalgie/')}}OV60SNT3_HCB70SDN_RN9020SBS_DN60A08_MGB_Set_Sco_04.jpg" alt="ilve nostalgie">
    <img src="{{Storage::url('static/nostalgie/')}}OV60SNT3_HCB70SDN_RN9020SBS_DN60A08_MGB_Set_Sco_03.jpg" alt="ilve nostalgie">
    <img src="{{Storage::url('static/nostalgie/')}}OV60SNT3_HCB70SDN_RN9020SBS_DN60A08_MGB_Set_Sco_02.jpg" alt="ilve nostalgie">
    <img src="{{Storage::url('static/nostalgie/')}}OV60SNT3_HCB70SDN_RN9020SBS_DN60A08_MGB_Set_Sco_01.jpg" alt="ilve nostalgie">
    <img src="{{Storage::url('static/nostalgie/')}}OV60SNT3_HCB70SDN_RN9020SBS_DN60A08_MGB_Set_Gen_01.jpg" alt="ilve nostalgie">
</div>
<div id="imagetextandlink-block_5e5f9ab58bad0" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/nostalgie/')}}M15SDNE3_LC_HOBS_ZENITH-3.jpg" alt="ilve nostalgie">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('nostalgie.surfaces.h2')</h2>
        <p>{!! __('nostalgie.surfaces.p') !!}</p>
        <a href="/hob-technologies" class="button w-inline-block" data-ix="button">
            <div>@lang('nostalgie.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt="ilve nostalgie"
                class="arrow">
        </a>
    </div>
</div>
<div id="imagetextandlink-block_5e5f9af68bad1" class="block-2 w-row imagetextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/nostalgie/')}}P15SN_MGP_Gen_Front.jpg" alt="ilve nostalgie">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('nostalgie.oven.h2')</h2>
        {!! __('nostalgie.oven.p') !!}
        <a href="/technologies-of-ovens-and-cooking-and-storage-systems" class="button w-inline-block"
            data-ix="button">
            <div>@lang('nostalgie.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt="ilve nostalgie"
                class="arrow">
        </a>
    </div>
</div>
<div id="imagetextandlink-block_5e5f9b388bad2" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/nostalgie/')}}P15FQN_LGC_GEN_FRONT_01.jpg" alt="ilve nostalgie">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('nostalgie.sophistication.h2')</h2>
        <p>@lang('nostalgie.sophistication.p')</p>
    </div>
</div>
<div id="imagetextandlink-block_5e5f9b598bad3" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/nostalgie/')}}CCSTAR_N_MGP_Gen_Front.jpg" alt="ilve nostalgie">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>@lang('nostalgie.star_column.h2')</h2>
        <p>@lang('nostalgie.star_column.p')</p>
        <a href="/styles/nostalgie-en/colonna-stellata-cstarn" class="button w-inline-block" data-ix="button">
            <div>@lang('nostalgie.discover')</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt="ilve nostalgie"
                class="arrow">
        </a>
    </div>
</div>
<div id="colorblocks-block_5e709a17007a9" class="gallery-colors-content">
    <div class="block-center">
        <h2 class="heading-12">@lang('nostalgie.colors_info.h2')</h2>
        <div class="line-2">@lang('nostalgie.colors_info.p')</div>
    </div>
    <div class="carousel abaco-carousel">
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_AWB_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.aw') <br>
                @lang('nostalgie.finishing.o')</div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_AWC_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.aw') <br>
                @lang('nostalgie.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_AWG_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.aw') <br>
                @lang('nostalgie.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_AWP_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.aw') <br>
                @lang('nostalgie.finishing.m') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_BKB_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.b') <br>
                @lang('nostalgie.finishing.o') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_BKC_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.b') <br>
                @lang('nostalgie.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_BKG_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.b') <br>
                @lang('nostalgie.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_BKP_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.b') <br>
                @lang('nostalgie.finishing.m') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_BUB_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.bu') <br>
                @lang('nostalgie.finishing.o') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_BUC_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.bu') <br>
                @lang('nostalgie.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_BUG_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.bu') <br>
                @lang('nostalgie.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_BUP_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.bu') <br>
                @lang('nostalgie.finishing.m') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_EGB_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.eg') <br>
                @lang('nostalgie.finishing.o') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_EGC_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.eg') <br>
                @lang('nostalgie.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_EGG_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.eg') <br>
                @lang('nostalgie.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_EGP_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.eg') <br>
                @lang('nostalgie.finishing.m') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_MBB_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.mb') <br>
                @lang('nostalgie.finishing.o') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_MBC_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.mb') <br>
                @lang('nostalgie.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_MBG_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.mb') <br>
                @lang('nostalgie.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_MBP_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.mb') <br>
                @lang('nostalgie.finishing.m') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_MGB_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.mg') <br>
                @lang('nostalgie.finishing.o') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_MGC_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.mg') <br>
                @lang('nostalgie.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_MGG_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.mg') <br>
                @lang('nostalgie.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_MGP_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.mg') <br>
                @lang('nostalgie.finishing.m') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_SSB_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.ss') <br>
                @lang('nostalgie.finishing.o') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_SSC_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.ss') <br>
                @lang('nostalgie.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_SSG_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.ss') <br>
                @lang('nostalgie.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_SSP_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.ss') <br>
                @lang('nostalgie.finishing.m') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_WHB_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.wh') <br>
                @lang('nostalgie.finishing.o') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_WHC_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.wh') <br>
                @lang('nostalgie.finishing.h') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_WHG_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.wh') <br>
                @lang('nostalgie.finishing.l') </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/nostalgie/')}}P09PQN_WHP_Gen_Front.png" alt="ilve nostalgie">
            <div class="color-titles-box">
                @lang('nostalgie.colors.wh') <br>
                @lang('nostalgie.finishing.m') </div>
        </div>
    </div>
</div>
<div id="relatedblock-block_5e5faf508fc1c" class="correlati related-to-black">
    <div class="related-row w-row">
        <h4 class="title-correlati">
            @lang('nostalgie.goods') </h4>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('nostalgie.plates.h2')</h2>
            <p class="paragraph-7 white">@lang('nostalgie.plates.p')</p>
            <a href="/range-cookers/nostalgie" class="button dark small w-inline-block" data-ix="button">
                <div class="white">@lang('nostalgie.plates.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve nostalgie" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/nostalgie/')}}P15SQN_MGP_HOOD_Gen_Front_Cat_Thumb.png" alt="ilve nostalgie">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('nostalgie.hoob2.h2')</h2>
            <p class="paragraph-7 white">@lang('nostalgie.hoob2.p')</p>
            <a href="/hoods/nostalgie"
                class="button dark small w-inline-block" data-ix="button">
                <div class="white">@lang('nostalgie.hoob2.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve nostalgie" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/nostalgie/')}}AG150_MG_Gen_FrontCat_Thumb.png" alt="ilve nostalgie">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('nostalgie.star_column2.h2')</h2>
            <p class="paragraph-7 white">@lang('nostalgie.star_column2.p')</p>
            <a href="/styles/nostalgie-en/colonna-stellata-cstarn"
                class="button dark small w-inline-block" data-ix="button">
                <div class="white">@lang('nostalgie.star_column2.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve nostalgie" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/nostalgie/')}}CSTARN_MGG_Gen_Front.png" alt="ilve nostalgie">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('nostalgie.oven2.h2')</h2>
            <p class="paragraph-7 white">@lang('nostalgie.oven2.p')</p>
            <a
                href="/ovens-and-cooking-and-storage-systems/nostalgie" class="button dark small w-inline-block"
                data-ix="button">
                <div class="white">@lang('nostalgie.oven2.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve nostalgie" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/nostalgie/')}}645SNZT4_MGG_Gen_Front.png" alt="ilve nostalgie">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('nostalgie.gas_panels.h2')</h2>
            <p class="paragraph-7 white">@lang('nostalgie.gas_panels.p')</p>
            <a
                href="/gas-hobs/nostalgie" class="button dark small w-inline-block" data-ix="button">
                <div class="white">@lang('nostalgie.gas_panels.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve nostalgie" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/nostalgie/')}}HCB90SDN_SSG_Gen_Front_Cat_Thumb.png" alt="ilve nostalgie">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">@lang('nostalgie.induction_panels.h2')</h2>
            <p class="paragraph-7 white">@lang('nostalgie.induction_panels.p')</p>
            <a href="/induction-hobs/nostalgie"
                class="button dark small w-inline-block" data-ix="button">
                <div class="white">@lang('nostalgie.induction_panels.slogan')</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="ilve nostalgie" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/nostalgie/')}}VI364N_Cat_Thumb.png" alt="ilve nostalgie">
        </div>
    </div>
</div>

@endsection