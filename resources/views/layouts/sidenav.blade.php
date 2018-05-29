
@guest
    <ul class="sidenav " id="sidebar-nav">
        <li><a href="{{ route('login') }}">{{ __('Entrar') }}</a></li>
        <li><a href="{{ route('register') }}">{{ __('Registrar') }}</a></li>
    </ul>
@else
    <ul class="sidenav" id="sidebar-nav">
        <!-- Dropdown Structure | user-dropdown-sidenav-->
        <ul id="user-dropdown-sidenav" class="dropdown-content">
            <li><a href="#" class="grey lighten-2">{{Auth::user()->name}}<i class="material-icons right">account_circle</i></a></li>
            <li class="divider"></li>
            <li><a href="#">{{__('Perfil')}}<i class="material-icons right">person</i></a></li>
            <li><a href="#">{{__('Mensagens')}}<i class="material-icons right">email</i></a></li>
            <li class="divider"></li>
            <li><a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
        <!-- Dropdown Structure | tab-adm-sidenav-->
        <ul id="tab-adm-sidenav" class="dropdown-content">
            <li><a href="#" class="grey lighten-2">{{__('Tabelas Administrativas')}}<i class="material-icons right">view_list</i></a></li>
            <li class="divider"></li>
            <li><a href="#">{{__('Entradas')}}</a></li>
            <li><a href="#">{{__('Atividade Eclesiástica')}}</a></li>
            <li><a href="#">{{__('Função Ministerial')}}</a></li>
            <li><a href="#">{{__('Assinaturas')}}</a></li>
        </ul>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger" href="#" data-target="user-dropdown-sidenav">{{Auth::user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
        <li class="divider"></li>
        <li><a href="{{route('Painel Principal')}}">{{__('Painel Principal')}}<i class="material-icons right">dashboard</i></a></li></a></li>
        <li><a href="#">{{__('Cartão de Membros')}}<i class="material-icons right">contact_mail</i></a></li>
        <li><a href="#">{{__('Declarações')}}<i class="material-icons right">web</i></a></li>
        <li><a href="#">{{__('Igrejas')}}<i class="material-icons right">home</i></a></li>
        <li><a href="{{route('Membros')}}">{{__('Membros')}}<i class="material-icons right">group</i></a></li>
        <li><a href="#">{{__('Relatórios')}}<i class="material-icons right">description</i></a></li>
        <li><a href="#" class="dropdown-trigger" data-target="tab-adm-sidenav">{{__('Tabelas Administrativas')}}<i class="material-icons right">view_list</i></a></li>
        <li><a href="#">{{__('Tesouraria')}}<i class="material-icons right">monetization_on</i></a></li>
        <li><a href="#">{{__('Usuários')}}<i class="material-icons right">person_outline</i></a></li>
    </ul>
@endguest