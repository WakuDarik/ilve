@extends('layouts/master')

@section('title', 'Оренда інструментів у Львові і Львівській області | Орендувати ')
@section('keywords','Оренда інструментів, Інструмент у Львові і Львівській
області, Оренда ')
@section('descr','Орендувати на день за найвигіднішими цінами у Львові та Львівській області.')

@section('content')

<div id="back-to-black" class="intro" data-ix="zoom"
    style="background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), url('{{Storage::url('static/ILVE_Home_Hero-2048x1152.jpg')}}'); background-image:linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{Storage::url('static/ILVE_Home_Hero-2048x1152.jpg')}}');">
    <div data-w-id="3352ee9f-aac6-4690-27b2-90a01d48c6f1" class="pay-off oriz">
        <div class="content-title">
            <h1 class="white _1" data-ix="title">
                Житти, </h1>
        </div>
        <div class="content-title">
            <h1 class="white _1" data-ix="title-2">
                Готувати, </h1>
        </div>
        <div class="content-title">
            <h1 class="white _1" data-ix="title-3">
                Любити. </h1>
        </div>
    </div>
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/vertical-line')}}.svg" alt="" data-ix="scroll">
    </div>
</div>

<div class="blcok-cook"
    style="background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), url('{{Storage::url('static/cover_2.jpg')}}'); background-image:linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{Storage::url('static/cover_2.jpg')}}');">
    <div class="pay-off">
        <div class="content-title">
            <h1 class="white" data-ix="title">ILVE: компания</h1>
        </div>
        <a href="/en/company" class="button white w-inline-block" data-ix="button">
            <div>Про нас</div>
            <div class="line-link white"></div>
            <img src="{{Storage::url('static/arrow.svg')}}" width="24" alt="" class="arrow">
        </a>
    </div>
</div>

<div class="blcok-cook"
    style="background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), url('{{Storage::url('static/ILVE_Home_Forno400_A-2048x1152.jpg')}}'); background-image:linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{Storage::url('static/ILVE_Home_Forno400_A-2048x1152.jpg')}}');">
    <div class="pay-off">
        <div class="content-title">
            <h1 class="white" data-ix="title">Піч для піци 400°</h1>
        </div>
        <a href="/en/forno-pizza-400" class="button white w-inline-block" data-ix="button">
            <div>Дізнайтеся більше</div>
            <div class="line-link white"></div>
            <img src="{{Storage::url('static/arrow.svg')}}" width="24" alt="" class="arrow">
        </a>
    </div>
</div>

<div class="blcok-cook"
    style="background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), url('{{Storage::url('static/ILVE_Home_CCSTAR_PP_SS-2048x1152.jpg')}}'); background-image:linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{Storage::url('static/ILVE_Home_CCSTAR_PP_SS-2048x1152.jpg')}}');">
    <div class="pay-off">
        <div class="content-title">
            <h1 class="white" data-ix="title">«Зіркова Колона»: готує, як шеф-кухар</h1>
        </div>
        <a href="/en/colonna-stellata" class="button white w-inline-block" data-ix="button">
            <div>Дізнайтеся більше</div>
            <div class="line-link white"></div>
            <img src="{{Storage::url('static/arrow.svg')}}" width="24" alt="" class="arrow">
        </a>
    </div>
</div>

<div class="blcok-cook"
    style="background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), url('{{Storage::url('static/ILVE_Home_Ultracombi-2048x1152.jpg')}}'); background-image:linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{Storage::url('static/ILVE_Home_Ultracombi-2048x1152.jpg')}}');">
    <div class="pay-off">
        <div class="content-title">
            <h1 class="white" data-ix="title">Ультракомбіновані: три духовки в одній</h1>
        </div>
        <a href="/en/ultracombi" class="button white w-inline-block" data-ix="button">
            <div>Дізнайтеся більше</div>
            <div class="line-link white"></div>
            <img src="{{Storage::url('static/arrow.svg')}}" width="24" alt="" class="arrow">
        </a>
    </div>
</div>

<div class="block-product hide-on-mobile-device"
    style="background-image: url('{{Storage::url('static/ILVE_Home_Configuratore-1024x576.png')}}');">
    <div class="block-configuration">
        <h2 class="serif white">Свобода стоврити досконалу <br />
            плиту для вашої кухні</h2>
        <a href="/en/range-cookers?conf=t" class="button white w-inline-block" data-ix="button">
            <div>Налаштуйте Вашу плиту</div>
            <div class="line-link white"></div>
            <img src="{{Storage::url('static/arrow.svg')}}" width="24" alt="" class="arrow">
        </a>
        <img class="hide-desktop" src="{{Storage::url('static/ILVE_Home_Configuratore-768x432.png')}}"">
    </div>
  </div>
  @endsection