@extends('layouts.pages')

@section('content')
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
            <div class="careersearch focuspointimage image aem-GridColumn aem-GridColumn--default--12">
                <link rel="stylesheet" href="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.css" type="text/css" /><link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.css"
                    type="text/css"
                /><link rel="stylesheet" href="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/general-video.min.css" type="text/css" /><link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/components/careers/careersearch/clientlib.min.c9cf85213e5945652b71773e47b0c113.css"
                    type="text/css"
                />

                <div id="careersearch" class="career-search-wrapper white" style="background-color: white" v-cloak="">
                    <div v-if="true || isMobile" class="background-wrapper image">
                        <focuspoint-image
                            :image-url="'/content/dam/nncorp/language-masters/uz/careers/images/NN_EVP_Beijing_RNGG_MCES_LLJG.jpg'"
                            :coordinates="'0.33:0.35'"
                            :dynamic-media-info="{
                            dynamicMediaImagePath: 'https://images.novonordisk.com/is/image/novonordiskas/NN_EVP_Beijing_RNGG_MCES_LLJG-16',
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
                    <div v-if="false && !isMobile" class="background-wrapper video">
                        <div class="video-wrapper">
                            <general-video alt="Novo Nordisk Pekin. Hamkasblar yurib ketishyapti. "> </general-video>
                        </div>
                    </div>
                    <div class="icon-box display-flex">
                        <span class="icon icon-right-arrow-white"></span>
                    </div>
                    <gradient-cover :visibility="fullImageLoaded"></gradient-cover>
                    <div class="career-search-content gutters">
                        <div class="tb-Grid tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                            <div class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--offset--l--2">
                                <div class="top-info m-s-bottom tb-Grid tb-Grid--l--20 tb-Grid--m--20 tb-Grid--s--20 tb-Grid--xs--20">
                                    <div class="tb-GridColumn tb-GridColumn--l--13 tb-GridColumn--m--16 tb-GridColumn--s--20 tb-GridColumn--offset--l--0">
                                        <h1 class="h1-s m-xxs-bottom">Karyera imkoniyatlari</h1>
                                    </div>
                                    <div class="tb-GridColumn tb-GridColumn--l--10 tb-GridColumn--s--16 tb-GridColumn--xs--20 tb-GridColumn--offset--l--0">
                                        <div class="tb-GridColumn tb-GridColumn--l--13 tb-GridColumn--s--20 tb-GridColumn--offset--l--0">
                                            <div class="leadtext description richtext color-white">Hayotingizni o‘zgartiruvchi karyera uchun tayyormisiz?<br /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="../../etc.clientlibs/clientlibs/granite/jquery/granite/csrf.min.652a558c3774088b61b0530c184710d1.js"></script>
                <script type="text/javascript" src="../../etc.clientlibs/nncorp/clientlibs/vuejs/services/base-http.min.0977b3d22d6ef3c04a2b1fc94d6581bc.js"></script>
                <script type="text/javascript" src="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.js"></script>
                <script type="text/javascript" src="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.js"></script>
                <script type="text/javascript" src="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/general-video.min.js"></script>
                <script
                    type="text/javascript"
                    src="../../etc.clientlibs/nncorp/components/careers/careersearch/clientlib.min.03d59ff5048168c7467f493bab79f5b1.js"
                    async=""
                ></script>
            </div>
            <div class="plaintext aem-GridColumn aem-GridColumn--default--12">
                <div>
                    <link
                        rel="stylesheet"
                        href="../../etc.clientlibs/nncorp/components/content/plaintext/clientlibs.min.05c0cb6c0e2d2ba7d5278d5246770cfe.css"
                        type="text/css"
                    />
                    <script
                        type="text/javascript"
                        src="../../etc.clientlibs/nncorp/components/content/plaintext/clientlibs.min.49e418542985e1df66dcd09169fcce86.js"
                        async=""
                    ></script>

                    <div class="background gutters component-padding-top white tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                        <div class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2">
                            <h2 class="text plaintexttitle title color-blue smalltitle">Ish uchun ariza berish</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layoutcontainergrid responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/components/content/layoutcontainergrid/clientlibs.min.8e68a20a5b5ff888db6d5b26377b9644.css"
                    type="text/css"
                />

                <div class="layout-container-grid">
                    <div class="gutters component-padding-none white shift outer-container" style="background-color: white">
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
                                                    <div class="columns-3 column has-content-true column-2 top_align contentgrid_column">
                                                        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                            <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                <div class="image-video-wrapper">
                                                                    <div class="image-video-content-wrapper m-xs-bottom">
                                                                        <img
                                                                            src="https://images.novonordisk.com/is/image/novonordiskas/NN_EVP_Beijing_RNGG_MCES_LLJG-16?wid=2000&fit=constrain&qlt=90"
                                                                            alt="Wu Wei va Kasper Roseeuw, Novo Nordisk Xitoy"
                                                                            loading="eager"
                                                                        />
                                                                    </div>

                                                                    <h3
                                                                        class="color-blue subtext subheadline paragraph-s rtl-text"
                                                                        v-html="applyContentStyle('Ariza berishingizdan avval ')"
                                                                    ></h3>
                                                                    <p
                                                                        class="color-blue subtext paragraph-s paragraph-line-break rtl-text"
                                                                        v-html="applyContentStyle('Agar siz bo‘sh ish o‘rniga ariza berishga tayyor bo‘lsangiz, nomzod profilini yarating.  Profilni yaratish oson va uni o‘zingiz uchun mos bo‘lgan bo‘sh ish o‘rnini topishdan avval yoki keyin qilish mumkin. Arizangizni nomzod profilingizda ko‘rishingiz mumkin.    ')"
                                                                    ></p>
                                                                    <div class="link m-xs-top right-arrow-animation">
                                                                        <a href="../careers/job-agent.html" class="color-blue link-label m-xxs-right paragraph-s">
                                                                            <span>Ishga kirish bo‘yicha arizangizni ko‘ring</span>
                                                                            <span class="icon icon-right-arrow m-xxs-left"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="columns-3 column has-content-true column-2 top_align contentgrid_column">
                                                        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                            <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                <div class="image-video-wrapper">
                                                                    <div class="image-video-content-wrapper m-xs-bottom">
                                                                        <img
                                                                            src="https://images.novonordisk.com/is/image/novonordiskas/NN_EVP_Beijing_RNGG_MCES_LLJG-16?wid=2000&fit=constrain&qlt=90"
                                                                            alt="Wu Wei va Kasper Roseeuw, Novo Nordisk Xitoy"
                                                                            loading="eager"
                                                                        />
                                                                    </div>

                                                                    <h3
                                                                        class="color-blue subtext subheadline paragraph-s rtl-text"
                                                                        v-html="applyContentStyle('Ariza berishingizdan avval ')"
                                                                    ></h3>
                                                                    <p
                                                                        class="color-blue subtext paragraph-s paragraph-line-break rtl-text"
                                                                        v-html="applyContentStyle('Agar siz bo‘sh ish o‘rniga ariza berishga tayyor bo‘lsangiz, nomzod profilini yarating.  Profilni yaratish oson va uni o‘zingiz uchun mos bo‘lgan bo‘sh ish o‘rnini topishdan avval yoki keyin qilish mumkin. Arizangizni nomzod profilingizda ko‘rishingiz mumkin.    ')"
                                                                    ></p>
                                                                    <div class="link m-xs-top right-arrow-animation">
                                                                        <a href="../careers/job-agent.html" class="color-blue link-label m-xxs-right paragraph-s">
                                                                            <span>Ishga kirish bo‘yicha arizangizni ko‘ring</span>
                                                                            <span class="icon icon-right-arrow m-xxs-left"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="columns-3 column has-content-true column-2 top_align contentgrid_column">
                                                        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                            <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                <div class="image-video-wrapper">
                                                                    <div class="image-video-content-wrapper m-xs-bottom">
                                                                        <img
                                                                            src="https://images.novonordisk.com/is/image/novonordiskas/NN_EVP_Beijing_RNGG_MCES_LLJG-16?wid=2000&fit=constrain&qlt=90"
                                                                            alt="Wu Wei va Kasper Roseeuw, Novo Nordisk Xitoy"
                                                                            loading="eager"
                                                                        />
                                                                    </div>

                                                                    <h3
                                                                        class="color-blue subtext subheadline paragraph-s rtl-text"
                                                                        v-html="applyContentStyle('Ariza berishingizdan avval ')"
                                                                    ></h3>
                                                                    <p
                                                                        class="color-blue subtext paragraph-s paragraph-line-break rtl-text"
                                                                        v-html="applyContentStyle('Agar siz bo‘sh ish o‘rniga ariza berishga tayyor bo‘lsangiz, nomzod profilini yarating.  Profilni yaratish oson va uni o‘zingiz uchun mos bo‘lgan bo‘sh ish o‘rnini topishdan avval yoki keyin qilish mumkin. Arizangizni nomzod profilingizda ko‘rishingiz mumkin.    ')"
                                                                    ></p>
                                                                    <div class="link m-xs-top right-arrow-animation">
                                                                        <a href="../careers/job-agent.html" class="color-blue link-label m-xxs-right paragraph-s">
                                                                            <span>Ishga kirish bo‘yicha arizangizni ko‘ring</span>
                                                                            <span class="icon icon-right-arrow m-xxs-left"></span>
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

            <div class="accordion aem-GridColumn aem-GridColumn--default--12">
                <div class="cmp-accordion is-accordion gutters white" data-cmp-is="accordion" style="background-color: white">
                    <div id="accordion" class="cmp-accordion-list component-padding-topAndBottom">
                        <input ref="singleExpansion" type="hidden" value="false" />
                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--xs--24">
                            <div
                                class="accordion-head tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--xs--20 tb-GridColumn--offset--xs--2 tb-GridColumn tb-GridColumn--offset--l--2"
                            >
                                <p class="tagline m-xxs-bottom m-s-top" v-html="applyContentStyle('KSS')"></p>
                                <h2 class="xsmalltitle m-xs-bottom" v-html="applyContentStyle('Odamlar bizdan tez\u002Dtez so‘rashadi')"></h2>
                            </div>
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
                                                    <span class="cmp-accordion__title"><h3 class="h6">Arizamning holati qanday?</h3></span>
                                                    <span class="icon icon-plus"
                                                    ><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span
                                                        ></span>
                                                </button>
                                            </h2>
                                            <div data-cmp-hook-accordion="panel" class="cmp-accordion__panel cmp-accordion__panel--hidden">
                                                <div class="accordioncontent">
                                                    <div class="ac-wrapper p-m-bottom">
                                                        <p
                                                            class="paragraph-l m-m-bottom"
                                                            v-html="applyContentStyle('Bo‘sh ish o‘rni uchun ariza berganingizdan keyin profilingizga kirish va Jobs Applied (Ariza berilgan bo‘sh ish o‘rinlari) akkordeonini tanlash orqali ishga yollash jarayonini holatini kuzatib borishingiz mumkin. ')"
                                                        ></p>
                                                        <div class="richtext color-blue paragraph-s">
                                                            <p>
                                                                Ariza berish jarayonidan tashqarida turib profilingizga kirish uchun veb-saytda  lavozimni tanlashingiz
                                                                va <b style="">Apply now (Hozir ariza berish)</b> tugmasini bosishingiz kerak.   (Apply now) Hozir ariza
                                                                berish tugmasini bosganingizdan keyin siz bo‘sh ish o‘rni sahifasiga o‘tkazilasiz, u yerda yuqori menyu
                                                                panelidan <b style="">View Profile (Profilni ko‘rish)</b> bandini tanlashingiz, tizimga kirishingiz va <b
                                                                    style=""
                                                                >Jobs Applied (Ariza berilgan bo‘sh ish o‘rinlari) </b
                                                                >akkordeonini ochishingiz mumkin. 
                                                            </p>
                                                            <p>
                                                                Tizimga kirganingizdan keyin siz o‘zingiz ariza bergan bo‘sh ish o‘rin(lar)ini ko‘rishingiz,
                                                                ariza(lari)ngizni  va ariza(lari)ngiz holatini ko‘rishingiz mumkin.  
                                                            </p>
                                                        </div>
                                                        <div class="iframe-box p-s-top"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                    <span class="cmp-accordion__title"><h3 class="h6">Arizamning holati qanday?</h3></span>
                                                    <span class="icon icon-plus"
                                                    ><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span
                                                        ></span>
                                                </button>
                                            </h2>
                                            <div data-cmp-hook-accordion="panel" class="cmp-accordion__panel cmp-accordion__panel--hidden">
                                                <div class="accordioncontent">
                                                    <div class="ac-wrapper p-m-bottom">
                                                        <p
                                                            class="paragraph-l m-m-bottom"
                                                            v-html="applyContentStyle('Bo‘sh ish o‘rni uchun ariza berganingizdan keyin profilingizga kirish va Jobs Applied (Ariza berilgan bo‘sh ish o‘rinlari) akkordeonini tanlash orqali ishga yollash jarayonini holatini kuzatib borishingiz mumkin. ')"
                                                        ></p>
                                                        <div class="richtext color-blue paragraph-s">
                                                            <p>
                                                                Ariza berish jarayonidan tashqarida turib profilingizga kirish uchun veb-saytda  lavozimni tanlashingiz
                                                                va <b style="">Apply now (Hozir ariza berish)</b> tugmasini bosishingiz kerak.   (Apply now) Hozir ariza
                                                                berish tugmasini bosganingizdan keyin siz bo‘sh ish o‘rni sahifasiga o‘tkazilasiz, u yerda yuqori menyu
                                                                panelidan <b style="">View Profile (Profilni ko‘rish)</b> bandini tanlashingiz, tizimga kirishingiz va <b
                                                                    style=""
                                                                >Jobs Applied (Ariza berilgan bo‘sh ish o‘rinlari) </b
                                                                >akkordeonini ochishingiz mumkin. 
                                                            </p>
                                                            <p>
                                                                Tizimga kirganingizdan keyin siz o‘zingiz ariza bergan bo‘sh ish o‘rin(lar)ini ko‘rishingiz,
                                                                ariza(lari)ngizni  va ariza(lari)ngiz holatini ko‘rishingiz mumkin.  
                                                            </p>
                                                        </div>
                                                        <div class="iframe-box p-s-top"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                    <span class="cmp-accordion__title"><h3 class="h6">Arizamning holati qanday?</h3></span>
                                                    <span class="icon icon-plus"
                                                    ><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span
                                                        ></span>
                                                </button>
                                            </h2>
                                            <div data-cmp-hook-accordion="panel" class="cmp-accordion__panel cmp-accordion__panel--hidden">
                                                <div class="accordioncontent">
                                                    <div class="ac-wrapper p-m-bottom">
                                                        <p
                                                            class="paragraph-l m-m-bottom"
                                                            v-html="applyContentStyle('Bo‘sh ish o‘rni uchun ariza berganingizdan keyin profilingizga kirish va Jobs Applied (Ariza berilgan bo‘sh ish o‘rinlari) akkordeonini tanlash orqali ishga yollash jarayonini holatini kuzatib borishingiz mumkin. ')"
                                                        ></p>
                                                        <div class="richtext color-blue paragraph-s">
                                                            <p>
                                                                Ariza berish jarayonidan tashqarida turib profilingizga kirish uchun veb-saytda  lavozimni tanlashingiz
                                                                va <b style="">Apply now (Hozir ariza berish)</b> tugmasini bosishingiz kerak.   (Apply now) Hozir ariza
                                                                berish tugmasini bosganingizdan keyin siz bo‘sh ish o‘rni sahifasiga o‘tkazilasiz, u yerda yuqori menyu
                                                                panelidan <b style="">View Profile (Profilni ko‘rish)</b> bandini tanlashingiz, tizimga kirishingiz va <b
                                                                    style=""
                                                                >Jobs Applied (Ariza berilgan bo‘sh ish o‘rinlari) </b
                                                                >akkordeonini ochishingiz mumkin. 
                                                            </p>
                                                            <p>
                                                                Tizimga kirganingizdan keyin siz o‘zingiz ariza bergan bo‘sh ish o‘rin(lar)ini ko‘rishingiz,
                                                                ariza(lari)ngizni  va ariza(lari)ngiz holatini ko‘rishingiz mumkin.  
                                                            </p>
                                                        </div>
                                                        <div class="iframe-box p-s-top"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                    <span class="cmp-accordion__title"><h3 class="h6">Arizamning holati qanday?</h3></span>
                                                    <span class="icon icon-plus"
                                                    ><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span
                                                        ></span>
                                                </button>
                                            </h2>
                                            <div data-cmp-hook-accordion="panel" class="cmp-accordion__panel cmp-accordion__panel--hidden">
                                                <div class="accordioncontent">
                                                    <div class="ac-wrapper p-m-bottom">
                                                        <p
                                                            class="paragraph-l m-m-bottom"
                                                            v-html="applyContentStyle('Bo‘sh ish o‘rni uchun ariza berganingizdan keyin profilingizga kirish va Jobs Applied (Ariza berilgan bo‘sh ish o‘rinlari) akkordeonini tanlash orqali ishga yollash jarayonini holatini kuzatib borishingiz mumkin. ')"
                                                        ></p>
                                                        <div class="richtext color-blue paragraph-s">
                                                            <p>
                                                                Ariza berish jarayonidan tashqarida turib profilingizga kirish uchun veb-saytda  lavozimni tanlashingiz
                                                                va <b style="">Apply now (Hozir ariza berish)</b> tugmasini bosishingiz kerak.   (Apply now) Hozir ariza
                                                                berish tugmasini bosganingizdan keyin siz bo‘sh ish o‘rni sahifasiga o‘tkazilasiz, u yerda yuqori menyu
                                                                panelidan <b style="">View Profile (Profilni ko‘rish)</b> bandini tanlashingiz, tizimga kirishingiz va <b
                                                                    style=""
                                                                >Jobs Applied (Ariza berilgan bo‘sh ish o‘rinlari) </b
                                                                >akkordeonini ochishingiz mumkin. 
                                                            </p>
                                                            <p>
                                                                Tizimga kirganingizdan keyin siz o‘zingiz ariza bergan bo‘sh ish o‘rin(lar)ini ko‘rishingiz,
                                                                ariza(lari)ngizni  va ariza(lari)ngiz holatini ko‘rishingiz mumkin.  
                                                            </p>
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
        </div>
    </div>
@endsection
