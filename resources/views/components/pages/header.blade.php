<div class="header experiencefragment">
    <div id="experiencefragment-b443ca1e56" class="cmp-experiencefragment cmp-experiencefragment--xf-header">
        <div class="xf-content-height">
            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                <div class="header aem-GridColumn aem-GridColumn--default--12">
                    <div id="nncorp-header" class="nncorp-header">
                        <div>
                            <div id="headersettings">
                                <input
                                    type="hidden"
                                    name="exitRampConfig"
                                    ref="exitRampConfig"
                                    value='{"exitRamp": "false", "exitRampMessage": "", "whitelistedURLs": "", "exitrampTitle": "","openExitRampTarget": "false"}'
                                />
                                <input type="hidden" name="removeLanguageNavigation" ref="removeLanguageNavigation" />
                            </div>

                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--24">
                                <div class="tb-GridColumn tb-GridColumn--l--14">
                                    <div id="left-side-header" class="left-side header-item" :class="showLeftHeader">
                                        <a href="/" class="logo-lnk">
                                            <img src="/assets/img/logo.png" alt="logo" width="70px">
                                        </a>
                                        <div class="left-side-header-content">
                                            <div class="display-flex-center m-xxs-top">
                                                <div class="country-selector-wrapper">
                                                    <country-selector :color="'white'"> </country-selector>
                                                </div>
                                                <div class="nncorp-languagenavigation white">
                                                    <nav class="cmp-languagenavigation">
                                                        <ul class="cmp-languagenavigation__group">
                                                            <li class="cmp-languagenavigation__item">
                                                                <a href="{{ url('locale/en') }}" class="{{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>
                                                            </li>

                                                            <li class="cmp-languagenavigation__item">
                                                                <a href="{{ url('locale/ru') }}" class="{{ app()->getLocale() === 'ru' ? 'active' : '' }}">RU</a>
                                                            </li>

                                                            <li class="cmp-languagenavigation__item">
                                                                <a href="{{ url('locale/uz') }}" class="{{ app()->getLocale() === 'uz' ? 'active' : '' }}">UZ</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                            <div class="nncorp-breadcrumbs white"><div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="right-side header-item">
                                <div class="nncorp-navigation white">
                                    <link
                                        rel="stylesheet"
                                        href="/etc.clientlibs/nncorp/components/structure/navigation/clientlib.min.a487e143b241d955686747a344b8a9b2.css"
                                        type="text/css"
                                    />

                                    <nav
                                        id="cmp-navigation"
                                        class="cmp-navigation"
                                        ref="cmp-navigation"
                                        :class="handleNavAction"
                                        role="navigation"
                                        itemscope=""
                                        itemtype="http://schema.org/SiteNavigationElement"
                                    >
                                        <div id="cmp-navigation__top-bar" class="top-bar" :class="{'navigation-display': isOverflowed}">
                                            <ul class="cmp-navigation__group main-navigation">
                                                <li class="cmp-navigation__item cmp-navigation__item--level-0">
                                                    <a
                                                        href="javascript:void(0)"
                                                        :class="{dirty: navHoveredItems.includes('Главная ')}"
                                                        v-on:mouseover="onLinkHover('Главная ')"
                                                        v-on:click="openSubNav('Главная ')"
                                                        class="cmp-navigation__item-link true"
                                                    >
                                                        <span class="text hyphenate">Главная </span>
                                                    </a>
                                                </li>
                                                <li class="cmp-navigation__item cmp-navigation__item--level-0">
                                                    <a
                                                        href="javascript:void(0)"
                                                        :class="{dirty: navHoveredItems.includes('О компании')}"
                                                        v-on:mouseover="onLinkHover('О компании')"
                                                        v-on:click="openSubNav('О компании')"
                                                        aria-label="О компании"
                                                        class="cmp-navigation__item-link true"
                                                        onclick="openModal('modal1')"
                                                    >
                                                        <span class="text hyphenate">О компании</span>
                                                    </a>
                                                </li>
                                                <li class="cmp-navigation__item cmp-navigation__item--level-0">
                                                    <a
                                                        href="{{ route('products') }}"
                                                        :class="{dirty: navHoveredItems.includes('Продукты')}"
                                                        v-on:mouseover="onLinkHover('Продукты')"
                                                        v-on:click="openSubNav('Продукты')"
                                                        aria-label="Продукты"
                                                        class="cmp-navigation__item-link true"
                                                    >
                                                        <span class="text hyphenate">Продукты</span>
                                                    </a>
                                                </li>
                                                <li class="cmp-navigation__item cmp-navigation__item--level-0">
                                                    <a
                                                        href="{{ route('vacancy') }}"
                                                        :class="{dirty: navHoveredItems.includes('Вакансии')}"
                                                        v-on:mouseover="onLinkHover('Вакансии')"
                                                        v-on:click="openSubNav('Вакансии')"
                                                        aria-label="Вакансии"
                                                        class="cmp-navigation__item-link true"
                                                    >
                                                        <span class="text hyphenate">Вакансии</span>
                                                    </a>
                                                </li>
                                                <li class="cmp-navigation__item cmp-navigation__item--level-0">
                                                    <a
                                                        href="{{ route('news') }}"
                                                        :class="{dirty: navHoveredItems.includes('Новости')}"
                                                        v-on:mouseover="onLinkHover('Новости')"
                                                        v-on:click="openSubNav('Новости')"
                                                        aria-label="Новости"
                                                        class="cmp-navigation__item-link true"
                                                    >
                                                        <span class="text hyphenate">Новости</span>
                                                    </a>
                                                </li>
                                                <li class="cmp-navigation__item cmp-navigation__item--level-0">
                                                    <a
                                                        href="{{ route('contact') }}"
                                                        :class="{dirty: navHoveredItems.includes('Контакты')}"
                                                        v-on:mouseover="onLinkHover('Контакты')"
                                                        v-on:click="openSubNav('Контакты')"
                                                        aria-label="Связаться с нами"
                                                        class="cmp-navigation__item-link true"
                                                    >
                                                        <span class="text hyphenate">Контакты</span>
                                                    </a>
                                                </li>

