@extends('layouts/master')

@section('title', 'Чиллер для домашньої та професійної кухні - ILVE - ilve')
@section('keywords','Чиллер ILVE, чиллер ilve')
@section('descr','Технології доменного охолодження та зберігання від ILVE: відкрийте для себе кухонні прилади
ilve.')

@section('content')


<div id="back-to-black" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/')}}Conservazione_Abbattimento_Hero.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/')}}Conservazione_Abbattimento_Hero.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="ilve" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">Охолодження та збереження</h1>
    </div>
</div>
<h2 class="has-text-align-center">Функції холодження</h2>
<div id="ilveicontext-block_5e70cec265c20" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Positive_Blast_Chill.svg" width="81" alt="ilve">
        <h3>Плюсове охолодження</h3>
        <p>Ця технологія дозволяє швидко охолодити гарячу їжу (до 3°C температура в холодильнику) або довести її до
            кімнатної температури.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Proofing.svg" width="81" alt="ilve">
        <h3>Ідеальна підтримка</h3>
        <p>Функція підтримки дозволяє програмувати зберігання печених продуктів і підтримувати
            вологість тіста під повним контролем, для отримання ідеального результату.</p>
    </div>
</div>
<div id="ilveicontext-block_5e70ceed65c21" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Defrosting_Slow_Cooking.svg" width="81" alt="ilve">
        <h3>Розморожування готових до вживання продуктів і повільне приготування</h3>
        <p>Повільно та прогресивно доводить їжу до потрібної температури, зберігаючи її текстуру, хрусткість
            та зовнішній вигляд. Також можливо встановити температуру готових до вживання продуктів.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Freezing_Room_to-20.svg" width="81" alt="ilve">
        <h3>Заморожування: від кімнатної температури до -20°C</h3>
        <p> Доводить їжу до -20°C, заморожуючи її за допомогою мікрокристалічної технології. Коли їжа знову
            нагрівається: відсутня волога, вісутнє зниження ваги тому їжу можна готувати не розморожуючи. </p>
    </div>
</div>
<div id="centertextandimage-block_5e70e9fa98bfa" class="block-center centertextandimage-block">
    <h2 class="heading-12">Вакуумне збереження.</h2> <img src="{{Storage::url('static/')}}Conservazione_Sottovuoto.png"
        alt="ilve">
</div>
<div id="ilveicontext-block_5e70cf5565c24" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Bell_Chamber.svg" width="81" alt="ilve">
        <h3>Камера дзвона</h3>
        <p> Професійний пристрій у формі дзвона, дозволяє досягти майже максимального рівня вакууму (99,9%),
            порівняно з 80-85%, що може бути досягнуто недорогими машинами із зовнішнім витягом. Його особлива форма
            дозволяє розміщувати їжу різного розміру всередині, від невеликих продуктів до половини курки, завжди
            підтримуючи високу ефективність машини. </p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}4_Sealing_Levels.svg" width="81" alt="ilve">
        <h3>4 рівня ущільнення</h3>
        <p>Від ніжного ущільнення хлібобулочних виробів і м'яких фруктів, до виведення 99% повітря для тривалого
            зберігання або приготування.</p>
    </div>
</div>
<div id="ilveicontext-block_5e70cf8065c25" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}4_m3_Vacuum.svg" width="81" alt="ilve">
        <h3>4 м3/год Вакуумний насос</h3>
        <p> Висока потужність всмоктування, є однією з найвищих у своїй категорії і забезпечує
            максимальний працездатність машини, працюючи з продуктами всіх розмірів. </p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Marinating.svg" width="81" alt="ilve">
        <h3>Маринування</h3>
        <p> Вакуум розширює пори м'яса, риби та овочів, дозволяючи ароматам та приправам проникати глибоко у волокна
            перед приготуванням. </p>
    </div>
</div>
<div id="ilveicontext-block_5e70cfb765c26" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Low_consumption.svg" width="81" alt="ilve">
        <h3>Низьке споживання</h3>
        <p>Дуже низьке максимальне споживання енергії (230 Вт). Зменшення споживання енергії без шкоди для професійних
            показників.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Capacity.svg" width="81" alt="ilve">
        <h3>Оптимальна місткість</h3>
        <p> Внутрішня коробка має висоту 140 мм, що забезпечує ідеальний об'єм (7,5 літрів) навіть для великого посуду,
            в той же час дозволяє влаштувати вакуумну пакувальну машину в ящик зі стандартною висотою (150 мм) . </p>
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