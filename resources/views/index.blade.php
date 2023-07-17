@extends('layouts.all')


@section('title', "Автозапчасти в наличии и под заказ - AutopRioritet.ru")
@section('description', "Автозапчасти в наличии и под заказ - AutopRioritet.ru")

@section('content')


<section  class="w-full mt-6">
    <div class="w-11/12 max-w-7xl mx-auto">
        @if (!empty($brand))
            <div class="w-full ">
                <table class="w-full">
                    <thead class="bg-syellow">
                        <tr>
                            <th class="px-3 py-2 text-left">Артикул</th>
                            <th class="px-5 py-2 text-left">Производитель</th>
                            <th class="px-3 py-2 text-left">Коментарий</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($brand['data'] as $item)
                            <tr>
                                <td class="px-3 py-2 text-left bg-slgray border-b border-sgray">{{$item['article']}}</td>
                                <td class="px-3 py-2 text-left  bg-slgray border-b border-sgray">{{$item['producer']}}</td>
                                <td class="px-3 py-2 text-left  bg-slgray border-b border-sgray">{{$item['ident']}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <h2 class="text-xl font-bold">Введите артикул для поиска</h2>
        @endif
    </div>


</section>

@endsection
