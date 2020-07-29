@extends('layouts/master')

@section('title', 'Комбінована парова піч Ultracombi - ILVE - ILVE - ILVE-SHOP')
@section('keywords','комбінована парова піч ilve, комбінована парова піч ilve-shop, eльтракомбінована піч ilve, eльтракомбінована піч ilve-shop')
@section('descr','Ультракомбінована піч пропонує 5 одноразових режимів приготування і 4 комбіновані програми, що дозволяють вибрати найбільш зручний режим приготування в одному приладі.')

@section('content')

<div id="back-to-black" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/')}}ILVE_Ultracombi_Hero.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/')}}ILVE_Ultracombi_Hero.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">Ультракомбінована</h1>
    </div>
</div>
<div id="ilvetext-block_5e80a1d2c34c3" class="block-01 w-row ilve-text">
    <div class="col1-s w-col w-col-5">
        <h2>Конвекція, мікрохвильова піч, готування на пару в одній духовці.</h2>
    </div>
    <div class="col1-r w-col w-col-7">
        <p>Ультракомбінована плита пропонує 5 режимів приготування і 4 комбіновані програми, що дозволяють вибрати
            найбільш зручний режим приготування в одному приладі. Наприклад, за допомогою смарт-дисплея TFT можна
            поєднувати функцію мікрохвильової печі та гриля, або конвекцію з парою, щоб отримати ідеальні страви.</p>
    </div>
</div>
<div id="imagetextandlink-block_5e80a1eac34c4" class="block-2 w-row imagetextandlink-block ">
    <div class="col-2-image w-col w-col-6">
        <img src="{{Storage::url('static/')}}ILVE_Ultracombi_TFT.jpg" alt="">
    </div>
    <div class="col2-txt w-col w-col-6">
        <h2></h2>
        <ul>
            <li> Регулювання температури в кроках одного ступеня (функція пари) </li>
            <li> Датчик температури </li>
            <li> Переднє завантаження резервуара для води (функція пари) </li>
            <li> порожнина з нержавіючої сталі класу AISI 304 </li>
            <li> Конструкція порожнини для оптимального розподілу тепла • Ідеальна ізоляція, що дозволяє уникнути
                теплового розсіювання та
                підтримує постійну температуру </li>
        </ul>
    </div>
</div>
<div id="centertextandimage-block_5e80a240c34c6" class="block-center centertextandimage-block">
    <h2 class="heading-12  no-btm">Конвекційна піч</h2>
    <div class="line-hawk">Вентиляція та функція грилю гарантують, що їжа на поверхні хрустка і соковита в основі,
        ідеально для приготування страв з золотистою скоринкою та соковитою начинкою.</div> <img
        src="{{Storage::url('static/')}}ILVE_Ultracombi_Bread.jpg" alt="">
</div>

<div id="ilveicontext-block_5e80a2fbc34cb" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <h3>Гаряче повітря</h3>
        <p>Ультракомбінована плита швидко досягає заданої температури приготування, підтримуючи її на постійній кривій.
            Ці два
            важливі фактори поєднуються з ідеальною кількістю циркуляції повітря всередині духовки, рівномірно
            розподіляючи тепло для рівномірного приготування їжі.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <h3>Гриль</h3>
        <p>Завдяки функції гриля ви можете ідеально готувати будь-яку їжу, яку ви робите, як тільки забажаєте. Гриль
            робить скоринку
            ідеально золотистою і надає їй потрібну хрусткість, задовольняючи і
            очі, і язик.</p>
    </div>
</div>
<div id="centertextandimage-block_5e80a32cc34cc" class="block-center centertextandimage-block">
    <h2 class="heading-12  no-btm">Пара</h2>
    <div class="line-hawk">Здоровий та найпоживніший процес приготування: підтримує аромат, вітаміни та природні
        солі, не використовує жири для приготування їжі, підсилює природний смак сезонних свіжих інгредієнтів.</div>
    <img src="{{Storage::url('static/')}}ILVE_Ultracombi_Steam.jpg" alt="">
</div>

<div id="ilveicontext-block_5e80a353c34cd" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <h3>Sous vide</h3>
        <p>За допомогою парової технології та за допомогою додаткового пристрою для вакуумного ущільнення ви можете
            використовувати техніку sous vide для всіх переваг, які вона пропонує: ніжне приготування, яке підсилює
            аромати, зберігає харчову цінність.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <h3>Бак для води</h3>
        <p>1-літровий резервуар для води, незамінний для функції пари, простий у доступі та наповненні.</p>
    </div>
</div>

<div id="centertextandimage-block_5e80a383c34ce" class="block-center centertextandimage-block">
    <h2 class="heading-12  no-btm">Мікрохвильова піч</h2>
    <div class="line-hawk">Технологія мікрохвильової пічки не тільки зручна для розморожування, але
        й гарантує продуктивність, швидке та відмінне приготування. Цикли приготування, інтегровані з мікрохвильовою
        піччю, дають дивовижні результати щодо якості, смаку та економії часу</div> <img
        src="{{Storage::url('static/')}}ILVE_Ultracombi_MW.jpg" alt="">
</div>

<div id="twocolsgrey-block_5e80a444c34d1" class="block-3 w-row twocolsgrey-block invert">
    <div class="col-3-img w-col w-col-6">
        <img src="{{Storage::url('static/')}}645STCHSW_BK_Gen_Front.png" alt="" class="image-11">
    </div>
    <div class="col3-txt w-col w-col-6">
        <h2>Professional Plus Чоне скло</h2>
        <p>Ультракомбінована піч з потрійного чорного гартованого склоа </p>
        <a href="/style/professional-plus/645stchsw" class="button w-inline-block" data-ix="button">
            <div>Дізнатися більше</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt=""
                class="arrow">
        </a>
    </div>
</div>
<div id="twocolsgrey-block_5e80a491c34d2" class="block-3 w-row twocolsgrey-block invert">
    <div class="col-3-img w-col w-col-6">
        <img src="{{Storage::url('static/')}}645SLHSW_SS_Gen_Front.png" alt="" class="image-11">
    </div>
    <div class="col3-txt w-col w-col-6">
        <h2>Professional Plus Нержавіюча сталь</h2>
        <p>Піч з нержавіючої сталі трицілевого призначення з контролем TFT та професійною ручкою</p>
        <a href="/style/professional-plus/645slhsw" class="button w-inline-block" data-ix="button">
            <div>Дізнатися більше</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt=""
                class="arrow">
        </a>
    </div>
</div>
<div id="twocolsgrey-block_5e80a4dac34d3" class="block-3 w-row twocolsgrey-block " style="padding-bottom: 100px;">
    <div class="col-3-img w-col w-col-6">
        <img src="{{Storage::url('static/')}}645SCHSW_MGG_Gen_Front.png" alt="" class="image-11">
    </div>
    <div class="col3-txt w-col w-col-6">
        <h2>Nostalgie</h2>
        <p>Троїчна піч класичного стилю доступна в п'яти кольорах і три поверхні, які можна комбінувати разом
        </p>
        <a href="/style/nostalgie-en/645snhsw" class="button w-inline-block" data-ix="button">
            <div>Дізнатися більше</div>
            <div class="line-link"></div><img src="{{Storage::url('static/')}}arrow.svg" width="18" alt=""
                class="arrow">
        </a>
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