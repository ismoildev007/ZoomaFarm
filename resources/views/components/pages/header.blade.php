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
                                            <img src="/assets/img/logo.png" alt="logo" width="170px">
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

                                                            </li>

                                                            <li class="cmp-languagenavigation__item">

                                                            </li>

                                                            <li class="cmp-languagenavigation__item">

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
                                                <li class="cmp-navigation__item cmp-navigation__item--level-0 dr_menu-lang-items"
                                                    style="display: flex; justify-content: end;margin-bottom: 40px">
                                                    <a href="{{ url('locale/en') }}" class="{{ app()->getLocale() === 'en' ? 'active' : '' }}" style="font-size: 15px !important">EN</a>
                                                    <a href="{{ url('locale/ru') }}" class="{{ app()->getLocale() === 'ru' ? 'active' : '' }}" style="font-size: 15px !important">RU</a>
                                                    <a href="{{ url('locale/uz') }}" class="{{ app()->getLocale() === 'uz' ? 'active' : '' }}" style="font-size: 15px !important">UZ</a>
                                                </li>
                                                <li class="cmp-navigation__item cmp-navigation__item--level-0" style="line-height: 34px;">
                                                    <a href="/"
                                                       :class="{dirty: navHoveredItems.includes('{{ __('messages.home') }}')}"
                                                       v-on:mouseover="onLinkHover('{{ __('messages.home') }}')"
                                                       v-on:click="openSubNav('{{ __('messages.home') }}')"
                                                       class="cmp-navigation__item-link true">
                                                        <span class="text hyphenate">{{ __('messages.home') }}</span>
                                                    </a>
                                                </li>
                                                <li class="cmp-navigation__item cmp-navigation__item--level-0" style="line-height: 34px;">
                                                    <a href="javascript:void(0)"
                                                       :class="{dirty: navHoveredItems.includes('{{ __('messages.about') }}')}"
                                                       v-on:mouseover="onLinkHover('{{ __('messages.about') }}')"
                                                       v-on:click="openSubNav('{{ __('messages.about') }}')"
                                                       aria-label="{{ __('messages.about') }}"
                                                       class="cmp-navigation__item-link true"
                                                       onclick="openModal('modal1'); openModalMenu ();">
                                                        <span class="text hyphenate">{{ __('messages.about') }}</span>
                                                    </a>
                                                </li>
                                                <li class="cmp-navigation__item cmp-navigation__item--level-0" style="line-height: 34px;">
                                                    <a href="{{ route('products') }}"
                                                       :class="{dirty: navHoveredItems.includes('{{ __('messages.products') }}')}"
                                                       v-on:mouseover="onLinkHover('{{ __('messages.products') }}')"
                                                       v-on:click="openSubNav('{{ __('messages.products') }}')"
                                                       aria-label="{{ __('messages.products') }}"
                                                       class="cmp-navigation__item-link true">
                                                        <span class="text hyphenate">{{ __('messages.products') }}</span>
                                                    </a>
                                                </li>
                                                <li class="cmp-navigation__item cmp-navigation__item--level-0" style="line-height: 34px;">
                                                    <a href="{{ route('documents') }}"
                                                       :class="{dirty: navHoveredItems.includes('{{ __('messages.documents') }}')}"
                                                       v-on:mouseover="onLinkHover('{{ __('messages.documents') }}')"
                                                       v-on:click="openSubNav('{{ __('messages.documents') }}')"
                                                       aria-label="{{ __('messages.documents') }}"
                                                       class="cmp-navigation__item-link true">
                                                        <span class="text hyphenate">{{ __('messages.documents') }}</span>
                                                    </a>
                                                </li>

                                                <li class="cmp-navigation__item cmp-navigation__item--level-0" style="line-height: 34px;">
                                                    <a href="{{ route('news') }}"
                                                       :class="{dirty: navHoveredItems.includes('{{ __('messages.news') }}')}"
                                                       v-on:mouseover="onLinkHover('{{ __('messages.news') }}')"
                                                       v-on:click="openSubNav('{{ __('messages.news') }}')"
                                                       aria-label="{{ __('messages.news') }}"
                                                       class="cmp-navigation__item-link true">
                                                        <span class="text hyphenate">{{ __('messages.news') }}</span>
                                                    </a>
                                                </li>
                                                <li class="cmp-navigation__item cmp-navigation__item--level-0" style="line-height: 34px;">
                                                    <a href="{{ route('vacancy') }}"
                                                       :class="{dirty: navHoveredItems.includes('{{ __('messages.vacancy') }}')}"
                                                       v-on:mouseover="onLinkHover('{{ __('messages.vacancy') }}')"
                                                       v-on:click="openSubNav('{{ __('messages.vacancy') }}')"
                                                       aria-label="{{ __('messages.vacancy') }}"
                                                       class="cmp-navigation__item-link true">
                                                        <span class="text hyphenate">{{ __('messages.vacancy') }}</span>
                                                    </a>
                                                </li>

