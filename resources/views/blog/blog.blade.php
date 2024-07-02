@extends('layouts.all')


@section('title', "Статьи и полезные материалы - АвтоПриоритет.рф")
@section('description', " Статьи и полезные материалы по тематике подбора запчастей, надежности брендов от магазина АвтоПриоритет.рф")

@section('main')
<section class="breadcrumbs_section">
    <div class="container">
        <x-breadcrumbs title="Статьи и полезные материалы"></x-breadcrumbs>
    </div>
</section>


<section class="inner_page_section">
    <div class="container">
        <h1>Статьи и полезные материалы</h1>

        <div class="materials_wrapper">
            @foreach ($all_blog as $item)
                <x-materials.card :item="$item"></x-materials.card>
            @endforeach
        </div>
    </div>
</section>

@endsection
