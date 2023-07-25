@extends('layouts.all')


@section('title', "Поиск запчасти по артикулу " . $search . "  - AutopRioritet.ru")
@section('description', "Поиск запчасти по артикулу " . $search . ". Доставка запчастей в Курске от 1-го дня по выгодным ценам - AutopRioritet.ru")

@section('content')


<x-page-section fullh="true">
        @if (!empty($brand))
            <h1>Поиск запчасти по артикулу {{ $search }}</h1>
                <div class="rounded-md  overflow-hidden">
                    <div class="w-full hidden lg:grid lg:grid-cols-5">
                        <div class="bg-syellow px-3 py-2">Артикул</div>
                        <div class="bg-syellow px-3 py-2">Производитель</div>
                        <div class="bg-syellow px-3 py-2 col-span-3">Коментарий</div>
                    </div>

                    @foreach ($brand['data'] as $item)
                        <a href="" class="w-full grid grid-cols-1 lg:grid-cols-5 mb-3 lg:mb-0 overflow-hidden bg-slgray border-b border-sgray hover:underline">
                            <div class="text-left flex">
                                <span class="px-3 py-2 bg-syellow flex-1 lg:hidden">Бренд:</span>
                                <span class="px-3 py-2 flex-1">{{$item['article']}}</span>
                            </div>
                            <div class="text-left flex">
                                <span class="px-3 py-2 bg-syellow flex-1 lg:hidden">Производитель:</span>
                                <span class="px-3 py-2 flex-1">{{$item['producer']}}</span>

                            </div>
                            <div class="text-left flex lg:col-span-3">
                                <span class="px-3 py-2 bg-syellow flex-1 lg:hidden">Коментарий:</span>
                                <span class="px-3 py-2 flex-1">{{$item['ident']}}</span>

                            </div>
                        </a>
                    @endforeach
                </div>

        @else
            <h2 class="text-xl font-bold">Введите артикул для поиска</h2>
        @endif
</x-page-section>

@endsection
