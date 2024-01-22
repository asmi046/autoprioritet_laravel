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
            <h1 class="mt_0">Личный кабинет</h1>
            <x-a-icon href="{{ route('logout') }}" icon="pi ap_arrow_curve">Выход</x-a-icon>
        </div>
    </section>

@endsection

