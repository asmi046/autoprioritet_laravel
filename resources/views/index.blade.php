@extends('layouts.all')


@section('title', "Автозапчасти в наличии и под заказ - AutopRioritet.ru")
@section('description', "Автозапчасти в наличии и под заказ - AutopRioritet.ru")

@section('content')

<section class="w-full bg-sblack text-white px-1">
    <div class="w-11/12 max-w-7xl mx-auto flex justify-between">
        <span class="hidden mr-auto md:block">г. Курск ул. Суворовская д. 15 </span>
        <a class="hidden md:block" href="tel:+74712310799">+7 (4712) 310-799</a>

        <div class="ml-auto">
            <a href="">Регистрация</a>
            <a href="">Вход</a>
        </div>
    </div>
</section>

<section class="w-full">
    <div class="w-11/12 max-w-7xl mx-auto flex max-h-16 justify-between py-1">
        <a href="">
            <img class="h-full" src="{{asset('img/logo_mini.svg')}}" alt="AutopRioritet.ru">
            <img class="hidden " src="{{asset('img/logo.svg')}}" alt="AutopRioritet.ru">
        </a>
    </div>
</section>

@endsection
