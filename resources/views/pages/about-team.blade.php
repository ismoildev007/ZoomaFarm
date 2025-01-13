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
                                :image-url="'/content/dam/nncorp/language-masters/en/about-us/images/us-dfp-2018-photo-hires-abl-KLTY-2.jpg'"
                                :coordinates="'0.04:0.30'"
                                :dynamic-media-info="{
                            dynamicMediaImagePath: 'https://images.novonordisk.com/is/image/novonordiskas/us-dfp-2018-photo-hires-abl-KLTY-2-13',
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
                                <div><span class="infotext" v-html="applyContentStyle('')"></span></div>
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
                                            <h1 class="title smalltitle m-xs-bottom" v-html="applyContentStyle('Biz kimmiz')"></h1>
                                            <p
                                                class="img-des paragraph-l"
                                                v-html="applyContentStyle('{{ $aboutTeam['short_content_' . $lang] }}')"
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
                                    class="frame tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--offset--m--1 tb-GridColumn--xs--24 tb-GridColumn--offset--xs--0"
                                >
                                    <div class="long-container" style="background-color: #e2f0fa" :style="longContainerStyleMobile">
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
                                                    <span class="infotext" v-html="applyContentStyle('')"></span>
                                                </div>
                                            </div>
                                            <div
                                                class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--offset--l--2 tb-GridColumn--m--22 tb-GridColumn--xs--20 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--2 text-container display-flex"
                                            >
                                                <h2 class="h2 m-xxs-bottom">
                                                    <b v-html="applyContentStyle('Biz kimmiz')"></b>
                                                </h2>
                                                <div class="long-description richtext color-blue">
                                                    {!! $aboutTeam['about_or_company_' . $lang] !!}
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


                <div id="factsandfigures" class="faf-wrapper gutters component-padding-topAndBottom smallshift">
                    <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22">
                        <div
                            class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--xs--22 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1"
                        >
                            <h1 class="color-blue smalltitle">Faktlar va raqamlar</h1>
                        </div>
                    </div>

                    <div class="facts-and-figure-grid-description frame-box tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 white small">
                        <div
                            class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--xs--22 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1"
                        >
                            <div class="title-frame-mobile m-s-bottom">
                                <p class="tagline"></p>
                                <h1 class="color-blue smalltitle">Faktlar va raqamlar</h1>
                            </div>
                            <p class="leadtext two extrasmall"></p>
                            <div class="figures-box">
                                <div
                                    class="tb-GridColumn tb-GridColumn--l--15 tb-GridColumn--m--13 tb-GridColumn--xs--18 tb-GridColumn--offset--l--1 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1 figures-box columns-two"
                                >
                                    <div class="info">
                                        <p class="facts h1-xs">{{ $aboutTeam->production }}</p>
                                        <div class="paragraph-s">
                                            mamlakatdagi 16 ta ishlab chiqarish nuqtalari (Jazoir, Braziliya, Xitoy, Daniya, Fransiya, Yaponiya, Rossiya, Buyuk Britaniya va
                                            AQSh
                                        </div>
                                    </div>

                                    <div class="info">
                                        <p class="facts h1-xs">{{ $aboutTeam->research_and_development }}</p>
                                        <div class="paragraph-s">
                                            <p>mamlakatdagi 10 ta tadqiqot va ishlab chiqish markazlari (Xitoy, Daniya, Hindiston, Buyuk Britaniya va AQSh</p>
                                        </div>
                                    </div>

                                    <div class="info">
                                        <p class="facts h1-xs">{{ $aboutTeam->our_employees_work }}+</p>
                                        <div class="paragraph-s">
                                            <p>xodimlarimiz dunyo bo’ylab faoliyat yuritadi</p>
                                        </div>
                                    </div>

                                    <div class="info">
                                        <p class="facts h1-xs">{{ $aboutTeam->countries_use }}</p>
                                        <div class="paragraph-s">
                                            <p>mamlakat aholisi bizning dori mahsulotlardan foydalanish imkoniyatiga ega</p>
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

                    <div id="imagevideotext_1729012645" class="gutters ivt-wrapper component-padding-topAndBottom frameinverted" style="background-color: #e2f0fa">
                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                            <div
                                class="tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--xs--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1"
                            >
                                <div
                                    class="tb-Grid tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 ivt-media-box ivt-media-box-video"
                                    :style="mediaBoxContainerStyles"
                                >
                                    <div
                                        class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1 ivt-media-container ivt-media-container-video"
                                        :style="ivtMediaContainerStyles"
                                    >
                                        <div class="full-height" aria-label="Novo Nordisk kompaniyasidagi hayotni o‘zgartiruvchi karyera videosi.">
                                            <div class="video" aria-label="Novo Nordisk kompaniyasidagi hayotni o‘zgartiruvchi karyera videosi.">
                                                <div style="width: 100%; height: 0; position: relative; padding-bottom: 46.875%">
                                                    <iframe
                                                        src="https://video.novonordisk.com/38660205.ihtml/player.html?token=1aca84d5b490864e5e4c4086296e68e1&source=embed&photo%5fid=12592543"
                                                        style="width: 100%; height: 100%; position: absolute; top: 0; left: 0"
                                                        frameborder="0"
                                                        \
                                                        scrolling="no"
                                                        mozallowfullscreen="1"
                                                        webkitallowfullscreen="1"
                                                        allowfullscreen="1"
                                                        allow="autoplay; fullscreen"
                                                    ></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="tb-Grid tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 text-container text-container-video"
                                    style="background-color: white"
                                    :style="textContainerStyles"
                                >
                                    <div
                                        class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1"
                                    >
                                        <div>
                                            <div>
                                                <div class="columns m-m-top">
                                                    <div class="left-column">
                                                        <h2 class="h2 color-blue">
                                                            <b v-html="applyContentStyle('Hayotni o‘zgartiruvchi karyeralar')"></b>
                                                        </h2>
                                                    </div>
                                                    <div
                                                        class="right-column color-blue paragraph-l tb-Grid tb-Grid-24 tb-GridColumn tb-GridColumn--l--13 tb-GridColumn--offset--l--10"
                                                    >
                                                        <div>
                                                            <div class="section-wrapper richtext color-blue introtextsection m-m-bottom">
                                                                <h3 class="h3 color-blue subsubheader" v-html="applyContentStyle('')"></h3>

                                                                <div class="color-blue introtext">
                                                                    {!! $aboutTeam['description_' . $lang] !!}
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

                <script type="text/javascript" src="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.js"></script>
                <script
                    type="text/javascript"
                    src="../../etc.clientlibs/nncorp/components/content/imagevideotext/clientlib.min.da5b0b5591323b02f5f1722a1266d215.js"
                    async=""
                ></script>
            </div>

            <div class="imagevideotext focuspointimage image aem-GridColumn aem-GridColumn--default--12">
                <div id="imagevideotext_1980486897" class="gutters ivt-wrapper component-padding-topAndBottom color" style="background-color: #e2f0fa">
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
                                            :image-url="'/content/dam/nncorp/language-masters/uz/about-us/images/rnd-talentattraction-CMC-MDRT-PNTO-2018-7.jpg'"
                                            :coordinates="'0.13:-0.02'"
                                            :dynamic-media-info="{
                                        dynamicMediaImagePath: 'https://images.novonordisk.com/is/image/novonordiskas/rnd-talentattraction-CMC-MDRT-PNTO-2018-7-12',
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
                            <div class="tb-Grid tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 text-container">
                                <div
                                    class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1"
                                >
                                    <div class="columns m-m-top">
                                        <div class="left-column">
                                            <h3 class="h2 color-blue">{{ $aboutTeam['description_title_' . $lang] }}</h3>
                                        </div>
                                        <div class="right-column color-blue paragraph-l tb-Grid tb-Grid-24 tb-GridColumn tb-GridColumn--l--13 tb-GridColumn--offset--l--10">
                                            <div class="section-wrapper richtext color-blue introtextsection m-m-bottom">
                                                <h4 class="h3 color-blue subsubheader" v-html="applyContentStyle('')"></h4>
                                                <div class="color-blue introtext">
                                                    {!! $aboutTeam['description_' . $lang] !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.js"></script>
            </div>

            <div class="imagevideotext focuspointimage image aem-GridColumn aem-GridColumn--default--12">
                <div id="imagevideotext_1926467161" class="gutters ivt-wrapper component-padding-topAndBottom color" style="background-color: #e2f0fa">
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
                                            :image-url="'/content/dam/nncorp/language-masters/uz/about-us/images/NNWAY_Cluster_1.png'"
                                            :coordinates="'-0.03:-0.01'"
                                            :dynamic-media-info="{
                                        dynamicMediaImagePath: 'https://images.novonordisk.com/is/image/novonordiskas/NNWAY_Cluster_1-11',
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
                            <div class="tb-Grid tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 text-container">
                                <div
                                    class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1"
                                >
                                    <div class="columns m-m-top">
                                        <div class="left-column">
                                            <h3 class="h2 color-blue">{{ $aboutTeam['content_title_'  . $lang] }}</h3>
                                        </div>
                                        <div class="right-column color-blue paragraph-l tb-Grid tb-Grid-24 tb-GridColumn tb-GridColumn--l--13 tb-GridColumn--offset--l--10">
                                            <div class="section-wrapper richtext color-blue introtextsection m-m-bottom">
                                                <h4 class="h3 color-blue subsubheader" v-html="applyContentStyle('')"></h4>
                                                <div class="color-blue introtext">
                                                    {!! $aboutTeam['content_' . $lang] !!}
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
