@extends('layouts/master')

@section('title', 'Оренда інструментів у Львові і Львівській області | Орендувати ')
@section('keywords','Оренда інструментів, Інструмент у Львові і Львівській
області, Оренда ')
@section('descr','Орендувати на день за найвигіднішими цінами у Львові та Львівській області.')

@section('content')
<div id="back-to-black" class="header-line" style="
background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0.3))), url('{{Storage::url('static/')}}nvBNt_QQ.jpeg');
background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{Storage::url('static/')}}nvBNt_QQ.jpeg');
">
    <div id="scroll-hide" class="div-block-33">
        <img src="{{Storage::url('static/')}}vertical-line.svg" alt="ilve" data-ix="scroll">
    </div>
    <div class="content-title">
        <h1 class="title-heder-line">Технології духовок та<br />систем готування і зберігання</h1>
    </div>
</div>
<div id="ilvetext-block_5e70c60f701aa" class="block-01 w-row ilve-text">
    <div class="col1-s w-col w-col-5">
        <h2>Печі: великі розміри та продуктивність.</h2>
    </div>
    <div class="col1-r w-col w-col-7">
        <p>Будь-яка окрема або подвійна духова шафа, яку ви вибрали, забезпечить вам все необхідне.
            Духовка 60 см має внутрішній об'єм 65 літрів, а духовка 80 см має місткість приблизно
            97 літрів, тоді як 30-дюймова плита Majestic надає цілі 114 літрів!</p>
    </div>
</div>
<div id="centertextandimage-block_5e70c63e701ab" class="block-center centertextandimage-block">
    <img src="{{Storage::url('static/')}}Cavity-80M-turnsplit_CLEAN.png" alt="ilve">
