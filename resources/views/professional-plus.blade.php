@extends('layouts/master')

@section('title', 'Оренда інструментів у Львові і Львівській області | Орендувати ')
@section('keywords','Оренда інструментів, Інструмент у Львові і Львівській
області, Оренда ')
@section('descr','Орендувати на день за найвигіднішими цінами у Львові та Львівській області.')
@section('content')

<div id="back-to-info" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/prof-plus/')}}Hero_Professional_Plus.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/prof-plus/')}}Hero_Professional_Plus.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">Professional Plus</h1>
    </div>
</div>
<div id="ilvetext-block_5e70a8490a5ab" class="block-01 w-row ilve-text">
    <div class="col1-s w-col w-col-5">
        <h2>Непереборна привабливість технології та продуктивності.</h2>
    </div>
    <div class="col1-r w-col w-col-7">
        <p>Сталь AISI304 - найвища якість сировини, що використовується на кухнях кращих ресторанів - це емблема
            Professional Plus.</p>
        <p>Повна система кухонних плит, варильних плит, духовок, витяжних установок для проектування домашньої кухні.
            Естетика, яка відображає найвищий професіоналізм, з урахуванням простору будинку.</p>
    </div>
</div>
<div id="ilvegallery-block_5e70a8840a5ac" class="carousel editorial-carousel"
    data-flickity='{ "imagesLoaded": true , "wrapAround": true, "pageDots": false}'>
    <img src="{{Storage::url('static/prof-plus/')}}P15FWE3_SS_IAG_34.jpg" alt="">
    <img src="{{Storage::url('static/prof-plus/')}}P15FWE3_SS_IAG_DET_01-1.jpg" alt="">
    <img src="{{Storage::url('static/prof-plus/')}}P15FWE3_SS_IAG_DET_02.jpg" alt="">
    <img src="{{Storage::url('static/prof-plus/')}}P15FWE3_SS_IAG_GEN_01.jpg" alt="">
    <img src="{{Storage::url('static/prof-plus/')}}P15FWE3_SS_IAG_GEN_02.jpg" alt="">
    <img src="{{Storage::url('static/prof-plus/')}}OV91SLT3_HPT125FC_SS_Set_Det_01.jpg" alt="">
    <img src="{{Storage::url('static/prof-plus/')}}OV91SLT3_HPT125FC_SS_Set_Det_03.jpg" alt="">
    <img src="{{Storage::url('static/prof-plus/')}}OV91SLT3_HPT125FC_SS_Set_Gen_01.jpg" alt="">
    <img src="{{Storage::url('static/prof-plus/')}}OV91SLT3_HPT125FC_SS_Set_Sco_01.jpg" alt="">
    <img src="{{Storage::url('static/prof-plus/')}}CSTARBK_KHVI90TC_RT9020SBS_MGNOP_Set_Det_01.jpg" alt="">
    <img src="{{Storage::url('static/prof-plus/')}}CSTARBK_KHVI90TC_RT9020SBS_MGNOP_Set_Det_02.jpg" alt="">
    <img src="{{Storage::url('static/prof-plus/')}}CSTARBK_KHVI90TC_RT9020SBS_MGNOP_Set_Det_03.jpg" alt="">
    <img src="{{Storage::url('static/prof-plus/')}}CSTARBK_KHVI90TC_RT9020SBS_MGNOP_Set_Det_04.jpg" alt="">
    <img src="{{Storage::url('static/prof-plus/')}}CSTARBK_KHVI90TC_RT9020SBS_MGNOP_Set_Gen_01.jpg" alt="">
    <img src="" alt="">
</div>
<div id="imagetextandlink-block_5e70a8ca0a5b2" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/prof-plus/')}}P15FWE3_SS_IAG_DET_01.jpg" alt="">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>Кухні на будь-який смак.</h2>
        <p>Плити пропонують широкий спектр налаштувань, що дозволяє вибрати ідеальне рішення для будь-яких потреб та
            бажань,
            в різноманітних налаштуваннях: газові пальники потужністю від 1,8 до 5 кВт,
            газові грилі з товстою плитою з нержавіючої сталі,
            індукційні плити с керамічною скляною поверхнею.</p>
        <a href="/hob-technologies" class="button w-inline-block" data-ix="button">
            <div>Дізнатися більше</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt=""
                class="arrow">
        </a>
    </div>
</div>
<div id="imagetextandlink-block_5e70a8fc0a5b3" class="block-2 w-row imagetextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/prof-plus/')}}645SLZT4_SS_Gen_Front.jpg" alt="">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>Печі: великі розміри та продуктивність.</h2>
        <p>Будь-яка двомісна або подвійна духовка, яку ви вибрали,
            забезпечує необхідне вам місце, навіть коли готуєте багато страв.
            Наприклад, духовка на 60 см має внутрішній об’єм 65 літрів, а духовка на 80 см пропонує емність до 97
            літрів!</p>
        <ul>
            <li>Велика внутрішня ємність</li>
            <li>Доступна подвійна піч</li>
            <li>Електронний контроль температури</li>
            <li>Внутрішні порожнини духовки, покриті емаллю «Easy Clean»</li>
            <li>Складний нагрівальний елемент гриля для легшого очищення</li>
        </ul>
        <a href="/technologies-of-ovens-and-cooking-and-storage-systems" class="button w-inline-block" data-ix="button">
            <div>Дізнатися більше</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt=""
                class="arrow">
        </a>
    </div>
