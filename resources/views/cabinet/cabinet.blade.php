@extends('layouts.all')

@php
    $title = "Магазин автозапчастей для иномарок";
    $description = "Магазин автозапчастей для иномарок";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <section class="last_serch_section main_page_section">
        <div class="container">
            <x-cabinet.selector></x-cabinet.selector>

            <h1 class="mt_0">История заказов</h1>

            <div class="client_orders">
                @foreach ($orders as $item)
                    <details class="order_details">
                        <summary>Заказ от {{ date("d.m.Y H:i") }} - <strong>{{ count($item->orderCart) }} товара</strong> </summary>
                        <div class="response">
                            <table class="tovar_table">
                                <thead>
                                    <tr>
                                        <th>Наименование</th>
                                        <th>Артикул</th>
                                        <th>Производитель</th>
                                        <th>Склад</th>
                                        <th>Количество</th>
                                        <th>Цена</th>
                                        <th>Управление</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($item->orderCart as $subitem)
                                        <tr>
                                            <td>
                                                <div class="m_title">Наименование</div><span class="content">{{ $subitem->caption }}</span>
                                            </td>
                                            <td>
                                                <div class="m_title">Артикул</div><span class="content">{{ $subitem->code }}</span>
                                            </td>
                                            <td>
                                                <div class="m_title">Производитель</div><span class="content">{{ $subitem->producer }}</span>
                                            </td>
                                            <td>
                                                <div class="m_title">Склад</div><span class="content">{{ $subitem->stock }}</span>
                                            </td>
                                            <td>
                                                <div class="m_title">Количество</div><span class="content">{{ $subitem->quentity }}</span>
                                            </td>
                                            <td>
                                                <div class="m_title">Цена</div><span class="content">{{ $subitem->price }}</span>
                                            </td>
                                            <td>
                                                <div class="m_title">Управление</div>
                                                <span class="content">
                                                    <x-a-icon :href="route('search-tovar', [ 'brand' => $subitem->producer, 'article' => $subitem->code  ] )" icon="pi ap_setting">Найти предложения</x-a-icon>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </details>
                @endforeach
            </div>

        </div>
    </section>

@endsection

