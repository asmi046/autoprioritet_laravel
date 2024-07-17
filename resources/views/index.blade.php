@extends('layouts.all')

@php
    $title = "Магазин автозапчастей для иномарок";
    $description = "Магазин автозапчастей для иномарок";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <x-last-search></x-last-search>

    <section class="materialse_section">
        <div class="container">
            <h2>Полезные материалы</h2>
            <div class="materials_wrapper">
                @foreach ($blog_in_main as $item)
                    <x-materials.card :item="$item"></x-materials.card>
                @endforeach
            </div>
            <a class="button" href="{{ route('blog') }}">Смотреть все статьи</a>
        </div>
    </section>

@endsection

