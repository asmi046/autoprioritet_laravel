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

            @if (!empty($express))
                <x-express-delivery-section :express="$express"></x-express-delivery-section>
            @endif

            <x-product-table.details
            :isopen="false"
            :brand="'Запрашиваемый бренд: '.$brand"
            :tovar="$tovars[$brand]"
            ></x-product-table.details>



            @if (!empty($crosses))
            <x-product-table.details-crosses
            :isopen="true"
            heder="Аналоги (Кроссы)"
            :didgest="$crosses['didgest']"
            >
                <table class="tovar_table">
                    <thead>
                        <tr>
                            <th>Бренд</th>
                            <th>Артикул</th>

                            <th>Цена от</th>
                            <th>Поиск</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($crosses['tovars'] as $item)
                            <tr>
                                <td>
                                    <div class="m_title">Бренд</div>
                                    <div class="content">
                                        {{ $item['producer'] }}
                                    </div>
                                </td>
                                <td>
                                    <div class="m_title">Артикул</div>
                                    <div class="content">
                                        {{ $item['code'] }}
                                    </div>
                                </td>

                                <td>
                                    <div class="m_title">Цена от</div>
                                    <div class="content">
                                        {{ $item['price'] }}
                                    </div>
                                </td>

                                <td>
                                    <div class="m_title">Поиск</div>
                                    <div class="content">
                                        <x-a-icon :href="route('search-tovar', [ 'brand' => $item['producer'], 'article' => $item['code'] ] )" icon="pi ap_setting">Смотреть цены</x-a-icon>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-product-table.details-crosses>

            @endif
        @else
            <h2>К сожалению товары не найдены</h2>
        @endif
    </div>
</section>

<x-consultation-form.form></x-consultation-form.form>

@endsection
