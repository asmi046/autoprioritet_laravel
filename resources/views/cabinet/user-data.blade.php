@extends('layouts.all')

@php
    $title = "Мои данные";
    $description = "Мои данные (как покупателя)";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <section class="last_serch_section main_page_section">
        <div class="container">

            <x-cabinet.selector></x-cabinet.selector>

            <h1 class="mt_0">{{ $title }}</h1>

            <form action="{{ route('save_user_data') }}" method="post" class="box start-form">
                @csrf

                @if (session('success_user_data'))
                    <div class="form-status form-status--success">
                        {{ session('success_user_data') }}
                    </div>
                @endif

                @foreach ($errors->all() as $error)
                    <div class="form-status form-status--error">
                        {{ $error }}
                    </div>
                @endforeach

                <div class="field">
                    <label class="label">Имя<span class="required">*</span></label>
                    <div class="control">
                      <input name="name" class="input" type="text" placeholder="Имя пользователя"  value="{{ $user->name ?? '' }}">
                    </div>

                    @error('тфьу')
                      <p class="error">{{$message}}</p>
                    @enderror
                </div>

                <div class="field">
                  <label class="label">E-mail<span class="required">*</span></label>
                  <div class="control">
                    <input name="email" class="input" type="email" readonly placeholder="e.g. alex@example.com"  value="{{ $user->email ?? '' }}">
                  </div>

                  @error('email')
                    <p class="error">{{$message}}</p>
                  @enderror
                </div>

                <div class="field">
                  <label class="label">Телефон<span class="required">*</span></label>
                  <div class="control">
                    <input name="phone" class="input" type="tel" placeholder="+7 (___) ___-__-__" value="{{ $user->phone ?? '' }}">
                  </div>

                  @error('phone')
                    <p class="error">{{$message}}</p>
                  @enderror
                </div>

                <footer>
                    <button type="submit" class="button" title="Сохранить данные" name="action" value="create_draft">Сохранить данные</button>
                </footer>

            </form>

            <h2>Изменить пароль</h2>
            <form action="{{ route('chenge_user_password') }}" method="post" class="box start-form">
                @csrf

                @if (session('success_user_pass'))
                    <div class="form-status form-status--success">
                        {{ session('success_user_pass') }}
                    </div>
                @endif

                @foreach ($errors->all() as $error)
                    <div class="form-status form-status--error">
                        {{ $error }}
                    </div>
                @endforeach

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
                    <button type="submit" class="button" title="Сменить пароль" name="action" value="create_draft">Сменить пароль</button>
                </footer>
            </form>
        </div>
    </section>

@endsection

