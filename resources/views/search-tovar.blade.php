@extends('layouts.all')


@section('title', "Запчасти по артикулу " . $article . " - ". $brand ."  - AutopRioritet.ru")
@section('description', "Запчасти по артикулу " . $article . " - ". $brand .". Доставка запчастей в Курске от 1-го дня по выгодным ценам - AutopRioritet.ru")

@section('main')

<section class="main_page_section">
    <div class="container">

        <h1>Запчасти: {{ $article }} - {{ $brand }}</h1>

        <x-product-table.details
        :isopen="true"
        :brand="'Запрашиваемый бренд:'.$brand"
        :tovar="$tovars[$brand]"
        ></x-product-table.details>

        <h2>Найденные аналоги</h2>

        @if (!empty($tovars))
            @foreach ($tovars as $key => $item)
                @continue($key == $brand)

                <x-product-table.details
                :isopen="false"
                :brand="$key"
                :tovar="$item"
                ></x-product-table.details>
            @endforeach
        @else
            <h2>Введите артикул для поиска</h2>
        @endif
    </div>
</section>

@endsection
