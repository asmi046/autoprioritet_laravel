<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{route('home')}}" />
    <meta property="og:site_name" content="Мир туризма 46" />
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
        'resources/js/app.js',
        'resources/js/cart.js',
        'public/scss/main.scss'
    ])

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(97534803, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/97534803" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->


</head>
<body>
    @include('svg-icons')
    @include("cart.cart-svg")
    <main id="main">
        <section class="top_info_section">
            <div class="container">
                <div class="adres">
                    <x-a-icon href="#" icon="pi ap_map_pin">г. Курск ул. Суворовская д. 15</x-a-icon>
                </div>

                <div class="phone">
                    <x-a-icon href="tel:+74712310799" icon="pi ap_phone">+7 (4712) 310-799</x-a-icon>
                </div>

                <div class="cabinet_controll">

                    @auth('web')
                        <x-a-icon href="{{ route('cabinet') }}" icon="pi ap_cabinet">Кабинет</x-a-icon>
                        <x-a-icon href="{{ route('logout') }}" icon="pi ap_arrow_curve">Выйти</x-a-icon>
                    @endauth

                    @guest
                        <x-a-icon href="{{ route('login') }}" icon="pi ap_cabinet">Вход</x-a-icon>
                        <x-a-icon href="{{ route('register') }}" icon="pi ap_note">Регистрация</x-a-icon>
                    @endguest

                </div>
            </div>
        </section>

        <section class="search_section">
            <div class="container">
                <div class="search_line">
                    <a href="{{route('home')}}" class="logo">
                        <img class="desctop_logo" src="{{asset('img/logo_white.svg')}}" alt="">
                        <img class="mobile_logo" src="{{asset('img/logo_mini.svg')}}" alt="">
                    </a>

                    <form action="{{ route('search') }}" method="GET" class="main_search_form">
                        <div class="search_input">
                            <input name="search" type="text" value="{{ isset($_REQUEST['search'])?$_REQUEST['search']:"" }}" placeholder="Введите номер детали например: STHD29016L1">
                            <button type="submit"><i class="pi ap_lins"></i></button>
                        </div>

                    </form>

                    <div class="bascet_control">
                        <a id="counter_app" class="buscrt_in_head" href="{{ route('bascet') }}">
                            <span>Корзина</span> | <cart-counter></cart-counter>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu_section">
            <div class="container">
                <nav>
                    <a href="#">Информация по подбору</a>
                    <a href="{{ route('contacts') }}">Контакты</a>
                </nav>
            </div>
        </section>


        @yield('main')

        <footer>
            <div class="container">
                <a href="{{route('home')}}" class="logo">
                    <img src="{{asset('img/logo_white.svg')}}" alt="">
                </a>

                <div class="policy">
                    <x-a-icon href="#" icon="pi ap_checklist">Политика в области защиты персональных данных</x-a-icon>
                </div>

                <div class="copuright">
                    ©АвтоПриоритет
                </div>
            </div>
        </footer>
    </main>
</body>
</html>
