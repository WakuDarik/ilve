@extends('layouts/master')

@section('title','' )
@section('keywords','' )
@section('descr','' )

@section('content')
<div style='padding: 150px 50px;'>

    @foreach ($category as $item)
    <div>
        UPDATE `option` <br />
        SET `short_text_ru`='{{$item['short_text']}}'<br />,
        `features_ru`='{{$item['features']}}'<br />,
        `plus_ru`='{{$item['plus']}}'<br />,
        `meta_t_ru`= '{{$item['meta_t']}}' <br />,
        `meta_k_ru`= '{{$item['meta_k']}}' <br />,
        `meta_d_ru`= '{{$item['meta_d']}}' <br />
        WHERE `id` = {{$item['id']}};<br />
        <br />
    </div>
    @endforeach
</div>


@endsection