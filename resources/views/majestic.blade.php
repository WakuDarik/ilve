@extends('layouts/master')

@section('title', 'Оренда інструментів у Львові і Львівській області | Орендувати ')
@section('keywords','Оренда інструментів, Інструмент у Львові і Львівській
області, Оренда ')
@section('descr','Орендувати на день за найвигіднішими цінами у Львові та Львівській області.')

@section('content')

<div id="back-to-info" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/majestic/')}}majestic-p-1600.jpeg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/majestic/')}}majestic-p-1600.jpeg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line" data-ix="title">Majestic</h1>
    </div>
</div>
<div id="ilvetext-block_5e5e6f2d1da2e" class="block-01 w-row ilve-text">
    <div class="col1-s w-col w-col-5">
        <h2>Плита, що робить кухню унікальною..</h2>
    </div>
    <div class="col1-r w-col w-col-7">
        <p>Синтез краси та функціональності, Majestic - майстерне втіленням ідеї про плиту.
        </p>
        <p>Самостійний елемент, який вписується в будь-який інтер'єр і одразу займає центральне місце, виконана у стилі
            із закруглених країв, авторські деталі, тонка робота, сміливі рішення та технологій, що випливають
            безпосередньо на
            світ професійної кулінарії</p>
    </div>
</div>
<div id="ilvegallery-block_5e67cbadfef46" class="carousel editorial-carousel"
    data-flickity='{ "imagesLoaded": true , "wrapAround": true, "pageDots": false}'>
    <img src="{{Storage::url('static/majestic/')}}M127DNE3_WHB_AM120_AMB_GEN_01.jpg" alt="">
    <img src="{{Storage::url('static/majestic/')}}M127DNE3_WHB_AM120_AMB_DET_01.jpg" alt="">
    <img src="{{Storage::url('static/majestic/')}}M127DNE3_WHB_AM120_AMB_DET_02.jpg" alt="">
    <img src="{{Storage::url('static/majestic/')}}M127DNE3_WHB_AM120_AMB_GEN_02.jpg" alt="">
</div>
<div id="imagetextandlink-block_5e70a45d40ca0" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/majestic/')}}M127DNE3_WHB_AM120_AMB_DET_01-1.jpg" alt="">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>Кухні на будь-який смак.</h2>
        <p>Варильні поверхні мають широкий спектр налаштувань, що дозволяє обрати ідеальне рішення за потребами
            та
            бажаннями, з професійними технологіями: багатогалузеві газові пальники потужністю від 1,8 до 5 кВт, газові
            конфорки із товстою пластиною
            з нержавіючої сталі, чавунною пластиною Coup de Feu з кільцями та електричним керамічним склом.</p>
        <a href="/en/hob-technologies" class="button w-inline-block" data-ix="button">
            <div>Дізнатися більше</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt=""
                class="arrow">
        </a>
    </div>
</div>
<div id="imagetextandlink-block_5e947a992c512" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/majestic/')}}Living_Coral_Forno.png" alt="">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>Печі: великі розміри та продуктивність.</h2>
        <p>Будь-яка двомісна або комбінована духовка забезпечує необхідну місткість, наіть якщо одночасно готується
            велика кількість страв.
            Ящко Ви хочете все і одразу, Majestic 30-дюймова версія є єдиною з 6 комфорками для приготування, подвцнп
            піч
            та неперевершена ємність: колосальні 114 літрів!</p>
        <ul>
            <li>Велика внутрішня ємність</li>
            <li>Доступна подвійна піч</li>
            <li>Електронний контроль температури</li>
        </ul>
        <a href="/en/technologies-of-ovens-and-cooking-and-storage-systems" class="button w-inline-block"
            data-ix="button">
            <div>Дізнатися більше</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt=""
                class="arrow">
        </a>
    </div>
