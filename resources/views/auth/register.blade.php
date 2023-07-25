@extends('layouts.all')


@section('title', "Регистация в on-line сервисе - AutopRioritet.ru")
@section('description', "Регистация в on-line сервисе - AutopRioritet.ru")

@section('content')
    <x-page-section fullh="true">
        <form class="w-80 mx-auto shadow-md p-5 rounded-md" method="post" action="{{route('register_do')}}">
            <h1 class="text-xl font-bold mb-4">Регистрация в сервисе</h1>
            @csrf
            <x-text-component type="text" name="name" placeholder="Имя*" value="{{old('name')}}"></x-text-component>
            <x-text-component type="tel" name="phone" placeholder="Телефон*" value=""></x-text-component>
            <x-text-component type="email" name="email" placeholder="e-mail" value=""></x-text-component>
            <x-text-component type="password" name="password" placeholder="Пароль*" value=""></x-text-component>
            <x-text-component type="password" name="password_confirmation" placeholder="Пароль*" value=""></x-text-component>
            <x-button-component>Зарегистрироваться</x-button-component>
        </form>
    </x-page-section>
@endsection
