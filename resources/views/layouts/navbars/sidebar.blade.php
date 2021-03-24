<div class="sidebar" data-image="{{ asset('light-bootstrap/img/sidebarBackground.jpg') }}" data-color="black">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                {{ __("Subastas de coches") }}
            </a>
        </div>
        <ul class="nav">
            @if(auth()->user()->rol == 'Comprador' || auth()->user()->rol == 'Administrador')
            <li class="nav-item @if($activePage == 'auctions') active @endif">
                <a class="nav-link" href="{{route('auctions')}}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>{{ __("Explorar subastas") }}</p>
                </a>
            </li>
            @endif
            @if(auth()->user()->rol == 'Vendedor')
            <li class="nav-item @if($activePage == 'auctions') active @endif">
                <a class="nav-link" href="{{ route('auctions') }}">
                    <i class="nc-icon nc-notes"></i>
                    <p>{{ __("Mis subastas") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'auction') active @endif">
                <a class="nav-link" href="{{route('auction')}}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>{{ __("Mis coches") }}</p>
                </a>
            </li>
            @endif
            <li class="nav-item @if($activePage == 'myObjects') active @endif">
                <a class="nav-link" href="{{route('myObjects')}}">
                    <i class="nc-icon nc-atom"></i>
                    @if(auth()->user()->rol == 'Comprador')
                    <p>{{ __("Mis coches") }}</p>
                    @else
                    <p>{{ __("Ver coches") }}</p>
                    @endif
                </a>
            </li>
            @if(auth()->user()->rol == 'Comprador')
            <li class="nav-item @if($activePage == 'bids') active @endif">
                <a class="nav-link" href="{{ route('bids') }}">
                    <i class="nc-icon nc-notes"></i>
                    <p>{{ __("Mis pujas") }}</p>
                </a>
            </li>
            @endif
            @if(auth()->user()->rol == 'Administrador')
            <li class="nav-item @if($activePage == 'check') active @endif">
                <a class="nav-link" href="{{ route('check') }}">
                    <i class="nc-icon nc-notes"></i>
                    <p>{{ __("Actualizar subastas") }}</p>
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>
