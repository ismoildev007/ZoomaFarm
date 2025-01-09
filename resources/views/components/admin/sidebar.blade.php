<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="/dashboard" class="b-brand">
                <h3 class="logo logo-lg">Zooma Farm</h3>
                <h6 class="logo logo-sm"> </h6>
            </a>
        </div>
        <div class="navbar-content ps">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Навигация</label>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a @if( auth()->user()->role == '2')
                           href="{{ route('superAdmin.dashboard') }}"
                       @elseif( auth()->user()->role == '1')
                           href="{{ route('admin.dashboard') }}"
                       @endif class="nxl-link">
                        <span class="nxl-micon"><i class="feather-home"></i></span> <!-- Dashboard icon -->
                        <span class="nxl-mtext">Dashboards</span>
                    </a>
                </li>
                <?php
                $about1 = \App\Models\About::find(1);
                $about2 = \App\Models\About::find(2);
                $contact = \App\Models\Contact::first();
                ?>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('abouts.edit', $about1->id) }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-info"></i></span> <!-- About icon -->
                        <span class="nxl-mtext">Информация о компании</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('abouts.edit', $about2->id) }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-info"></i></span> <!-- About icon -->
                        <span class="nxl-mtext">Члены команды нашей компании</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('news.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-globe"></i></span> <!-- News icon -->
                        <span class="nxl-mtext">Новости</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('products.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-briefcase"></i></span> <!-- Products icon -->
                        <span class="nxl-mtext">Продукты</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('vacancies.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-help-circle"></i></span> <!-- FAQ icon -->
                        <span class="nxl-mtext">Вакансии</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-mail"></i></span> <!-- Contact icon -->
                        <span class="nxl-mtext">Контакты</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('candidants.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-mail"></i></span> <!-- Contact icon -->
                        <span class="nxl-mtext">Кандидаты</span>
                    </a>
                </li>

                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('orders.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-shopping-cart"></i></span> <!-- Shopping cart icon -->
                        <span class="nxl-mtext">Заказы</span>
                    </a>
                </li>

                {{--                @can('admins')--}}
{{--                    <li class="nxl-item nxl-hasmenu">--}}
{{--                        <a href="{{ route('news.index') }}" class="nxl-link">--}}
{{--                            <span class="nxl-micon"><i class="feather-users"></i></span> <!-- Admins icon -->--}}
{{--                            <span class="nxl-mtext">News</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endcan--}}
            </ul>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 598px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>
    </div>
</nav>