</div>
<div id="ilveicontext-block_5e70c67a701ac" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Quick_Start-1.svg" width="81" alt="ilve">
        <h3>Швидкий старт</h3>
        <p>Функція швидкого попереднього нагрівання духовки дозволяє за короткий час
            досягти потрібної температури, а потім ви зможете вибрати найкращий режим
            приготування страви. Режим також працює як швидке розморожування,
            якщо встановити низьку температуру (30°C &#8211; 40°C).</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Triple_Glass_Door-1.svg" width="81" alt="ilve">
        <h3>Дверцята, що не нагріваються з потрійним знімним склом</h3>
        <p>Безпечні для дітей, ідеально узольована внутрішня частина завдяки трьом шарам та легкі у чищенні.</p>
    </div>
</div>
<div id="ilveicontext-block_5e70c6dc701ad" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Steam_Discharge-1.svg" width="81" alt="ilve">
        <h3>Скидач пари</h3>
        <p>Завдяки цій системі пари виводяться зсередини,
            що дозволяє вибрати більш суху або більш вологу атмосферу готування.
            Таким чином можна домогтися хрусткого запеченого блюда або м’якості і соковитості.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Cooking_Probe-1.svg" width="81" alt="ilve">
        <h3>Кулінарний зонд</h3>
        <p>Найважливіший аксесуар для перевірки температури в серцевині, наприклад, в м'ясних нарізках.</p>
    </div>
</div>
<div id="ilveicontext-block_5e70c743701ae" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Temperature_Control-1.svg" width="81" alt="ilve">
        <h3>Точний електронний <br />
            контроль температури</h3>
        <p>Електронне управління подбає, щоб температура духовки залишалася постійною та без коливань
            протягом усього процесу приготування.
            Контроль можна встановити з точністю від 30°C (для швидкого розморожування) та до 320°C.</p>
        <p><img class="alignnone  wp-image-3199" src="{{Storage::url('static/')}}Grafico_Controllo_Temp.svg" alt="ilve"
                width="440" height="148" /></p>
    </div>
</div>
<div id="centertextandimage-block_5e70c7fa701af" class="block-center centertextandimage-block">
    <h2 class="heading-12">Приготування та контроль: духовки для високої кухні.</h2> <img
        src="{{Storage::url('static/')}}Cottura_e_Controllo.jpg" alt="ilve">
</div>
<div id="ilveicontext-block_5e70c81e701b0" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Tangential_Ventilation.svg" width="81" alt="ilve">
        <h3>Тангенціальне охолодження <br />
            вентиляція та висока щільність <br />
            ізоляція</h3>
        <p>Запобігає перегріву меблів поруч з духовкою.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Folding_Grill_Coil-.svg" width="81" alt="ilve">
        <h3>Складана гриль-котушка <br />
            легке прибирання</h3>
        <p>Завдяки шарнірній опорі електричний нагрівальний елемент гриля можна опустити, щоб легше очистити верхню
            частину порожнини.</p>
    </div>
</div>
<div id="ilveicontext-block_5e70c897701b1" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Soft_Closing-1.svg" width="81" alt="ilve">
        <h3>Двері з <br />
            м'якою системою закриття</h3>
        <p>Петлі дверцят обладнані амортизатором, який робить закривання більш поступовим і безшумним.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Easy-clean-enamel.svg" width="81" alt="ilve">
        <h3>Легка чистка емалі</h3>
        <p>Жир не прилипає до поверхні і тому легше видаляється.</p>
    </div>
</div>
<div id="ilveicontext-block_5e70c8f6701b2" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Temp_30-320_1.svg" width="81" alt="ilve">
        <h3>Температура<br />
            від 30° до 320°C</h3>
        <p>Великий діапазон температури,
            печі ILVE дозволяють готувати складні страви дуже легко гарантуючи ідеальний результат.</p>
    </div>
</div>
<div id="centertextandimage-block_5e70c92a701b3" class="block-center centertextandimage-block">
    <h2 class="heading-12">Асортимент печей ilve пропонує моделі, які відповідають будь-якій потребі.</h2> <img
        src="{{Storage::url('static/')}}Gamma_Forni_Ilve.jpg" alt="ilve">
</div>
<div id="ilveicontext-block_5e70c958701b4" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Combined_Cooking.svg" width="81" alt="ilve">
        <h3>Комбіноване приготування</h3>
        <p>Завдяки 5 одинарним функціям і 4 комбінованим програмам,
            Ульракомбінація скорочує час приготування і показує надзвичайний результат.
            Доторкнувшись до одного дисплея, можна, наприклад, інтегрувати мікрохвильову
            піч із грилем, або вентиляцію та пар, щоб отримати ідеальні страви на будь-який смак.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Steam.svg" width="81" alt="ilve">
        <h3>Пар</h3>
        <p>Приготовлені страви з паровою духовкою зберігають аромат та мінерали, вона не
            використовує жир для приготування їжі та підсилює натуральний смак інгредієнтів.</p>
    </div>
</div>
<div id="ilveicontext-block_5e70c99a701b5" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Microwave.svg" width="81" alt="ilve">
        <h3>Мікрохвильова піч</h3>
        <p>Завдяки чотирьом рівням потужності та функції швидкого запуску, мікрохвильова піч не
            обмежується нагріванням та розморожуванням їжі, а також гарантує швидке та легке приготування.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Convection.svg" width="81" alt="ilve">
        <h3>Конвекція</h3>
        <p>Вентиляція та мангал забезпечують хрустку скоринку та соковитість, і ідеально підходять для рівномірного
            підрум’янення страв.</p>
    </div>
</div>
<div id="ilveicontext-block_5e70c9cc701b6" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Temp_400.svg" width="81" alt="ilve">
        <h3>400° піч для піци</h3>
        <p>Дуже висока температура, яку можна досягти за допомогою духовки для піци 400°C, дозволяє вам готувати чудову
            традиційну
            піцу. Її також можна використовувати для всіх продуктів
            та страв від 30°C до 400°C!</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Even_Cooking.svg" width="81" alt="ilve">
        <h3>Рівномірне запікання</h3>
        <p>Циркуляція повітря "ефект повітродувки", створена спеціальними дефлекторами
            для піци 400°C, дозволяє тісту ідеально випікатися як зверху, так і знизу.</p>
    </div>
</div>
<div id="centertextandimage-block_5e70ca2c701b7" class="block-center centertextandimage-block">
    <h2 class="heading-12  no-btm">TFT-дисплей зручний, зрозумілий спосіб налаштувань.</h2>
    <div class="line-hawk">Просто торкніться дисплея одним пальцем, щоб керувати всіма функціями духовки.
        Температура, таймер та автоматичний запуск:
        все контролюється одним рухом та одним дотиком.</div> <img src="{{Storage::url('static/')}}Display_TFT.jpg"
        alt="ilve">
</div>
<div id="ilveicontext-block_5e70ca76701b8" class="block-4 w-row">
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}4_3_Inch_Display-1.svg" width="81" alt="ilve">
        <h3>4.3” сенсорний дисплей</h3>
        <p>Завдяки технології TFT, дисплей забезпечує найкращу читабельність,
            відображаючи кожну функцію чітко та безпомилково.</p>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Two_Ovens_Control-1.svg" width="81" alt="ilve">
        <h3>Керування двома печами</h3>
        <p>Усі функції кожної духовки керуються та програмуються на одному дисплеї з максимальною безпосередністю.</p>
    </div>
</div>
<div id="imagesandcaptions-block_5e70cae2701b9" class="block-4 imagesandcaptions-block w-row">
    <div class="col4-s w-col w-col-12">
        <h3>Подивіться, як просто керувати Majestic</h3>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Controllo_Majestic_1.jpg" alt="ilve" class="img-didascalia">
        <div class="p-small">Поступовий вибір температури духовки.</div>
    </div>
    <div class="col4-s w-col w-col-6">
        <img src="{{Storage::url('static/')}}Controllo_Majestic_2.jpg" alt="ilve" class="img-didascalia">
        <div class="p-small">Встановлення часу приготування.</div>
    </div>
</div>]

<script>
    document.getElementById('back-to-black-burger').style.filter = 'invert(1)'
    document.getElementById('back-to-black-logo').style.filter = 'invert(1)'

    let nav = document.querySelectorAll('.content-link-menu .link-nav');
    nav.forEach((elem) => {
        elem.classList.remove('dark')
    })

</script>
@endsection