</div>
<div id="imagetextandlink-block_5e70a9580a5b4" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/prof-plus/')}}P128WE3_SS_DET_02.jpg" alt="">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>Професійні ручки: помітно функціональні.</h2>
        <p>Створені виключно для кухонних плит Professional Plus,
            ручки Milano виготовлені повністю з алюмінію з великим діаметром.
            Виходячи з досвіду роботи на професійних кухнях, їх можна легко використовувати навіть в рукавичками, вони
            мають особливо чітку і розбірливу розмітку.</p>
    </div>
</div>
<div id="imagetextandlink-block_5e70a9850a5b5" class="block-2 w-row imagetextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/prof-plus/')}}CCSTAR_PP_SS_Gen_Front.jpg" alt="">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>Зіркова колона</h2>
        <p>Як готувати, мов справжній шеф-кухар у невеликому просторі?<br />
            Це легко з ILVE Зірковою колоною.</p>
        <a href="/colonna-stellata" class="button w-inline-block" data-ix="button">
            <div>Дізнатися більше</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt=""
                class="arrow">
        </a>
    </div>
</div>
<div id="colorblocks-block_5e70a9da0a5b6" class="gallery-colors-content">
    <div class="block-center">
        <div class="line-2">Кольори</div>
        <h2 class="heading-12">
            Основні кольори та сталева обробка. </h2>
    </div>
    <div class="carousel abaco-carousel">
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/prof-plus/')}}P096W_WH_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Білий <br>
                Сатин </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/prof-plus/')}}P096W_SS_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Нержавіюча сталь <br>
                Сатин </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/prof-plus/')}}P096W_MG_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Графітний матовий <br>
                Сатин </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/prof-plus/')}}P096W_BK_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Глянцевий чорний <br>
                Сатин </div>
        </div>
    </div>
</div>
<div id="relatedblock-block_5e70aabe0a5c0" class="correlati related-to-black">
    <div class="related-row w-row">
        <h4 class="title-correlati">
            Доступні товари </h4>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">Плити</h2>
            <p class="paragraph-7 white">
                Кухонні плити Professional Plus оснащені ручками зі спеціальним ергономічним дизайном, що відтворює
                кухні найкращих ресторанів на вашій кухні. Доступні у різних кольорах, металеві оздоблення випускаються
                у різних розмірах від 60 см до 150 см. </p>
            <a href="/range-cookers/professional-plus" class="button dark small w-inline-block" data-ix="button">
                <div class="white">Переглянути плити Professional Plus</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/prof-plus/')}}P15FW_SS_HOOD_Gen_Front_Cat_Thumb.png" alt="">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">Витяжки</h2>
            <p class="paragraph-7 white">
                Витяжки Professional Plus поєднують інноваційні технології з професійним дизайном. Широка нахилена
                поверхня робить роботу легшою та безпечнішою. Перегородкові фільтри та нержавіюча сталь утворюють бар'єр
                проти
                жиру. </p>
            <a href="/hoods/professional-plus" class="button dark small w-inline-block" data-ix="button">
                <div class="white">Переглянути витяжки Professional Plus</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/prof-plus/')}}AGQ150_SS_Gen_Front_Cat_Thumb.png" alt="">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">Трирівневі зіркові колони</h2>
            <p class="paragraph-7 white">
                Трирівнева колонка Professional Plus поєднує в одній системі духовку,
                чиппер і вакуумну систему, щоб запропонувати найвищі професійні показники при
                найбільш ефективному використанні простору та високотехнологічного дизайну. </p>
            <a href="/styles/professional-plus-en/colonna-stellata-cstar" class="button dark small w-inline-block"
                data-ix="button">
                <div class="white">Переглянути Трирівневі зіркові колони Professional Plus </div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/prof-plus/')}}CSTAR_SS_Gen_Front_Cat_Thumb.png" alt="">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">Печі</h2>
            <p class="paragraph-7 white">
                Духовки Professional Plus є еталоном продуктивності та універсальності.
                Моделі з TFT-дисплеєм з чорного загартованого скла.
                За допомогою надзвичайного холодильника ви можетезнизити температуру від
                (- 3 ° C) до температури морозильної камери (- 20 ° C) за дуєе короткий час.
                Функція вакууму додає ще один спосіб консервування та дозволяє готувати соус під вакуумом. </p>
            <a href="/ovens-and-cooking-and-storage-systems/professional-plus" class="button dark small w-inline-block"
                data-ix="button">
                <div class="white">Переглянути печі Professional Plus</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/prof-plus/')}}645SLHSW_SS_Gen_Front_Cat_Thumb.png" alt="">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">Газові панелі</h2>
            <p class="paragraph-7 white">
                Газові панелі Professional Plus, з латунними комфорками та підставками забезпечують ідеальне регулювання
                тепла.
                В якості альтернативи сталі їх можна виготовити з чорного загартованого скла. Доступні у
                найрізноманітніших розмірах та налаштуваннях. </p>
            <a href="/gas-hobs/professional-plus" class="button dark small w-inline-block" data-ix="button">
                <div class="white">Переглянути газові панелі Professional Plus</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/prof-plus/')}}HAP125FD_Cat_Thumb.png" alt="">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">Індукційні плити</h2>
            <p class="paragraph-7 white">
                Індукційні плити Professional Plus доступний із вбудованою витяжкою, забезпечують повний контроль
                температури та гарантують максимальну безпеку використання. </p>
            <a href="/induction-hobs/professional-plus" class="button dark small w-inline-block" data-ix="button">
                <div class="white">Перегланути Індукційні плити Professional Plus</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/prof-plus/')}}HVI90AGTC_BK_Gen_Front_Cat_Thumb.png" alt="">
        </div>
    </div>
</div>
@endsection