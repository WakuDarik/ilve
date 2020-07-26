@extends('admin/master')

@section('title', 'Товары')
@section('content')
<style>
    .grid {
        grid-template-columns: repeat(8, auto);
    }

    .grid>div:nth-child(-n+8) {
        height: auto;
        background: #6e1600;
        color: #fff;
        border-top: 1px solid #fff;
        border-bottom: 1px solid #fff;
    }
</style>
{{-- @dd($goods) --}}
<div class="content">
    <div class="container">
        <div class="row">

            <form action="{{route('props.sort')}}" method="get">
                @csrf
                <legend> @isset($categorynow)
                    Сгрупировано по категории <b>{{$categorynow->name}}</b>
                    @else
                    Групировать по категории
                    @endisset </legend>
                <select name="category" id="category">
                    <option value="NULL">Все категории</option>
                    @foreach ($categories as $categori)
                    <option value="{{$categori->id}}">{{$categori->name}}</option>
                    @endforeach
                </select>
                <select name="styles" id="styles">
                    <option value="NULL">Все стили</option>
                    @foreach ($styles as $style)
                    <option value="{{$style->id}}">{{$style->name}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn">Групировать</button>
            </form>

            <div class="col-md-12">
                <div class="grid">
                    <div class="item">#</div>
                    <div class="item">Название</div>
                    <div class="item">Код</div>
                    <div class="item">Категория</div>
                    <div class="item">Цена</div>
                    <div class="item">Стиль</div>
                    <div class="item">Действия</div>
                    <div class="item">Действия</div>
                    @foreach ($goods as $good)
                    <div class="item">{{ $good->id }}</div>
                    <div class="item">{{ $good->name }}</div>
                    <div class="item">{{ $good->code }}</div>
                    <div class="item">{{ $good->category->name }}</div>
                    <div class="item">{{ $good->price }}</div>

                    <div class="item">{{ $good->style->name }}</div>

                    <div class="item"><a class="btn btn-success"
                            href="{{ route('products.edit', $good) }}">Редактировать</a>
                    </div>
                    <div class="item">
                        <form method="POST" action="{{ route('products.destroy', $good) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn" type="submit">УДАЛИТЬ</button>
                        </form>
                    </div>
                    @endforeach
                </div>
                <div class="bottom">
                    <a class="btn btn-success" href="{{ route('products.create') }}">Добавить новый товар</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection