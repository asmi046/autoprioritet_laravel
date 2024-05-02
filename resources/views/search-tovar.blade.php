@extends('layouts.all')


@section('title', "Запчасти по артикулу " . $article . " - ". $brand ."  - AutopRioritet.ru")
@section('description', "Запчасти по артикулу " . $article . " - ". $brand .". Доставка запчастей в Курске от 1-го дня по выгодным ценам - AutopRioritet.ru")

@section('main')

<section class="breadcrumbs_section">
    <div class="container">
        <x-breadcrumbs :article="$article" :brand="$brand"></x-breadcrumbs>
    </div>
</section>

<section class="inner_page_section">
    <div id="cart_app" class="container">

        <h1>Запчасти: {{ $article }} - {{ $brand }}</h1>



        @if (!empty($tovars))
            <x-product-table.details
            :isopen="true"
            :brand="'Запрашиваемый бренд:'.$brand"
            :tovar="$tovars[$brand]"
            ></x-product-table.details>

            @if (count($tovars) > 1)
                <h2>Найденные аналоги</h2>
            @endif

            @foreach ($tovars as $key => $item)
                @continue($key == $brand)

                <x-product-table.details
                :isopen="false"
                :brand="$key"
                :tovar="$item"
                ></x-product-table.details>
            @endforeach
        @else
            <h2>К сожалению товары не найдены</h2>
        @endif
    </div>
</section>

<x-consultation-form.form></x-consultation-form.form>

@endsection
