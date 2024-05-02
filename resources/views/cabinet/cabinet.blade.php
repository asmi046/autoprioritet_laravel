@extends('layouts.all')

@php
    $title = "Магазин автозапчастей для иномарок";
    $description = "Магазин автозапчастей для иномарок";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <section class="last_serch_section main_page_section">
        <div class="container">
            <x-cabinet.selector></x-cabinet.selector>

            <h1 class="mt_0">История заказов</h1>




        </div>
    </section>

@endsection

