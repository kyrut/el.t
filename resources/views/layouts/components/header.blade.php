<div>
    <div class="uk-flex uk-flex-right banner-address-left uk-text-small uk-width-1-1">
        <p><i uk-icon="location"></i> Невинномысск</p>
        <p><a href="tel:+79288171250" class="uk-text-white" style="font-weight: normal; font-size: 0.9em"><i uk-icon="receiver"></i> +7 928 817 12 50</a></p>
    </div>
    <div uk-sticky class="uk-navbar-container uk-sticky uk-sticky-fixed">
        <div class="tm-navbar-container">
            <div class="uk-container uk-container-expand">
                <nav class="uk-navbar">
                    <header-component :categories="{{json_encode($categories)}}"></header-component>
                    <div class="uk-flex">
                        @guest
                            <ul class="uk-navbar-nav">
                                @if (Route::has('login'))
                                    <li>
                                        <a class="uk-text-uppercase" href="{{ route('login') }}">Вход</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                                    </li>
                                @endif
                            </ul>
                        @else
                            <div class="uk-inline">
                                <button class="uk-button uk-button-default uk-border-circle uk-padding-remove" type="button" style="width: 42px">
                                    <img class="uk-border-circle" src="{{ $avatar ? Auth::user()->avatar : 'images/avatar.jpg' }}" width="40" height="40" alt="{{ 'name' ? Auth::user()->name : '' }}">
                                </button>
                                <div uk-dropdown="mode: click">
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endguest
                        <div class="uk-hidden@m">
                            <a uk-navbar-toggle-icon href="#offcanvas-nav" uk-toggle class="uk-navbar-toggle uk-text-white uk-padding-remove-right" style="width: 35px" aria-expanded="false"></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>



