@extends('layouts.pages')

@section('content')
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
            <div class="herodeck image aem-GridColumn aem-GridColumn--default--12">
                <link rel="stylesheet" href="etc.clientlibs/nncorp/clientlibs/vuejs/components/megatext.min.css" type="text/css" /><link
                    rel="stylesheet"
                    href="etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.css"
                    type="text/css"
                /><link rel="stylesheet" href="etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.css" type="text/css" /><link
                    rel="stylesheet"
                    href="etc.clientlibs/nncorp/components/content/herodeck/v2/herodeck/clientlib/clientlib-herodeck.min.b0ee3d6796724965856ff41e0ab265cd.css"
                    type="text/css"
                />
                <script type="text/javascript" src="etc.clientlibs/nncorp/clientlibs/vuejs/components/megatext.min.js"></script>
                <script type="text/javascript" src="etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.js"></script>
                <script type="text/javascript" src="etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.js"></script>
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
                                    <div class="details-wrapper gutters" v-bind:style="{ opacity: isDetailInViewport('0') }">
                                        <div class="tb-Grid details-info m-xxl-bottom" ref="titleContainer">
                                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24 m-xxs-bottom">
                                                <div
                                                    class="tb-GridColumn tb-GridColumn--l--12 tb-GridColumn--m--12 tb-GridColumn--s--12 tb-GridColumn--xs--16 tb-GridColumn--offset--l--0 tb-GridColumn--offset--m--2 tb-GridColumn--offset--s--2 tb-GridColumn--offset--xs--2"
                                                >
                                                    <div class="details-title">
                                                        <h2 class="h2">Kompaniya bayonoti</h2>
                                                    </div>
                                                    <h4
                                                        class="richtext"
                                                        v-html="applyContentStyle('Biz uchta chiqarish maydonchasini sotib olishni yakunlash bilan muhim bosqichga erishdik. Novo Holding A/S')"
                                                    ></h4>
                                                </div>
                                            </div>
                                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                                <div
                                                    class="tb-GridColumn tb-GridColumn--m--20 tb-GridColumn--offset--l--0 tb-GridColumn--offset--m--2 tb-GridColumn--offset--s--2 tb-GridColumn--offset--xs--2"
                                                >
                                                    <div class="details-button">
                                                        <a aria-label="İrsimiz haqqında məlumat əldə edin" href="./uz/news/news.html" target="_self">
                                                            <button class="button desktop-button m-s-top button-link-animation">
                                                                <span class="text">Eng so'nggi yangiliklarni o'qing</span>
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
                                    <div class="details-wrapper gutters" v-bind:style="{ opacity: isDetailInViewport('1') }">
                                        <div class="tb-Grid details-info m-xxl-bottom" ref="titleContainer">
                                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24 m-xxs-bottom">
                                                <div
                                                    class="tb-GridColumn tb-GridColumn--l--12 tb-GridColumn--m--12 tb-GridColumn--s--12 tb-GridColumn--xs--16 tb-GridColumn--offset--l--0 tb-GridColumn--offset--m--2 tb-GridColumn--offset--s--2 tb-GridColumn--offset--xs--2"
                                                >
                                                    <div class="details-title">
                                                        <h2 class="h2" v-html="applyContentStyle('O‘zgarishni ilgari surish')"></h2>
                                                    </div>
                                                    <h4
                                                        class="richtext"
                                                        v-html="applyContentStyle('Biz diabet va boshqa jiddiy surunkali kasalliklarni yengish uchun o‘zgarishni ilgari surmoqdamiz.\r\n')"
                                                    ></h4>
                                                </div>
                                            </div>
                                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                                <div
                                                    class="tb-GridColumn tb-GridColumn--m--20 tb-GridColumn--offset--l--0 tb-GridColumn--offset--m--2 tb-GridColumn--offset--s--2 tb-GridColumn--offset--xs--2"
                                                >
                                                    <div class="details-button">
                                                        <a aria-label="Biz nimalar qilamiz" href="uz/about/what-we-do.html" target="_self">
                                                            <button class="button desktop-button m-s-top button-link-animation">
                                                                <span class="text">Biz nimalar qilamiz</span>
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
                    <div class="gutters component-padding-topAndBottom color outer-container" style="background-color: rgb(226, 240, 250)">
                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24">
                            <div class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--offset--l--2 container-grid-header">
                                <p class="tagline m-xxs-bottom">
                                    <span style="vertical-align: inherit">Mahsulotlar</span>
                                </p>
                                <h2 class="h5-s m-xs-bottom title">
                                    <span style="vertical-align: inherit">Dorilar</span>
                                </h2>
                                <p class="description leadtext m-m-bottom">
                                            <span style="vertical-align: inherit"
                                            >Quyida mavjud bo'lgan insulin qalamlari tanlovini ko'ring. Sizni qiziqtirgan qalamga boring va diabetga qarshi dori-darmonlarni
                                                qabul qilish uchun insulin qalamini qanday ishlatishni o'rganing.</span
                                            >
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
                                                <div class="columns-3 column has-content-true column-0 top_align contentgrid_column">
                                                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                        <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                            <a href="./uz/our-products/product_single.html" target="_self" aria-label="NovoPen 4 sahifasiga havola"></a>
                                                            <div class="image-video-wrapper">
                                                                <a href="./product_single.html" target="_self" aria-label="NovoPen<sup>®</sup> 4 sahifasiga havola"
                                                                ><div class="image-video-content-wrapper m-xs-bottom">
                                                                        <img
                                                                            src="https://images.novonordisk.com/is/image/novonordiskas/Overview-NovoPen4?wid=768&amp;fit=constrain&amp;qlt=90&amp;$$&amp;&amp;fmt=png-alpha"
                                                                            alt="NovoPen® 4"
                                                                            loading="eager"
                                                                        /></div
                                                                    ></a>
                                                                <div class="right-arrow-animation">
                                                                    <a href="javascript:void(0)" target="_self" aria-label="NovoPensup>®/sup> 4 sahifasiga havola">
                                                                        <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                            <span style="vertical-align: inherit">NovoPen </span>
                                                                            <sup> ® </sup>
                                                                            <span style="vertical-align: inherit"> 4</span>
                                                                        </h3>
                                                                        <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                    <span style="vertical-align: inherit">
                                                                                        4 mustahkam dizayni bilan ishlatish uchun oddiy. U to'g'ri insulin etkazib berish uchun
                                                                                        dozani bosishning eshitiladigan dozasini etkazib berishni o'z ichiga oladi.</span
                                                                                    >
                                                                        </p>
                                                                    </a>
                                                                    <div class="link m-xs-top">
                                                                        <a href="javascript:void(0)" target="_self" aria-label="NovoPen<sup>®</sup> 4 sahifasiga havola"></a
                                                                        ><a href="javascript:void(0)" target="_self" class="color-blue link-label paragraph-s"
                                                                        ><span class="icon icon-right-arrow"></span
                                                                            ></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="columns-3 column has-content-true column-0 top_align contentgrid_column">
                                                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                        <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                            <link
                                                                rel="stylesheet"
                                                                href="/etc.clientlibs/nncorp/components/content/image-video/clientlibs.min.d6f3af1e3efca5e63b4d0dbb00c396bd.css"
                                                                type="text/css"
                                                            />
                                                            <div>
                                                                <a
                                                                    href="./uz/our-products/product_single.html"
                                                                    target="_self"
                                                                    aria-label="NovoPen<sup>®</sup> 4 sahifasiga havola"
                                                                ></a>
                                                                <div class="image-video-wrapper">
                                                                    <a href="./product_single.html" target="_self" aria-label="NovoPen<sup>®</sup> 4 sahifasiga havola"
                                                                    ><div class="image-video-content-wrapper m-xs-bottom">
                                                                            <picture>
                                                                                <img
                                                                                    src="https://images.novonordisk.com/is/image/novonordiskas/Overview-NovoPen4?wid=768&amp;fit=constrain&amp;qlt=90&amp;$$&amp;&amp;fmt=png-alpha"
                                                                                    alt="NovoPen® 4"
                                                                                    loading="eager"
                                                                                /></picture></div
                                                                        ></a>
                                                                    <div class="right-arrow-animation">
                                                                        <a href="javascript:void(0)" target="_self" aria-label="NovoPensup>®/sup> 4 sahifasiga havola">
                                                                            <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                                <span style="vertical-align: inherit">NovoPen </span>
                                                                                <sup> ® </sup>
                                                                                <span style="vertical-align: inherit"> 4</span>
                                                                            </h3>
                                                                            <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                        <span style="vertical-align: inherit">
                                                                                            4 mustahkam dizayni bilan ishlatish uchun oddiy. U to'g'ri insulin etkazib berish uchun
                                                                                            dozani bosishning eshitiladigan dozasini etkazib berishni o'z ichiga oladi.</span
                                                                                        >
                                                                            </p>
                                                                        </a>
                                                                        <div class="link m-xs-top">
                                                                            <a
                                                                                href="javascript:void(0)"
                                                                                target="_self"
                                                                                aria-label="NovoPen<sup>®</sup> 4 sahifasiga havola"
                                                                            ></a
                                                                            ><a href="javascript:void(0)" target="_self" class="color-blue link-label paragraph-s"
                                                                            ><span class="icon icon-right-arrow"></span
                                                                                ></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="columns-3 column has-content-true column-0 top_align contentgrid_column">
                                                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                        <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                            <link
                                                                rel="stylesheet"
                                                                href="/etc.clientlibs/nncorp/components/content/image-video/clientlibs.min.d6f3af1e3efca5e63b4d0dbb00c396bd.css"
                                                                type="text/css"
                                                            />
                                                            <div>
                                                                <a
                                                                    href="./uz/our-products/product_single.html"
                                                                    target="_self"
                                                                    aria-label="NovoPen<sup>®</sup> 4 sahifasiga havola"
                                                                ></a>
                                                                <div class="image-video-wrapper">
                                                                    <a href="./product_single.html" target="_self" aria-label="NovoPen<sup>®</sup> 4 sahifasiga havola"
                                                                    ><div class="image-video-content-wrapper m-xs-bottom">
                                                                            <picture>
                                                                                <img
                                                                                    src="https://images.novonordisk.com/is/image/novonordiskas/Overview-NovoPen4?wid=768&amp;fit=constrain&amp;qlt=90&amp;$$&amp;&amp;fmt=png-alpha"
                                                                                    alt="NovoPen® 4"
                                                                                    loading="eager"
                                                                                /></picture></div
                                                                        ></a>
                                                                    <div class="right-arrow-animation">
                                                                        <a href="javascript:void(0)" target="_self" aria-label="NovoPensup>®/sup> 4 sahifasiga havola">
                                                                            <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                                <span style="vertical-align: inherit">NovoPen </span>
                                                                                <sup> ® </sup>
                                                                                <span style="vertical-align: inherit"> 4</span>
                                                                            </h3>
                                                                            <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                        <span style="vertical-align: inherit">
                                                                                            4 mustahkam dizayni bilan ishlatish uchun oddiy. U to'g'ri insulin etkazib berish uchun
                                                                                            dozani bosishning eshitiladigan dozasini etkazib berishni o'z ichiga oladi.</span
                                                                                        >
                                                                            </p>
                                                                        </a>
                                                                        <div class="link m-xs-top">
                                                                            <a
                                                                                href="javascript:void(0)"
                                                                                target="_self"
                                                                                aria-label="NovoPen<sup>®</sup> 4 sahifasiga havola"
                                                                            ></a
                                                                            ><a href="javascript:void(0)" target="_self" class="color-blue link-label paragraph-s"
                                                                            ><span class="icon icon-right-arrow"></span
                                                                                ></a>
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
                    <div class="gutters component-padding-topAndBottom frame shift outer-container" style="background-color: white">
                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24">
                            <div class="frame small tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2">
                                <h1 class="text plaintexttitle title color-blue smalltitle">Karyera</h1>
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
                                                <div class="columns-3 column has-content-true column-0 top_align contentgrid_column">
                                                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                        <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                            <div class="image-video-wrapper">
                                                                <a href="./uz/our-products/product_single.html"
                                                                ><div class="image-video-content-wrapper m-xs-bottom">
                                                                        <img
                                                                            src="https://images.novonordisk.com/is/image/novonordiskas/Supply%20Chain_OARF-NovoChina261119-1117?wid=768&amp;fit=constrain&amp;qlt=90&amp;$$"
                                                                            alt="Novo Nordisk magistratura dasturi"
                                                                            loading="eager"
                                                                        />
                                                                    </div>
                                                                    <p class="infotext color-blue m-xxs-bottom rtl-text">
                                                                        <span style="vertical-align: inherit">Magistr darajangizdan foydalaning</span>
                                                                    </p></a
                                                                >
                                                                <div class="right-arrow-animation">
                                                                    <div target="_blank">
                                                                        <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                            <span style="vertical-align: inherit">Novo Nordisk magistratura dasturi</span>
                                                                        </h3>
                                                                        <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                    <span style="vertical-align: inherit"
                                                                                    >Novo Nordisk Graduate Programme bilan global karerani boshlang, bu kamida uch marta, shu
                                                                                        jumladan kamida bitta xalqaro rotatsiya bilan 2 yillik global martaba sayohati.
                                                                                    </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="link m-xs-top">
                                                                        <div class="color-blue link-label paragraph-s">
                                                                            <span class="icon icon-right-arrow"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="columns-3 column has-content-true column-0 top_align contentgrid_column">
                                                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                        <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                            <div class="image-video-wrapper">
                                                                <a href="./uz/our-products/product_single.html"
                                                                ><div class="image-video-content-wrapper m-xs-bottom">
                                                                        <img
                                                                            src="https://images.novonordisk.com/is/image/novonordiskas/Supply%20Chain_OARF-NovoChina261119-1117?wid=768&amp;fit=constrain&amp;qlt=90&amp;$$"
                                                                            alt="Novo Nordisk magistratura dasturi"
                                                                            loading="eager"
                                                                        />
                                                                    </div>
                                                                    <p class="infotext color-blue m-xxs-bottom rtl-text">
                                                                        <span style="vertical-align: inherit">Magistr darajangizdan foydalaning</span>
                                                                    </p></a
                                                                >
                                                                <div class="right-arrow-animation">
                                                                    <div target="_blank">
                                                                        <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                            <span style="vertical-align: inherit">Novo Nordisk magistratura dasturi</span>
                                                                        </h3>
                                                                        <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                    <span style="vertical-align: inherit"
                                                                                    >Novo Nordisk Graduate Programme bilan global karerani boshlang, bu kamida uch marta, shu
                                                                                        jumladan kamida bitta xalqaro rotatsiya bilan 2 yillik global martaba sayohati.
                                                                                    </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="link m-xs-top">
                                                                        <div class="color-blue link-label paragraph-s">
                                                                            <span class="icon icon-right-arrow"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="columns-3 column has-content-true column-0 top_align contentgrid_column">
                                                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                        <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                            <div class="image-video-wrapper">
                                                                <a href="./uz/our-products/product_single.html"
                                                                ><div class="image-video-content-wrapper m-xs-bottom">
                                                                        <img
                                                                            src="https://images.novonordisk.com/is/image/novonordiskas/Supply%20Chain_OARF-NovoChina261119-1117?wid=768&amp;fit=constrain&amp;qlt=90&amp;$$"
                                                                            alt="Novo Nordisk magistratura dasturi"
                                                                            loading="eager"
                                                                        />
                                                                    </div>
                                                                    <p class="infotext color-blue m-xxs-bottom rtl-text">
                                                                        <span style="vertical-align: inherit">Magistr darajangizdan foydalaning</span>
                                                                    </p></a
                                                                >
                                                                <div class="right-arrow-animation">
                                                                    <div target="_blank">
                                                                        <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                            <span style="vertical-align: inherit">Novo Nordisk magistratura dasturi</span>
                                                                        </h3>
                                                                        <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                    <span style="vertical-align: inherit"
                                                                                    >Novo Nordisk Graduate Programme bilan global karerani boshlang, bu kamida uch marta, shu
                                                                                        jumladan kamida bitta xalqaro rotatsiya bilan 2 yillik global martaba sayohati.
                                                                                    </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="link m-xs-top">
                                                                        <div class="color-blue link-label paragraph-s">
                                                                            <span class="icon icon-right-arrow"></span>
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
            <!-- Hamkorlik -->
            <div class="plaintext aem-GridColumn aem-GridColumn--default--12">
                <div>
                    <div class="background gutters component-padding-top frame tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                        <div>
                            <div class="introplaintext-wrapper">
                                <div class="titlegrid tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                    <div class="frame small tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2">
                                        <h1 class="text plaintexttitle title color-blue smalltitle">Hamkorlik</h1>
                                    </div>
                                </div>
                                <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                    <div
                                        class="frame-box tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 frame-padding frame small"
                                        style="background-color: rgb(226, 240, 250)"
                                    >
                                        <div
                                            class="text color-blue intro leadtext frame right-column tb-GridColumn tb-GridColumn--l--16 tb-GridColumn--m--19 tb-GridColumn--s--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1"
                                        >
                                            Muayyan mavzular, hamkorlikning maxsus shakllari yoki mintaqaviy mukammallik klasterlari uchun biz maxsus hamkorlik
                                            tashabbuslarini yaratdik. Bu yerda ular haqida koʻproq bilib oling va oʻzgarishlarni birgalikda olib borishimiz uchun toʻgʻri
                                            yoʻl boʻlsa, biz bilan bogʻlaning.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="gutters component-padding-bottom frame outer-container" style="background-color: white">
                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24">
                            <div
                                class="frame-padding tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                                style="background-color: rgb(226, 240, 250)"
                            >
                                <div class="tb-Grid tb-Grid--24 tb-Grid--l--22 tb-Grid--m--24 tb-Grid--s--24">
                                    <div
                                        class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                                    >
                                        <div class="rowcontainer">
                                            <div>
                                                <div class="contentgrid_row">
                                                    <div class="columns-3 column has-content-true column-2 top_align contentgrid_column">
                                                        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                            <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                <div class="image-video-wrapper">
                                                                    <a
                                                                        href="/partnering-and-open-innovation/compound-sharing.html"
                                                                        target="_self"
                                                                        aria-label="Ochiq innovatsiya"
                                                                    ><div class="image-video-content-wrapper m-xs-bottom">
                                                                            <picture>
                                                                                <img
                                                                                    src="https://images.novonordisk.com/is/image/novonordiskas/Compound-sharing-image?wid=768&amp;fit=constrain&amp;qlt=90&amp;$$"
                                                                                    alt="Murakkab almashish"
                                                                                    loading="eager"
                                                                                />
                                                                            </picture></div
                                                                        ></a>
                                                                    <div class="right-arrow-animation">
                                                                        <a
                                                                            href="/partnering-and-open-innovation/compound-sharing.html"
                                                                            target="_self"
                                                                            aria-label="Ochiq innovatsiya"
                                                                        ><h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                                <span style="vertical-align: inherit">Murakkab almashish</span>
                                                                            </h3>
                                                                            <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                        <span style="vertical-align: inherit"
                                                                                        >Innovatsiyalarni tezlashtirish uchun biz yangi peptid va oqsil analoglarini,
                                                                                            shuningdek, klinikadan oldingi tadqiqotlar uchun antikorlarni ochiq baham
                                                                                            ko'ramiz.</span
                                                                                        >
                                                                            </p></a
                                                                        >
                                                                        <div class="link m-xs-top">
                                                                            <a
                                                                                href="/partnering-and-open-innovation/compound-sharing.html"
                                                                                target="_self"
                                                                                class="color-blue link-label paragraph-s"
                                                                            ><span class="icon icon-right-arrow"></span
                                                                                ></a>
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
                                                                    <a
                                                                        href="/partnering-and-open-innovation/compound-sharing.html"
                                                                        target="_self"
                                                                        aria-label="Ochiq innovatsiya"
                                                                    ><div class="image-video-content-wrapper m-xs-bottom">
                                                                            <picture>
                                                                                <img
                                                                                    src="https://images.novonordisk.com/is/image/novonordiskas/Compound-sharing-image?wid=768&amp;fit=constrain&amp;qlt=90&amp;$$"
                                                                                    alt="Murakkab almashish"
                                                                                    loading="eager"
                                                                                />
                                                                            </picture></div
                                                                        ></a>
                                                                    <div class="right-arrow-animation">
                                                                        <a
                                                                            href="/partnering-and-open-innovation/compound-sharing.html"
                                                                            target="_self"
                                                                            aria-label="Ochiq innovatsiya"
                                                                        ><h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                                <span style="vertical-align: inherit">Murakkab almashish</span>
                                                                            </h3>
                                                                            <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                        <span style="vertical-align: inherit"
                                                                                        >Innovatsiyalarni tezlashtirish uchun biz yangi peptid va oqsil analoglarini,
                                                                                            shuningdek, klinikadan oldingi tadqiqotlar uchun antikorlarni ochiq baham
                                                                                            ko'ramiz.</span
                                                                                        >
                                                                            </p></a
                                                                        >
                                                                        <div class="link m-xs-top">
                                                                            <a
                                                                                href="/partnering-and-open-innovation/compound-sharing.html"
                                                                                target="_self"
                                                                                class="color-blue link-label paragraph-s"
                                                                            ><span class="icon icon-right-arrow"></span
                                                                                ></a>
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
                                                                    <a
                                                                        href="/partnering-and-open-innovation/compound-sharing.html"
                                                                        target="_self"
                                                                        aria-label="Ochiq innovatsiya"
                                                                    ><div class="image-video-content-wrapper m-xs-bottom">
                                                                            <picture>
                                                                                <img
                                                                                    src="https://images.novonordisk.com/is/image/novonordiskas/Compound-sharing-image?wid=768&amp;fit=constrain&amp;qlt=90&amp;$$"
                                                                                    alt="Murakkab almashish"
                                                                                    loading="eager"
                                                                                />
                                                                            </picture></div
                                                                        ></a>
                                                                    <div class="right-arrow-animation">
                                                                        <a
                                                                            href="/partnering-and-open-innovation/compound-sharing.html"
                                                                            target="_self"
                                                                            aria-label="Ochiq innovatsiya"
                                                                        ><h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                                <span style="vertical-align: inherit">Murakkab almashish</span>
                                                                            </h3>
                                                                            <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                        <span style="vertical-align: inherit"
                                                                                        >Innovatsiyalarni tezlashtirish uchun biz yangi peptid va oqsil analoglarini,
                                                                                            shuningdek, klinikadan oldingi tadqiqotlar uchun antikorlarni ochiq baham
                                                                                            ko'ramiz.</span
                                                                                        >
                                                                            </p></a
                                                                        >
                                                                        <div class="link m-xs-top">
                                                                            <a
                                                                                href="/partnering-and-open-innovation/compound-sharing.html"
                                                                                target="_self"
                                                                                class="color-blue link-label paragraph-s"
                                                                            ><span class="icon icon-right-arrow"></span
                                                                                ></a>
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
                            <h1 class="h1-s">So'ngi yangiliklar</h1>
                        </div>
                        <div class="ln-box tb-GridColumn tb-GridColumn--l--24" style="background-color: white">
                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24">
                                <div class="ln-container tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--2">
                                    <div class="ln-link-list">
                                        <a href="./news-details.html" aria-label="" class="ln-link-item m-l-bottom right-arrow-animation color-blue"
                                        ><p class="job-name">
                                                <font style="vertical-align: inherit"
                                                ><font style="vertical-align: inherit"
                                                    ><font style="vertical-align: inherit"><font style="vertical-align: inherit">2024 yil 20 dekabr</font></font></font
                                                    ></font
                                                >
                                            </p>
                                            <div class="location-info m-xxs-top">
                                                <p class="paragraph-s">
                                                    <font style="vertical-align: inherit"
                                                    ><font style="vertical-align: inherit"
                                                        ><font style="vertical-align: inherit"
                                                            ><font style="vertical-align: inherit"
                                                                >Novo Nordisk A/S: CagriSema REDEFINE 1 sinovida semirib ketgan yoki ortiqcha vaznli kattalarda yuqori
                                                                    vazn yo'qotishini namoyish etadi.</font
                                                                ></font
                                                            ></font
                                                        ></font
                                                    >
                                                </p>
                                            </div>
                                            <div class="job-category m-xxs-top">
                                                <p class="paragraph-s">
                                                    <font style="vertical-align: inherit"
                                                    ><font style="vertical-align: inherit"
                                                        ><font style="vertical-align: inherit"><font style="vertical-align: inherit">Ko'proq o'qish</font></font></font
                                                        ></font
                                                    ><span class="icon icon-right-arrow m-xxs-left"></span>
                                                </p></div
                                            ></a>
                                        <a href="./news-details.html" aria-label="" class="ln-link-item m-l-bottom right-arrow-animation color-blue"
                                        ><p class="job-name">
                                                <font style="vertical-align: inherit"
                                                ><font style="vertical-align: inherit"
                                                    ><font style="vertical-align: inherit"><font style="vertical-align: inherit">2024 yil 18 dekabr</font></font></font
                                                    ></font
                                                >
                                            </p>
                                            <div class="location-info m-xxs-top">
                                                <p class="paragraph-s">
                                                    <font style="vertical-align: inherit"
                                                    ><font style="vertical-align: inherit"
                                                        ><font style="vertical-align: inherit"
                                                            ><font style="vertical-align: inherit"
                                                                >Novo Holdings tomonidan Catalentni sotib olish va Novo Nordisk tomonidan Novo Holdingsdan uchta ishlab
                                                                    chiqarish maydonchasini sotib olish yakunlandi.</font
                                                                ></font
                                                            ></font
                                                        ></font
                                                    >
                                                </p>
                                            </div>
                                            <div class="job-category m-xxs-top">
                                                <p class="paragraph-s">
                                                    <font style="vertical-align: inherit"
                                                    ><font style="vertical-align: inherit"
                                                        ><font style="vertical-align: inherit"><font style="vertical-align: inherit">Ko'proq o'qish</font></font></font
                                                        ></font
                                                    ><span class="icon icon-right-arrow m-xxs-left"></span>
                                                </p></div
                                            ></a>
                                        <a href="./news-details.html" aria-label="" class="ln-link-item m-l-bottom right-arrow-animation color-blue"
                                        ><p class="job-name">
                                                <font style="vertical-align: inherit"
                                                ><font style="vertical-align: inherit"
                                                    ><font style="vertical-align: inherit"><font style="vertical-align: inherit">2024 yil 16 dekabr</font></font></font
                                                    ></font
                                                >
                                            </p>
                                            <div class="location-info m-xxs-top">
                                                <p class="paragraph-s">
                                                    <font style="vertical-align: inherit"
                                                    ><font style="vertical-align: inherit"
                                                        ><font style="vertical-align: inherit"
                                                            ><font style="vertical-align: inherit"
                                                                >Novo Nordisk Daniyaning Odense shahridagi yangi ishlab chiqarish zavodiga 8,5 milliard DKK sarmoya
                                                                    kiritadi</font
                                                                ></font
                                                            ></font
                                                        ></font
                                                    >
                                                </p>
                                            </div>
                                            <div class="job-category m-xxs-top">
                                                <p class="paragraph-s">
                                                    <font style="vertical-align: inherit"
                                                    ><font style="vertical-align: inherit"
                                                        ><font style="vertical-align: inherit"><font style="vertical-align: inherit">Ko'proq o'qish</font></font></font
                                                        ></font
                                                    ><span class="icon icon-right-arrow m-xxs-left"></span>
                                                </p></div
                                            ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
