@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l4">
                <div class="card blue-grey darken-1 hoverable">
                    <div class="card-content white-text">
                        <span class="card-title tooltipped" data-position="top"
                              data-tooltip="{{__('Módulo de Membros')}}"><b>Membros</b><i
                                    class="material-icons left large">group</i></span>
                    </div>
                    <div class="card-action">
                        <a href="{{route('Membros')}}"><i class="material-icons left tooltipped" data-position="top"
                                                          data-tooltip="{{__('Entrar')}}">launch</i></a>
                        <a href="#"><i class="right tooltipped" data-position="top"
                                       data-tooltip="{{__('Total')}}">{{$contadorMembros}}</i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l4">
                <div class="card blue-grey darken-1 hoverable">
                    <div class="card-content white-text">
                        <span class="card-title tooltipped" data-position="top"
                              data-tooltip="{{__('Módulo de Igrejas')}}"><b>Igrejas</b><i
                                    class="material-icons left large">home</i></span>
                    </div>
                    <div class="card-action">
                        <a href="#"><i class="material-icons left tooltipped" data-position="top"
                                       data-tooltip="{{__('Entrar')}}">launch</i></a>
                        <a href="#"><i class="right tooltipped" data-position="top" data-tooltip="{{__('Total')}}">7</i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l4">
                <div class="card blue-grey darken-1 hoverable">
                    <div class="card-content white-text">
                        <span class="card-title tooltipped" data-position="top" data-tooltip="{{__('Módulo de Tesouraria')}}"><b>Tesouraria</b><i
                                    class="material-icons left large">monetization_on</i></span>
                    </div>
                    <div class="card-action">
                        <a href="#"><i class="material-icons left tooltipped" data-position="top"
                                       data-tooltip="{{__('Entrar')}}">launch</i></a>
                        <a href="#"><i class="right tooltipped" data-position="top" data-tooltip="{{__('Saldo')}}">R$
                                28.347,29</i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l4">
                <div class="card blue-grey darken-1 hoverable">
                    <div class="card-content white-text">
                        <span class="card-title tooltipped" data-position="top" data-tooltip="{{__('Módulo de Cartões')}}"><b>Cartão</b><i
                                    class="material-icons left large">contact_mail</i></span>
                    </div>
                    <div class="card-action">
                        <a href="#"><i class="material-icons left tooltipped" data-position="top"
                                       data-tooltip="{{__('Entrar')}}">launch</i></a>
                        <a href="#"><i class="right tooltipped" data-position="top"
                                       data-tooltip="{{__('Cartões Impressos')}}">147 de 347</i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l4">
                <div class="card blue-grey darken-1 hoverable">
                    <div class="card-content white-text">
                        <span class="card-title tooltipped" data-position="top" data-tooltip="{{__('Módulo de Tabelas Administrativas')}}"><b>Tabelas</b><i class="material-icons left large">view_list</i></span>
                    </div>
                    <div class="card-action">
                        <a href="#"><i class="material-icons left tooltipped" data-position="top"
                                       data-tooltip="{{__('Entrar')}}">launch</i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l4">
                <div class="card blue-grey darken-1 hoverable">
                    <div class="card-content white-text">
                        <span class="card-title tooltipped" data-position="top" data-tooltip="{{__('Módulo de Relatórios')}}"><b>Relatórios</b><i
                                    class="material-icons left large">description</i></span>
                    </div>
                    <div class="card-action">
                        <a href="#"><i class="material-icons left tooltipped" data-position="top"
                                       data-tooltip="{{__('Entrar')}}">launch</i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l4">
                <div class="card blue-grey darken-1 hoverable">
                    <div class="card-content white-text">
                        <span class="card-title tooltipped" data-position="top" data-tooltip="{{__('Módulo de Declarações')}}"><b>Declarações</b><i class="material-icons left large">web</i></span>
                    </div>
                    <div class="card-action">
                        <a href="#"><i class="material-icons left tooltipped" data-position="top"
                                       data-tooltip="{{__('Entrar')}}">launch</i></a>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l4">
                <div class="card blue-grey darken-1 hoverable">
                    <div class="card-content white-text">
                        <span class="card-title tooltipped" data-position="top" data-tooltip="{{__('Módulo de Usuários')}}"><b>Usuários</b><i class="material-icons left large">person_outline</i></span>
                    </div>
                    <div class="card-action">
                        <a href="#"><i class="material-icons left tooltipped" data-position="top"
                                       data-tooltip="{{__('Entrar')}}">launch</i></a>
                        <a href="#"><i class="right tooltipped" data-position="top"
                                       data-tooltip="{{__('Usuários Ativados')}}">2 de 5</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
