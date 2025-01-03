@extends('layouts.pages')

@section('content')
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
            <div class="supergraphic focuspointimage image aem-GridColumn aem-GridColumn--default--12">
                <link rel="stylesheet" href="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.css" type="text/css" /><link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.css"
                    type="text/css"
                /><link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/components/content/supergraphic/clientlib.min.8a33ce8cddfa7f9231da5479d3864335.css"
                    type="text/css"
                />

                <div id="supergraphic" class="super-graphic-wrapper" :class="readDetails" style="background-color: white">
                    <div class="box box-image tb-Grid tb-Grid--24 tb-Grid--l--24">
                        <div class="image">
                            <template v-if="isDisplayGradient">
                                <gradient-cover
                                    :visibility="true"
                                    :bottom-content-height="gradientBottomHeight"
                                    :dynamic-gradient="true"
                                    :disabled-areas="{top: true}"
                                ></gradient-cover>
                            </template>

                            <focuspoint-image
                                :image-url="'/content/dam/nncorp/language-masters/uz/about-us/images/rnd-talentattraction-CMC-MDRT-PNTO-2018-5-lowres.jpeg'"
                                :coordinates="'0.09:0.07'"
                                :dynamic-media-info="{
                            dynamicMediaImagePath: 'https://images.novonordisk.com/is/image/novonordiskas/rnd-talentattraction-CMC-MDRT-PNTO-2018-5-lowres-34',
                            disableDynamicMedia: false,
                            mobileDynamicMediaWidth: '525',
                            tabletPortraitDynamicMediaWidth: '768',
                            tabletLandscapeDynamicMediaWidth: '1280',
                            desktopDynamicMediaWidth: '1440',
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

                            <div class="image-info m-xxs-top desktop" ref="imageInfo">
                                <div><b class="infotext" v-html="applyContentStyle('')"></b></div>
                                <div><span class="infotext" v-html="applyContentStyle('Marie Darting va Pernille Thomasen, Novo Nordisk Daniya')"></span></div>
                            </div>
                        </div>
                        <div class="overlay gutters">
                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--xs--24 full-height">
                                <div
                                    class="tb-GridColumn tb-GridColumn--l--24 full-height tb-GridColumn--m--20 tb-GridColumn--offset--m--2 tb-GridColumn--xs--20 tb-GridColumn--offset--xs--2"
                                >
                                    <div class="container">
                                        <div class="title-wrapper mobileScreenHeight" ref="titleContainer" v-cloak="">
                                            <p class="tagline m-xxs-bottom" v-html="applyContentStyle('Biz haqimizda')"></p>
                                            <h1 class="title smalltitle m-xs-bottom" v-html="applyContentStyle('Biz nima qilamiz')"></h1>
                                            <p
                                                class="img-des paragraph-l"
                                                v-html="applyContentStyle('Biz g‘oyalarni jiddiy surunkali kasalliklarga chalingan odamlar uchun yaxshiroq muolajalarga aylantiramiz.')"
                                            ></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box display-flex">
                                <span class="icon icon-right-arrow-white"></span>
                            </div>
                        </div>
                        <div
                            ref="section-wraper"
                            class="section-wraper gutters component-padding-topAndBottom tb-GridColumn tb-GridColumn--l--24"
                            style="background-color: white"
                        >
                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--xs--24">
                                <div
                                    class="white tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--offset--m--1 tb-GridColumn--xs--24 tb-GridColumn--offset--xs--0"
                                >
                                    <div class="long-container" style="background-color: white" :style="longContainerStyleMobile">
                                        <div
                                            :class="{'p-l-top' : !isMobileSize}"
                                            class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--xs--24"
                                            :style="longContainerStyle"
                                        >
                                            <div
                                                class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--offset--l--2 tb-GridColumn--m--22 tb-GridColumn--xs--20 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--2 m-xs-bottom m-xs-top image-info mobile"
                                            >
                                                <div>
                                                    <b class="infotext" v-html="applyContentStyle('')"></b>
                                                </div>
                                                <div>
                                                    <span class="infotext" v-html="applyContentStyle('Marie Darting va Pernille Thomasen, Novo Nordisk Daniya')"></span>
                                                </div>
                                            </div>
                                            <div
                                                class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--offset--l--2 tb-GridColumn--m--22 tb-GridColumn--xs--20 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--2 text-container display-flex"
                                            >
                                                <h2 class="h2 m-xxs-bottom">
                                                    <b v-html="applyContentStyle('Biz nima qilamiz')"></b>
                                                </h2>
                                                <div class="long-description richtext color-blue">
                                                    <p>
                                                        <b>Kashf qilish, ishlab chiqish va yetkazib berish</b>
                                                    </p>
                                                    <p>
                                                        Novo Nordisk deyarli 100 yil davomida og’ir surunkali kasallikka chalingan bemorlarning hayot sifatini yaxshilab
                                                        kelmoqda, insulin ruchkalari va shunga o’xshash innovatsion mahsulotlar ishlab chiqarish bilan ularning muammolariga
                                                        yechim topmoqda.
                                                    </p>
                                                    <p>
                                                        Davolash usullarimiz bugungi kunda diabet, semizlik va kam uchraydigan qon va ekdokrin tizimi kasalliklari bilan
                                                        yashayotgan millionlab kishilarga naf keltirmoqda. 
                                                    </p>
                                                    <p>
                                                        Laboratoriyalarimizdan tortib zavodlardagi sexlargacha biz innovatsion biologik dorilarni yaratamiz va ishlab
                                                        chiqamiz va ularni butun dunyodagi bemorlar uchun hamyonbop qilamiz.
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

                <script type="text/javascript" src="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.js"></script>
                <script type="text/javascript" src="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.js"></script>
                <script
                    type="text/javascript"
                    src="../../etc.clientlibs/nncorp/components/content/supergraphic/clientlib.min.a6c04bd87d43dc3059886559ee41a1de.js"
                    async=""
                ></script>
            </div>
            <div class="factsandfigures responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/components/content/factsandfigures/clientlibs.min.6ded5de59a917d66ec5a7b65976a0f4f.css"
                    type="text/css"
                />
                <script
                    type="text/javascript"
                    src="../../etc.clientlibs/nncorp/components/content/factsandfigures/clientlibs.min.e6653649a9c3b222534db3d677242fe3.js"
                    async=""
                ></script>

                <div
                    id="factsandfigures"
                    class="faf-wrapper gutters component-padding-bottom smallshift"
                    style="--background-color-mobile: #e2f0fa; background-color: white"
                >
                    <div class="facts-and-figure-title-grid tb-Grid tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                        <div
                            class="tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--xs--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1 tb-GridColumn--offset--xs--1"
                        >
                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22">
                                <div
                                    class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--xs--22 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1"
                                >
                                    <div
                                        class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--s--20 tb-GridColumn--xs-20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1 tb-GridColumn--offset--xs--2 facts-and-figure-title-frame title-desktop titleframe"
                                    >
                                        <p class="tagline"></p>
                                        <h2 class="color-blue smalltitle" v-html="applyContentStyle(`Faktlar va raqamlar`)"></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                        <div
                            class="tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--xs--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1 tb-GridColumn--offset--xs--1"
                        >
                            <div
                                class="facts-and-figure-grid-description frame-box tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 frame small"
                                style="background-color: #e2f0fa"
                            >
                                <div
                                    class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--xs--22 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1"
                                >
                                    <div class="title-frame-mobile m-s-bottom">
                                        <p class="tagline"></p>
                                        <h2 class="color-blue smalltitle" v-html="applyContentStyle(`Faktlar va raqamlar`)"></h2>
                                    </div>
                                    <p class="leadtext two"></p>
                                    <div class="figures-box">
                                        <div
                                            class="tb-GridColumn tb-GridColumn--l--15 tb-GridColumn--m--13 tb-GridColumn--xs--18 tb-GridColumn--offset--l--1 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1 figures-box columns-two"
                                        >
                                            <div class="block">
                                                <p class="h4" v-html="applyContentStyle('')"></p>
                                                <div class="info">
                                                    <p class="facts h1-xs" v-html="applyContentStyle('50%')"></p>
                                                    <div class="paragraph-s">
                                                        <p v-html="recolorTriangle('<p>dunyodagi jami ishlab chiqariladigan insulinning bizga tegishli qismi.<\/p>\n')"></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="block">
                                                <p class="h4" v-html="applyContentStyle('')"></p>
                                                <div class="info">
                                                    <p class="facts h1-xs" v-html="applyContentStyle('40 mln.+ ')"></p>
                                                    <div class="paragraph-s">
                                                        <p
                                                            v-html="recolorTriangle('<p>ortiq dunyo aholisi\x26nbsp;bizning\x26nbsp;diabetga qarshi mahsulotlarimizdan foydalanmoqda.<\/p>\n')"
                                                        ></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="block">
                                                <p class="h4" v-html="applyContentStyle('')"></p>
                                                <div class="info">
                                                    <p class="facts h1-xs" v-html="applyContentStyle('800 mln.+')"></p>
                                                    <div class="paragraph-s">
                                                        <p v-html="recolorTriangle('<p>miqdorda insulin\x26nbsp;insulin shprits ruchkalarini chiqarganmiz.<\/p>\n')"></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="block">
                                                <p class="h4" v-html="applyContentStyle('')"></p>
                                                <div class="info">
                                                    <p class="facts h1-xs" v-html="applyContentStyle('40+ dan')"></p>
                                                    <div class="paragraph-s">
                                                        <p v-html="recolorTriangle('<p>ortiq davlatlarda klinik sinovlar oʻtkazamiz.<\/p>\n')"></p>
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
                    <link
                        rel="stylesheet"
                        href="../../etc.clientlibs/nncorp/components/content/plaintext/clientlibs.min.05c0cb6c0e2d2ba7d5278d5246770cfe.css"
                        type="text/css"
                    />
                    <div
                        class="background gutters component-padding-topAndBottom white tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24"
                        style="background-color: white"
                    >
                        <div class="introplaintext-wrapper">
                            <div class="titlegrid tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                <div class="titleframe white small tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2">
                                    <div class="text plaintexttitle title color-blue smalltitle">Beshta kasallik uchun davolash taqdim etish</div>
                                </div>
                            </div>
                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                <div
                                    class="tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--xs--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1 tb-GridColumn--offset--xs--1"
                                >
                                    <div
                                        class="frame-box tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 no-frame-padding white small"
                                        style="background-color: white"
                                    >
                                        <div>
                                            <div>
                                                <div class="columns tb-Grid tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22">
                                                    <div
                                                        class="left-column tb-GridColumn tb-GridColumn--l--5 tb-GridColumn--m--5 tb-GridColumn--s--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 m-s-bottom"
                                                    >
                                                        <h3 class="h2 color-blue text">
                                                            <b>Innovatsiya va tijoriy ustunlikni birlashtirish</b>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="right-column color-blue paragraph-l tb-GridColumn tb-GridColumn--l--13 tb-GridColumn--m--13 tb-GridColumn--s--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--2 tb-GridColumn--offset--s--1 tb-GridColumn--offset--xs--1"
                                                    >
                                                        <div>
                                                            <div class="text section-wrapper richtext color-blue introtextsection">
                                                                <h4 class="text color-blue subsubheader h3" v-html="applyContentStyle('')"></h4>
                                                                <div class="text color-blue introtext">
                                                                    <p>
                                                                        Diqqatimiz yuz millionlab odamlarga ta’sir qiluvchi va eng qiyin global sog‘liqni saqlash muammolari
                                                                        orasida bo‘lgan jiddiy surunkali kasalliklarga qaratilgan.
                                                                    </p>
                                                                    <p>
                                                                        Innovatsiyalarimiz va tijoriy ustunligimizni birlashtirgan holda biz dadil g‘oyalarni hayotiy muhim
                                                                        va profilaktik dorilarga aylantirish uchun bemorlar va hamkorlarning fikrlariga tayanamiz.
                                                                    </p>
                                                                    <p>
                                                                        Biz tibbiy qurilmalarni ishlab chiqish va raqamli sog‘liqni saqlash yechimlarini uzluksiz ilgari
                                                                        surish uchun eng yangi davolash usullari va texnologiyalari, jumladan qon hujayralari asosidagi
                                                                        davolash usullariga uzoq muddatli sarmoyalar kiritamiz.<br />
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

            <div class="imagevideotext focuspointimage image aem-GridColumn aem-GridColumn--default--12">
                <div>
                    <link rel="stylesheet" href="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.css" type="text/css" /><link
                        rel="stylesheet"
                        href="../../etc.clientlibs/nncorp/components/content/imagevideotext/clientlib.min.fb1e00ef8aa5907c5f9ed3cc77cb1ad6.css"
                        type="text/css"
                    />

                    <div id="imagevideotext" class="gutters ivt-wrapper component-padding-topAndBottom color" style="background-color: #e2f0fa">
                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                            <div
                                class="tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--xs--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1"
                            >
                                <div class="tb-Grid tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 ivt-media-box" :style="mediaBoxContainerStyles">
                                    <div
                                        class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1 ivt-media-container ivt-media-container-image"
                                        :style="ivtMediaContainerStyles"
                                    >
                                        <div class="full-height">
                                            <focuspoint-image
                                                :image-url="'/content/dam/nncorp/language-masters/uz/about-us/images/Guinea - Safiatou Diallo - type 1 diabetes-lowres.jpeg'"
                                                :coordinates="'-0.20:0.18'"
                                                :dynamic-media-info="{
                                        dynamicMediaImagePath: 'https://images.novonordisk.com/is/image/novonordiskas/Guinea - Safiatou Diallo - type 1 diabetes-lowres-34',
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
                                </div>
                                <div
                                    class="tb-Grid tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 text-container"
                                    style="background-color: #e2f0fa"
                                    :style="textContainerStyles"
                                >
                                    <div
                                        class="image-info tb-GridColumn tb-GridColumn--l--7 tb-GridColumn--m--7 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1 tb-GridColumn--xs--20"
                                    >
                                        <b class="infotext" v-html="applyContentStyle('')"></b>
                                        <p
                                            class="infotext"
                                            v-html="applyContentStyle('Safiatou Diallo Gvineyada yashaydi, 1\u002Dtoifa diabetga chalingan va “Bolalarda diabetni o‘zgartirish® ” dasturiga a’zo bo‘lgan.')"
                                        ></p>
                                    </div>

                                    <div
                                        class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1"
                                    >
                                        <div>
                                            <div>
                                                <div class="columns m-m-top">
                                                    <div class="left-column">
                                                        <h3 class="h2 color-blue">
                                                            <b v-html="applyContentStyle('Aholining zaif qatlamlarida surunkali kasalliklarga e’tibor berish')"></b>
                                                        </h3>
                                                    </div>
                                                    <div
                                                        class="right-column color-blue paragraph-l tb-Grid tb-Grid-24 tb-GridColumn tb-GridColumn--l--13 tb-GridColumn--offset--l--10"
                                                    >
                                                        <div>
                                                            <div class="section-wrapper richtext color-blue introtextsection m-m-bottom">
                                                                <h4 class="h3 color-blue subsubheader" v-html="applyContentStyle('')"></h4>
                                                                <div class="color-blue introtext">
                                                                    <p>
                                                                        Biror bir surunkali kasallik bilan og‘rigan bemor noto‘g‘ri davolanganida yoki umuman davolanmasdan
                                                                        tashlab qo‘yilganida u hayotga tahdid soluvchi murakkablashuvlarning yuzaga kelish xavfi ostida
                                                                        bo‘ladi. Diabet holatida bu amputatsiyalar va ko‘rish qobiliyatining yo‘qotilishiga olib kelishi va
                                                                        ayrim hollarda murakkablashuvlar o‘lim bilan tugashi mumkin.
                                                                    </p>
                                                                    <p>
                                                                        Aholining zaif qatlamlari va past daromadli mamlakatlar ko‘pincha bundan eng ko‘p zarar ko‘radilar.
                                                                        Tibbiy davolashning narxi va hamyonbopligi alohida kishilar, ularning oilalari va hattoki butun
                                                                        jamiyat uchun og‘ir yuk bo‘lishi mumkin.
                                                                    </p>
                                                                    <p>
                                                                        Bizning uzoq muddatli maqsadimiz - har bir mamlakatdagi aholining zaif qatlamiga, ayniqsa dunyoning
                                                                        ayrim qismlarida tibbiy yordam va dori vositalarisiz yaqqol o‘lim xavf solib turuvchi 1-turdagi
                                                                        diabet bilan og‘rigan bolalarga diabetda arzon davolanishdan foydalanish imkoniyatini taqdim etish.
                                                                    </p>
                                                                    <p>
                                                                        Biz surunkali kasallikning oldini olishga ham sarmoya kiritamiz. Bizning maqsadimiz 2045-yilgacha
                                                                        100 milliondan ortiq odamning 2-toifa diabetga chalinishining oldini olish. 
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

                <script
                    type="text/javascript"
                    src="../../etc.clientlibs/nncorp/components/content/imagevideotext/clientlib.min.da5b0b5591323b02f5f1722a1266d215.js"
                    async=""
                ></script>
            </div>
        </div>
    </div>
@endsection
