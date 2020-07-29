@extends('layouts/master')

@section('title', 'Кухонні кольори, фурнітура та обробка - ILVE - ILVE-SHOP')
@section('keywords','Кухонні кольори ILVE-SHOP, фурнітура та обробка ILVE-SHOP')
@section('descr','Системи приготування ILVE зачаровують усі почуття. Колір також стає невід’ємною частиною їх естетичної
індивідуальності та всієї кухні: мовою, яка виражає ваші смаки та ваш стиль.')

@section('content')

<div id="back-to-black" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/')}}Colori_Finiture_Hero.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/')}}Colori_Finiture_Hero.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">Кольори та обробка</h1>
    </div>
</div>
<div id="centertextandimage-block_5e70d5b5db1f7" class="block-center centertextandimage-block">
    <h2 class="heading-12  no-btm">Кілька кольорових комбінацій</h2>
    <div class="line-hawk"> Системи приготування ILVE зачаровують усі почуття. Колір також стає невід'ємною частиною їх
        естетичної індивідуальності та культури всієї кухні: мовою, яка виражає ваші смаки та ваш стиль. З цієї причини
        ilve
        розробила гаму кольорів у гармонії з основними тенденціями декору інтер'єру: класичними чи сучасними,
        мінімальними
        чи шикарними, щоб втілити красу технології різними способами. </div>
    <img src="{{Storage::url('static/')}}Molteplici_combinazioni_di_colori.png" alt="">
</div>
<div id="imagetextandlink-block_5e70d5dbdb1f8" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/')}}Colori_RAL.jpg" alt="">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>Кольори RAL.</h2>
        <p> Чи хотіли б ви облаштування з неповторним візуальним виглядом, ідеально гармоніюючи з дизайном
            інтер'єру вашого будинку? Окрім вибору кольорів, доступних у каталозі, ви можете обрати
            один з нескінченних відтінків асортименту RAL. Хроматична універсальність стала можливою завдяки
            гнучкості виробничого процесу ILVE та його здатності задовольнити кожне бажання. </p>
    </div>
</div>
<div class="block-4 w-row pd-btm">
    <div class="col4-s w-col w-col-12">
        <h2>Оздоблення</h2>
    </div>
</div>
<div id="ilveicontext-block_5e70ddc8abedd" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}B_White.svg" width="81" alt="">
        <h3>WH / Білий</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}A_AntiqueWhite.svg" width="81" alt="">
        <h3>AW / Античний білий</h3>
    </div>
</div>
<div id="ilveicontext-block_5e70de09abede" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}SS_Inox.svg" width="81" alt="">
        <h3>SS / Нержавіюча сталь</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}N_GlossyBlack.svg" width="81" alt="">
        <h3>Б / Глянцевий чорний</h3>
    </div>
</div>
<div id="ilveicontext-block_5e70de4aabedf" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}M_GrafiteMat.svg" width="81" alt="">
        <h3>MG / Графітовий матовий</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}BL_Blue.svg" width="81" alt="">
        <h3>МБ / Синій</h3>
    </div>
</div>
<div id="ilveicontext-block_5e70de6eabee0" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}VS_EmeraldGreen.svg" width="81" alt="">
        <h3>EG / Смарагдовий зелений</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}RB_BorgognaRed.svg" width="81" alt="">
        <h3>BU / Багряно червоний</h3>
    </div>
</div>
<div id="gallerytextandlink-block_5e7220ed76b60" class="block-2 w-row gallerytextandlink-block invert">
    <div class="col-2-image w-col w-col-6">
        <div class="carousel carousel-inside"
            data-flickity='{ "imagesLoaded": true, "wrapAround": true, "pageDots": true, "prevNextButtons": false}'>
            <img src="{{Storage::url('static/')}}Color_Of_The_Year_Living_Coral.jpg" alt="">
            <img src="{{Storage::url('static/')}}Color_Of_The_Year__Light_Green.jpg" alt="">
        </div>
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2>Колір року.</h2>
        <p> Кожен рік дизайнери та творці вибирають Колір року: ILVE підтримує цю традицію
            і завдяки своїй технології виробництва перетворює її на пропозицію, яка поєднує
            приємне приготування їжі з великим професіоналізмом та задоволенням сучасних тенденцій ,
            з якістю, яка налаштована бути завжди стильною. </p>
    </div>
</div>
<script>
    document.getElementById('back-to-black-burger').style.filter = 'invert(1)'
    document.getElementById('back-to-black-logo').style.filter = 'invert(1)'

    let nav = document.querySelectorAll('.content-link-menu .link-nav');
    nav.forEach((elem) => {
        elem.classList.remove('dark')
    })

</script>
@endsection