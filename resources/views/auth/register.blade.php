@extends('layouts.all')

@php
    $title = "Регистрация";
    $description = "Страница регистрации";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<section class="register_section main_page_section">
    <div class="container is-fullhd">
        <h1>Регистрация в магазине</h1>
        <p class="mb_20">Зарегистрируйтесь в нашем магазине и получите персональную скидку</p>
        <form action="{{route('register_do')}}" method="post" class="box start-form">
            @csrf

            @foreach ($errors->all() as $error)
                <div class="form-status form-status--error">
                    {{ $error }}
                </div>
            @endforeach

            <div class="field">
              <label class="label">Имя<span class="required">*</span></label>
              <div class="control">
                <input name="name" class="input" type="name" placeholder="Иван">
              </div>

              @error('name')
                <p class="error">{{$message}}</p>
              @enderror
            </div>

            <div class="field">
              <label class="label">E-mail<span class="required">*</span></label>
              <div class="control">
                <input name="email" class="input" type="email" placeholder="e.g. alex@example.com">
              </div>

              @error('email')
                <p class="error">{{$message}}</p>
              @enderror
            </div>

            <div class="field">
              <label class="label">Телефон<span class="required">*</span></label>
              <div class="control">
                <input name="phone" class="input" type="tel" placeholder="+7 (___) ___-__-__">
              </div>

              @error('phone')
                <p class="error">{{$message}}</p>
              @enderror
            </div>

            <div class="field">
              <label class="label">Пароль<span class="required">*</span></label>
              <div class="control">
                <input name="password" required class="input" type="password" placeholder="********">
              </div>

              @error('password')
                  <p class="error">{{$message}}</p>
              @enderror
            </div>

            <div class="field">
              <label class="label">Подтвердите пароль<span class="required">*</span></label>
              <div class="control">
                <input name="password_confirmation" required class="input" type="password" placeholder="********">
              </div>

              @error('password_confirmation')
                  <p class="error">{{$message}}</p>
              @enderror
            </div>

            <footer>
                <button type="submit" class="button ">Регистрация</button>
                <a class="button button-white" href="{{ route('login') }}">Уже есть аккаунт?</a>
            </footer>

        </form>

    </div>
</section>

@endsection
