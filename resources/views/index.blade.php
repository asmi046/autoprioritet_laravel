@extends('layouts.all')


@section('title', "Автозапчасти в наличии и под заказ - AutopRioritet.ru")
@section('description', "Автозапчасти в наличии и под заказ - AutopRioritet.ru")

@section('content')

<section class="w-full bg-sblack text-white px-1">
    <div class="w-11/12 max-w-7xl mx-auto flex justify-between">

        <x-a-in-head icon="ap_map_pin hidden mr-auto md:block" hr="tel:+74712310799" text="г. Курск ул. Суворовская д. 15"></x-a-in-head>
        <x-a-in-head icon="ap_phone hidden md:block" hr="tel:+74712310799" text="+7 (4712) 310-799"></x-a-in-head>

        <div class="ml-auto">
            <x-a-in-head icon="ap_check" hr="" text="Регистрация"></x-a-in-head>
            <x-a-in-head icon="ap_cabinet" hr="" text="Вход"></x-a-in-head>
        </div>
    </div>
</section>

<section class="w-full">
    <div class="w-11/12 max-w-7xl mx-auto flex flex-wrap max-h-16 h-16 justify-between my-1">
        <div class="flex w-full justify-between h-16 lg:w-9/12">
            <a class="w-1/5 h-full flex " href="#">
                <img class="h-full lg:hidden" src="{{asset('img/logo_mini.svg')}}" alt="AutopRioritet.ru">
                <img class="hidden lg:block my-auto mr-auto" src="{{asset('img/logo.svg')}}" alt="AutopRioritet.ru">
            </a>

            <div class="flex-1 flex lg:mx-3">
                <form class="border-sgray border rounded-md overflow-hidden bg-slgray flex px-3 my-auto w-full" action="">
                    <input class="bg-transparent my-2 flex-1" type="text" name="search" value="{{$search}}" placeholder="Введите артикул, например STHD29016L1">
                    <button class="pi ap_lins before:text-sgray before:text-2xl w-1/12 relative"></button>
                </form>
            </div>
        </div>

        <div class="w-full flex mt-3 lg:w-3/12 lg:my-auto">
            <a class="flex-1 bg-syellow h-11 rounded-md text-center mr-5 leading-10" href="">Корзина | <span>0</span></a>
            <a class="flex-1 bg-slgray h-11 border-sgray border rounded-md text-center leading-10" href="">Мои заказы</a>
        </div>
    </div>
</section>

<section class="w-full bg-syellow">
    <div class="w-11/12 max-w-7xl mx-auto flex justify-between">
        <ul class="flex">
            <li>
                <a class="mr-2" href="#">Каталог</a>
            </li>
            <li>
                <a class="mr-2" href="#">Шины</a>
            </li>
            <li>
                <a class="mr-2" href="#">Диски</a>
            </li>
        </ul>
    </div>

</section>

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
