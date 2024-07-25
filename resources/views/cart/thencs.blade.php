@extends('layouts.all')

@php
    $title = "Благодарим за покупку";
    $description = "Благодарим за покупку, ждите обратной связи от наших специалистов";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs title="Ваш заказ оформлен, благодарим за покупку"></x-breadcrumbs>
        </div>
    </section>

    <section class="materialse_section empty_section">
        <div class="container">
            <h1>Благодарим Вас за покупку</h1>
            <p>Мы свяжимся с Вами в самое ближайшее время</p>
            <br>
            <a class="button" href="{{ route('home') }}">На главную страницу</a>
        </div>
    </section>
@endsection
