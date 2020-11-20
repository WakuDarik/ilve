@extends('layouts/master')

@section('title', 'ilve - Кухонна техніка та меблі')
@section('keywords','ilve, кухонні прилади ilve, кухонна техніка Ilve')
@section('descr','Готувати з любов`ю означає покращення якості життя: важлива обіцянка, яку ILVE завжди дотримується.')


@section('content')

<div id="back-to-black" class="intro" data-ix="zoom"
    style="background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), url('{{Storage::url('static/ILVE_Home_Hero-2048x1152.jpg')}}'); background-image:linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{Storage::url('static/ILVE_Home_Hero-2048x1152.jpg')}}');">
    <div data-w-id="3352ee9f-aac6-4690-27b2-90a01d48c6f1" class="pay-off oriz">
        <div class="content-title">
            <h3 class="white _1 h3_like_h1">
                Жити, </h3>
        </div>
        <div class="content-title">
            <h3 class="white _1 h3_like_h1" data-ix="title-2">
                Готувати, </h3>
        </div>
        <div class="content-title">
            <h3 class="white _1 h3_like_h1" data-ix="title-3">
                Любити. </h3>
        </div>
    </div>
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/vertical-line')}}.svg" alt="ilveilve" data-ix="scroll">
    </div>
</div>

<div class="blcok-cook"
    style="background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), url('{{Storage::url('static/cover_2.jpg')}}'); background-image:linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{Storage::url('static/cover_2.jpg')}}');">
    <div class="pay-off">
        <div class="content-title">
            <h1 class="white">ILVE</h1> <span class="white h3_like_h1">компания</span>
        </div>
        <a href="/company" class="button white w-inline-block" data-ix="button">
            <div>Про нас</div>
            <div class="line-link white"></div>
            <img src="{{Storage::url('static/arrow.svg')}}" width="24" alt="ilve" class="arrow">
        </a>
    </div>
</div>

<div class="blcok-cook"
    style="background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), url('{{Storage::url('static/ILVE_Home_Forno400_A-2048x1152.jpg')}}'); background-image:linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{Storage::url('static/ILVE_Home_Forno400_A-2048x1152.jpg')}}');">
    <div class="pay-off">
        <div class="content-title">
            <h2 class="white h3_like_h1">Піч для піци 400°</h2>
        </div>
        <a href="/forno-pizza-400" class="button white w-inline-block" data-ix="button">
            <div>Дізнайтеся більше</div>
            <div class="line-link white"></div>
            <img src="{{Storage::url('static/arrow.svg')}}" width="24" alt="ilve" class="arrow">
        </a>
    </div>
</div>

<div class="blcok-cook"
    style="background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), url('{{Storage::url('static/ILVE_Home_CCSTAR_PP_SS-2048x1152.jpg')}}'); background-image:linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{Storage::url('static/ILVE_Home_CCSTAR_PP_SS-2048x1152.jpg')}}');">
    <div class="pay-off">
        <div class="content-title">
            <h2 class="white h3_like_h1">«Зіркова Колона»: готує, як шеф-кухар</h2>
        </div>
        <a href="/colonna-stellata" class="button white w-inline-block" data-ix="button">
            <div>Дізнайтеся більше</div>
            <div class="line-link white"></div>
            <img src="{{Storage::url('static/arrow.svg')}}" width="24" alt="ilve" class="arrow">
        </a>
    </div>
</div>

<div class="blcok-cook"
    style="background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), url('{{Storage::url('static/ILVE_Home_Ultracombi-2048x1152.jpg')}}'); background-image:linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{Storage::url('static/ILVE_Home_Ultracombi-2048x1152.jpg')}}');">
    <div class="pay-off">
        <div class="content-title">
            <h2 class="white h3_like_h1">Ультракомбіновані: три духовки в одній</h2>
        </div>
        <a href="/ultracombi" class="button white w-inline-block" data-ix="button">
            <div>Дізнайтеся більше</div>
            <div class="line-link white"></div>
            <img src="{{Storage::url('static/arrow.svg')}}" width="24" alt="ilve" class="arrow">
        </a>
    </div>
</div>

<div class="block-product hide-on-mobile-device"
    style="background-image: url('{{Storage::url('static/ILVE_Home_Configuratore-1024x576.png')}}');">
    <div class="block-configuration">
        <h2 class="serif white h3_like_h1">Свобода у створенні досконалої <br />
            плити для вашої кухні</h2>
        <a href="/range-cookers?conf=t" class="button white w-inline-block" data-ix="button">
            <div>Створіть Вашу плиту</div>
            <div class="line-link white"></div>
            <img src="{{Storage::url('static/arrow.svg')}}" width="24" alt="ilve" class="arrow">
        </a>
        <img class="hide-desktop" src="{{Storage::url('static/ILVE_Home_Configuratore-768x432.png')}}"">
    </div>
  </div>
  @endsection