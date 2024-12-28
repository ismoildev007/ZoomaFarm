@extends('layouts.pages')

@section('content')
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
            <div class="supergraphic focuspointimage image aem-GridColumn aem-GridColumn--default--12">
                <link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.094b79e9edffe365bac8fe5c6a5249a6.css"
                    type="text/css"
                /><link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.6068dc105c5d342989cce8b2547f55f4.css"
                    type="text/css"
                /><link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/components/content/supergraphic/clientlib.min.8a33ce8cddfa7f9231da5479d3864335.css"
                    type="text/css"
                />

                <div id="supergraphic" class="super-graphic-wrapper" :class="readDetails" style="background-color: #e2f0fa">
                    <div class="box box-image tb-Grid tb-Grid--24 tb-Grid--l--24">
                        <div class="image">
                            <div
                                class="focuspoint-image desktop focuspoint-container"
                                style="
                                            background-image: url('https://images.novonordisk.com/is/image/novonordiskas/banner-novopen4?wid=1440&amp;fit=constrain&amp;qlt=90');
                                            background-position: 46% 42%;
                                            background-size: cover;
                                        "
                            ></div>

                            <div class="image-info m-xxs-top desktop">
                                <div><b class="infotext"></b></div>
                                <div>
                                    <span class="infotext">Berni Tyorner 1-toifa diabet bilan yashaydi, Buyuk Britaniya</span>
                                </div>
                            </div>
                        </div>
                        <div class="overlay gutters">
                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--xs--24 full-height">
                                <div
                                    class="tb-GridColumn tb-GridColumn--l--24 full-height tb-GridColumn--m--20 tb-GridColumn--offset--m--2 tb-GridColumn--xs--20 tb-GridColumn--offset--xs--2"
                                >
                                    <div class="container">
                                        <div class="title-wrapper mobileScreenHeight" ref="titleContainer" v-cloak="">
                                            <p class="tagline m-xxs-bottom" v-html="applyContentStyle('DURABLE PEN')"></p>
                                            <h1 class="title smalltitle m-xs-bottom">NovoPen</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            ref="section-wraper"
                            class="section-wraper gutters component-padding-topAndBottom tb-GridColumn tb-GridColumn--l--24"
                            style="background-color: #e2f0fa"
                        >
                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--xs--24">
                                <div
                                    class="frameinverted tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--offset--m--1 tb-GridColumn--xs--24 tb-GridColumn--offset--xs--0"
                                >
                                    <div class="long-container" style="background-color: white" :style="longContainerStyleMobile">
                                        <div
                                            :class="{'p-l-top' : !isMobileSize}"
                                            class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--xs--24"
                                            :style="longContainerStyle"
                                        >
                                            <div
                                                class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--offset--l--2 tb-GridColumn--m--22 tb-GridColumn--xs--20 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--2 text-container display-flex"
                                            >
                                                <h2 class="h2 m-xxs-bottom">
                                                    <b v-html="applyContentStyle('NovoPen Echo<sup>®<\/sup>')"></b>
                                                </h2>
                                                <div class="long-description richtext color-blue">
                                                    <p>
                                                        NovoPen Echo<sup>® </sup>oddiy xotira funksiyasi bilan ta'minlangan va nozik sozlangan yarim birlik oshirish
                                                        dozasiga ega.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script
                    type="text/javascript"
                    src="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.cc966df540d6516d8b8dd9196d81bdb8.js"
                ></script>
                <script
                    type="text/javascript"
                    src="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.20d3e6ed3229f97cad3ca9125a5de52a.js"
                ></script>
                <script
                    type="text/javascript"
                    src="../../etc.clientlibs/nncorp/components/content/supergraphic/clientlib.min.a6c04bd87d43dc3059886559ee41a1de.js"
                    async=""
                ></script>
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
                    <div class="gutters component-padding-topAndBottom white shift outer-container" style="background-color: white">
                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24">
                            <div
                                class="frame-padding tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                                style="background-color: white"
                            >
                                <div class="tb-Grid tb-Grid--24 tb-Grid--l--22 tb-Grid--m--24 tb-Grid--s--24">
                                    <div
                                        class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                                    >
                                        <div>
                                            <div class="rowcontainer">
                                                <div class="contentgrid_row">
                                                    <div class="columns-3 column has-content-true column-1 top_align contentgrid_column">
                                                        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                            <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                <div>
                                                                    <div>
                                                                        <div class="image-video-wrapper">
                                                                            <div class="image-video-content-wrapper m-xs-bottom">
                                                                                <img
                                                                                    src="https://images.novonordisk.com/is/image/novonordiskas/robust%20design%20flex?wid=768&amp;fit=constrain&amp;qlt=90&amp;$$"
                                                                                    alt="NovoPen"
                                                                                    loading="eager"
                                                                                />
                                                                            </div>
                                                                            <div class="right-arrow-animation">
                                                                                <h3 class="color-blue subtext subheadline paragraph-s rtl-text">Mustahkam dizayn</h3>
                                                                                <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                    To'g'ri insulin etkazib berish va quyi in'ektsiya kuchi
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="columns-3 column has-content-true column-1 top_align contentgrid_column">
                                                        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                            <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                <div>
                                                                    <div>
                                                                        <div class="image-video-wrapper">
                                                                            <div class="image-video-content-wrapper m-xs-bottom">
                                                                                <img
                                                                                    src="https://images.novonordisk.com/is/image/novonordiskas/robust%20design%20flex?wid=768&amp;fit=constrain&amp;qlt=90&amp;$$"
                                                                                    alt="NovoPen"
                                                                                    loading="eager"
                                                                                />
                                                                            </div>
                                                                            <div class="right-arrow-animation">
                                                                                <h3 class="color-blue subtext subheadline paragraph-s rtl-text">Mustahkam dizayn</h3>
                                                                                <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                    To'g'ri insulin etkazib berish va quyi in'ektsiya kuchi
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="columns-3 column has-content-true column-1 top_align contentgrid_column">
                                                        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                            <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                <div>
                                                                    <div>
                                                                        <div class="image-video-wrapper">
                                                                            <div class="image-video-content-wrapper m-xs-bottom">
                                                                                <img
                                                                                    src="https://images.novonordisk.com/is/image/novonordiskas/robust%20design%20flex?wid=768&amp;fit=constrain&amp;qlt=90&amp;$$"
                                                                                    alt="NovoPen"
                                                                                    loading="eager"
                                                                                />
                                                                            </div>
                                                                            <div class="right-arrow-animation">
                                                                                <h3 class="color-blue subtext subheadline paragraph-s rtl-text">Mustahkam dizayn</h3>
                                                                                <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                    To'g'ri insulin etkazib berish va quyi in'ektsiya kuchi
                                                                                </p>
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
            </div>
            <div class="accordion aem-GridColumn aem-GridColumn--default--12">
                <div class="cmp-accordion is-accordion gutters white" data-cmp-is="accordion" style="background-color: white">
                    <div id="accordion" class="cmp-accordion-list component-padding-topAndBottom">
                        <input ref="singleExpansion" type="hidden" value="false" />
                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--xs--24">
                            <div class="tb-GridColumn tb-GridColumn--l--22 tb-GridColumn--xs--24 tb-GridColumn--offset--l--1 tb-GridColumn--offset--xs--0">
                                <div
                                    id="accordion-item-0"
                                    class="cmp-accordion__item"
                                    :class="{'edit-mode': false}"
                                    data-cmp-hook-accordion="item"
                                    v-on:mouseover="onItemHover(0)"
                                >
                                    <div
                                        class="cmp-accordion__item-background tb-Grid tb-Grid--22 tb-Grid--l--22 tb-Grid--m--22 tb-Grid--xs--24"
                                        :style="{'background': background(0)}"
                                        v-cloak=""
                                    >
                                        <div
                                            class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--1 tb-GridColumn--offset--xs--2 cmp-accordion__item-wrapper"
                                        >
                                            <h2 class="cmp-accordion__header" v-on:click="handleClick(0)">
                                                <button class="cmp-accordion__button" data-cmp-hook-accordion="button">
                                                    <span class="cmp-accordion__title"><h3 class="h6" v-html="applyContentStyle('Ma`lumotlar')"></h3></span>
                                                    <span class="cmp-accordion__icon"></span>
                                                    <span class="icon icon-plus"
                                                    ><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span
                                                        ></span>
                                                </button>
                                            </h2>
                                            <div
                                                data-cmp-hook-accordion="panel"
                                                class="cmp-accordion__panel cmp-accordion__panel--hidden"
                                                role="region"
                                                ref="panel-0"
                                                :style="{'--accordion-height': panelHeight[0]}"
                                            >
                                                <div class="accordioncontent">
                                                    <div class="ac-wrapper p-m-bottom">
                                                        <div class="richtext color-blue paragraph-s">
                                                            <p>1. Olsen va boshqalar, Qandli diabet fanlari va texnologiyasi jurnali, 2010 yil</p>
                                                            <p>2. Adolfsson va boshqalar, Hozirgi tibbiy tadqiqotlar va fikr, 2012</p>
                                                            <p>3. Kristensen va boshqalar, Hozirgi tibbiy tadqiqotlar va fikr, 2011 yil</p>
                                                            <p>4. NovoPen<sup>®</sup> Echo DVT hisoboti</p>
                                                        </div>
                                                        <div class="iframe-box p-s-top"></div>
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

            <div style="" class="layoutcontainergrid responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="layout-container-grid">
                    <div class="gutters component-padding-none color outer-container" style="background-color: #e2f0fa">
                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24">
                            <div
                                class="frame-padding tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                                style="background-color: #e2f0fa"
                            >
                                <div class="tb-Grid tb-Grid--24 tb-Grid--l--22 tb-Grid--m--24 tb-Grid--s--24">
                                    <div
                                        class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                                    >
                                        <div>
                                            <div class="rowcontainer">
                                                <div>
                                                    <div class="contentgrid_row">
                                                        <div class="columns-1 column has-content-true column-0 top_align contentgrid_column">
                                                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                                <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                    <div style="padding-top: 50px">
                                                                        <a target="_self">
                                                                            <div class="image-video-wrapper">
                                                                                <div class="image-video-content-wrapper m-xs-bottom">
                                                                                    <div aria-label="How to use NovoPen Echo® - Quick Guide" class="video">
                                                                                        <div style="width: 100%; height: 0; position: relative; padding-bottom: 56.25%">
                                                                                            <iframe
                                                                                                src="https://video.novonordisk.com/v.ihtml/player.html?token=5bd05ddf356dac4b7ba3206f94542c33&source=embed&photo%5fid=67589164"
                                                                                                style="width: 100%; height: 100%; position: absolute; top: 0; left: 0"
                                                                                                frameborder="0"
                                                                                                border="0"
                                                                                                scrolling="no"
                                                                                                mozallowfullscreen="1"
                                                                                                webkitallowfullscreen="1"
                                                                                                allowfullscreen="1"
                                                                                                allow="autoplay; fullscreen"
                                                                                            ></iframe>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="right-arrow-animation">
                                                                                    <h3
                                                                                        class="color-blue subtext subheadline paragraph-s rtl-text"
                                                                                        v-html="applyContentStyle('')"
                                                                                    ></h3>
                                                                                    <p
                                                                                        class="color-blue subtext paragraph-s paragraph-line-break rtl-text"
                                                                                        v-html="applyContentStyle('')"
                                                                                    ></p>
                                                                                </div>
                                                                            </div>
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

            <div class="plaintext aem-GridColumn aem-GridColumn--default--12">
                <div>
                    <div
                        class="background gutters component-padding-topAndBottom color tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24"
                        style="background-color: #e2f0fa"
                    >
                        <div>
                            <div class="introplaintext-wrapper">
                                <div class="titlegrid tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                    <div class="color small tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2">
                                        <div class="tb-Grid tb-Grid--20 tb-Grid--l--20 tb-Grid--m--20 tb-Grid--s--20 tb-Grid--xs--20">
                                            <div class="tb-GridColumn tb-GridColumn--l--6 tb-GridColumn--m--9 tb-GridColumn--s--12 tb-GridColumn--xs--20"></div>

                                            <div class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--16 tb-GridColumn--s--18 tb-GridColumn--xs--20"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                    <div
                                        class="tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--xs--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1 tb-GridColumn--offset--xs--1"
                                    >
                                        <div
                                            class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 no-frame-padding color small"
                                            style="background-color: #e2f0fa"
                                        >
                                            <div>
                                                <div>
                                                    <div class="columns tb-Grid tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22">
                                                        <div
                                                            class="left-column tb-GridColumn tb-GridColumn--l--5 tb-GridColumn--m--5 tb-GridColumn--s--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 m-s-bottom"
                                                        >
                                                            <h3 class="h2 color-blue text">
                                                                <b v-html="applyContentStyle('Dosing options')"></b>
                                                            </h3>
                                                        </div>
                                                        <div
                                                            class="right-column color-blue paragraph-l tb-GridColumn tb-GridColumn--l--13 tb-GridColumn--m--13 tb-GridColumn--s--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--2 tb-GridColumn--offset--s--1 tb-GridColumn--offset--xs--1"
                                                        >
                                                            <div>
                                                                <div class="text section-wrapper richtext color-blue introtextsection">
                                                                    <h4 class="text color-blue subsubheader h3" v-html="applyContentStyle('')"></h4>
                                                                    <div class="text color-blue introtext">
                                                                        <table border="1" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td width="321" valign="top">
                                                                                    <p style="text-align: center">
                                                                                        <b>Qalam</b>
                                                                                    </p>
                                                                                </td>
                                                                                <td width="321" valign="top">
                                                                                    <p style="text-align: center">
                                                                                        <b>NovoPen Echo®</b>
                                                                                    </p>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="321" valign="top">
                                                                                    <p style="text-align: center">Penfill<sup>®</sup> cartridge<sup></sup></p>
                                                                                </td>
                                                                                <td width="321" valign="top"><p style="text-align: center">3ml</p></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="321" valign="top"><p style="text-align: center">O'sishlar</p></td>
                                                                                <td width="321" valign="top"><p style="text-align: center">½ birlik</p></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="321" valign="top"><p style="text-align: center">Minimal doza</p></td>
                                                                                <td width="321" valign="top"><p style="text-align: center">½ birlik</p></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="321" valign="top"><p style="text-align: center">Maximal doza</p></td>
                                                                                <td width="321" valign="top"><p style="text-align: center">30 birlik</p></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
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
            <div class="calltoaction aem-GridColumn aem-GridColumn--default--12">
                <link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/components/content/calltoaction/clientlibs.min.ebe7c7e29fe7c41f69d1f2aa03d28ccf.css"
                    type="text/css"
                />
                <script src="../../etc.clientlibs/nncorp/components/content/calltoaction/clientlibs.min.78e2dd42584a0e624dc4d773e4de99cc.js"></script>

                <div class="cta-container">
                    <div class="gutters tb-Grid tb-Grid--24 tb-Grid--m--24 tb-Grid--xs--24 component-padding-top white" style="background-color: white">
                        <div
                            class="background-styling-container tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--xs--24 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--0"
                            style="background-color: white"
                        >
                            <div class="tb-Grid tb-Grid--l--24 tb-Grid--m--22 tb-Grid--xs--24">
                                <div
                                    class="cta-grid tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--2"
                                >
                                    <div class="cta-content frame-padding">
                                        <h2 class="title cta-title h1-s m-xs-bottom color-blue" >Yuklab olish</h2>
                                        <p class="img-des paragraph-l color-blue cta-desc" >Foydalanish bo'yicha qo'llanmani yuklab olish</p>

                                        <a
                                            href="javascript:void(1)"
                                            aria-label="Download guide"
                                        >
                                            <button class="button m-s-top button-link-animation">
                                                <span class="text">Qo'llanma</span>
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

            <!-- <div class="linksoverview image aem-GridColumn aem-GridColumn--default--12">
                <link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/components/content/linksoverview/clientlib.min.a4e3179a9609e223e97fa87bc8b9978f.css"
                    type="text/css"
                />
                <script
                    type="text/javascript"
                    src="../../etc.clientlibs/nncorp/components/content/linksoverview/clientlib.min.2b14690a2a94a6cb041c59fabe0df029.js"
                    async=""
                ></script>

                <div id="linksoverview_copy_c" class="links-overview-wrapper gutters color component-padding-topAndBottom" style="background-color: #e2f0fa">
                    <div class="links-overview-content">
                        <div class="tb-Grid tb-Grid--l--24 tb-Grid--m--24 tb-Grid--xs--24">
                            <div
                                class="link-overview-box frame-padding tb-GridColumn tb-GridColumn--l--22 tb-GridColumn--offset--l--2 tb-GridColumn--m--21 tb-GridColumn--xs--20 tb-GridColumn--offset--xs--2"
                            >
                                <div class="tb-Grid tb-Grid--l--22 tb-Grid--xs--20">
                                    <div class="img-box tb-GridColumn tb-GridColumn--l--7 tb-GridColumn--offset--l--0 tb-GridColumn--xs--20">
                                        <picture>
                                            <img
                                                src="https://images.novonordisk.com/is/image/novonordiskas/banner-novopen4?wid=1440&amp;fit=constrain&amp;qlt=90"
                                                alt="Maiken is living with type 1 diabetes, Denmark"
                                                loading="eager"
                                            />
                                        </picture>

                                        <div class="img-info tb-Grid tb-Grid--l--7 tb-Grid--m--7 tb-Grid--xs--7">
                                            <div class="tb-GridColumn tb-GridColumn--l--5 tb-GridColumn--m--5 tb-GridColumn--xs--7 p-xs-right">
                                                <span class="infotext"><b v-html="applyContentStyle('')"></b></span>

                                                <span class="infotext" v-html="applyContentStyle('Maiken is living with type 1 diabetes, Denmark')"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tb-GridColumn tb-GridColumn--l--11 tb-GridColumn--offset--l--2 link-info tb-GridColumn--xs--20">
                                        <h2 class="title h5-s m-xs-bottom color-blue" v-html="applyContentStyle('Instructions for use')"></h2>
                                        <div class="link-list">
                                            <a
                                                href="../instructions-for-use.html"
                                                class="color-blue link paragraph-l m-s-bottom right-arrow-animation"
                                                aria-label="Since providing the world’s first injection system more than 90 years ago, we have been committed to making drug delivery as simple and convenient as possible. On this page you will find the instructions for use (IFU) for our durable pens and devices in your language. Our full range may not be available in your country. Please ask your doctor or nurse if you have any questions."
                                            >
                                                <span
                                                    v-html="applyContentStyle('Since providing the world’s first injection system more than 90 years ago, we have been committed to making drug delivery as simple and convenient as possible. On this page you will find the instructions for use (IFU) for our durable pens and devices in your language. Our full range may not be available in your country. Please ask your doctor or nurse if you have any questions.')"
                                                ></span>
                                                <span class="icon icon-right-arrow m-xxs-left"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="frame-background" style="background-color: #e2f0fa"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
@endsection
