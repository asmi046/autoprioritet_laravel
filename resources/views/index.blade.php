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
            <h2 class="mt_0">Недавно искали</h2>
            <div class="last_search_line">
                <a href="{{route("search", ['search'=> "24012802481"])}}">24012802481</a>
                <a href="{{route("search", ['search'=> "DSF066G"])}}">DSF066G</a>
                <a href="{{route("search", ['search'=> "OP570"])}}">OP570</a>
                <a href="{{route("search", ['search'=> "R155113"])}}">R155113</a>
                <a href="{{route("search", ['search'=> "0470125"])}}">0470125</a>
                <a href="{{route("search", ['search'=> "OE6746"])}}">OE6746</a>
                <a href="{{route("search", ['search'=> "K035671XS"])}}">K035671XS</a>
                <a href="{{route("search", ['search'=> "96554421"])}}">96554421</a>
                <a href="{{route("search", ['search'=> "25927045"])}}">25927045</a>
                <a href="{{route("search", ['search'=> "95102324"])}}">95102324</a>
                <a href="{{route("search", ['search'=> "25927044"])}}">25927044</a>
                <a href="{{route("search", ['search'=> "8973643860VDS"])}}">8973643860VDS</a>
                <a href="{{route("search", ['search'=> "4780039410"])}}">4780039410</a>
                <a href="{{route("search", ['search'=> "8973643860"])}}">8973643860</a>
                <a href="{{route("search", ['search'=> "25927045"])}}">25927045</a>
            </div>
        </div>
    </section>

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

