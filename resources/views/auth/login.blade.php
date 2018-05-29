@extends('layouts.app')

@section('content')
    <div class="section"></div>
    <main>
        <center>

            <h5 class="teal-text">Para entrar, por favor, digite seu <b>E-mail</b> e <b>Senha</b></h5>
            <div class="section"></div>

            <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                    <form class="col s12" method="POST" action="{{route('login')}}">
                        @csrf
                        <div class='row'>
                            <div class='col s12'>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input id="email" name="email" type="email" class="validate {{ $errors->has('email') ? 'invalid' : '' }}" value="{{ old('email') }}" required autofocus>
                                <label for="email">{{__('E-mail')}}</label>
                            @if ($errors->has('email'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('email')}}</strong></span>
                                @endif
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password' id='password' />
                                <label for='password'>{{__('Senha')}}</label>
                            </div>
                            <label style='float: right;'>
                                <a class='pink-text' href='#!'><b>Esqueceu a Senha?</b></a>
                            </label>
                        </div>

                        <br />
                        <center>
                            <div class='row'>
                                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect teal'>{{__('Entrar')}}</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
            <a href="{{ route('register') }}">{{ __('Registrar') }}</a
        </center>

        <div class="section"></div>
        <div class="section"></div>
    </main>
@endsection
