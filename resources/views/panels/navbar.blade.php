<div class="navbar @if(($configData['isNavbarFixed'])=== true){{'navbar-fixed'}} @endif">
    <nav
        class="{{$configData['navbarMainClass']}} @if($configData['isNavbarDark']=== true) {{'navbar-dark'}} @elseif($configData['isNavbarDark']=== false) {{'navbar-light'}} @elseif(!empty($configData['navbarBgColor'])) {{$configData['navbarBgColor']}} @else {{$configData['navbarMainColor']}} @endif">
        <div class="nav-wrapper">
            <ul class="navbar-list right">
                <li class="dropdown-language">
                    <a class="waves-effect waves-block waves-light translation-button" href="#"
                       data-target="translation-dropdown">
                        <span class="flag-icon flag-icon-gb"></span>
                    </a>
                </li>
                <li class="hide-on-med-and-down">
                    <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
                        <i class="material-icons">settings_overscan</i>
                    </a>
                </li>
                <li class="hide-on-large-only search-input-wrapper">
                    <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);">
                        <i class="material-icons">search</i>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);"
                       data-target="notifications-dropdown">
                        <i class="material-icons">notifications_none<small class="notification-badge">5</small></i>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                       data-target="profile-dropdown">
            <span class="avatar-status avatar-online">
              <img src="{{ auth()->user()->avatar }}" alt="avatar"><i></i>
            </span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-block waves-light sidenav-trigger" href="#"
                       data-target="slide-out-right">
                        <i class="material-icons">format_indent_increase</i>
                    </a>
                </li>
            </ul>
            <!-- translation-button-->
            <ul class="dropdown-content" id="translation-dropdown">
                <li class="dropdown-item">
                    <a class="grey-text text-darken-1" href="{{url('lang/en')}}" data-language="en">
                        <i class="flag-icon flag-icon-gb"></i>
                        @lang('English')
                    </a>
                </li>
                <li class="dropdown-item">
                    <a class="grey-text text-darken-1" href="{{url('lang/pt_BR')}}" data-language="pt_BR">
                        <i class="flag-icon flag-icon-br"></i>
                        @lang('Portuguese')
                    </a>
                </li>
            </ul>
            <!-- notifications-dropdown-->
            <ul class="dropdown-content" id="notifications-dropdown">
                <li>
                    <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="black-text" href="javascript:void(0)">
                        <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span>
                        A new order has been placed!
                    </a>
                    <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                </li>
                <li>
                    <a class="black-text" href="javascript:void(0)">
                        <span class="material-icons icon-bg-circle red small">stars</span>
                        Completed the task
                    </a>
                    <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                </li>
                <li>
                    <a class="black-text" href="javascript:void(0)">
                        <span class="material-icons icon-bg-circle teal small">settings</span>
                        Settings updated
                    </a>
                    <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                </li>
                <li>
                    <a class="black-text" href="javascript:void(0)">
                        <span class="material-icons icon-bg-circle deep-orange small">today</span>
                        Director meeting started
                    </a>
                    <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                </li>
                <li>
                    <a class="black-text" href="javascript:void(0)">
                        <span class="material-icons icon-bg-circle amber small">trending_up</span>
                        Generate monthly report
                    </a>
                    <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                </li>
            </ul>
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
                <form action="{{ route('logout') }}" method="post" id="logout">
                    <li>
                        @csrf
                        <a type="submit" class="grey-text text-darken-1"
                           onclick="document.getElementById('logout').submit();">
                            <i class="material-icons">keyboard_tab</i>
                            {{ __('Logout') }}
                        </a>

                    </li>
                </form>
            </ul>
        </div>
        <nav class="display-none search-sm">
            <div class="nav-wrapper">
                <form id="navbarForm">
                    <div class="input-field search-input-sm">
                        <input class="search-box-sm mb-0" type="search" required="" placeholder='Explore Materialize'
                               id="search"
                               data-search="starter-kit-list">
                        <label class="label-icon" for="search">
                            <i class="material-icons search-sm-icon">search</i>
                        </label>
                        <i class="material-icons search-sm-close">close</i>
                        <ul class="search-list collection search-list-sm display-none"></ul>
                    </div>
                </form>
            </div>
        </nav>
    </nav>
</div>
