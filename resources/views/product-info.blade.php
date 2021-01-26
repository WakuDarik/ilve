@extends('layouts/master')


@section('title', __('product-info.seo.title') )
@section('keywords',__('product-info.seo.keywords') )
@section('descr', __('product-info.seo.descr') )


@section('content')

<div class="header-list">
    <h2 class="title-page">
        @lang('product-info.req') {{$prod->code}} </h2>
    <div class="filter big">
    </div>
</div>

<div id="content-options-container" class="content-options is-prod-yes">
    <div class="cassetto cassetto-falco">
        <img src="{{Storage::url('static/')}}plus.svg" width="16" alt="ilve" class="plus">
        <h3 class="title-varianti-2 is-cassetto-falco"> @lang('product-info.buy')</h3>
        <div class="inner-content-shortcodes">

            <div role="form" class="wpcf7" id="wpcf7-f4557-p4260-o1" lang="it-IT" dir="ltr">
                <div class="screen-reader-response" aria-live="polite"></div>
                <form action="{{route('order', $prod->code)}}" method="post" class="" novalidate="novalidate">
                    <div class="box-content">
                        <div class="form-block-2 w-form">
                            <h3 class="heading-20"> @lang('product-info.info_req')</h3>
                            <p><span class="wpcf7-form-control-wrap name-field">
                                    <input type="text" name="name-field" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field w-input"
                                        required="true" aria-invalid="false" placeholder="Ім'я*" /></span>
                                <span class="wpcf7-form-control-wrap surname-field">
                                    <input type="text" name="surname-field" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field w-input"
                                        required="true" aria-invalid="false" placeholder="Прізвище*" /></span>
                                <span class="wpcf7-form-control-wrap email-field">
                                    <input type="email" name="email-field" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email text-field w-input"
                                        required="true" aria-invalid="false" placeholder="Email*" /></span>
                                <span class="wpcf7-form-control-wrap phone-field">
                                    <input type="tel" name="phone-field" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel text-field w-input"
                                        aria-invalid="false" placeholder="Телефон" /></span>
                                <br />
                                <span class="wpcf7-form-control-wrap acceptance-field"><span
                                        class="wpcf7-form-control wpcf7-acceptance"><span
                                            class="wpcf7-list-item"><label>
                                                <input type="checkbox" name="acceptance-field" value="1" required="true"
                                                    aria-invalid="false" /><span class="wpcf7-list-item-label">
                                                        @lang('product-info.agree')</span></label></span></span></span>
                                @csrf<br />
                                <button type="submit" value="Надіслати"
                                    class="wpcf7-form-control wpcf7-submit button dark small w-inline-block">@lang('product-info.send')</button>
                            </p>
                        </div>
                    </div>
                    <div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="cassetto cassetto-falco">
        <img src="{{Storage::url('static/')}}plus.svg" width="16" alt="ilve" class="plus">
        <h3 class="title-varianti-2 is-cassetto-falco">
            @lang('product-info.coop') </h3>
        <div class="inner-content-shortcodes">

            <div role="form" class="wpcf7" id="wpcf7-f4261-p4260-o2" lang="it-IT" dir="ltr">
                <div class="screen-reader-response" aria-live="polite"></div>
                <form action="{{route('order', $prod->code)}}" method="post" class="" novalidate="novalidate">
                    <div class="box-content">
                        <div class="form-block-2 w-form">
                            <h3 class="heading-20">@lang('product-info.info_req')</h3>
                            <p><span class="wpcf7-form-control-wrap name-field">
                                    <input type="text" name="name-field" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field w-input"
                                        required="true" aria-invalid="false" placeholder="Ім'я*" /></span>
                                <span class="wpcf7-form-control-wrap surname-field">
                                    <input type="text" name="surname-field" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field w-input"
                                        required="true" aria-invalid="false" placeholder="Прізвище*" /></span>
                                <span class="wpcf7-form-control-wrap surname-field">
                                    <input type="text" name="surname-field" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field w-input"
                                        required="true" aria-invalid="false" placeholder="Посада*" /></span>
                                <span class="wpcf7-form-control-wrap email-field">
                                    <input type="email" name="email-field" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email text-field w-input"
                                        required="true" aria-invalid="false" placeholder="Email*" /></span>
                                <span class="wpcf7-form-control-wrap phone-field">
                                    <input type="tel" name="phone-field" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel text-field w-input"
                                        required="true" aria-invalid="false" placeholder="Телефон" /></span>
                                <br />
                                <span class="wpcf7-form-control-wrap acceptance-field"><span
                                        class="wpcf7-form-control wpcf7-acceptance"><span
                                            class="wpcf7-list-item"><label>
                                                <input type="checkbox" name="acceptance-field" value="1"
                                                    required="true" /><span class="wpcf7-list-item-label">@lang('product-info.agree')</span></label></span></span></span>
                                @csrf<br />
                                <button type="submit" value="Надіслати"
                                    class="wpcf7-form-control wpcf7-submit button dark small w-inline-block">@lang('product-info.send')</button>
                            </p>
                        </div>
                    </div>
                    <div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div>
                </form>
            </div>
        </div>
    </div>
</div>
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