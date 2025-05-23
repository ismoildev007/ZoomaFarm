@extends('layouts.pages')

@section('content')
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
            <div class="supergraphic focuspointimage image aem-GridColumn aem-GridColumn--default--12">
                <link rel="stylesheet"
                      href="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.css"
                      type="text/css"/>
                <link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.css"
                    type="text/css"
                />
                <link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/components/content/supergraphic/clientlib.min.8a33ce8cddfa7f9231da5479d3864335.css"
                    type="text/css"
                />

                <div id="supergraphic" class="super-graphic-wrapper" :class="readDetails"
                     style="background-color: white">
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
                            dynamicMediaImagePath: '{{ $dynamicMediaImagePath }}',
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
                                            <p class="tagline m-xxs-bottom">{{ __('messages.about_us') }}</p>
                                            <h1 class="title smalltitle m-xs-bottom">{{ __('messages.who_we_are') }}</h1>

                                            <p
                                                class="img-des paragraph-l"
                                                v-html="applyContentStyle('{{ $about['short_content_' . $lang] }}')"
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
                                    <div class="long-container" style="background-color: white"
                                         :style="longContainerStyleMobile">
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
                                                    <b v-html="applyContentStyle('<p>{{ __('messages.who_we_are') }}</p>')"></b>
                                                </h2>
                                                <div class="long-description richtext color-blue">
                                                    {!! $about['about_or_company_' . $lang] !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript"
                        src="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.js"></script>
                <script type="text/javascript"
                        src="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.js"></script>
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
                    class="facts-and-figure-title-grid tb-Grid tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
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

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="plaintext aem-GridColumn aem-GridColumn--default--12" style="padding: -0 -0 !important">
            <div>
                <link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/components/content/plaintext/clientlibs.min.05c0cb6c0e2d2ba7d5278d5246770cfe.css"
                    type="text/css"
                />
                <div
                    class="background gutters component-padding-topAndBottom white tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24"
                    style="background-color: white;padding-top: 0px;"
                >
                    <div class="introplaintext-wrapper">

                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                            <div
                                class="tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--xs--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1 tb-GridColumn--offset--xs--1"
                            >
                                <div
                                    class="frame-box tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 no-frame-padding white small"
                                    style="background-color: white;padding-top: 0px;"
                                >
                                    <div>
                                        <div>
                                            <div
                                                class="columns tb-Grid tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22">
                                                <div class="tab-pane fade" id="video" role="tabpanel"
                                                     aria-labelledby="video-tab">
                                                    <iframe width="100%" height="600"
                                                            src="{{ $about->youtube_link}}"
                                                            title="YouTube video player" frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            referrerpolicy="strict-origin-when-cross-origin"
                                                            allowfullscreen>
                                                    </iframe>
                                                </div>
                                                <div
                                                    class="left-column tb-GridColumn tb-GridColumn--l--5 tb-GridColumn--m--5 tb-GridColumn--s--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 m-s-bottom"
                                                >
                                                    <h3 class="h2 color-blue text">
                                                        <b>{{ $about['description_title_' . $lang] ?? 'Innovatsiya va tijoriy ustunlikni birlashtirish'}}</b>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="right-column color-blue paragraph-l tb-GridColumn tb-GridColumn--l--13 tb-GridColumn--m--13 tb-GridColumn--s--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--2 tb-GridColumn--offset--s--1 tb-GridColumn--offset--xs--1"
                                                >
                                                    <div>
                                                        <div
                                                            class="text section-wrapper richtext color-blue introtextsection">
                                                            <h4 class="text color-blue subsubheader h3"
                                                                v-html="applyContentStyle('')"></h4>
                                                            <div class="text color-blue introtext">
                                                                {!! $about['description_' . $lang] ?? 'Ma\'lumot mavjud emas.' !!}
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
                <link rel="stylesheet"
                      href="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.css"
                      type="text/css"/>
                <link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/components/content/imagevideotext/clientlib.min.fb1e00ef8aa5907c5f9ed3cc77cb1ad6.css"
                    type="text/css"
                />

                <div id="imagevideotext" class="gutters ivt-wrapper component-padding-topAndBottom color"
                     style="background-color: #e2f0fa">
                    <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                        <div
                            class="tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--xs--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1"
                        >
                            <div
                                class="tb-Grid tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 ivt-media-box"
                                :style="mediaBoxContainerStyles">
                                <div
                                    class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1 ivt-media-container ivt-media-container-image"
                                    :style="ivtMediaContainerStyles"
                                >
                                    <div class="full-height">
                                        <focuspoint-image
                                            :image-url="'/content/dam/nncorp/language-masters/uz/about-us/images/Guinea - Safiatou Diallo - type 1 diabetes-lowres.jpeg'"
                                            :coordinates="'-0.20:0.18'"
                                            :dynamic-media-info="{
                                        dynamicMediaImagePath: '{{ $dynamicMediaImagePath2 }}',
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
                                    class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1"
                                >
                                    <div>
                                        <div>
                                            <div class="columns m-m-top">
                                                <div class="left-column">
                                                    <h3 class="h2 color-blue">
                                                        <b>{{ $about['content_title_' . $lang] }}</b>
                                                    </h3>
                                                </div>
                                                <div
                                                    class="right-column color-blue paragraph-l tb-Grid tb-Grid-24 tb-GridColumn tb-GridColumn--l--13 tb-GridColumn--offset--l--10"
                                                >
                                                    <div>
                                                        <div
                                                            class="section-wrapper richtext color-blue introtextsection m-m-bottom">
                                                            <h4 class="h3 color-blue subsubheader"
                                                                v-html="applyContentStyle('')"></h4>
                                                            <div class="color-blue introtext">
                                                                {!! $about['content_' . $lang] ?? 'Ma\'lumot mavjud emas.' !!}
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
@endsection
