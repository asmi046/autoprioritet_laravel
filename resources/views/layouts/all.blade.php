<!DOCTYPE html>
<html class="h-full bg-bgcolor" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">

        <meta property="og:locale" content="ru_RU" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="@yield('title')" />
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:url" content="{{url()->current()}}" />
        <meta property="og:site_name" content="Магазин индийских товаров - Mini India" />
        <meta property="og:image" content="{{asset('img/og_img.jpg')}}" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta name="twitter:card" content="summary_large_image" />


        <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon256.png')}}" sizes="256x256">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon128.png')}}" sizes="128x128">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon64.png')}}" sizes="64x64">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon32.png')}}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon16.png')}}" sizes="16x16">
        <link rel="icon" type="image/svg" href="{{asset('/img/favicons/fav.svg')}}" sizes="any">


        <meta name="_token" content="{{ csrf_token() }}">

        @vite([
                'public/fonts/icons/style.css',
                'resources/css/app.css',
                'resources/js/app.js'
        ])

</head>

@php
    $search_main = isset($search)?$search:""
@endphp

<body class="site_body font-sans font-normal" id="global_app">

    <section class="w-full bg-sblack text-white px-1">
        <div class="w-11/12 max-w-7xl mx-auto flex justify-between">

            <x-a-in-head icon="ap_map_pin hidden mr-auto md:block" hr="tel:+74712310799" text="г. Курск ул. Суворовская д. 15"></x-a-in-head>
            <x-a-in-head icon="ap_phone hidden md:block" hr="tel:+74712310799" text="+7 (4712) 310-799"></x-a-in-head>

            <div class="ml-auto">
                @auth('web')
                    <x-a-in-head icon="ap_checklist" hr="{{route('kabinet')}}" text="Кабинет"></x-a-in-head>
                    <x-a-in-head icon="ap_exit" hr="{{route('logout')}}" text="Выйти"></x-a-in-head>
                @endauth

                @guest
                    <x-a-in-head icon="ap_check" hr="{{route('register')}}" text="Регистрация"></x-a-in-head>
                    <x-a-in-head icon="ap_cabinet" hr="{{route('login')}}" text="Вход"></x-a-in-head>
                @endguest


            </div>
        </div>
    </section>

    <section class="w-full">
        <div class="w-11/12 max-w-7xl mx-auto flex flex-wrap h-auto justify-between my-1">
            <div class="flex w-full justify-between h-16 lg:w-9/12">
                <a class="w-1/5 h-full flex " href="#">
                    <img class="h-full lg:hidden" src="{{asset('img/logo_mini.svg')}}" alt="AutopRioritet.ru">
                    <img class="hidden lg:block my-auto mr-auto" src="{{asset('img/logo.svg')}}" alt="AutopRioritet.ru">
                </a>

                <div class="flex-1 flex lg:mx-3">
                    <form class="border-sgray border rounded-md overflow-hidden bg-slgray flex px-3 my-auto w-full" action="{{route('search')}}">
                        <input class="bg-transparent my-2 flex-1 outline-none" type="text" name="search" value="{{isset($search)?$search:""}}" placeholder="Введите артикул, например STHD29016L1">
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

    @yield('content')

    <section class="bg-sblack w-full">
        <div class="w-11/12 max-w-7xl mx-auto flex flex-col justify-center py-3 lg:flex-row lg:justify-between">
            <a class="mx-auto lg:mr-auto lg:ml-0" href="#">
                <img src="{{asset('img/logo_white.svg')}}" alt="Автоприоритет">
            </a>

            <a class="my-auto text-white hover:underline mx-auto lg:ml-auto lg:mr-0" href="#">Политика конфиденциальности</a>
        </div>
    </section>
</body>
</html>
