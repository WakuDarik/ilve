@extends('layouts/master')

@section('title', 'Домашня професійна кухня Pro Line - ILVE - ilve')
@section('keywords','ilve Pro Line, стиль Pro Line, кухонна техніка Pro Line, плити Pro Line ')
@section('descr','Суть професіоналізму та універсальності в декорі будинку: кухонні прилади ILVE Pro Line.')
@section('content')

<div id="back-to-info" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/pro-line/')}}Hero_Pro_Line.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/pro-line/')}}Hero_Pro_Line.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">Pro Line</h1>
    </div>
</div>
<div id="ilvetext-block_5e70ace8ad30f" class="block-01 w-row ilve-text">
    <div class="col1-s w-col w-col-5">
        <h2>Суть професіоналізму та універсальності в декорі будинку.</h2>
    </div>
    <div class="col1-r w-col w-col-7">
        <p> Колекція з юнацьким духом, присвячена тим, хто прагне до солідності, якості та гнучкості, не нехтуючи
            вишуканістю охайного дизайну та ретельно продуманих деталей. </p>
        <p> Pro Line легко вписується в будь-яку кухню, задовольняючи як щоденні потреби, так і творчий імпульси
            професіоналізму, роблячи життя простішим, кращим і безпечнішим. </p>
    </div>
</div>
<div id="ilvegallery-block_5e70ad0dad310" class="carousel editorial-carousel"
    data-flickity='{ "imagesLoaded": true , "wrapAround": true, "pageDots": false}'>
    <img src="{{Storage::url('static/pro-line/')}}L096WMP_GRD_AGK_34-1.jpg" alt="">
    <img src="{{Storage::url('static/pro-line/')}}L096WMP_GRD_AGK_DET_01-1.jpg" alt="">
    <img src="{{Storage::url('static/pro-line/')}}L096WMP_GRD_AGK_GEN_01.jpg" alt="">
    <img src="{{Storage::url('static/pro-line/')}}OV90SLKMP_HCL90SCK_AGK90_SS_Set_Sco_01.jpg" alt="">
    <img src="{{Storage::url('static/pro-line/')}}OV90SLKMP_HCL90SCK_AGK90_SS_Set_Gen_01.jpg" alt="">
    <img src="{{Storage::url('static/pro-line/')}}OV90SLKMP_HCL90SCK_AGK90_SS_Set_Det_03.jpg" alt="">
    <img src="{{Storage::url('static/pro-line/')}}OV90SLKMP_HCL90SCK_AGK90_SS_Set_Det_02-1.jpg" alt="">
    <img src="{{Storage::url('static/pro-line/')}}OV90SLKMP_HCL90SCK_AGK90_SS_Set_Det_01.jpg" alt="">
</div>
<div id="imagetextandlink-block_5e70ae12ad314" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/pro-line/')}}L096WMP_MG_HOBS_Zenith.png" alt="">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>Налаштування.</h2>
        <p>Різні комбінації плит: 90 см, 100 см і 120 см. Крім того, 90 см конфігурація також може бути обладнана
            індукційною системою.</p>
        <a href="/hob-technologies" class="button w-inline-block" data-ix="button">
            <div>Дізнатися більше</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt=""
                class="arrow">
        </a>
    </div>
</div>
<div id="imagetextandlink-block_5e70ae3bad315" class="block-2 w-row imagetextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/pro-line/')}}OV80SLK_SS_Gen_Front.jpg" alt="">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>Печі: великі розміри та продуктивність.</h2>
        <p> Будь-яка обрана духовка з одно- чи двомісною камерою забезпечує необхідне вам місце, навіть коли готуєте
            багато страв. Наприклад, духовка 60 см має внутрішній об'єм 65 літрів, а духовка 80 см вміщає до 97 літрів!
        </p>
        <ul>
            <li>Велика внутрішня ємність</li>
            <li>Доступна подвійна піч</li>
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
<div id="imagetextandlink-block_5e70ae89ad316" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/pro-line/')}}L096WMP_GRD_AGK_34.jpg" alt="">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>Абсолютна функціональність.</h2>
        <p> Міцні чавунні опори для сковороди створюють єдину опорну безпечну поверхню. Крім того, верхня частина
            складається з одного пресованого сталевого листа, що робить її легкою в очистці. </p>
    </div>