{{--                                                <li class="cmp-navigation__item cmp-navigation__item--level-0">--}}
{{--                                                    <a--}}
{{--                                                        href="uz/search.html"--}}
{{--                                                        :class="{dirty: navHoveredItems.includes('Qidirish')}"--}}
{{--                                                        v-on:mouseover="onLinkHover('Qidirish')"--}}
{{--                                                        aria-label="Qidirish"--}}
{{--                                                        class="cmp-navigation__item-link false"--}}
{{--                                                    >--}}
{{--                                                                    <span role="button" aria-label="Search icon navigation" class="icon icon-search"--}}
{{--                                                                    ><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span--}}
{{--                                                                        ></span>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
                                            </ul>
                                        </div>

                                        <div v-if="!isTop && !tabletView" class="burger-float desktop" :class="{'top': isTop, 'not-top': !isTop}">
                                            <button class="button burger-button" v-on:click="handleBurger" role="button" aria-label="Burger navigation button">
                                                            <span class="icon icon-burger-float-blue"
                                                            ><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span
                                                                ><span class="path5"></span
                                                                ></span>
                                                <span class="icon icon-close-float-blue"
                                                ><span class="path1"></span><span class="path2"></span><span class="path3"></span
                                                    ></span>
                                            </button>
                                        </div>
                                        <div class="burger-float mobile" v-on:click="openSubNav('')">
                                            <button class="button burger-button" role="button" aria-label="Burger navigation button">
                                                            <span class="icon icon-burger-float-blue"
                                                            ><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span
                                                                ><span class="path5"></span
                                                                ></span>
                                            </button>
                                        </div>
                                    </nav>

                                    <script
                                        type="text/javascript"
                                        src="/etc.clientlibs/nncorp/components/structure/navigation/clientlib.min.818c37b0a1ad6bacc3b4dd33257cae1c.js"
                                        async=""
                                    ></script>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div id="modal1" class="modals">
                            <div class="modal-content">
                                <div class="" style="text-align: end; padding-top: 50px; padding-bottom: 150px">
                                    <button class="close-btn" onclick="closeModal('modal1')">
                                                    <span class="icon icon-times-white"
                                                    ><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span
                                                        ></span>
                                    </button>
                                </div>
                                <div class="">
                                    <div class="">
                                        <span class="tagline hyphenate">Biz haqimizda</span>
                                    </div>
                                    <div class="">
                                        <a href="{{ route('about') }}" aria-label="1-turdagi diabet" class="item m-s-bottom animate"
                                        ><span class="text hyphenate">Kompaniya haqida ma'lumotlar</span></a
                                        >
                                    </div>
                                    <div class="">
                                        <a href="{{ route('about.team') }}" aria-label="Semizlik" class="item m-s-bottom animate"
                                        ><span class="text hyphenate">Jamoa a'zolari</span></a
                                        >
                                    </div>

                                    <div class="">
                                        <a href="{{ route('vacancy') }}" aria-label="Gemofiliya" class="item m-s-bottom animate"
                                        ><span class="text hyphenate">Bo'sh ish o'rinlari</span></a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
