@extends('layouts.all')

@php
    $title = "Магазин автозапчастей для иномарок";
    $description = "Магазин автозапчастей для иномарок";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <section class="last_serch_section">
        <div class="container">
            <h1 class="mt_0">Контакты магазина</h1>
            <x-contacts.page-contatcts></x-contacts.page-contatcts>
        </div>
    </section>
@endsection

