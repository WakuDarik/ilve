<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('descr')">
    <link rel="icon" type="image/png" sizes="32x32" href="{{Storage::url('favicon.png')}}">
    <meta name="robots" content="index, follow">
    <link rel="manifest" href="{{Storage::url('site.webmanifest')}}">

    <meta property="og:locale" content="ua_UA" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('descr')" />
    <meta property="og:url" content="{{url()->full()}}" />
    <link rel="canonical" href="{{url()->current()}}">
    <meta property="og:site_name" content="ilve" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="@yield('descr')" />
    <meta name="twitter:title" content="@yield('title')" />
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel='stylesheet' id='wp-block-library-css' href='/css/style.min.css' type='text/css' media='all' />
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
        }

        p.alert {
            white-space: pre-line;
            font-size: .9rem;
            display: block;
            position: absolute;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            left: 0;
            right: 0;
            top: 90px;
            min-width: 100%;
            /* opacity: .5; */
        }

        .alert-success {
            background-color: #dff0d8e8;
            border-color: #d6e9c6;
            color: #3c763d;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
    </style>
</head>

<body class="body-home">
    <div id="main-menu-back-to-black" @if(Request::route()->getName() == "index")
        class="menu menu-test home-load-menu " @else class="menu menu-test other-load " @endif>
        <a href="/" class="logo w-inline-block">
            @if(Request::route()->getName() == "index")
            <img id="back-to-black-logo" src="{{Storage::url('static/logo_1.svg')}}" width="120" height="39" alt="ilve">
            @else
            <img id="back-to-black-logo" src="{{Storage::url('static/logo.svg')}}" width="120" height="39" alt="ilve">
            @endif
        </a>
        <div class="content-link-menu">
            <a href="#" @if(Request::route()->getName() == "index")
                class="back-to-black-nav link-nav w-inline-block " @else class="back-to-black-nav link-nav
                w-inline-block dark" @endif data-ix="button">
                <div data-ix='menu-linee-open'></div>
                <div class="line-link"></div>
            </a>
            <a href="#" @if(Request::route()->getName() == "index")
                class="back-to-black-nav link-nav w-inline-block " @else class="back-to-black-nav link-nav
                w-inline-block dark" @endif data-ix="button">
                <div data-ix='menu-product-open'>@lang('main.product')</div>
                <div class="line-link"></div>
            </a>
            {{-- <a href="//range-cookers?conf=t" @if(Request::route()->getName() == "index")
                class="back-to-black-nav link-nav w-inline-block " @else class="back-to-black-nav link-nav
                w-inline-block dark" @endif data-ix="button">
                <div>Варіанти</div>
                <div class="line-link"></div>
            </a> --}}
            <a href="/company" @if(Request::route()->getName() == "index")
                class="back-to-black-nav link-nav w-inline-block " @else class="back-to-black-nav link-nav
                w-inline-block dark" @endif data-ix="button">
                <div>@lang('main.about_us')</div>
                <div class="line-link"></div>
            </a>


        </div>

        <div class="flex-menu-toggle">

            <a class="lang-menu" href="{{ route('locale', __('main.set_lang') ) }}" @if(Request::route()->getName() ==
                "index")
                class="back-to-black-nav link-nav w-inline-block " @else class="back-to-black-nav link-nav
                w-inline-block dark" @endif data-ix="button">
                <div>@lang('main.set_lang')</div>
                <div class="line-link"></div>
            </a>

            <a href="#" class="" data-ix="menu-azienda-open">
                @if(Request::route()->getName() == "index")
                <img id="back-to-black-burger" src="{{Storage::url('static/menu-white.svg')}}" width="30" alt="ilve">
                @else
                <img id="back-to-black-burger" src="{{Storage::url('static/ico-menu.svg')}}" width="30" alt="ilve">

                @endif
            </a>
        </div>

    </div>

    <div class="menu-line">
        <div class="space-close" data-ix="menu-linee-close"></div>
        <div class="content-link-menu-collection">
            <div class="link-mask">
                <a href="/majestic" class="link-menu-collection" rel="page-4267">Majestic</a>
            </div>
            <div class="link-mask">
                <a href="/nostalgie" class="link-menu-collection" rel="page-4268">Nostalgie</a>
            </div>
            <div class="link-mask">
                <a href="/panoramagic" class="link-menu-collection" rel="page-4757">Panoramagic</a>
            </div>
            <div class="link-mask">
                <a href="/professional-plus" class="link-menu-collection" rel="page-4270">Professional Plus</a>
            </div>
            <div class="link-mask">
                <a href="/pro-line" class="link-menu-collection" rel="page-4269">Pro Line</a>
            </div>
        </div>
        <div class="space-close" data-ix="menu-linee-close"></div>
        <div class="basic-back-image page-4267" style="
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.2))), url('{{Storage::url('static/ILVE_Home_Hero-2048x1152.jpg')}}');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{Storage::url('static/ILVE_Home_Hero-2048x1152.jpg')}}');
    "></div>
        <div class="basic-back-image page-4268" style="
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.2))), url('{{Storage::url('static/MenuStili_Nostalgie-V2.jpg')}}');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{Storage::url('static/MenuStili_Nostalgie-V2.jpg')}}');
    "></div>
        <div class="basic-back-image page-4757" style="
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.2))), url('{{Storage::url('static/MenuStili_Panoramagic.jpg')}}');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{Storage::url('static/MenuStili_Panoramagic.jpg')}}');
    "></div>
        <div class="basic-back-image page-4270" style="
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.2))), url('{{Storage::url('static/MenuStili_ProfessionalPlus-V2.jpg')}}');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{Storage::url('static/MenuStili_ProfessionalPlus-V2.jpg')}}');
    "></div>
        <div class="basic-back-image page-4269" style="
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.4)), to(rgba(0, 0, 0, 0.2))), url('{{Storage::url('static/MenuStili_ProLine-V2.jpg')}}');
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{Storage::url('static/MenuStili_ProLine-V2.jpg')}}');
    "></div>
    </div>

    <div class="menu-products">

        <div class="menu top">
            <a href="en" class="logo w-inline-block w--current">
                <img src="{{Storage::url('static/logo.svg')}}" width="120" alt="ilve">
            </a>
            <div class="content-link-menu">
                <a href="#" class="link-nav dark w-inline-block" data-ix="button">
                    <div data-ix='menu-linee-open'>@lang('main.style')</div>
                    <div class="line-link"></div>
                </a>
                <a href="#" class="link-nav dark w-inline-block" data-ix="button">
                    <div data-ix='menu-product-open'>@lang('main.product')</div>
                    <div class="line-link"></div>
                </a>
                {{-- <a href="//range-cookers?conf=t" class="link-nav dark w-inline-block" data-ix="button">
                    <div>Варіанти</div>
                    <div class="line-link"></div>
                </a> --}}
                <a href="/distributors" class="link-nav dark w-inline-block" data-ix="button">
                    <div>@lang('main.about_us')</div>
                    <div class="line-link"></div>
                </a>
            </div>

            <a href="#" class="button-menu w-inline-block" data-ix="menu-linee-close">
                <img src="{{Storage::url('static/ico-close.svg')}}" width="30" alt="ilve">
            </a>
        </div>
        <div class="columns-6 margin hawk-0 w-row">
            <div class="col-menu w-col w-col-3">
                <a href="{{route('category', $category = 'range-cookers')}}" class="link-preview-product w-inline-block"
                    data-ix="zoom2">
                    <img src="{{Storage::url('static/blocco.jpg')}}" width="210" class="img-tech-product">
                    <div class="div-block-23">
                        <div class="text-al-cent">@lang('main.coock')</div>
                        <div class="line-link dark"></div>
                    </div>
                </a>
            </div>
            <div class="col-menu w-col w-col-3">
                <a href="{{route('category', $category = 'ovens-and-cooking-and-storage-systems')}}"
                    class="link-preview-product w-inline-block" data-ix="zoom2">
                    <img src="{{Storage::url('static/645STCHSW_BK_Gen_Front.png')}}" width="210"
                        class="img-tech-product">
                    <div class="div-block-23">
                        <div class="text-al-cent">@lang('main.duhovki')</div>
                        <div class="line-link dark"></div>
                    </div>
                </a>
            </div>
            <div class="col-menu w-col w-col-3">
                <a href="{{route('category', $category = 'gas-hobs')}}" class="link-preview-product w-inline-block"
                    data-ix="zoom2">
                    <img src="{{Storage::url('static/piani-cottura-gas.jpg')}}" width="210" class="img-tech-product">
                    <div class="div-block-23">
                        <div class="text-al-cent">@lang('main.gus_panel')</div>
                        <div class="line-link dark"></div>
                    </div>
                </a>
            </div>
            <div class="col-menu w-col w-col-3">
                <a href="{{route('category', $category = 'induction-hobs')}}"
                    class="link-preview-product w-inline-block" data-ix="zoom2">
                    <img src="{{Storage::url('static/piani-cottura-ind.jpg')}}" width="210" class="img-tech-product">
                    <div class="div-block-23">
                        <div class="text-al-cent">@lang('main.indection_panel')</div>
                        <div class="line-link dark"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="columns-6 margin hawk-4 w-row">
            <div class="col-menu w-col w-col-3">
                <a href="{{route('category', $category = 'cooking-and-storage-systems')}}"
                    class="link-preview-product w-inline-block" data-ix="zoom2">
                    <img src="{{Storage::url('static/sistemi-integrati.jpg')}}" width="210" class="img-tech-product">
                    <div class="div-block-23">
                        <div class="text-al-cent">@lang('main.cook_and_storage')</div>
                        <div class="line-link dark"></div>
                    </div>
                </a>
            </div>
            <div class="col-menu w-col w-col-3">
                <a href="{{route('category', $category = 'hoods')}}" class="link-preview-product w-inline-block"
                    data-ix="zoom2">
                    <img src="{{Storage::url('static/cappe.jpg')}}" width="210" class="img-tech-product">
                    <div class="div-block-23">
                        <div class="text-al-cent">@lang('main.hoobs')</div>
                        <div class="line-link dark"></div>
                    </div>
                </a>
            </div>
            <div class="col-menu w-col w-col-3">
                <a href="{{route('category', $category = 'accessories')}}" class="link-preview-product w-inline-block"
                    data-ix="zoom2">
                    <img src="{{Storage::url('static/unnamed-2.png')}}" width="210" class="img-tech-product">
                    <div class="div-block-23">
                        <div class="text-al-cent">@lang('main.accessories')</div>
                        <div class="line-link dark"></div>
                    </div>
                </a>
            </div>
            <div class="col-menu w-col w-col-3">
                <a href="{{route('category', $category = 'other-products')}}"
                    class="link-preview-product w-inline-block" data-ix="zoom2">
                    <img src="{{Storage::url('static/frigo.jpg')}}" width="210" class="img-tech-product">
                    <div class="div-block-23">
                        <div class="text-al-cent">@lang('main.other_products')</div>
                        <div class="line-link dark"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="menu-azienda">
        <div class="menu top">
            <a href="en" class="logo w-inline-block">
                <img src="{{Storage::url('static/logo.svg')}}" width="120" alt="ilve">
            </a>
            <a href="#" class="button-menu w-inline-block" data-ix="menu-linee-close">
                <img src="{{Storage::url('static/ico-close.svg')}}" width="30" alt="ilve">
            </a>
        </div>
        <div class="payoff-menu">
            <h2 class="payoff">@lang('main.slogan')</h2>
            <div class="div-block-10">
                <p class="address">Телефон: <a href="tel:+38 067 440 9791">+38 067 440 9791</a><br>
                    Email: <a href="mailto:df@glazer.com.ua">df@glazer.com.ua</a><br>
                    Email: <a href="mailto:4409791@gmail.com">4409791@gmail.com</a>
                </p>
            </div>
            <div class="div-block-9" style="display: none;">
                <a href="#" class="link-social w-inline-block">
                    <img src="{{Storage::url('static/iconfinder_facebook_circle_black_107153.svg')}}" alt="ilve"
                        class="ico-social">
                </a>
                <a href="#" class="link-social w-inline-block">
                    <img src="{{Storage::url('static/iconfinder_instagram_circle_black_107150.svg')}}" alt="ilve"
                        class="ico-social">
                </a>
                <a href="#" class="link-social w-inline-block">
                    <img src="{{Storage::url('static/iconfinder_linkedin_circle_black_107159.svg')}}" alt="ilve"
                        class="ico-social">
                </a>
            </div>
        </div>
        <div class="grid-menu w-row">

            <div class="col-menu-azienda w-col w-col-4">
                <div class="title-small">@lang('main.style')</div>
                <a href="/majestic" class="link-nav grid w-inline-block">
                    <div>Majestic</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <a href="/nostalgie" class="link-nav grid w-inline-block">
                    <div>Nostalgie</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <a href="/panoramagic" class="link-nav grid w-inline-block">
                    <div>Panoramagic</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <a href="/pro-line" class="link-nav grid w-inline-block">
                    <div>Pro Line</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <a href="/professional-plus" class="link-nav grid w-inline-block">
                    <div>Professional Plus</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <a href="/colonna-stellata" class="link-nav grid w-inline-block">
                    <div>@lang('main.kolona_steleta')</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <div class="title-small">@lang('main.quantity')</div>
                <a href="/technologies-of-ovens-and-cooking-and-storage-systems" class="link-nav grid w-inline-block">
                    <div>@lang('main.hubs_tehnologe')</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <a href="/hob-technologies" class="link-nav grid w-inline-block">
                    <div>@lang('main.surfaces_burners')</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <a href="/blast-chill-and-store" class="link-nav grid w-inline-block">
                    <div>@lang('main.cooling_storage')</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <a href="/colours-and-finishes" class="link-nav grid w-inline-block">
                    <div>@lang('main.colors_decor')</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
            </div>
            <div class="col-menu-azienda w-col w-col-4">
                <div class="title-small">@lang('main.product')</div>
                <a href="/range-cookers" class="link-nav grid w-inline-block">
                    <div>@lang('main.coock')</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <a href="/ovens-and-cooking-and-storage-systems" class="link-nav grid w-inline-block">
                    <div>@lang('main.duhovki')</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <a href="/gas-hobs" class="link-nav grid w-inline-block">
                    <div>@lang('main.gus_panel')</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <a href="/induction-hobs" class="link-nav grid w-inline-block">
                    <div>@lang('main.indection_panel')</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <a href="/cooking-and-storage-systems" class="link-nav grid w-inline-block">
                    <div>@lang('main.cook_and_storage')</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <a href="/hoods" class="link-nav grid w-inline-block">
                    <div>@lang('main.hoobs')</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <a href="/accessories" class="link-nav grid w-inline-block">
                    <div>@lang('main.accessories')</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                <a href="/other-products" class="link-nav grid w-inline-block">
                    <div>@lang('main.other_products')</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
            </div>
            <div class="col-menu-azienda w-col w-col-4">
                {{-- <div class="title-small">Послуги</div>
                <a href="/distributors" class="link-nav grid w-inline-block">
                    <div>Дистриб'ютори</div><img src="" width="12" alt="ilve" class="ico-link">
                </a> --}}
                <div class="title-small">Ilve</div>
                <a href="/company" class="link-nav grid w-inline-block">
                    <div>@lang('main.company')</div><img src="" width="12" alt="ilve" class="ico-link">
                </a>
                {{-- <div class="title-small">Завантажити</div>
                <a href="/reserved-area" class="link-nav grid w-inline-block">
                    <div>Reserved area</div><img src="" width="12" alt="ilve" class="ico-link">
                </a> --}}
            </div>
        </div>

        <div data-delay="0" class="dropdown-3 w-dropdown">
            <div class="dropdown-toggle-3 w-dropdown-toggle">
                <div class="icon-2 w-icon-dropdown-toggle"></div>
                <div class="title-menu">@lang('main.style')</div>
            </div>
            <nav class="dropdown-list-2 w-dropdown-list">
                <a href="/majestic" class="link-menu-mobile w-dropdown-link">Majestic</a>
                <a href="/nostalgie" class="link-menu-mobile w-dropdown-link">Nostalgie</a>
                <a href="/panoramagic" class="link-menu-mobile w-dropdown-link">Panoramagic</a>
                <a href="/pro-line" class="link-menu-mobile w-dropdown-link">Pro Line</a>
                <a href="/professional-plus" class="link-menu-mobile w-dropdown-link">Professional Plus</a>
                <a href="/colonna-stellata" class="link-menu-mobile w-dropdown-link">@lang('main.kolona_steleta')</a>
            </nav>
        </div>
        <div data-delay="0" class="dropdown-3 w-dropdown">
            <div class="dropdown-toggle-3 w-dropdown-toggle">
                <div class="icon-2 w-icon-dropdown-toggle"></div>
                <div class="title-menu">@lang('main.quantity')</div>
            </div>
            <nav class="dropdown-list-2 w-dropdown-list">
                <a href="/technologies-of-ovens-and-cooking-and-storage-systems"
                    class="link-menu-mobile w-dropdown-link">@lang('main.hubs_tehnologe')</a>
                <a href="/hob-technologies" class="link-menu-mobile w-dropdown-link">@lang('main.hubs_tehnologe')</a>
                <a href="/blast-chill-and-store"
                    class="link-menu-mobile w-dropdown-link">@lang('main.cooling_storage')</a>
                <a href="/colours-and-finishes" class="link-menu-mobile w-dropdown-link">@lang('main.colors_decor')</a>
            </nav>
        </div>
        <div data-delay="0" class="dropdown-3 w-dropdown">
            <div class="dropdown-toggle-3 w-dropdown-toggle">
                <div class="icon-2 w-icon-dropdown-toggle"></div>
                <div class="title-menu">@lang('main.product')</div>
            </div>
            <nav class="dropdown-list-2 w-dropdown-list">
                <a href="/range-cookers" class="link-menu-mobile w-dropdown-link">@lang('main.coock')</a>
                <a href="/ovens-and-cooking-and-storage-systems"
                    class="link-menu-mobile w-dropdown-link">@lang('main.duhovki')</a>
                <a href="/gas-hobs" class="link-menu-mobile w-dropdown-link">@lang('main.gus_panel')</a>
                <a href="/induction-hobs" class="link-menu-mobile w-dropdown-link">@lang('main.indection_panel')</a>
                <a href="/cooking-and-storage-systems"
                    class="link-menu-mobile w-dropdown-link">@lang('main.cook_and_storage')</a>
                <a href="/hoods" class="link-menu-mobile w-dropdown-link">@lang('main.hoobs')</a>
                <a href="/accessories" class="link-menu-mobile w-dropdown-link">@lang('main.accessories')</a>
                <a href="/other-products" class="link-menu-mobile w-dropdown-link">@lang('main.other_products')</a>
            </nav>
        </div>
        <div data-delay="0" class="dropdown-3 w-dropdown">
            <div class="dropdown-toggle-3 w-dropdown-toggle">
                <div class="icon-2 w-icon-dropdown-toggle"></div>
                <div class="title-menu">@lang('main.offers')</div>
            </div>
            <nav class="dropdown-list-2 w-dropdown-list">
                <a href="/distributors" class="link-menu-mobile w-dropdown-link">@lang('main.distributors')</a>
            </nav>
        </div>
        <div data-delay="0" class="dropdown-3 w-dropdown">
            <div class="dropdown-toggle-3 w-dropdown-toggle">
                <div class="icon-2 w-icon-dropdown-toggle"></div>
                <div class="title-menu">Ilve</div>
            </div>
            <nav class="dropdown-list-2 w-dropdown-list">
                <a href="/company" class="link-menu-mobile w-dropdown-link">@lang('main.company')</a>
            </nav>
        </div>
        <div data-delay="0" class="dropdown-3 w-dropdown">
            <div class="dropdown-toggle-3 w-dropdown-toggle">
                <div class="icon-2 w-icon-dropdown-toggle"></div>
                <div class="title-menu">@lang('main.download')</div>
            </div>
            <nav class="dropdown-list-2 w-dropdown-list">
                <a href="/reserved-area" class="link-menu-mobile w-dropdown-link">Reserved area</a>
            </nav>
        </div>

        <div class="shadow"></div>
    </div>
    @if (session()->has('status'))
    <p class="flesh alert alert-success">{{ session()->get('status') }}</p>

    @endif
    @yield('content')

    <div class="small-footer">
        <div class="content-footer">
            <div class="footer">
                <div id="flexoso">(с) 2021</div>
                <div class="languages-container">

                    <div class="wpml-ls-statics-shortcode_actions wpml-ls wpml-ls-legacy-list-horizontal">
                        <ul>
                            <li
                                class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-it wpml-ls-first-item wpml-ls-last-item wpml-ls-item-legacy-list-horizontal">
                                <a href="/" class="wpml-ls-link"><span class="wpml-ls-native"
                                        lang="it">@lang('main.itali')</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="/js/webflow.js" type="text/javascript"></script>
<script src="/js/build.js"></script>
<!-- [if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

<script type='text/javascript' src='/js/scripts.js'></script>
<script type='text/javascript' src='/js/wp-embed.min.js'></script>
</body>

</html>