</div>
<div id="colorblocks-block_5e70aeb6ad317" class="gallery-colors-content">
    <div class="block-center">
        <div class="line-2">Кольори</div>
        <h2 class="heading-12">
            Чотири кольори з атласною обробкою і два обмежені видання з матовою чорною обробкою. </h2>
    </div>
    <div class="carousel abaco-carousel">
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/pro-line/')}}L09CW_AW_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Античний білий <br>
                Сатин </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/pro-line/')}}L09CW_BU_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Бордово червоний <br>
                Сатин </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/pro-line/')}}L09CW_MG_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Графітний матовий <br>
                Сатин </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/pro-line/')}}L09CW_SS_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Нержавіюча сталь <br>
                Сатин </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/pro-line/')}}L09CW_WH_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Білий <br>
                Сатин </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/pro-line/')}}L096WMP_GRD_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Розкішний сірий <br>
                Чорний матовий </div>
        </div>
        <div class="col-color w-col w-col-3">
            <img src="{{Storage::url('static/pro-line/')}}L096WMP_MGD_Gen_Front.png" alt="">
            <div class="color-titles-box">
                Графітний матовий <br>
                Чорний матовий </div>
        </div>
    </div>
</div>
<div id="relatedblock-block_5e70af2bad321" class="correlati related-to-black">
    <div class="related-row w-row">
        <h4 class="title-correlati">
            Доступні товари </h4>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">Плити</h2>
            <p class="paragraph-7 white">
                Кухонні плити Pro Line пропонують безкомпромісну продуктивність, орієнтуючись на найважливіше: диззайн.
                Вони відрізняються сучасними кольорами і випускаються в різних варіаціях, розміром від 60 см до 120 см.
            </p>
            <a href="/range-cookers/pro-line" class="button dark small w-inline-block" data-ix="button">
                <div class="white">Переглянути плити Pro Line</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/pro-line/')}}L128W_MG_HOOD_Gen_Front_Cat_Thumb.png" alt="">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">Витяжки</h2>
            <p class="paragraph-7 white">
                Витяжки Pro Line покращують якість повітря та прикрашають кухню. Ефективні, безшумні і з низьким
                споживанням енергії, оснащені світлодіодним освітленням. </p>
            <a href="/hoods/pro-line" class="button dark small w-inline-block" data-ix="button">
                <div class="white">Дізнатися більше про витяжки Pro Line</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/pro-line/')}}AGK120_SS_Gen_Front_Cat_Thumb.png" alt="">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">Печі</h2>
            <p class="paragraph-7 white">
                Печі Pro Line задовольняють будь-які потреби в декорі та використанні. Програмування відбувається за
                допомогою зручної панелі кнопок та легко читабельного дисплея. ПЛита забезпечує постійну температуру для
                рівномірного приготування їжі. </p><a href="/ovens-and-cooking-and-storage-systems/pro-line"
                class="button dark small w-inline-block" data-ix="button">
                <div class="white">Дізнатися більше про печі Pro Line</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/pro-line/')}}OV80SLK_SS_Gen_Front_Cat_Thumb.png" alt="">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">Газові панелі</h2>
            <p class="paragraph-7 white">
                Газові панелі Pro Line виготовлені з суцільної сталевої пластини, довговічні та прості в чищенні.
                Завдяки їх тонкому профілю вони ідеально підходять під будь які умови.
                Підставки з чавуну утворюють єдину і безпечну опорну поверхню для посуду.
                Пальники високої ефективності гарантують ідеальний розподіл тепла. </p><a href="/gas-hobs/pro-line"
                class="button dark small w-inline-block" data-ix="button">
                <div class="white">Дізнаится більше про газові панелі Pro Line</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/pro-line/')}}HCL75SCK_SS_Gen_Front_Cat_Thumb.png" alt="">
        </div>
    </div>
    <div class="row-correlati w-row">
        <div class="col-correlati-l w-col w-col-6">
            <h2 class="white">Індукційні панелі</h2>
            <p class="paragraph-7 white">
                Індукційні панелі Pro Line бувають різних розмірів, забезпечують повний контроль температури та
                гарантують максимальну безпеку використання. </p><a href="/induction-hobs/pro-line"
                class="button dark small w-inline-block" data-ix="button">
                <div class="white">Дізнатися більше про Індукційні панелі Pro Line</div>
                <div class="line-link"></div>
                <img src="{{Storage::url('static/')}}arrow.svg" width="24" alt="" class="arrow">
            </a>
        </div>
        <div class="col-correlati-r w-col w-col-6">
            <img src="{{Storage::url('static/pro-line/')}}KHVI75TC_BK_Gen_Front_Cat_Thumb.png" alt="">
        </div>
    </div>
</div>
@endsection