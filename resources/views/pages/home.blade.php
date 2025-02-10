@extends('layouts.pages')

@section('content')
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
            <div class="herodeck image aem-GridColumn aem-GridColumn--default--12">
                <link rel="stylesheet" href="etc.clientlibs/nncorp/clientlibs/vuejs/components/megatext.min.css"
                      type="text/css"/>
                <link
                    rel="stylesheet"
                    href="etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.css"
                    type="text/css"
                />
                <link rel="stylesheet" href="etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.css"
                      type="text/css"/>
                <link
                    rel="stylesheet"
                    href="etc.clientlibs/nncorp/components/content/herodeck/v2/herodeck/clientlib/clientlib-herodeck.min.b0ee3d6796724965856ff41e0ab265cd.css"
                    type="text/css"
                />
                <script type="text/javascript"
                        src="etc.clientlibs/nncorp/clientlibs/vuejs/components/megatext.min.js"></script>
                <script type="text/javascript"
                        src="etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.js"></script>
                <script type="text/javascript"
                        src="etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.js"></script>
                <script
                    type="text/javascript"
                    src="etc.clientlibs/nncorp/components/content/herodeck/v2/herodeck/clientlib/clientlib-herodeck.min.7aba53fe9092be5d3241a8675d566872.js"
                    async=""
                ></script>

                <div class="herodeck-wrapper">
                    <ol class="heroes-wrapper">
                        <li class="hero slides" id="hero-0">
                            <div class="slide-wrapper">
                                <div class="hero-image-container">
                                    <focuspoint-image
                                        :coordinates="'-0.5:0.5'"
                                        :dynamic-media-info="{
                            dynamicMediaImagePath: 'https://images.novonordisk.com/is/image/novonordiskas/front-page-banner-nn100-num1-11',
                            disableDynamicMedia: false,
                            mobileDynamicMediaWidth: '525',
                            tabletPortraitDynamicMediaWidth: '768',
                            tabletLandscapeDynamicMediaWidth: '1280',
                            desktopDynamicMediaWidth: '2000',
                            jpegQuality: '90',
                            urlModifiers: ''
                          }"
                                        :renditions-image-info="{
                            typeOfRendition: '',
                            mobileRenditionSuffix: '.corpimgw.525.525.jpg',
                            tabletPortraitRenditionSuffix: '.corpimgw.768.768.jpg',
                            tabletLandscapeRenditionSuffix: '.corpimgw.1280.1280.jpg',
                            desktopRenditionSuffix: '.corpimgw.2000.2000.jpg'
                          }"
                                        :has-prohibited-extension="'false'"
                                    >
                                    </focuspoint-image>
                                </div>
                                <div class="gradient-wrapper">
                                    <gradient-cover
                                        :visibility="showGradient"
                                        :bottom-content-height="gradientBottomHeight"
                                        :dynamic-gradient="true"
                                        :disabled-areas="{top: true}"
                                    ></gradient-cover>
                                </div>

                                <div class="slide-details-wrapper" id="slide-details-wrapper-0">
                                    <div class="details-wrapper gutters"
                                         v-bind:style="{ opacity: isDetailInViewport('0') }">
                                        <div class="tb-Grid details-info m-xxl-bottom" ref="titleContainer">
                                            <div
                                                class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24 m-xxs-bottom">
                                                <div
                                                    class="tb-GridColumn tb-GridColumn--l--12 tb-GridColumn--m--12 tb-GridColumn--s--12 tb-GridColumn--xs--16 tb-GridColumn--offset--l--0 tb-GridColumn--offset--m--2 tb-GridColumn--offset--s--2 tb-GridColumn--offset--xs--2"
                                                >
                                                    <div class="details-title">
                                                        <h2 class="h2">ООО "ZUMA PHARMA"</h2>
                                                    </div>
                                                    <h4
                                                        class="richtext"
                                                        v-html="applyContentStyle('Фармацевтическая компания на территории Республики Узбекистан')"
                                                    ></h4>
                                                </div>
                                            </div>
                                            <div
                                                class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                                <div
                                                    class="tb-GridColumn tb-GridColumn--m--20 tb-GridColumn--offset--l--0 tb-GridColumn--offset--m--2 tb-GridColumn--offset--s--2 tb-GridColumn--offset--xs--2"
                                                >
                                                    <div class="details-button">
                                                        <a aria-label="İrsimiz haqqında məlumat əldə edin"
                                                           href="{{route('news')}}" target="_self">
                                                            <button
                                                                class="button desktop-button m-s-top button-link-animation">
                                                                <span class="text">Читайте последние новости</span>
                                                                <span class="icon icon-right-arrow"></span>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="hero slides" id="hero-1">
                            <div class="slide-wrapper">
                                <div class="asset">
                                    <div class="hero-image-container">
                                        <focuspoint-image
                                            image-url="/content/dam/nncorp/language-masters/en/front-page/Group 6 - Operators AP - Sabrina AO6I4141.jpg"
                                            :coordinates="'-0.5:0.5'"
                                            :dynamic-media-info="{
                            dynamicMediaImagePath: 'https://images.novonordisk.com/is/image/novonordiskas/Group 6 - Operators AP - Sabrina AO6I4141-1',
                            disableDynamicMedia: false,
                            mobileDynamicMediaWidth: '525',
                            tabletPortraitDynamicMediaWidth: '768',
                            tabletLandscapeDynamicMediaWidth: '1280',
                            desktopDynamicMediaWidth: '2000',
                            jpegQuality: '90',
                            urlModifiers: ''
                          }"
                                            :renditions-image-info="{
                            typeOfRendition: '',
                            mobileRenditionSuffix: '.corpimgw.525.525.jpg',
                            tabletPortraitRenditionSuffix: '.corpimgw.768.768.jpg',
                            tabletLandscapeRenditionSuffix: '.corpimgw.1280.1280.jpg',
                            desktopRenditionSuffix: '.corpimgw.2000.2000.jpg'
                          }"
                                            :has-prohibited-extension="'false'"
                                        >
                                        </focuspoint-image>
                                    </div>
                                </div>
                                <div class="gradient-wrapper">
                                    <gradient-cover
                                        :visibility="showGradient"
                                        :bottom-content-height="gradientBottomHeight"
                                        :dynamic-gradient="true"
                                        :disabled-areas="{top: true}"
                                    ></gradient-cover>
                                </div>

                                <div class="slide-details-wrapper" id="slide-details-wrapper-1">
                                    <div class="details-wrapper gutters"
                                         v-bind:style="{ opacity: isDetailInViewport('1') }">
                                        <div class="tb-Grid details-info m-xxl-bottom" ref="titleContainer">
                                            <div
                                                class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24 m-xxs-bottom">
                                                <div
                                                    class="tb-GridColumn tb-GridColumn--l--12 tb-GridColumn--m--12 tb-GridColumn--s--12 tb-GridColumn--xs--16 tb-GridColumn--offset--l--0 tb-GridColumn--offset--m--2 tb-GridColumn--offset--s--2 tb-GridColumn--offset--xs--2"
                                                >
                                                    <div class="details-title">
                                                        <h2 class="h2"
                                                            v-html="applyContentStyle('Продвижение изменений')"></h2>
                                                    </div>
                                                    <h4
                                                        class="richtext"
                                                        v-html="applyContentStyle('Мы продвигаем изменения для борьбы с диабетом и другими серьезными хроническими заболеваниями.')"
                                                    ></h4>
                                                </div>
                                            </div>
                                            <div
                                                class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                                <div
                                                    class="tb-GridColumn tb-GridColumn--m--20 tb-GridColumn--offset--l--0 tb-GridColumn--offset--m--2 tb-GridColumn--offset--s--2 tb-GridColumn--offset--xs--2"
                                                >
                                                    <div class="details-button">
                                                        <a aria-label="Что мы делаем"
                                                           href="{{route('about')}}" target="_self">
                                                            <button
                                                                class="button desktop-button m-s-top button-link-animation">
                                                                <span class="text">Что мы делаем</span>
                                                                <span class="icon icon-right-arrow"></span>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="layoutcontainergrid responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <link
                    rel="stylesheet"
                    href="/etc.clientlibs/nncorp/components/content/layoutcontainergrid/clientlibs.min.8e68a20a5b5ff888db6d5b26377b9644.css"
                    type="text/css"
                />
                <script
                    type="text/javascript"
                    src="/etc.clientlibs/nncorp/components/content/layoutcontainergrid/clientlibs.min.171a7ca77be56f15301624914902fc77.js"
                    async=""
                ></script>

                <div class="layout-container-grid">
                    <div class="gutters component-padding-topAndBottom color outer-container"
                         style="background-color: rgb(226, 240, 250)">
                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24">
                            <div
                                class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--offset--l--2 container-grid-header">
                                <p class="tagline m-xxs-bottom">
                                    <span style="vertical-align: inherit">Продукты</span>
                                </p>
                                <h2 class="h5-s m-xs-bottom title">
                                    <span style="vertical-align: inherit">Лекарства</span>
                                </h2>
                                <p class="description leadtext m-m-bottom">
                                    <span style="vertical-align: inherit">
                                    Ознакомьтесь с представленным ниже выбором инсулиновых шприц-ручек.
                                    Перейдите к интересующей вас ручке и узнайте, как использовать инсулиновую ручку для приема противодиабетических препаратов.
                                    </span>
                                </p>
                            </div>

                            <div
                                class="frame-padding tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                                style="background-color: rgb(226, 240, 250)"
                            >
                                <div class="tb-Grid tb-Grid--24 tb-Grid--l--22 tb-Grid--m--24 tb-Grid--s--24">
                                    <div
                                        class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                                    >
                                        <div class="rowcontainer">

                                            <div class="contentgrid_row">
                                                @foreach($latestProducts as $product)
                                                    <div
                                                        class="columns-3 column has-content-true column-0 top_align contentgrid_column">
                                                        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                            <div
                                                                class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                <a href="{{route('single.product',$product->id)}}"
                                                                   target="_self"
                                                                   aria-label="{{ $product['name_'.$lang] }} sahifasiga havola">
                                                                    <div class="image-video-wrapper">
                                                                        <a href="{{ url('/product/' . $product->id) }}"
                                                                           target="_self"
                                                                           aria-label="{{ $product['name_'.$lang] }} sahifasiga havola">
                                                                            <div
                                                                                class="image-video-content-wrapper m-xs-bottom">
                                                                                <img
                                                                                    src="{{ asset('storage/' . $product->image) }}"
                                                                                    alt="{{ $product['name_'.$lang] }}"
                                                                                    loading="eager"
                                                                                />
                                                                            </div>
                                                                        </a>
                                                                        <div class="right-arrow-animation">
                                                                            <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                                {{ $product['name_'.$lang] }}
                                                                            </h3>
                                                                            <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                {{ Str::words($product['description_'.$lang], 15, '...') }}
                                                                            </p>
                                                                            <div class="link m-xs-top">
                                                                                <a href="{{route('single.product',$product->id)}}"
                                                                                   target="_self"
                                                                                   class="color-blue link-label paragraph-s">
                                                                                    <span
                                                                                        class="icon icon-right-arrow"></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
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
        <!-- Karyera -->
        <div class="layoutcontainergrid responsivegrid aem-GridColumn aem-GridColumn--default--12">
            <link
                rel="stylesheet"
                href="/etc.clientlibs/nncorp/components/content/layoutcontainergrid/clientlibs.min.8e68a20a5b5ff888db6d5b26377b9644.css"
                type="text/css"
            />
            <script
                type="text/javascript"
                src="/etc.clientlibs/nncorp/components/content/layoutcontainergrid/clientlibs.min.171a7ca77be56f15301624914902fc77.js"
                async=""
            ></script>
            <div class="layout-container-grid">
                <div class="gutters component-padding-topAndBottom frame shift outer-container"
                     style="background-color: white">
                    <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24">
                        <div
                            class="frame small tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2">
                            <h1 class="text plaintexttitle title color-blue smalltitle">Карьера</h1>
                        </div>
                        <div
                            class="frame-padding tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                            style="background-color: rgb(252, 242, 245)"
                        >
                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--22 tb-Grid--m--24 tb-Grid--s--24">
                                <div
                                    class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                                >
                                    <div class="rowcontainer">

                                        <div class="contentgrid_row">
                                            @foreach ($latestVacancy as $vacancy)
                                                <div
                                                    class="columns-3 column has-content-true column-0 top_align contentgrid_column">
                                                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                        <div
                                                            class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                            <div class="image-video-wrapper">
                                                                <a href="{{ url('/vacancy/' . $vacancy->id) }}">
                                                                    <div
                                                                        class="image-video-content-wrapper m-xs-bottom">
                                                                        <img
                                                                            src="{{ asset('storage/' . $vacancy->image) }}"
                                                                            alt="{{ $vacancy['title_'.$lang] }}"
                                                                            loading="eager"
                                                                        />
                                                                    </div>
                                                                    <p class="infotext color-blue m-xxs-bottom rtl-text">
                                                                        {{ $vacancy['title_'.$lang] }}
                                                                    </p>
                                                                </a>
                                                                <div class="right-arrow-animation">
                                                                    <div>
                                                                        <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                            {{ $vacancy['title_'.$lang] }}
                                                                        </h3>

                                                                    </div>
                                                                    <div class="link m-xs-top right-arrow-animation">
                                                                        <a href="{{ route('contact') }}"
                                                                           class="color-blue link-label m-xxs-right paragraph-s">
                                                                            <span>Biz bilan bog'lanib va batafsil ma'lumot oling</span>
                                                                            <span
                                                                                class="icon icon-right-arrow m-xxs-left"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hamkorlik -->
        <div class="plaintext aem-GridColumn aem-GridColumn--default--12">
            <div>
                <div class="background gutters component-padding-top frame tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                    <div>
                        <div class="introplaintext-wrapper">
                            <div class="titlegrid tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                <div class="frame small tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2">
                                    <h1 class="text plaintexttitle title color-blue smalltitle">Сотрудничество</h1>
                                </div>
                            </div>
                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                <div class="frame-box tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 frame-padding frame small"
                                     style="background-color: rgb(226, 240, 250)">
                                    <div class="text color-blue intro leadtext frame right-column tb-GridColumn tb-GridColumn--l--16 tb-GridColumn--m--19 tb-GridColumn--s--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1">
                                        Для определенных тем, специальных форм сотрудничества или региональных кластеров совершенства
                                        мы разработали специальные инициативы по сотрудничеству. Узнайте о них больше здесь и
                                        свяжитесь с нами, если это правильный путь для совместного продвижения изменений.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="layoutcontainergrid responsivegrid aem-GridColumn aem-GridColumn--default--12">
            <div class="layout-container-grid">
                <div class="gutters component-padding-bottom frame outer-container" style="background-color: white">
                    <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24">
                        <div class="frame-padding tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                             style="background-color: rgb(226, 240, 250)">
                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--22 tb-Grid--m--24 tb-Grid--s--24">
                                <div class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1">
                                    <div class="rowcontainer">
                                        <div>
                                            <div class="contentgrid_row">
                                                <div class="columns-3 column has-content-true column-2 top_align contentgrid_column">
                                                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                        <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                            <div class="image-video-wrapper">
                                                                <a href="#!" target="_self" aria-label="Открытые инновации">
                                                                    <div class="image-video text-center m-xs-bottom">
                                                                        <picture>
                                                                            <img src="/assets/img/ugp.png"
                                                                                 alt="Обмен соединениями"
                                                                                 loading="eager" height="50" width="50px" />
                                                                        </picture>
                                                                    </div>
                                                                </a>
                                                                <div class="right-arrow-animation">
                                                                    <a href="#!" target="_self" aria-label="Открытые инновации">
                                                                        <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                            <span style="vertical-align: inherit">UZGERMED PHARM</span>
                                                                        </h3>
                                                                        <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                    <span style="vertical-align: inherit">
                                                                        Для ускорения инноваций мы открыто делимся новыми аналогами
                                                                        пептидов и белков, а также антителами для доклинических исследований.
                                                                    </span>
                                                                        </p>
                                                                    </a>
                                                                    <div class="link m-xs-top">
                                                                        <a href="/#!" target="_self"
                                                                           class="color-blue link-label paragraph-s">
                                                                            <span class="icon icon-right-arrow"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="columns-3 column has-content-true column-2 top_align contentgrid_column">
                                                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                        <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                            <div class="image-video-wrapper">
                                                                <a href="#!" target="_self" aria-label="Открытые инновации">
                                                                    <div class="image-video m-xs-bottom">
                                                                        <picture>
                                                                            <img src="/assets/img/samo.png"
                                                                                 alt="Обмен соединениями"  height="50" width="140"
                                                                                 loading="eager" />
                                                                        </picture>
                                                                    </div>
                                                                </a>
                                                                <div class="right-arrow-animation">
                                                                    <a href="#!" target="_self" aria-label="Открытые инновации">
                                                                        <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                            <span style="vertical-align: inherit">SAMO PHARM</span>
                                                                        </h3>
                                                                        <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                    <span style="vertical-align: inherit">
                                                                        Для ускорения инноваций мы открыто делимся новыми аналогами
                                                                        пептидов и белков, а также антителами для доклинических исследований.
                                                                    </span>
                                                                        </p>
                                                                    </a>
                                                                    <div class="link m-xs-top">
                                                                        <a href="/#!" target="_self"
                                                                           class="color-blue link-label paragraph-s">
                                                                            <span class="icon icon-right-arrow"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="columns-3 column has-content-true column-2 top_align contentgrid_column">
                                                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                        <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                            <div class="image-video-wrapper">
                                                                <a href="#!" target="_self" aria-label="Открытые инновации">
                                                                    <div class="image-video m-xs-bottom">
                                                                        <picture>
                                                                            <img src="/assets/img/fazo.png" height="50"
                                                                                 alt="Обмен соединениями"
                                                                                 loading="eager" />
                                                                        </picture>
                                                                    </div>
                                                                </a>
                                                                <div class="right-arrow-animation">
                                                                    <a href="#!" target="_self" aria-label="Открытые инновации">
                                                                        <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                            <span style="vertical-align: inherit">FAZO LUXE</span>
                                                                        </h3>
                                                                        <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                            <span style="vertical-align: inherit">
                                Для ускорения инноваций мы открыто делимся новыми аналогами
                                пептидов и белков, а также антителами для доклинических исследований.
                            </span>
                                                                        </p>
                                                                    </a>
                                                                    <div class="link m-xs-top">
                                                                        <a href="/#!" target="_self"
                                                                           class="color-blue link-label paragraph-s">
                                                                            <span class="icon icon-right-arrow"></span>
                                                                        </a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="latestnews aem-GridColumn aem-GridColumn--default--12">
            <link
                rel="stylesheet"
                href="../../etc.clientlibs/nncorp/components/content/latestnews/clientlibs.min.a1f7e572aebdf91698a9fc1a299819a6.css"
                type="text/css"
            />
            <script
                type="text/javascript"
                src="../../etc.clientlibs/nncorp/components/content/latestnews/clientlibs.min.8306cb4bab4d3bacfe44f54d8eaee07c.js"
                async=""
            ></script>

            <div class="gutters component-padding" style="background-color: white">
                <div class="ln-wrapper small tb-Grid tb-Grid--24 tb-Grid--l--24">
                    <div class="ln-header tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--offset--l--2">
                        <h1 class="h1-s">Последние новости</h1>
                    </div>
                    <div class="ln-box tb-GridColumn tb-GridColumn--l--24" style="background-color: white">
                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24">
                            <div
                                class="ln-container tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--2">
                                <div class="ln-link-list d-flex">
                                    @foreach ($latestNews as $news)
                                        <a href="{{route('single.news',$news->id)}}"
                                           aria-label="{{ $news['title_'.$lang] }}"
                                           class="ln-link-item m-l-bottom right-arrow-animation color-blue">
                                            <p class="job-name">
                                                {{ $news->date }}
                                            </p>
                                            <div class="location-info m-xxs-top">
                                                <p class="paragraph-s">
                                                    {!!   \Illuminate\Support\Str::words($news['content_'.$lang], 10, '...') !!}
                                                </p>
                                            </div>
                                            <div class="job-category m-xxs-top">
                                                <p class="paragraph-s">
                                                    <font style="vertical-align: inherit"><font
                                                            style="vertical-align: inherit">Ko'proq o'qish</font></font>
                                                    <span class="icon icon-right-arrow m-xxs-left"></span>
                                                </p>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
