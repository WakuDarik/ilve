@extends('layouts/master')

@section('title', $category->meta_t)
@section('keywords', $category->meta_t ? $category->meta_k : 'Придбати '.$category->name.' Ilve, Купити
'.$category->name.' ilve')
@section('descr','Придбати кухонні прилади ilve '.$category->name.' у офійного дистрибьютора Ilve')

@section('content')
<div class="header-list">
    <h1 class="white">{{$category->__('name')}}</h1>
    <div class="filter">
        <div data-delay="0" class="dropdown w-dropdown" role="menu" aria-labelledby="w-dropdown-toggle-6">
            <div class="dropdown-toggle w-dropdown-toggle" tabindex="0" id="w-dropdown-toggle-6"
                aria-controls="w-dropdown-list-6" aria-haspopup="menu" style="outline: none;">
                <div class="icon w-icon-dropdown-toggle"></div>
                <div>Обрати стиль</div>
            </div>
            <nav class="dropdown-list w-dropdown-list" id="w-dropdown-list-6">
                <a href="{{route('category', $category->code)}}" class="dropdown-link w-inline-block w--current"
                    data-ix="arrow-list">
                    <div>Всі стилі</div><img src="{{Storage::url('static')}}/arrow.svg" width="16" alt="ilve"
                        class="arrow-list">
                </a>
                @foreach ($styles as $cat)
                <a href="{{route('category-style', [$category->code, $cat->code])}}"
                    class="dropdown-link w-inline-block w--current" data-ix="arrow-list">
                    <div>{{$cat->name}}</div><img src="{{Storage::url('static')}}/arrow.svg" width="16" alt="ilve"
                        class="arrow-list">
                </a>
                @endforeach

            </nav>
        </div>
    </div>
</div>


{{-- header style --}}
@if (Request::route()->getName() == 'category-style')
<div class="content-list">
    <div class="div-block-35">
        <h3 class="title-cat">{{$thisStyle->name}}</h3>
    </div>
    <div class="row-list w-row">
        @foreach ($thisStyle->styleProductsByCategory($category->id) as $prod)
        <div class="col-pro  w-col w-col-4">
            <a href="{{route('prod', [$thisStyle->code, $prod->code])}}" class="link-preview-product w-inline-block"
                data-ix="details" style="transition: all 0.6s ease 0s;">
                <img src="{{Storage::url($prod->iamge)}}" class="img-tech-product">
                <div class="div-block-23">
                    <h3 class="title-product">{{$prod->name}}</h3>
                    @if(!empty($prod->price))
                    <div class="price">Від {{number_format(round($prod->price_convert, -3), 0, '.', ' ')}} грн.</div>
                    @endempty
                    <div class="detailsa">{{$prod->short_text}}</div>
                    <div class="line-link dark"></div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@else
@foreach ($styles as $style)
@if(sizeof($style->styleProductsByCategory($category->id)) !== 0) )
<div class="content-list">
    <div class="div-block-35">
        <h3 class="title-cat">{{$style->name}}</h3>
    </div>
    <div class="row-list w-row">
        @foreach ($style->styleProductsByCategory($category->id) as $prod)
        <div class="col-pro  w-col w-col-4">
            <a href="{{route('prod', [$style->code, $prod->code])}}" class="link-preview-product w-inline-block"
                data-ix="details" style="transition: all 0.6s ease 0s;">
                <img src="{{Storage::url($prod->iamge)}}" class="img-tech-product">
                <div class="div-block-23">
                    <h3 class="title-product">{{$prod->name}}</h3>
                    @if(!empty($prod->price))
                    <div class="price">Від {{number_format(round($prod->price_convert, -3), 0, '.', ' ')}} грн.</div>
                    @endempty <div class="detailsa">{{$prod->short_text}}</div>
                    <div class="line-link dark"></div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endif
@endforeach
@endif


{{-- end header style --}}
<script>
    let menu = document.querySelectorAll('.link-nav');
    document.getElementById('main-menu-back-to-black').classList.add('static-dark');
    document.getElementById('back-to-black-logo').style.filter = "invert(1)";
    document.getElementById('back-to-black-burger').style.filter = "invert(1)";
    menu.forEach( elem => {
        elem.classList.remove('dark');
    })

    // menu.classList.remove('menu');
</script>
@endsection