@extends('layouts.all')


@section('title', "Поиск запчасти по артикулу " . $search . "  - AutopRioritet.ru")
@section('description', "Поиск запчасти по артикулу " . $search . ". Доставка запчастей в Курске от 1-го дня по выгодным ценам - AutopRioritet.ru")

@section('main')
<section class="breadcrumbs_section">
    <div class="container">
        <x-breadcrumbs :title="'Поиск запчасти по артикулу: '.$search"></x-breadcrumbs>
    </div>
</section>


<section class="inner_page_section">
    <div class="container">
        @if (!empty($brand))
            <h1>Поиск запчасти по артикулу: {{ $search }}</h1>

            <table class="tovar_table">
                <thead>
                    <tr>
                        <th>Артикул</th>
                        <th>Производитель</th>
                        <th>Коментарий</th>
                        <th>Поиск</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($brand['data'] as $item)
                    @continue(empty($item['producer']))
                    <tr class="cliced_row">
                        <td><div class="m_title">Артикул</div><span class="content">{{$item['article']}}</span></td>
                        <td><div class="m_title">Производитель</div><span class="content">{{$item['producer']}}</span></td>
                        <td><div class="m_title">Коментарий</div><span class="content">{{$item['ident']}}</span></td>
                        <td>
                            <div class="m_title">Поиск</div>
                            <span class="content">
                                <x-a-icon :href="route('search-tovar', [ 'brand' => $item['producer'], 'article' => $item['article'] ] )" icon="pi ap_setting">Цены и аналоги</x-a-icon>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        @else
            <h2>Введите артикул для поиска</h2>
        @endif
    </div>
</section>

@endsection