</div>
<div id="imagetextandlink-block_5e70a4d440ca1" class="block-2 w-row imagetextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/majestic/')}}M15SDNE3_LC_DET_9.jpg" alt="">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>Витяжки</h2>
        <p>Якість повітря на кухні є вагомим фактором: тому колекція Majestic поєднує в собі асортимент
            плита з високоефективними витяжками, з ідеально естетикою в дизайні, кольорах та витонченності.
            Окрім фільтрації та очищення повітря, витяжки Majestic оснащені інфрачервоними променями
            для збереження їжі теплою, як і на професійних кухнях.</p>
    </div>
</div>
<div id="colorblocks-block_5e5e93ff8dc67" class="gallery-colors-content">
    <div class="block-center">
        <div class="line-2">Кольори</div>
        <h2 class="heading-12">
            Кілька комбінацій кольорів та оздоблення <br />
            щоб адаптуватись до вашого кухонного середовища </h2>
    </div>
    <div class="carousel abaco-carousel">
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_AWB_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Античний білий <br>
                Обпалений </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_AWC_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Античний білий <br>
                Хром </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_AWG_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Античний білий <br>
                Латунь </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_AWP_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Античний білий <br>
                Мідь </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BKB_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Глянцевий чорний <br>
                Обпалений </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BKC_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Глянцевий чорний <br>
                Хром </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BKG_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Глянцевий чорний <br>
                Латунь </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BKP_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Глянцевий чорний <br>
                Мідь </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BUB_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Бордово червоний <br>
                Обпалений </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BUC_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Бордово червоний <br>
                Хром </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BUG_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Бордово червоний <br>
                Латунь </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_BUP_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Бордово червоний <br>
                Мідь </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_EGB_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Emerald green <br>
                Обпалений </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_EGC_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Emerald green <br>
                Хром </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_EGG_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Emerald green <br>
                Латунь </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_EGP_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Emerald green <br>
                Мідь </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MBB_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Синій <br>
                Обпалений </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MBC_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Синій <br>
                Хром </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MBG_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Синій <br>
                Латунь </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MBP_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Синій <br>
                Мідь </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MGB_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Графітний матовий <br>
                Обпалений </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MGC_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Графітний матовий <br>
                Хром </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MGG_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Графітний матовий <br>
                Латунь </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_MGP_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Графітний матовий <br>
                Мідь </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_SSB_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Нержавіюча сталь <br>
                Обпалений </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_SSC_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Нержавіюча сталь <br>
                Хром </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_SSG_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Нержавіюча сталь <br>
                Латунь </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_SSP_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Нержавіюча сталь <br>
                Мідь </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_WHB_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Білий <br>
                Обпалений </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_WHC_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Білий <br>
                Хром </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_WHG_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Білий <br>
                Латунь </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/majestic/')}}M096DN_WHP_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Білий <br>
                Мідь </div>
        </div>
    </div>
</div>
<div id="relatedblock-block_5e70a6c940cc7" class="correlati related-to-black">
    <div class="related-row w-row">
        <h4 class="title-correlati">
            Доступні товари </h4>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">Плити</h2>
            <p class="paragraph-7 white">
                Кухонні плити Majestic прикрашають кухню своїм закругленим дизайном із чистої сталі. Доступні на
                замовлення в
                різноманітних кольорах або відтінках RAL. Широкий асортимент
                розмірів (від 70 см до 150 см) і установок. </p>
            <a href="/en/range-cookers/majestic" class="button dark small w-inline-block" data-ix="button">
                <div class="white">Відкрийте для себе кухонні плити Majestic</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/majestic/')}}M15FDN_WHB_HOOD_Gen_Front_Cat_Thumb.png" alt="">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">Витяжки</h2>
            <p class="paragraph-7 white">
                Дизайн витяжок Majestic відповідає плитам за кольорами та металевою обробкою.
                Крім фільтрації та очищення повітря, в них влаштовані інфрачервоні лампи, щоб зберігати їжу теплою. </p>
            <a href="/en/hoods/majestic" class="button dark small w-inline-block" data-ix="button">
                <div class="white">Дізнатися про витяжки Majestic</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/majestic/')}}AM150_WH_Gen_Front_Cat_Thumb.png" alt="">
        </div>
    </div>
</div>

@endsection