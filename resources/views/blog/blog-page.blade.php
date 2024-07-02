@extends('layouts.all')

@php
    $title = !empty($page->seo_title)?$page->seo_title:$page->title;
    $description = !empty($page->seo_description)?$page->seo_description:$page->title;
@endphp

@section('title', "Статьи и полезные материалы - АвтоПриоритет.рф")
@section('description', " Статьи и полезные материалы по тематике подбора запчастей, надежности брендов от магазина АвтоПриоритет.рф")

@section('main')
<section class="breadcrumbs_section">
    <div class="container">
        <x-breadcrumbs :bpage="$page->title"></x-breadcrumbs>
    </div>
</section>


<section class="inner_page_section">
    <div class="container">
        <div class="blog_header" style="background-image: url({{ Storage::url('blog/'.$page->img) }})">
            <div class="shadow"></div>
            <h1>{{ $page->title }}</h1>
        </div>

        <div class="text_styles ">
            {!! $page->description !!}
        </div>

    </div>
</section>

@endsection
