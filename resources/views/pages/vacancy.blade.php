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
                                                @foreach ($vacancies->chunk(3) as $vacancyChunk)
                                                    <div class="contentgrid_row">
                                                        @foreach ($vacancyChunk as $vacancy)
                                                            <div class="columns-3 column has-content-true column-2 top_align contentgrid_column">
                                                                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                                    <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                        <div class="image-video-wrapper">
                                                                            <div class="image-video-content-wrapper m-xs-bottom">
                                                                                <img
                                                                                    src="{{ asset('storage/' . $vacancy->image) }}"
                                                                                    alt="{{ $vacancy->{'name_' . $lang} }}"
                                                                                    loading="eager"
                                                                                />
                                                                            </div>

                                                                            <h3
                                                                                class="color-blue subtext subheadline paragraph-s rtl-text"
                                                                                v-html="applyContentStyle('{{ $vacancy->{'name_' . $lang} }}')"
                                                                            ></h3>
                                                                            <p
                                                                                class="color-blue subtext paragraph-s paragraph-line-break rtl-text"
                                                                                v-html="applyContentStyle('{{ $vacancy->{'content_' . $lang} }}')"
                                                                            ></p>
                                                                            <div class="link m-xs-top right-arrow-animation">
                                                                                <a href="{{ route('contact') }}" class="color-blue link-label m-xxs-right paragraph-s">
                                                                                    <span>Biz bilan bog'lanib va batafsil ma'lumot oling</span>
                                                                                    <span class="icon icon-right-arrow m-xxs-left"></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
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
        <div class="plaintext aem-GridColumn aem-GridColumn--default--12" style="margin-top: 25px">
            <div
                class="background gutters component-padding-topAndBottom color tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24"
                style="background-color: #e2f0fa"
            >
                <div
                    class="titlegrid tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                    <div
                        class="color small tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2">
                        <h2 class="text plaintexttitle title color-blue smalltitle">So'ngi yangiliklar </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="layoutcontainergrid responsivegrid aem-GridColumn aem-GridColumn--default--12">
            <div class="layout-container-grid">
                <div class="gutters component-padding-bottom color outer-container"
                     style="background-color: rgb(226, 240, 250)">
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
                                        <div class="contentgrid_row">
                                            @foreach ($latestNews as $item)
                                                <div class="columns-3 column has-content-true column-0 top_align contentgrid_column">
                                                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                        <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                            <div>
                                                                <a href="{{ route('single.news', $item->id) }}" aria-label="{{ $item->{'name_' . app()->getLocale()} }}">
                                                                    <div class="image-video-wrapper">
                                                                        <div class="image-video-content-wrapper m-xs-bottom">
                                                                            <picture>
                                                                                <img src="{{ asset('storage/' . $item->image) }}"
                                                                                     alt="{{ $item->{'name_' . app()->getLocale()} }}"
                                                                                     loading="eager" />
                                                                            </picture>
                                                                        </div>
                                                                        <div class="right-arrow-animation">
                                                                            <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                                {{ Str::limit($item    ->{'title_' . app()->getLocale()}, 35) }}
                                                                            </h3>
                                                                            <div class="link m-xs-top">
                                                                                <a href="{{ route('single.news', $item->id) }}" target="_self"
                                                                                   class="color-blue link-label paragraph-s">
                                                                                    <span class="icon icon-right-arrow"></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
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
    </div>
@endsection
