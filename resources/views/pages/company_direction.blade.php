
<style>
    #careersearch .career-search-content {
        position: relative;
        min-height: 100%;
        z-index: 1;
    }

    #careersearch .career-search-content .top-info {
        position: absolute;
        bottom: 20px;
        left: 20px;
        text-align: right;
        width: auto;
        animation: slideUpFromBottom 1s ease-out 0.5s forwards;
        opacity: 0;
        z-index: 2;
    }

    #careersearch .career-search-content .tb-GridColumn--l--20 {
        position: static;
    }

    #careersearch .career-search-content .leadtext.description.richtext.color-white {
        margin: 0;
        padding: 10px;
    }

    #careersearch .gradient-cover {
        z-index: 0;
    }

    @keyframes slideUpFromBottom {
        0% {
            transform: translateY(100px);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @media (max-width: 768px) {
        #careersearch .career-search-content .top-info {
            bottom: 10px;
            right: 10px;
            font-size: 14px;
        }
    }
</style>
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
                            :image-url="'/content/dam/nncorp/language-masters/uz/careers/images/NN_EVP_Beijing_RNGG_MCES_LLJG'"
                            :coordinates="'0.33:0.35'"
                            :dynamic-media-info="{
                            dynamicMediaImagePath: '{{ asset('storage/' . $missions->image) }}',
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
                                <div class="top-info m-s-bottom tb-Grid tb-Grid--l--20 tb-Grid--m--20 tb-Grid--s--20 tb-Grid--xs--20" style="margin-left: 70px !important;">
                                    <div class="tb-GridColumn tb-GridColumn--l--13 tb-GridColumn--m--16 tb-GridColumn--s--20 tb-GridColumn--offset--l--0">
                                        <h1 class="h1-s m-xxs-bottom" style="text-align: start;">{{ $missions['title_' . $lang] }}</h1>
                                    </div>
                                    <div class="tb-GridColumn tb-GridColumn--l--10 tb-GridColumn--s--16 tb-GridColumn--xs--20 tb-GridColumn--offset--l--0">
                                        <div class="tb-GridColumn tb-GridColumn--l--13 tb-GridColumn--s--20 tb-GridColumn--offset--l--0">
                                            <div class="leadtext description richtext color-white">
                                                {!! $missions['description_' . $lang]  !!}<br />
                                            </div>
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
                                            :image-url="'{{ asset('storage/' . $values->image) }}'"
                                            :coordinates="'0.13:-0.02'"
                                            :dynamic-media-info="{
                                        dynamicMediaImagePath: '{{ asset('storage/' . $values->image) }}',
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
                                            <h3 class="h2 color-blue">{!! $values['title_' . $lang] !!}</h3>
                                        </div>
                                        <div class="right-column color-blue paragraph-l tb-Grid tb-Grid-24 tb-GridColumn tb-GridColumn--l--13 tb-GridColumn--offset--l--10">
                                            <div class="section-wrapper richtext color-blue introtextsection m-m-bottom">
                                                <h4 class="h3 color-blue subsubheader" v-html="applyContentStyle('')"></h4>
                                                <div class="color-blue introtext">
                                                    {!! $values['description_' . $lang] !!}
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
                                            :image-url="'{{ asset('storage/' . $strategies->image) }}'"
                                            :coordinates="'-0.03:-0.01'"
                                            :dynamic-media-info="{
                                        dynamicMediaImagePath: '{{ asset('storage/' . $strategies->image) }}',
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
                                            <h3 class="h2 color-blue">{!! $strategies['title_' . $lang] !!}</h3>
                                        </div>
                                        <div class="right-column color-blue paragraph-l tb-Grid tb-Grid-24 tb-GridColumn tb-GridColumn--l--13 tb-GridColumn--offset--l--10">
                                            <div class="section-wrapper richtext color-blue introtextsection m-m-bottom">
                                                <h4 class="h3 color-blue subsubheader" v-html="applyContentStyle('')"></h4>
                                                <div class="color-blue introtext">
                                                    {!! $strategies['description_' . $lang] !!}
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
