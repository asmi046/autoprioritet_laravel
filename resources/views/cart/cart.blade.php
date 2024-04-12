@extends('layouts.all')

@php
    $title = "Корзина";
    $description = "Выбранные Вами товары";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs :title="$title"></x-breadcrumbs>
        </div>
    </section>

    <div class="container">
        <h1>Корзина</h1>
    </div>

    <section>
        <div id="cart_app" class="container">
            <cart></cart>
        </div>
    </section>
@endsection
