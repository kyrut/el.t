@extends('layouts.app')
@section('content')
    <div class="uk-container">
        <div class="uk-margin-auto uk-margin-large-top uk-padding uk-card uk-card-default" style="max-width: 600px">
            <form method="POST" action="{{ route('login') }}" class="uk-form-horizontal uk-margin-large uk-margin-remove-bottom">
                @csrf
                <fieldset class="uk-fieldset">

                    <legend class="uk-legend uk-text-center">Авторизация</legend>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Email</label>
                        <div class="uk-form-controls">
                            <input id="email" type="email" class="uk-input @error('email') uk-form-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="uk-text-danger" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-horizontal-text">Пароль</label>
                        <div class="uk-form-controls">
                            <input id="password" type="password" class="uk-input @error('password') uk-form-danger @enderror" name="password" value="{{ old('password') }}" required autocomplete="current-password">
                            @error('password')
                            <span class="uk-text-danger" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid uk-flex-between">
                        <label><input class="uk-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить</label>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Востановить пароль
                            </a>
                        @endif
                    </div>

                    <div class="uk-margin">
                        <button type="submit" class="uk-button uk-button-default">
                            Войти
                        </button>
                    </div>

                </fieldset>
            </form>
            <div>
                <legend class="uk-legend uk-text-center uk-margin-bottom"><small>Войти с помощью</small></legend>
                <div class="uk-child-width-1-3 uk-flex">
                    <div class="">
                        <a href="{{ route('fblogin') }}" class="uk-button  uk-button-small uk-button-primary">
                            <span uk-icon="facebook"></span> facebook
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('glogin') }}" class="uk-button  uk-button-small uk-button-primary">
                            <span uk-icon="google"></span> google
                        </a>
                    </div>
                    <div class="">
                        <a href="{{ route('gitlogin') }}" class="uk-button  uk-button-small uk-button-primary">
                            <span uk-icon="github"></span> github
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
