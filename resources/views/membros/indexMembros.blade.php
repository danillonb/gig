@extends('layouts.app')

@section('content')
    <!-- Botão voador -->
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large blue-grey darken-2 hoverable waves-effect waves-light">
            <i class="large material-icons">more</i>
        </a>
        <ul>
            <li><a href="#modalNovoMembro" class="btn-floating teal hoverable modal-trigger"><i class="material-icons">add</i></a>
            </li>
            <li><a href="#modalBusca" class="btn-floating teal hoverable modal-trigger"><i
                            class="material-icons">search</i></a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row section">
            <h4 class="center">Lista de Membros</h4>
            <div class="divider"></div>
            @foreach($listaMembros as $membro)
                <!--Calculo de Idade-->
                    @php
                        $date = new DateTime( $membro->dtaNascimento ); // data de nascimento
                        $idade = $date->diff( new DateTime() ); // data definida)
                    @endphp
                <div class="col s12 m12 l4">
                    <ul class="collapsible hoverable">
                        <li>
                            <div class="collapsible-header truncate">{{$membro->nome}}</div>
                            <div class="collapsible-body blue-grey darken-1">
                                <div class="row">
                                    <div class="card z-depth-2">
                                        <div class="card-image">
                                            @if($membro->fotoId != "0")
                                                <img class="circle responsive-img" src="{{asset('img/membros/'.$membro->fotoId)}}">
                                            @elseif($membro->fotoId == "0")
                                                <img class="circle responsive-img" src="{{asset('img/membros/0/0.png')}}">
                                            @endif
                                                @if($membro->ativo == true)
                                                    <a href="#modalAlterarMembro{{$membro->id}}" class="btn-floating halfway-fab waves-effect waves-light blue-grey modal-trigger">
                                                @elseif($membro->ativo == false)
                                                    <a href="#modalReativarMembro{{$membro->id}}" class="btn-floating halfway-fab waves-effect waves-light blue-grey modal-trigger">
                                                @endif
                                                <i class="material-icons tooltipped" data-position="right"
                                                   data-tooltip="{{__('Editar')}}">edit</i>
                                            </a>
                                            <a class="btn-floating halfway-fab waves-effect waves-light blue-grey left"
                                               onclick="M.toast({html: 'Função indisponível no momento', classes: 'rounded red darken-2'})">
                                                <i class="material-icons tooltipped" data-position="left"
                                                   data-tooltip="{{__('Gerar Cartão')}}">contact_mail</i>
                                            </a>
                                        </div>
                                        <div class="card-content">
                                            <p><b>Nome: </b>{{$membro->nome}}</p>
                                            <p><b>Pai: </b>{{$membro->pai}}</p>
                                            <p><b>Mãe: </b>{{$membro->mae}}</p>
                                            <p><b>Sexo: </b>{{$membro->sexo}}</p>
                                            <p><b>CPF: </b>{{$membro->cpf}}</p>
                                            <p><b>RG: </b>{{$membro->rg}}</p>
                                            @if($membro->email != null)
                                                <p class="truncate"><b>E-mail: </b>{{$membro->email}}</p>
                                            @endif
                                            <p><b>Nascimento: </b>{{date('d/m/Y', strtotime($membro->dtaNascimento))}}</p>
                                            <p><b>Idade: </b>{{$idade->y}} anos</p>
                                            <p><b>Endereço: </b>{{$membro->logradouro}}, {{$membro->numero}}, {{$membro->complemento}}</p>
                                            <p><b>Bairro: </b>{{$membro->bairro}}</p>
                                            <p><b>Cidade: </b>{{$membro->cidade}}</p>
                                            <p><b>CEP: </b>{{$membro->cep}}</p>
                                            <p><b>UF: </b>{{$membro->uf}}</p>
                                            @if($membro->tel1 != null)
                                                <p><b>Telefone: </b>{{$membro->tel1}}</p>
                                            @endif
                                            @if($membro->tel2 != null)
                                                <p><b>Tel. Contato: </b>{{$membro->tel2}}</p>
                                            @endif
                                            @if($membro->cel != null)
                                                <p><b>Celular: </b>{{$membro->cel}}</p>
                                            @endif
                                            <p><b>Expeditor: </b>{{$membro->orgaoExp}}</p>
                                            <p><b>Igreja: </b>{{$membro->igreja}}</p>
                                            @if($membro->dtaBatismoAguas != null)
                                                <p><b>Batismo A.: </b>{{date('d/m/Y', strtotime($membro->dtaBatismoAguas))}}</p>
                                            @endif
                                            @if($membro->dtaBatismoEs != null)
                                                <p><b>Batismo ES.: </b>{{date('d/m/Y', strtotime($membro->dtaBatismoEs))}}</p>
                                            @endif
                                            @if($membro->procedencia != null)
                                                <p><b>Procedência: </b>{{$membro->procedencia}}</p>
                                            @endif
                                            @if($membro->funcaoEclesiastica != null)
                                                <p><b>F. Eclesiástica: </b>{{$membro->funcaoEclesiastica}}</p>
                                            @endif
                                            @if($membro->funcaoMinisterial != null)
                                                <p><b>F. Ministerial: </b>{{$membro->funcaoMinisterial}}</p>
                                            @endif
                                            <p><b>Tipo Sanguíneo: </b>{{$membro->tipoSanguineo}}</p>
                                            <p><b>Fator RH: </b>{{$membro->fatorRh}}</p>
                                            <p><b>Naturalidade: </b>{{$membro->naturalidade}}</p>
                                            <p><b>Nacionalidade: </b>{{$membro->nacionalidade}}</p>
                                            <p><b>Estado Civil: </b>{{$membro->estadoCivil}}</p>
                                            <p><b>Etinia: </b>{{$membro->etinia}}</p>
                                            @if($membro->profissao != null)
                                                <p><b>Profissão: </b>{{$membro->profissao}}</p>
                                            @endif
                                            @if($membro->departamento != null)
                                                <p><b>Departamento: </b>{{$membro->departamento}}</p>
                                            @endif
                                            @if($membro->dtaDesligamento != null)
                                                <p><b>Desligamento: </b>{{date('d/m/Y', strtotime($membro->dtaDesligamento))}}</p>
                                            @endif
                                            @if($membro->motivoDesligamento != null)
                                                <p><b>Motivo: </b>{{$membro->motivoDesligamento}}</p>
                                            @endif
                                            @if($membro->destino != null)
                                                <p><b>Destino: </b>{{$membro->destino}}</p>
                                            @endif
                                            @if ($membro->ativo == true)
                                                <p><b>Status: </b>Ativo</p>
                                            @else
                                                <p><b>Status: </b>Inativo</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
        <!-- Modal Structure - Novo Membro -->
        <div id="modalNovoMembro" class="modal">
            <form action="{{route('cadastrarMembro')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <h4>Novo Membro<span class="modal-close right hide-on-med-and-down tooltipped" data-position="left"
                                         data-tooltip="{{__('Fechar')}}"><i class="material-icons">close</i></span></h4>
                    <div class="divider"></div>
                    <div class='row'>
                        <div class='input-field col s12 m12 l4'>
                            <input id="nome" name="nome" type="text"
                                   class="validate {{ $errors->has('nome') ? 'invalid' : '' }}"
                                   value="{{ old('nome') }}" required autofocus>
                            <label for="nome">{{__('Nome')}}</label>
                            @if ($errors->has('nome'))
                                <span class="helper-text red-text"><strong>{{$errors->first('nome')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l4'>
                            <input id="pai" name="pai" type="text"
                                   class="validate {{ $errors->has('pai') ? 'invalid' : '' }}" value="{{ old('pai') }}"
                                   required>
                            <label for="pai">{{__('Pai')}}</label>
                            @if ($errors->has('pai'))
                                <span class="helper-text red-text"><strong>{{$errors->first('pai')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l4'>
                            <input id="mae" name="mae" type="text"
                                   class="validate {{ $errors->has('mae') ? 'invalid' : '' }}" value="{{ old('mae') }}"
                                   required>
                            <label for="mae">{{__('Mãe')}}</label>
                            @if ($errors->has('mae'))
                                <span class="helper-text red-text"><strong>{{$errors->first('mae')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l2'>
                            <input id="cep" name="cep" type="text"
                                   class="validate {{ $errors->has('cep') ? 'invalid' : '' }}" value="{{ old('cep') }}"
                                   required>
                            <label for="cep">{{__('CEP')}}</label>
                            @if ($errors->has('cep'))
                                <span class="helper-text red-text"><strong>{{$errors->first('cep')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l4'>
                            <input id="logradouro" name="logradouro" type="text"
                                   class="validate {{ $errors->has('logradouro') ? 'invalid' : '' }}"
                                   value="{{ old('logradouro') }}" required>
                            <label for="logradouro">{{__('Logradouro')}}</label>
                            @if ($errors->has('logradouro'))
                                <span class="helper-text red-text"><strong>{{$errors->first('logradouro')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l1'>
                            <input id="numero" name="numero" type="text"
                                   class="validate {{ $errors->has('numero') ? 'invalid' : '' }}"
                                   value="{{ old('numero') }}" required>
                            <label for="numero">{{__('Nº')}}</label>
                            @if ($errors->has('numero'))
                                <span class="helper-text red-text"><strong>{{$errors->first('numero')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l2'>
                            <input id="bairro" name="bairro" type="text"
                                   class="validate {{ $errors->has('bairro') ? 'invalid' : '' }}"
                                   value="{{ old('bairro') }}" required>
                            <label for="bairro">{{__('Bairro')}}</label>
                            @if ($errors->has('bairro'))
                                <span class="helper-text red-text"><strong>{{$errors->first('bairro')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l2'>
                            <input id="cidade" name="cidade" type="text"
                                   class="validate {{ $errors->has('cidade') ? 'invalid' : '' }}"
                                   value="{{ old('cidade') }}" required>
                            <label for="cidade">{{__('Cidade')}}</label>
                            @if ($errors->has('cidade'))
                                <span class="helper-text red-text"><strong>{{$errors->first('cidade')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l1'>
                            <input id="uf" name="uf" type="text"
                                   class="validate {{ $errors->has('uf') ? 'invalid' : '' }}" value="{{ old('uf') }}"
                                   required>
                            <label for="uf">{{__('UF')}}</label>
                            @if ($errors->has('uf'))
                                <span class="helper-text red-text"><strong>{{$errors->first('uf')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l3'>
                            <input id="complemento" name="complemento" type="text"
                                   class="validate {{ $errors->has('complemento') ? 'invalid' : '' }}"
                                   value="{{ old('complemento') }}">
                            <label for="complemento">{{__('Complemento')}}</label>
                            @if ($errors->has('complemento'))
                                <span class="helper-text red-text"><strong>{{$errors->first('complemento')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l2'>
                            <input id="tel1" name="tel1" type="text"
                                   class="validate {{ $errors->has('tel1') ? 'invalid' : '' }}"
                                   value="{{ old('tel1') }}">
                            <label for="tel1">{{__('Telefone')}}</label>
                            @if ($errors->has('tel1'))
                                <span class="helper-text red-text"><strong>{{$errors->first('tel1')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l2'>
                            <input id="tel2" name="tel2" type="text"
                                   class="validate {{ $errors->has('tel2') ? 'invalid' : '' }}"
                                   value="{{ old('tel2') }}">
                            <label for="tel2">{{__('Tel. Contato')}}</label>
                            @if ($errors->has('tel2'))
                                <span class="helper-text red-text"><strong>{{$errors->first('tel2')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l2'>
                            <input id="cel" name="cel" type="text"
                                   class="validate {{ $errors->has('cel') ? 'invalid' : '' }}" value="{{ old('cel') }}">
                            <label for="cel">{{__('Celular')}}</label>
                            @if ($errors->has('cel'))
                                <span class="helper-text red-text"><strong>{{$errors->first('cel')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l3'>
                            <input id="email" name="email" type="email"
                                   class="validate {{ $errors->has('email') ? 'invalid' : '' }}"
                                   value="{{ old('email') }}">
                            <label for="email">{{__('E-mail')}}</label>
                            @if ($errors->has('email'))
                                <span class="helper-text red-text"><strong>{{$errors->first('email')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l3'>
                            <input id="dtaNascimento" name="dtaNascimento" type="date"
                                   class="validate {{ $errors->has('dtaNascimento') ? 'invalid' : '' }}"
                                   value="{{ old('dtaNascimento') }}" required>
                            <label for="dtaNascimento">{{__('Data de Nascimento')}}</label>
                            @if ($errors->has('dtaNascimento'))
                                <span class="helper-text red-text"><strong>{{$errors->first('dtaNascimento')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l3'>
                            <input id="cpf" name="cpf" type="text"
                                   class="validate {{ $errors->has('cpf') ? 'invalid' : '' }}" value="{{ old('cpf') }}"
                                   required>
                            <label for="cpf">{{__('CPF')}}</label>
                            @if ($errors->has('cpf'))
                                <span class="helper-text red-text"><strong>{{$errors->first('cpf')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l3'>
                            <input id="rg" name="rg" type="text"
                                   class="validate {{ $errors->has('rg') ? 'invalid' : '' }}" value="{{ old('rg') }}"
                                   required>
                            <label for="rg">{{__('RG')}}</label>
                            @if ($errors->has('rg'))
                                <span class="helper-text red-text"><strong>{{$errors->first('rg')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l3'>
                            <input id="orgaoExp" name="orgaoExp" type="text"
                                   class="validate {{ $errors->has('orgaoExp') ? 'invalid' : '' }}"
                                   value="{{ old('orgaoExp') }}" required>
                            <label for="orgaoExp">{{__('Expeditor')}}</label>
                            @if ($errors->has('orgaoExp'))
                                <span class="helper-text red-text"><strong>{{$errors->first('orgaoExp')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l6'>
                            <input id="igreja" name="igreja" type="text"
                                   class="validate {{ $errors->has('igreja') ? 'invalid' : '' }} autocomplete-igreja"
                                   value="{{ old('igreja') }}" required
                                    autocomplete="off">
                            <label for="igreja">{{__('Igreja')}}</label>
                            @if ($errors->has('igreja'))
                                <span class="helper-text red-text"><strong>{{$errors->first('igreja')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l3'>
                            <input id="dtaBatismoAguas" name="dtaBatismoAguas" type="date"
                                   class="validate {{ $errors->has('dtaBatismoAguas') ? 'invalid' : '' }}"
                                   value="{{ old('dtaBatismoAguas') }}">
                            <label for="dtaBatismoAguas">{{__('Batismo Águas')}}</label>
                            @if ($errors->has('dtaNascimento'))
                                <span class="helper-text red-text"><strong>{{$errors->first('dtaBatismoAguas')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l3'>
                            <input id="dtaBatismoEs" name="dtaBatismoEs" type="date"
                                   class="validate {{ $errors->has('dtaBatismoEs') ? 'invalid' : '' }}"
                                   value="{{ old('dtaBatismoEs') }}">
                            <label for="dtaBatismoEs">{{__('Batismo E. S.')}}</label>
                            @if ($errors->has('dtaBatismoEs'))
                                <span class="helper-text red-text"><strong>{{$errors->first('dtaBatismoEs')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l3'>
                            <input id="procedencia" name="procedencia" type="text"
                                   class="validate {{ $errors->has('procedencia') ? 'invalid' : '' }}"
                                   value="{{ old('procedencia') }}">
                            <label for="procedencia">{{__('Procedência')}}</label>
                            @if ($errors->has('procedencia'))
                                <span class="helper-text red-text"><strong>{{$errors->first('procedencia')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l3'>
                            <input id="funcaoEclesiastica" name="funcaoEclesiastica" type="text"
                                   class="validate {{ $errors->has('funcaoEclesiastica') ? 'invalid' : '' }}"
                                   value="{{ old('funcaoEclesiastica') }}">
                            <label for="funcaoEclesiastica">{{__('Função Eclesiástica')}}</label>
                            @if ($errors->has('funcaoEclesiastica'))
                                <span class="helper-text red-text"><strong>{{$errors->first('funcaoEclesiastica')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l3'>
                            <input id="funcaoMinisterial" name="funcaoMinisterial" type="text"
                                   class="validate {{ $errors->has('funcaoMinisterial') ? 'invalid' : '' }}"
                                   value="{{ old('funcaoMinisterial') }}">
                            <label for="funcaoMinisterial">{{__('Função Ministerial')}}</label>
                            @if ($errors->has('funcaoMinisterial'))
                                <span class="helper-text red-text"><strong>{{$errors->first('funcaoMinisterial')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l2'>
                            <input id="tipoSanguineo" name="tipoSanguineo" type="text"
                                   class="validate {{ $errors->has('tipoSanguineo') ? 'invalid' : '' }}"
                                   value="{{ old('tipoSanguineo') }}" required>
                            <label for="tipoSanguineo">{{__('Tipo Sanguíneo')}}</label>
                            @if ($errors->has('tipoSanguineo'))
                                <span class="helper-text red-text"><strong>{{$errors->first('tipoSanguineo')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l1'>
                            <input id="fatorRh" name="fatorRh" type="text"
                                   class="validate {{ $errors->has('fatorRh') ? 'invalid' : '' }}"
                                   value="{{ old('fatorRh') }}" required>
                            <label for="fatorRh">{{__('F. RH')}}</label>
                            @if ($errors->has('fatorRh'))
                                <span class="helper-text red-text"><strong>{{$errors->first('fatorRh')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l3'>
                            <input id="naturalidade" name="naturalidade" type="text"
                                   class="validate {{ $errors->has('naturalidade') ? 'invalid' : '' }}"
                                   value="{{ old('naturalidade') }}" required>
                            <label for="naturalidade">{{__('Naturalidade')}}</label>
                            @if ($errors->has('naturalidade'))
                                <span class="helper-text red-text"><strong>{{$errors->first('naturalidade')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l3'>
                            <input id="nacionalidade" name="nacionalidade" type="text"
                                   class="validate {{ $errors->has('nacionalidade') ? 'invalid' : '' }}"
                                   value="{{ old('nacionalidade') }}" required>
                            <label for="nacionalidade">{{__('Nacionalidade')}}</label>
                            @if ($errors->has('nacionalidade'))
                                <span class="helper-text red-text"><strong>{{$errors->first('nacionalidade')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l2'>
                            <input id="estadoCivil" name="estadoCivil" type="text"
                                   class="validate {{ $errors->has('estadoCivil') ? 'invalid' : '' }}"
                                   value="{{ old('estadoCivil') }}" required>
                            <label for="estadoCivil">{{__('Estado Civil')}}</label>
                            @if ($errors->has('estadoCivil'))
                                <span class="helper-text red-text"><strong>{{$errors->first('estadoCivil')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l2'>
                            <input id="etinia" name="etinia" type="text"
                                   class="validate {{ $errors->has('etinia') ? 'invalid' : '' }}"
                                   value="{{ old('etinia') }}" required>
                            <label for="etinia">{{__('Etinia')}}</label>
                            @if ($errors->has('etinia'))
                                <span class="helper-text red-text"><strong>{{$errors->first('etinia')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l2'>
                            <input id="sexo" name="sexo" type="text"
                                   class="validate {{ $errors->has('sexo') ? 'invalid' : '' }}"
                                   value="{{ old('sexo') }}" required>
                            <label for="sexo">{{__('Sexo')}}</label>
                            @if ($errors->has('sexo'))
                                <span class="helper-text red-text"><strong>{{$errors->first('sexo')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l3'>
                            <input id="profissao" name="profissao" type="text"
                                   class="validate {{ $errors->has('profissao') ? 'invalid' : '' }} autocomplete-profissao"
                                   value="{{ old('profissao') }}"
                                   autocomplete="off" >
                            <label for="profissao">{{__('Profissão')}}</label>
                            @if ($errors->has('profissao'))
                                <span class="helper-text red-text"><strong>{{$errors->first('profissao')}}</strong></span>
                            @endif
                        </div>
                        <div class='input-field col s12 m12 l3'>
                            <input id="departamento" name="departamento" type="text"
                                   class="validate {{ $errors->has('departamento') ? 'invalid' : '' }}"
                                   value="{{ old('departamento') }}">
                            <label for="departamento">{{__('Departamento')}}</label>
                            @if ($errors->has('departamento'))
                                <span class="helper-text red-text"><strong>{{$errors->first('departamento')}}</strong></span>
                            @endif
                        </div>
                        <div class="file-field input-field col s12 m12 l6">
                            <div class="btn waves-effect blue-grey darken-2 hoverable">
                                Foto
                                <input id="foto" name="foto" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input id="foto-path" class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type='reset' class='btn waves-effect red hoverable left'>{{__('Limpar')}}</button>
                    <button type='submit' class='btn waves-effect teal hoverable'>{{__('Salvar')}}</button>
                </div>
            </form>
        </div>
        <!-- Modal Structure - Alterar Membro -->
        @foreach($listaMembros as $membro)
            <div id="modalAlterarMembro{{$membro->id}}" class="modal">
                <form action="{{route('atualizarMembro')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <h4>Alterar Membro<span class="modal-close right hide-on-med-and-down tooltipped" data-position="left"
                                                data-tooltip="{{__('Fechar')}}"><i class="material-icons">close</i></span></h4>
                        <input id="id" name="id" type="number" class="hide" value="{{ $membro->id }}" >
                        <div class="divider"></div>
                        <div class='row'>
                            <div class='input-field col s12 m12 l4'>
                                <input id="nome" name="nome" type="text"
                                       class="validate {{ $errors->has('nome') ? 'invalid' : '' }}"
                                       value="{{ $membro->nome }}" required autofocus>
                                <label for="nome">{{__('Nome')}}</label>
                                @if ($errors->has('nome'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('nome')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l4'>
                                <input id="pai" name="pai" type="text"
                                       class="validate {{ $errors->has('pai') ? 'invalid' : '' }}" value="{{ $membro->pai }}"
                                       required>
                                <label for="pai">{{__('Pai')}}</label>
                                @if ($errors->has('pai'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('pai')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l4'>
                                <input id="mae" name="mae" type="text"
                                       class="validate {{ $errors->has('mae') ? 'invalid' : '' }}" value="{{ $membro->mae }}"
                                       required>
                                <label for="mae">{{__('Mãe')}}</label>
                                @if ($errors->has('mae'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('mae')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l2'>
                                <input id="cep" name="cep" type="text"
                                       class="validate {{ $errors->has('cep') ? 'invalid' : '' }}" value="{{ $membro->cep }}"
                                       required>
                                <label for="cep">{{__('CEP')}}</label>
                                @if ($errors->has('cep'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('cep')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l4'>
                                <input id="logradouro" name="logradouro" type="text"
                                       class="validate {{ $errors->has('logradouro') ? 'invalid' : '' }}"
                                       value="{{ $membro->logradouro }}" required>
                                <label for="logradouro">{{__('Logradouro')}}</label>
                                @if ($errors->has('logradouro'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('logradouro')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l1'>
                                <input id="numero" name="numero" type="text"
                                       class="validate {{ $errors->has('numero') ? 'invalid' : '' }}"
                                       value="{{ $membro->numero }}" required>
                                <label for="numero">{{__('Nº')}}</label>
                                @if ($errors->has('numero'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('numero')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l2'>
                                <input id="bairro" name="bairro" type="text"
                                       class="validate {{ $errors->has('bairro') ? 'invalid' : '' }}"
                                       value="{{ $membro->bairro }}" required>
                                <label for="bairro">{{__('Bairro')}}</label>
                                @if ($errors->has('bairro'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('bairro')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l2'>
                                <input id="cidade" name="cidade" type="text"
                                       class="validate {{ $errors->has('cidade') ? 'invalid' : '' }}"
                                       value="{{ $membro->cidade }}" required>
                                <label for="cidade">{{__('Cidade')}}</label>
                                @if ($errors->has('cidade'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('cidade')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l1'>
                                <input id="uf" name="uf" type="text"
                                       class="validate {{ $errors->has('uf') ? 'invalid' : '' }}" value="{{ $membro->uf }}"
                                       required>
                                <label for="uf">{{__('UF')}}</label>
                                @if ($errors->has('uf'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('uf')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="complemento" name="complemento" type="text"
                                       class="validate {{ $errors->has('complemento') ? 'invalid' : '' }}"
                                       value="{{ $membro->complemento }}">
                                <label for="complemento">{{__('Complemento')}}</label>
                                @if ($errors->has('complemento'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('complemento')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l2'>
                                <input id="tel1" name="tel1" type="text"
                                       class="validate {{ $errors->has('tel1') ? 'invalid' : '' }}"
                                       value="{{ $membro->tel1 }}">
                                <label for="tel1">{{__('Telefone')}}</label>
                                @if ($errors->has('tel1'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('tel1')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l2'>
                                <input id="tel2" name="tel2" type="text"
                                       class="validate {{ $errors->has('tel2') ? 'invalid' : '' }}"
                                       value="{{ $membro->tel2 }}">
                                <label for="tel2">{{__('Tel. Contato')}}</label>
                                @if ($errors->has('tel2'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('tel2')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l2'>
                                <input id="cel" name="cel" type="text"
                                       class="validate {{ $errors->has('cel') ? 'invalid' : '' }}" value="{{ $membro->cel }}">
                                <label for="cel">{{__('Celular')}}</label>
                                @if ($errors->has('cel'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('cel')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="email" name="email" type="email"
                                       class="validate {{ $errors->has('email') ? 'invalid' : '' }}"
                                       value="{{ $membro->email }}">
                                <label for="email">{{__('E-mail')}}</label>
                                @if ($errors->has('email'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('email')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="dtaNascimento" name="dtaNascimento" type="date"
                                       class="validate {{ $errors->has('dtaNascimento') ? 'invalid' : '' }}"
                                       value="{{ $membro->dtaNascimento }}" required>
                                <label for="dtaNascimento">{{__('Data de Nascimento')}}</label>
                                @if ($errors->has('dtaNascimento'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('dtaNascimento')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="cpf" name="cpf" type="text"
                                       class="validate {{ $errors->has('cpf') ? 'invalid' : '' }}" value="{{ $membro->cpf }}"
                                       required>
                                <label for="cpf">{{__('CPF')}}</label>
                                @if ($errors->has('cpf'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('cpf')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="rg" name="rg" type="text"
                                       class="validate {{ $errors->has('rg') ? 'invalid' : '' }}" value="{{ $membro->rg }}"
                                       required>
                                <label for="rg">{{__('RG')}}</label>
                                @if ($errors->has('rg'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('rg')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="orgaoExp" name="orgaoExp" type="text"
                                       class="validate {{ $errors->has('orgaoExp') ? 'invalid' : '' }}"
                                       value="{{ $membro->orgaoExp }}" required>
                                <label for="orgaoExp">{{__('Expeditor')}}</label>
                                @if ($errors->has('orgaoExp'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('orgaoExp')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l6'>
                                <input id="igreja" name="igreja" type="text"
                                       class="validate {{ $errors->has('igreja') ? 'invalid' : '' }} autocomplete-igreja"
                                       value="{{ $membro->igreja }}" required
                                       autocomplete="off">
                                <label for="igreja">{{__('Igreja')}}</label>
                                @if ($errors->has('igreja'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('igreja')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="dtaBatismoAguas" name="dtaBatismoAguas" type="date"
                                       class="validate {{ $errors->has('dtaBatismoAguas') ? 'invalid' : '' }}"
                                       value="{{ $membro->dtaBatismoAguas }}">
                                <label for="dtaBatismoAguas">{{__('Batismo Águas')}}</label>
                                @if ($errors->has('dtaNascimento'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('dtaBatismoAguas')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="dtaBatismoEs" name="dtaBatismoEs" type="date"
                                       class="validate {{ $errors->has('dtaBatismoEs') ? 'invalid' : '' }}"
                                       value="{{ $membro->dtaBatismoEs }}">
                                <label for="dtaBatismoEs">{{__('Batismo E. S.')}}</label>
                                @if ($errors->has('dtaBatismoEs'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('dtaBatismoEs')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="procedencia" name="procedencia" type="text"
                                       class="validate {{ $errors->has('procedencia') ? 'invalid' : '' }}"
                                       value="{{ $membro->procedencia }}">
                                <label for="procedencia">{{__('Procedência')}}</label>
                                @if ($errors->has('procedencia'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('procedencia')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="funcaoEclesiastica" name="funcaoEclesiastica" type="text"
                                       class="validate {{ $errors->has('funcaoEclesiastica') ? 'invalid' : '' }}"
                                       value="{{ $membro->funcaoEclesiastica }}">
                                <label for="funcaoEclesiastica">{{__('Função Eclesiástica')}}</label>
                                @if ($errors->has('funcaoEclesiastica'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('funcaoEclesiastica')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="funcaoMinisterial" name="funcaoMinisterial" type="text"
                                       class="validate {{ $errors->has('funcaoMinisterial') ? 'invalid' : '' }}"
                                       value="{{ $membro->funcaoMinisterial }}">
                                <label for="funcaoMinisterial">{{__('Função Ministerial')}}</label>
                                @if ($errors->has('funcaoMinisterial'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('funcaoMinisterial')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l2'>
                                <input id="tipoSanguineo" name="tipoSanguineo" type="text"
                                       class="validate {{ $errors->has('tipoSanguineo') ? 'invalid' : '' }}"
                                       value="{{ $membro->tipoSanguineo }}" required>
                                <label for="tipoSanguineo">{{__('Tipo Sanguíneo')}}</label>
                                @if ($errors->has('tipoSanguineo'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('tipoSanguineo')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l1'>
                                <input id="fatorRh" name="fatorRh" type="text"
                                       class="validate {{ $errors->has('fatorRh') ? 'invalid' : '' }}"
                                       value="{{ $membro->fatorRh }}" required>
                                <label for="fatorRh">{{__('F. RH')}}</label>
                                @if ($errors->has('fatorRh'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('fatorRh')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="naturalidade" name="naturalidade" type="text"
                                       class="validate {{ $errors->has('naturalidade') ? 'invalid' : '' }}"
                                       value="{{ $membro->naturalidade }}" required>
                                <label for="naturalidade">{{__('Naturalidade')}}</label>
                                @if ($errors->has('naturalidade'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('naturalidade')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="nacionalidade" name="nacionalidade" type="text"
                                       class="validate {{ $errors->has('nacionalidade') ? 'invalid' : '' }}"
                                       value="{{ $membro->nacionalidade }}" required>
                                <label for="nacionalidade">{{__('Nacionalidade')}}</label>
                                @if ($errors->has('nacionalidade'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('nacionalidade')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l2'>
                                <input id="estadoCivil" name="estadoCivil" type="text"
                                       class="validate {{ $errors->has('estadoCivil') ? 'invalid' : '' }}"
                                       value="{{ $membro->estadoCivil }}" required>
                                <label for="estadoCivil">{{__('Estado Civil')}}</label>
                                @if ($errors->has('estadoCivil'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('estadoCivil')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l2'>
                                <input id="etinia" name="etinia" type="text"
                                       class="validate {{ $errors->has('etinia') ? 'invalid' : '' }}"
                                       value="{{ $membro->etinia }}" required>
                                <label for="etinia">{{__('Etinia')}}</label>
                                @if ($errors->has('etinia'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('etinia')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l2'>
                                <input id="sexo" name="sexo" type="text"
                                       class="validate {{ $errors->has('sexo') ? 'invalid' : '' }}"
                                       value="{{ $membro->sexo }}" required>
                                <label for="sexo">{{__('Sexo')}}</label>
                                @if ($errors->has('sexo'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('sexo')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="profissao" name="profissao" type="text"
                                       class="validate {{ $errors->has('profissao') ? 'invalid' : '' }} autocomplete-profissao"
                                       value="{{ $membro->profissao }}"
                                       autocomplete="off" >
                                <label for="profissao">{{__('Profissão')}}</label>
                                @if ($errors->has('profissao'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('profissao')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="departamento" name="departamento" type="text"
                                       class="validate {{ $errors->has('departamento') ? 'invalid' : '' }}"
                                       value="{{ $membro->departamento }}">
                                <label for="departamento">{{__('Departamento')}}</label>
                                @if ($errors->has('departamento'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('departamento')}}</strong></span>
                                @endif
                            </div>
                            <div class="file-field input-field col s12 m12 l6">
                                <div class="btn waves-effect blue-grey darken-2 hoverable">
                                    Foto
                                    <input id="foto" name="foto" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input id="foto-path" class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#modalExcluirMembro{{$membro->id}}" class="btn waves-effect red hoverable left modal-trigger modal-close">{{__('Desativar')}}</a>
                        <button type='submit' class='btn waves-effect teal hoverable'>{{__('Salvar')}}</button>
                    </div>
                </form>
            </div>
            <!-- Modal Structure - Excluir Membro -->
            <div id="modalExcluirMembro{{$membro->id}}" class="modal">
                <form action="{{route('excluirMembro')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <h4>Desativar Membro<span class="modal-close right hide-on-med-and-down tooltipped" data-position="left"
                                                  data-tooltip="{{__('Fechar')}}"><i class="material-icons">close</i></span></h4>
                        <input id="id" name="id" type="number" class="hide" value="{{ $membro->id }}" >
                        <div class="divider"></div>
                        <div class='row'>
                            <div class='input-field col s12 m12 l4'>
                                <input id="motivoDesligamento" name="motivoDesligamento" type="text"
                                       class="validate {{ $errors->has('motivoDesligamento') ? 'invalid' : '' }}"
                                       value="{{ $membro->motivoDesligamento }}" required autofocus>
                                <label for="motivoDesligamento">{{__('Motivo do Desligamento')}}</label>
                                @if ($errors->has('motivoDesligamento'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('motivoDesligamento')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="dtaDesligamento" name="dtaDesligamento" type="date"
                                       class="validate {{ $errors->has('dtaDesligamento') ? 'invalid' : '' }}"
                                       value="{{ $membro->dtaDesligamento }}" required>
                                <label for="dtaDesligamento">{{__('Data de Desligamento')}}</label>
                                @if ($errors->has('dtaDesligamento'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('dtaDesligamento')}}</strong></span>
                                @endif
                            </div>
                            <div class='input-field col s12 m12 l3'>
                                <input id="destino" name="destino" type="text"
                                       class="validate {{ $errors->has('destino') ? 'invalid' : '' }}" value="{{ $membro->destino }}"
                                       required>
                                <label for="destino">{{__('Destino')}}</label>
                                @if ($errors->has('destino'))
                                    <span class="helper-text red-text"><strong>{{$errors->first('destino')}}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type='reset' class='btn waves-effect red hoverable left'>{{__('Limpar')}}</button>
                            <button type='submit' class='btn waves-effect teal hoverable'>{{__('Salvar')}}</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Modal Structure - Reativar Membro -->
            <div id="modalReativarMembro{{$membro->id}}" class="modal">
                <form action="{{route('reativarMembro')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <h4>Reativar Membro <b>{{$membro->nome}}</b>?<span class="modal-close right hide-on-med-and-down tooltipped" data-position="left"
                                                  data-tooltip="{{__('Fechar')}}"><i class="material-icons">close</i></span></h4>
                        <input id="id" name="id" type="number" class="hide" value="{{ $membro->id }}" >
                        <div class="divider"></div>
                        <p><b>{{$membro->nome}}</b> está com status <b>Inativo</b> para fazer alterações deve ativá-lo novamente</p>
                        <div class="modal-footer">
                            <button type='reset' class='left btn waves-effect red hoverable modal-close'>{{__('Não')}}</button>
                            <button type='submit' class='btn waves-effect teal hoverable'>{{__('Sim')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        @endforeach
        <!-- Modal Structure - Busca -->
        <div id="modalBusca" class="modal">
            <form action="#">
                <div class="modal-content">
                    <h4>Buscar Membro<span class="modal-close right hide-on-med-and-down"><i class="material-icons">close</i></span>
                    </h4>
                    <div class="divider"></div>
                    <p>A bunch of text</p>
                </div>
                <div class="modal-footer">
                    <button type='reset' name='resetFormNovoMembro'
                            class='btn waves-effect red hoverable left'>{{__('Limpar')}}</button>
                    <button type='submit' name='cadastrar'
                            class='modal-close btn waves-effect teal hoverable'>{{__('Buscar')}}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('page-scripts')
    <script src="{{ asset('materialize-css/js/custom/cep-search.js') }}"></script>
    <script src="{{ asset('materialize-css/js/custom/cep-search.js') }}"></script>
    <script src="{{ asset('materialize-css/js/custom/autocomplete/autocomplete-profissoes.js') }}"></script>
    <script src="{{ asset('materialize-css/js/custom/autocomplete/autocomplete-igrejas.js') }}"></script>
@endsection
