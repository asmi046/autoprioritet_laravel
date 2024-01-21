@extends('layouts.all')


@section('title', "Поиск запчасти по артикулу " . $search . "  - AutopRioritet.ru")
@section('description', "Поиск запчасти по артикулу " . $search . ". Доставка запчастей в Курске от 1-го дня по выгодным ценам - AutopRioritet.ru")

@section('main')

<section class="main_page_section">
    <div class="container">
        @if (!empty($brand))
            <h1>Поиск запчасти по артикулу: {{ $search }}</h1>

            <table class="brand_table">
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
                    <tr>
                        <td>{{$item['article']}}</td>
                        <td>{{$item['producer']}}</td>
                        <td>{{$item['ident']}}</td>
                        <td>
                            <x-a-icon :href="route('search-tovar', [ 'brand' => $item['producer'], 'article' => $item['article'] ] )" icon="pi ap_setting">Цены и аналоги</x-a-icon>
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
