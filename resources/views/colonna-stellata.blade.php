@extends('layouts/master')

@section('title', 'Професійнa кухнz Зіркова Колона - ILVE - ILVE-SHOP')
@section('keywords','Зіркова Колона Ilve, Зіркова Колона Ilve-shop')
@section('descr','Готувати, як справжній шеф-кухар, на обмеженому просторі? Зірковою Колоною ILVE - це легко.')

@section('content')

<div id="back-to-black" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/')}}Hero_ColonnaStellata.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/')}}Hero_ColonnaStellata.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">Зіркова колонна</h1>
    </div>
</div>
<div id="ilvetext-block_5e70b263fc881" class="block-01 w-row ilve-text">
    <div class="col1-s w-col w-col-5">
        <h2>Готувати, як справжній шеф-кухар, не на професійній кухні? Зірковою колоною ILVE легко допоможе.</h2>
    </div>
    <div class="col1-r w-col w-col-7">
        <p> Духовка з трьома цільовим призначенням ультракомбінована духовка, чиллер,
            вакуум-машина: три прилади в єдиній інтегрованій вертикальній структурі
            для роботи за синергетичним циклом та оптимізації збереження,
            поєднання методів приготування їжі, збереження органолептичних якостей продуктів та створення чудових
            шедеврів. </p>
    </div>
</div>
<div id="ilvegallery-block_5e70b27dfc882" class="carousel editorial-carousel"
    data-flickity='{ "imagesLoaded": true , "wrapAround": true, "pageDots": false}'>
    <img src="{{Storage::url('static/')}}CCSTAR_N_MGP_Gen_Front-1.jpg" alt="">
    <img src="{{Storage::url('static/')}}Hero_ColonnaStellata.jpg" alt="">
    <img src="{{Storage::url('static/')}}CCSTAR_PP_SS_Gen_Front-1.jpg" alt="">
</div>
<div id="centertextandimage-block_5e70b2d8fc886" class="block-center centertextandimage-block">
    <h2 class="heading-12">Ультракомбінована духова шафа</h2> <img
        src="{{Storage::url('static/')}}Colonna_Stellata_Sezione_Forno-1.jpg" alt="">
</div>
<div id="ilveicontext-block_5e70b52efc887" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Combined_Cooking.svg" width="81" alt="">
        <h3>Комбіноване приготування</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Microwave.svg" width="81" alt="">
        <h3>Мікрохвильова піч</h3>
    </div>
</div>
<div id="ilveicontext-block_5e70c1e8fe89f" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Convection.svg" width="81" alt="">
        <h3>Конвекція</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Steam.svg" width="81" alt="">
        <h3>Пара</h3>
    </div>
</div>
<div id="centertextandimage-block_5e70c23cfe8a0" class="block-center centertextandimage-block">
    <h2 class="heading-12">Чиллер</h2> <img src="{{Storage::url('static/')}}Colonna_Stellata_Sezione_Abbattitore-1.jpg"
        alt="">
</div>
<div id="ilveicontext-block_5e70c262fe8a1" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Positive_Blast_Chill.svg" width="81" alt="">
        <h3>Плюсове охолодження</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Defrosting_Slow_Cooking.svg" width="81" alt="">
        <h3>Розморожування готових до вживання продуктів і повільне приготування</h3>
    </div>
</div>
<div id="ilveicontext-block_5e70c2affe8a2" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Proofing.svg" width="81" alt="">
        <h3>Ідеальний контроль</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Freezing_Room_to-20.svg" width="81" alt="">
        <h3>Заморожування: від кімнатної температури до -20°C.</h3>
    </div>
</div>
<div id="centertextandimage-block_5e70c303fe8a3" class="block-center centertextandimage-block">
    <h2 class="heading-12">Вакуумна машина</h2> <img
        src="{{Storage::url('static/')}}Colonna_Stellata_Sezione_Sottovuoto-1.jpg" alt="">
</div>
<div id="ilveicontext-block_5e70c329fe8a4" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Bell_Chamber.svg" width="81" alt="">
        <h3>Професійна дзвіниця</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}4_Sealing_Levels.svg" width="81" alt="">
        <h3>4 рівні герметизації до 99%</h3>
    </div>
</div>
<div id="ilveicontext-block_5e70c360fe8a5" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}4_m3_Vacuum.svg" width="81" alt="">
        <h3>4 м3/год вакуумний насос</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Capacity.svg" width="81" alt="">
        <h3>Оптимальна місткість</h3>
    </div>
</div>
<div id="ilveicontext-block_5e70c39afe8a6" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Marinating.svg" width="81" alt="">
        <h3>Функція маринування</h3>
    </div>
</div>
<div id="imagetextandlink-block_5e70c3d1fe8a7" class="block-2 w-row imagetextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/')}}CSTAR_SS_Gen_34_02.png" alt="">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>Найкращі технології ILVE в одній вертикальній конструкції, призначеній для любителів готувати.</h2>
        <p> Ультракомбінована - це піч із трьома призначеннями, яка поєднує конвекцію та гриль, пропарювання та
            мікрохвильову піч для
            найкращих результатів приготування. Чиллер охолоджує, заморожує та відновлює.
            Чиллер також може готувати на низькій температурі, зберігаючи структуру та їжі. </p>
        <p> Свіжа або варена їжа зберігається довше за допомогою вакуумної машини, або замаринуйте продукти.
            Ультракомбінована піч, чиллер та вакуумна машина - ідеальна
            "бригада", щоб заощадити час на кухні, посилити смаки та заощадити на покупках сіжих продуктів щодня. </p>
    </div>
</div>
@endsection