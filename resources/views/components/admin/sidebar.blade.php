<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="/dashboard" class="b-brand">
                <h3 class="logo logo-lg">Zuma Pharma</h3>
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
                $aboutTeam = \App\Models\AboutTeam::find(1);
                $contact = \App\Models\Contact::first();
                ?>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('abouts.edit', $about1->id) }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-info"></i></span> <!-- Info icon for company information -->
                        <span class="nxl-mtext">Информация о компании</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('about-teams.edit', $aboutTeam->id) }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span> <!-- Users icon for team members -->
                        <span class="nxl-mtext">Члены команды нашей компании</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-layers"></i></span>
                        <span class="nxl-mtext">Направления</span>
                        <span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item">
                            <a class="nxl-link" href="{{ route('missions.index') }}">
                                <i class="feather-target me-1"></i> Миссия
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a class="nxl-link" href="{{ route('values.index') }}">
                                <i class="feather-heart me-1"></i> Ценности
                            </a>
                        </li>
                        <li class="nxl-item">
                            <a class="nxl-link" href="{{ route('strategy.index') }}">
                                <i class="feather-trending-up me-1"></i> Стратегия
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('news.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-globe"></i></span> <!-- News icon -->
                        <span class="nxl-mtext">Новости</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('images.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-image"></i></span> <!-- Images icon -->
                        <span class="nxl-mtext">Изображения</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('products.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-box"></i></span> <!-- Box icon for products -->
                        <span class="nxl-mtext">Продукты</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('vacancies.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather feather-briefcase"></i></span> <!-- Vacancy icon -->
                        <span class="nxl-mtext">Вакансии</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('resumes.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather feather-file-text"></i></span> <!-- Resume icon -->
                        <span class="nxl-mtext">Resumes</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('documents.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather feather-file"></i></span> <!-- Documents icon -->
                        <span class="nxl-mtext">Documents</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('partners.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather feather-users"></i></span> <!-- Partners icon -->
                        <span class="nxl-mtext">партнеры</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('partner-requests.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather feather-users"></i></span> <!-- Partners icon -->
                        <span class="nxl-mtext">Запросы партнеров</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('answer-questions.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather feather-message-circle"></i></span> <!-- Q&A icon -->
                        <span class="nxl-mtext">Вопрос и ответ</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather feather-mail"></i></span> <!-- Contact icon -->
                        <span class="nxl-mtext">Контакты</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('candidants.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span> <!-- Users icon for candidates -->
                        <span class="nxl-mtext">Кандидаты</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('orders.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-shopping-cart"></i></span> <!-- Shopping cart icon -->
                        <span class="nxl-mtext">Заказы</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('privacy.index') }}" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-shield"></i></span> <!-- Shield icon for Privacy -->
                        <span class="nxl-mtext">Конфиденциальность</span>
                    </a>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="{{ route('file.index') }}" class="nxl-link">
                        <span class="nxl-micon">
                            <i class="feather-download"></i>
                        </span>
                        <span class="nxl-mtext">Скачать файл</span>
                    </a>
                </li>

                <li class="nxl-item">
                    <a href="/admin/lang" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-key"></i></span>
                        <span class="nxl-mtext" style="font-size: 12px">Редактирование переводов</span>
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
