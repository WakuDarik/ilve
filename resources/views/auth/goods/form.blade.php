@extends('admin/master')
@isset($product)
@section('title', 'Редактировать товар '.$product->name)
@else

@section('title', 'Создать товар')
@endisset
@section('content')
<style>
    .more_img img {
        max-width: 250px;
    }

    .tox .tox-editor-container,
    .tox.tox-tinymce {
        width: 920px !important;
        height: 500px !important;
    }

    .opcionPrice {
        display: flex;
    }

    .plusOption {
        width: 30px;
        height: 30px;
        min-width: 0px;
        min-height: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 10px;
    }
</style>
{{-- @dd($propsGood) --}}
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @isset($product) <h1>Редактировать товар {{ $product->name }}</h1> @else <h1>Добавить
                        товар</h1> @endisset
                </div>
                <form method="POST" enctype="multipart/form-data" @isset($product)
                    action="{{ route('products.update', $product) }}" @else action="{{ route('products.store') }}"
                    @endisset>
                    @csrf
                    @isset($product)
                    @method('PUT')
                    @endisset

                    <div class="input-group row">
                        <label for="name" class="col-sm-2 col-form-label">Назване: </label>
                        <div class="col-sm-6">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ old('name', isset($product) ? $product->name : null) }}">
                        </div>
                    </div>

                    <div class="input-group row">
                        <label for="articul" class="col-sm-2 col-form-label">Артикул: </label>
                        <div class="col-sm-6">
                            <input type="text" name="articul" class="form-control" id="articul"
                                value="@isset($product) {{ $product->articul }} @endisset">
                        </div>
                    </div>

                    <div class="input-group row">
                        <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="price" id="price"
                                value="@isset($product) {{ $product->price }} @endisset">
                        </div>
                    </div>

                    <div class="input-group row">
                        <label for="short_text" class="col-sm-2 col-form-label">Короткое описание: </label>
                        <div class="col-sm-6">
                            <input type="text" name="short_text" class="form-control" id="short_text"
                                value="{{ old('short_text', isset($product) ? $product->short_text  : null) }}">
                        </div>
                    </div>

                    <div class="input-group row">
                        @if(!isset($product))
                        <label for="categories_select" class="col-sm-2 col-form-label">Категория </label>
                        <div class="col-sm-6">
                            <select name="category_id" id="categories_select" class="form-control">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{$category->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        @else
                        <label class="col-sm-8 col-form-label">Категория {{$categories->name}}</label>
                        <input type="hidden" disabled name="category_id" value="{{$categories->id}}"
                            placeholder="{{$categories->name}}">
                        @endif
                    </div>

                    <div class="input-group row">
                        @if(!isset($product))
                        <label for="styles_select" class="col-sm-2 col-form-label">Стиль </label>
                        <div class="col-sm-6">
                            <select name="style_id" id="styles_select" class="form-control">
                                @foreach ($styles as $style)
                                <option value="{{ $style->id }}">{{$style->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        @else
                        <label class="col-sm-8 col-form-label">Стиль {{$styles->name}}</label>
                        <input type="hidden" disabled name="styles_select" value="{{$styles->id}}"
                            placeholder="{{$styles->name}}">
                        @endif
                    </div>

                    <div class="input-group row">
                        <label for="plus" class="col-sm-2 col-form-label">Описание
                        </label>
                        <div class="col-sm-6">
                            <textarea name="plus" class="form-control tinymvc" id="" style="width: 100%">@isset($product) {{ $product->plus }} @endisset
                            </textarea>
                        </div>
                    </div>

                    <div class="input-group row">
                        <label for="">meta Заголовок</label>
                        <input type="text" name="meta_t"
                            value="{{ old('meta_t', isset($product) ? $product->meta_t  : null) }}">
                    </div>

                    <div class="input-group row">
                        <label for="">Заголовок H1</label>
                        <input type="text" name="H1" value="{{ old('H1', isset($product) ? $product->H1  : null) }}">
                    </div>

                    <div class="input-group row">
                        <label for="">meta Ключи (через запятую)</label>
                        <input type="text" name="meta_k"
                            value="{{ old('meta_k', isset($product) ? $product->meta_k  : null) }}">
                    </div>

                    <div class="input-group row"><label for="">meta Описание</label><textarea name="meta_d" id=""
                            cols="30" rows="10">{{ old('meta_d', isset($product) ? $product->meta_d  : null) }}
                        </textarea>
                    </div>

                    <div class="input-group row">
                        <label for="">Features</label>
                        <textarea name="features" id="tinymvc" cols="30" rows="10">{{ old('html', isset($product) ? $product->features  : null) }}
                    </textarea>
                    </div>

                    <div class="input-group row">
                        @isset($product)
                        @endisset
                        <div class="col-sm-6">
                            Выбрать / изменить фото<input class="form-control" type="file" name="iamge">
                        </div>
                    </div>
                    <div class="input-group row">
                        @isset($product)
                        <div class="more_img">
                            @foreach ($product->images()->get() as $images)
                            <div class="moreImg-wrap">
                                <a class="delMoreImg" data-img-id="{{$images->id}}">x</a>
                                <img src="{{Storage::url($images->image)}}" alt="ilve">
                            </div>
                            @endforeach
                        </div>
                        @endisset
                        <label for>Дополнительные фото<input type="file" class="form-control" name="product_images[]"
                                multiple> </label>
                    </div>

                    <div class="input-group row">
                        <label for>Опции и цены </label>

                        @isset($product)
                        <div class="optionContainer">
                            @foreach ($product->options()->get() as $option)
                            <div class="opcionPrice">
                                <input type="text" class="form-control" name="option[]" placeholder="Опция"
                                    value="{{$option->option}}">
                                <input type="text" class="form-control" name="priceOption[]" placeholder="Цена"
                                    value="{{$option->price}}">
                            </div>
                            @endforeach
                        </div>
                        @endisset
                        <div class="optionContainer">
                            <div class="opcionPrice">
                                <input type="text" class="form-control" name="option[]" placeholder="Опция">
                                <input type="text" class="form-control" name="priceOption[]" placeholder="Цена">
                            </div>
                        </div>
                        <div class="plusOption btn" onclick="addOption">+</div>
                    </div>
                    <button type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({selector:'textarea',plugins: "image imagetools code", toolbar: "code"});
</script>
<script>
    function addOption(){
        let copied = document.querySelector('.opcionPrice');
        let parant = document.querySelector('.optionContainer');
        //console.log(`${parant} - ${copied}`)
         parant.appendChild(copied.cloneNode(true));
    }
document.querySelector('.plusOption').addEventListener('click', addOption)
    $(function() {
        $('#categories_select').on('change',function(){
       let category = $(this).val()
            $.ajax({
            url: '{{ route('getProps') }}',
            type: "POST",
            data: {category:category},
            headers: {
                'X-CSRF-Token': $('input[name=_token]').val()
            },
            success: function (data) {
                $('.props-wrap').html('')
                data.forEach(el => {
                    $('.props-wrap').append(`
                    <label>${el.name}<input type="text" name="unit[${el.id}]"></label>`); 
                });
               
            },
                // error: function (msg) {
                //     alert('Ошибка');
                // }   
            });
        });

        $('.delMoreImg').on('click',function(){
        let img_id = $(this).data('img-id')
            $.ajax({
            url: '{{ route('delMoreImg') }}',
            type: "POST",
            data: {img_id:img_id},
            headers: {
                'X-CSRF-Token': $('input[name=_token]').val()
            },
            success: function (data) {
                location.reload(true);

            },
                error: function (msg) {
                    alert('Ошибка');
                }   
            });
        });
    })
</script>
@endsection