{{--                                                <li class="cmp-navigation__item cmp-navigation__item--level-0" style="line-height: 34px;">--}}
{{--                                                    <a href="{{ route('company_direction')}}"--}}
{{--                                                       :class="{dirty: navHoveredItems.includes('{{ __('messages.mission_values_strategy') }}')}"--}}
{{--                                                       v-on:mouseover="onLinkHover('{{ __('messages.mission_values_strategy') }}')"--}}
{{--                                                       v-on:click="openSubNav('{{ __('messages.mission_values_strategy') }}')"--}}
{{--                                                       aria-label="{{ __('messages.mission_values_strategy') }}"--}}
{{--                                                       class="cmp-navigation__item-link true">--}}
{{--                                                        <span class="text hyphenate">{{ __('messages.mission_values_strategy') }}</span>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
                                                <li class="cmp-navigation__item cmp-navigation__item--level-0" style="line-height: 34px;">
                                                    <a href="{{ route('cooperation') }}"
                                                    :class="{dirty: navHoveredItems.includes('{{ __('messages.partners') }}')}"
                                                    v-on:mouseover="onLinkHover('{{ __('messages.partners') }}')"
                                                    v-on:click="openSubNav('{{ __('messages.partners') }}')"
                                                    aria-label="{{ __('messages.partners') }}"
                                                    class="cmp-navigation__item-link true">
                                                        <span class="text hyphenate">{{ __('messages.partners') }}</span>
                                                    </a>
                                                </li>


                                                <li class="cmp-navigation__item cmp-navigation__item--level-0" style="line-height: 34px;">
                                                    <a href="{{ route('contact') }}"
                                                       :class="{dirty: navHoveredItems.includes('{{ __('messages.contact') }}')}"
                                                       v-on:mouseover="onLinkHover('{{ __('messages.contact') }}')"
                                                       v-on:click="openSubNav('{{ __('messages.contact') }}')"
                                                       aria-label="{{ __('messages.contact') }}"
                                                       class="cmp-navigation__item-link true">
                                                        <span class="text hyphenate">{{ __('messages.contact') }}</span>
                                                    </a>
                                                </li>


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
                                    <button class="close-btn" onclick="closeModal('modal1'); closeModalMenu();">
                                                    <span class="icon icon-times-white"
                                                    ><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span
                                                        ></span>
                                    </button>
                                </div>
                                <div class="">
                                    <div class="">
                                        <span class="tagline hyphenate">{{ __('messages.about') }}</span>
                                    </div>
                                    <div class="">
                                        <a href="{{ route('about') }}" aria-label="1-turdagi diabet" class="item m-s-bottom animate"
                                        ><span class="text hyphenate">{{ __('messages.about_company') }}</span></a
                                        >
                                    </div>
                                    <div class="">
                                        <a href="{{ route('about.team') }}" aria-label="Semizlik" class="item m-s-bottom animate"
                                        ><span class="text hyphenate">{{ __('messages.team') }}</span></a
                                        >
                                    </div>
                                    <div class="">
                                        <a href="{{ route('company_direction')}}" aria-label="Semizlik" class="item m-s-bottom animate"
                                        ><span class="text hyphenate">{{ __('messages.mission_values_strategy') }}</span></a
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
