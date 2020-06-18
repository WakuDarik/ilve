@extends('layouts/master')

@section('title', 'Оренда інструментів у Львові і Львівській області | Орендувати ')
@section('keywords','Оренда інструментів, Інструмент у Львові і Львівській
області, Оренда ')
@section('descr','Орендувати на день за найвигіднішими цінами у Львові та Львівській області.')

@section('content')

<div id="back-to-black" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/')}}/Tecnologie_Piani_Cottura_Hero.jpg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/')}}/Tecnologie_Piani_Cottura_Hero.jpg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">Поверхні та комфорки</h1>
    </div>
</div>
<div id="centertextandimage-block_5e70d10a1ad29" class="block-center centertextandimage-block">
    <h2 class="heading-12">Подвійні пальники<br />
        Завжди ідеальна потужність для ідеального приготування.</h2> <img
        src="{{Storage::url('static/')}}/Bruciatori_Dual.jpg" alt="">
</div>
<div id="ilveicontext-block_5e70d1271ad2a" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Dual_Burners-1.svg" width="81" alt="">
        <h3>Газові пальники (подвійні) потужністю до 5 кВт</h3>
        <p>Оптимальна подача та ідеальне розподілення тепла для всіх видів приготування.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/TotalBlack_FlameSpreader-1.svg" width="81" alt="">
        <h3>Чорні латунні пальники з нанотехнологічною обробкою</h3>
        <p>Технічні характеристики латуні збагачені нанотехнологічним покриттям, яке забезпечує легке очищення, з
            елегантним покриттям Total Black.</p>
    </div>
</div>
<div id="ilveicontext-block_5e70d1711ad2b" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Cast_Iron_Supports-1.svg" width="81" alt="">
        <h3>Високоспеціалізовані варильні панелі</h3>
        <p> Конструкція з сталі AISI 304 товщиною 12/10, можливість вибору ідеальної комбінації між газовою плитою до 9
            пальників або індукційною, змішаною. </p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Specialised_Hobs-1.svg" width="81" alt="">
        <h3>Варильна панель з чавунними підставками для сковороди</h3>
        <p> Міцні підставки для гарячого посуду з чавунна забезпечують функціональну та безпечну опору. </p>
    </div>
</div>
<div id="centertextandimage-block_5e70d1d01ad2d" class="block-center centertextandimage-block">
    <h2 class="heading-12">Плюси газових плит.</h2> <img src="{{Storage::url('static/')}}/Plus_Piani_Gas.jpg" alt="">
</div>
<div id="ilveicontext-block_5e70d1f11ad2e" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/8mm.svg" width="81" alt="">
        <h3>Суцільна 8мм комфорка</h3>
        <p> Товста сталь забезпечує рівномірну температуру по всій поверхні, для рівномірного обварювання м’яса, риби,
            овочів і т.д.

    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Switch_On_Knobs.svg" width="81" alt="">
        <h3>Вбудоване вмикання на ручках</h3>
        <p>Просто натисніть газову ручку, щоб запустити іскру: просто і миттєво.</p>
    </div>
</div>
<div id="ilveicontext-block_5e70d23b1ad2f" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Safety_Valve.svg" width="81" alt="">
        <h3>Запобіжний клапан</h3>
        <p>Перериває подачу газу, якщо полум'я було випадково погашене.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Tilted_Flame.svg" width="81" alt="">
        <h3>Нахилене полум'я</h3>
        <p>Це більш ефективно, оскільки воно розподіляє тепло на більшій поверхні, ніж дно посудини.</p>
    </div>
</div>
<div id="ilveicontext-block_5e70d2971ad30" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Multi_Gas_Burners.svg" width="81" alt="">
        <h3>Багатогазові пальники</h3>
        <p>Після того, як полум'я стабілізується, вони усувають будь-яке випадкове гасіння через повітряні потоки або
            розлиття рідини.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Triple_Crown.svg" width="81" alt="">
        <h3>Пальник з потрійною короною</h3>
        <p>Пальник високої потужності (4,3 кВт). Підходить для посудин великого об'єму.</p>
    </div>
</div>
<div id="ilveicontext-block_5e70d2cd1ad31" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Brass_Spreader.svg" width="81" alt="">
        <h3>Латунна комфорка</h3>
        <p>Максимальна вогнестійкість і відмінна міцність.</p>
    </div>
</div>
<div id="centertextandimage-block_5e70d3111ad33" class="block-center centertextandimage-block">
    <h2 class="heading-12">Плюси індукційних плит.</h2> <img src="{{Storage::url('static/')}}/Plus_Piani_Induzione.jpg"
        alt="">
</div>
<div id="ilveicontext-block_5e70d3211ad34" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Heat_Indicator.svg" width="81" alt="">
        <h3>Індикатор залишкового тепла</h3>
        <p> Вказує на те, що скло гаряче, тому слід бути обережним при дотику до нього та під час розміщення предметів,
            оскільки вони можуть бути пошкоджені. </p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Automatic_Stop.svg" width="81" alt="">
        <h3>Таймер з автоматичною зупинкою</h3>
        <p>Вимикає активну зону після закінчення встановленого часу.</p>
    </div>
</div>
<div id="ilveicontext-block_5e70d37f1ad35" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Integrated_Extraction-1.svg" width="81" alt="">
        <h3>Вбудована витяжка</h3>
        <p> Деякі моделі оснащені системою витяжки, вбудованою в індукційну варильну поверхню, для оптимізації
            ергономічності та функціональності, тому витяжка не потрібна. </p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Bridge_Control.svg" width="81" alt="">
        <h3>Суміжне керування</h3>
        <p> Індукційні варильні панелі, які мають цю функцію, дають можливість одночасно керувати двома суміжними зонами
            однією командою, як ніби вони є одним цілим. </p>
    </div>
</div>
<div id="ilveicontext-block_5e70d3da1ad36" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Booster.svg" width="81" alt="">
        <h3>Функція прискорення</h3>
        <p>Дозволяє сфокусувати всю потужність індукційної варильної поверхні в заданій зоні, щоб прискорити час
            приготування.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Slide_Controls.svg" width="81" alt="">
        <h3>Слайд-елементи керування</h3>
        <p> Ця зручна система управління дозволяє, наприклад, підвищити або знизити робочу температуру, ковзаючи пальцем
            справа наліво або навпаки. </p>
    </div>
</div>
<div id="ilveicontext-block_5e70d4211ad37" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Child_Safety.svg" width="81" alt="">
        <h3>Безпека дитини</h3>
        <p>Після встановлення цієї функції і до її відключення індукційна варильна поверхня не вмикатиметься, включаючи
            елементи керування.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Power_Limiting.svg" width="81" alt="">
        <h3>Захист від перевантаження мережі</h3>
        <p>Якщо максимальне споживання індукційної варильної поверхні перевищує норму, вмикається механізм захисту..</p>
    </div>
</div>
<div id="ilveicontext-block_5e70d45d1ad38" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}/Overheating_Protection.svg" width="81" alt="">
        <h3>Захист від перегріву <br />
            та розливу рідини</h3>
        <p>Якщо варильна плита перегрівається або розливається рідина, запобіжний пристрій вимикає та припиняє роботу
            поверхні.</p>
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