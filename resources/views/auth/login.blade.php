@extends('layouts.all')


@section('title', "Авторизация в on-line сервисе - AutopRioritet.ru")
@section('description', "Авторизация в on-line сервисе - AutopRioritet.ru")

@section('content')
    <x-page-section fullh="true">
        <form class="w-80 mx-auto shadow-md p-5 rounded-md" action="">
            <h1 class="text-xl font-bold mb-4">Войти в кабинет</h1>
            <x-text-component type="text" placeholder="e-mail" value=""></x-text-component>
            <x-text-component type="password" placeholder="Пароль" value=""></x-text-component>
            <x-button-component>Войти</x-button-component>
        </form>
    </x-page-section>
@endsection
