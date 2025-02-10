@extends('layouts.pages')

@section('content')
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
            <div class="supergraphic focuspointimage image aem-GridColumn aem-GridColumn--default--12">
                <link
                    rel="stylesheet"
                    href="/etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.094b79e9edffe365bac8fe5c6a5249a6.css"
                    type="text/css"
                /><link
                    rel="stylesheet"
                    href="/etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.6068dc105c5d342989cce8b2547f55f4.css"
                    type="text/css"
                /><link
                    rel="stylesheet"
                    href="/etc.clientlibs/nncorp/components/content/supergraphic/clientlib.min.8a33ce8cddfa7f9231da5479d3864335.css"
                    type="text/css"
                />

                <div id="supergraphic" class="super-graphic-wrapper" :class="readDetails" style="background-color: #e2f0fa">
                    <div class="box box-image tb-Grid tb-Grid--24 tb-Grid--l--24">
                        <div class="image">
                            <div class="focuspoint-image desktop focuspoint-container"
                                 style="
         background-image: url('{{ asset('storage/' . $product->image) }}');
         background-position: center;
         background-size: cover;
     "
                            ></div>

                            <div class="image-info m-xxs-top desktop">
                                <div><b class="infotext"></b></div>
                                <div>
                                    <span class="infotext">{{$product['name_'.$lang]}}</span>
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
                                            <h1 class="title smalltitle m-xs-bottom">{{$product['name_'.$lang]}}</h1>
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
                                                    <b v-html="applyContentStyle('{{ $product->{'name_' . app()->getLocale()} }}')"></b>

                                                </h2>
                                                <div class="long-description richtext color-blue">
                                                    <p>
                                                        {!!  $product['description_'.$lang]!!}
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
                    src="/etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.cc966df540d6516d8b8dd9196d81bdb8.js"
                ></script>
                <script
                    type="text/javascript"
                    src="/etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.20d3e6ed3229f97cad3ca9125a5de52a.js"
                ></script>
                <script
                    type="text/javascript"
                    src="/etc.clientlibs/nncorp/components/content/supergraphic/clientlib.min.a6c04bd87d43dc3059886559ee41a1de.js"
                    async=""
                ></script>
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
                                    :class="{'edit-mode': true}"
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
                                                          <span class="cmp-accordion__title">
                                                            <h3 class="h6" v-html="applyContentStyle('{{ __('messages.info') }}')"></h3>
                                                        </span>
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
                                                           {!!  $product['content_'.$lang]!!}
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
                                                                                            @if ($product->video)
                                                                                                @php
                                                                                                    // YouTube URL-ni `embed` formatiga o'zgartirish
                                                                                                    $videoUrl = str_replace('watch?v=', 'embed/', $product->video);
                                                                                                @endphp
                                                                                                <iframe
                                                                                                    src="{{ $videoUrl }}"
                                                                                                    style="width: 100%; height: 100%; position: absolute; top: 0; left: 0"
                                                                                                    frameborder="0"
                                                                                                    allow="autoplay; fullscreen"
                                                                                                    allowfullscreen
                                                                                                ></iframe>
                                                                                            @endif

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

            <div class="calltoaction aem-GridColumn aem-GridColumn--default--12">
                <link
                    rel="stylesheet"
                    href="/etc.clientlibs/nncorp/components/content/calltoaction/clientlibs.min.ebe7c7e29fe7c41f69d1f2aa03d28ccf.css"
                    type="text/css"
                />
                <script src="/etc.clientlibs/nncorp/components/content/calltoaction/clientlibs.min.78e2dd42584a0e624dc4d773e4de99cc.js"></script>

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
                                        <h2 class="title cta-title h1-s m-xs-bottom color-blue">{{ __('messages.download') }}</h2>
                                        <p class="img-des paragraph-l color-blue cta-desc">{{ __('messages.download_guide') }}</p>

                                        @if ($product->pdf)
                                            <a href="{{ asset('storage/' . $product->pdf) }}" target="_blank" aria-label="Download guide">
                                                <button class="button m-s-top button-link-animation">
                                                    <span class="text">{{ __('messages.guide') }}</span>
                                                    <span class="icon icon-right-arrow"></span>
                                                </button>
                                            </a>
                                        @else
                                            <p class="text-muted">{{ __('messages.guide_not_available') }}</p>
                                        @endif
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
                                        <h1 style="margin-bottom: 15px"><b>{{ __('messages.other_products') }}</b></h1>

                                        <div>
                                            <div class="rowcontainer">
                                                <div class="contentgrid_row">
                                                    @foreach ($latestProducts as $latestProduct)
                                                        <div class="columns-3 column has-content-true column-1 top_align contentgrid_column">
                                                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                                <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                    <div>
                                                                        <div>
                                                                            <div class="image-video-wrapper">
                                                                                <div class="image-video-content-wrapper m-xs-bottom">
                                                                                    <img
                                                                                        src="{{ asset('storage/' . $latestProduct->image) }}"
                                                                                        alt="{{ $latestProduct->{'name_' . app()->getLocale()} }}"
                                                                                        loading="eager"
                                                                                    />
                                                                                </div>
                                                                                <div class="right-arrow-animation">
                                                                                    <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                                        {{ $latestProduct->{'name_' . app()->getLocale()} }}
                                                                                    </h3>
                                                                                    <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                        {{ Str::limit($latestProduct->{'description_' . app()->getLocale()}, 100) }}
                                                                                    </p>
                                                                                </div>
                                                                                <div class="link m-xs-top">
                                                                                    <a href="{{ route('single.product', $latestProduct->id) }}" target="_self"
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

        </div>
    </div>
@endsection
