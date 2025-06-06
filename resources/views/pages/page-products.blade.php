@extends('layouts.product-news-contact')

@section('content')
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
            <div class="plaintext aem-GridColumn aem-GridColumn--default--12">
                <div>
                    <link rel="stylesheet"
                          href="/etc.clientlibs/nncorp/components/content/plaintext/clientlibs.min.05c0cb6c0e2d2ba7d5278d5246770cfe.css"
                          type="text/css"/>
                    <script
                        type="text/javascript"
                        src="/etc.clientlibs/nncorp/components/content/plaintext/clientlibs.min.49e418542985e1df66dcd09169fcce86.js"
                        async=""
                    ></script>

                    <div
                        class="background gutters component-padding-topAndBottom color tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24"
                        style="background-color: #e2f0fa"
                    >
                        <div>
                            <div class="introplaintext-wrapper">
                                <div class="titlegrid tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                    <div class="titleframe color small tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2">
                                        <div class="tb-Grid tb-Grid--20 tb-Grid--l--20 tb-Grid--m--20 tb-Grid--s--20 tb-Grid--xs--20">
                                            <div class="tb-GridColumn tb-GridColumn--l--6 tb-GridColumn--m--9 tb-GridColumn--s--12 tb-GridColumn--xs--20">
                                                <p class="text tagline color-blue m-xxs-bottom">
                                                    {{ __('messages.our_products') }}
                                                </p>
                                            </div>
                                            <div class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--16 tb-GridColumn--s--18 tb-GridColumn--xs--20">
                                                <h1 class="text plaintexttitle title color-blue smalltitle">
                                                    {{ __('messages.pens_and_needles') }}
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                    <div class="tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--xs--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1 tb-GridColumn--offset--xs--1">
                                        <div class="frame-box tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 no-frame-padding color small" style="background-color: rgb(226, 240, 250)">
                                            <div class="tb-GridColumn tb-GridColumn--l--16 tb-GridColumn--m--19 tb-GridColumn--s--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1 m-l-bottom">
                                                <div class="text color-blue intro leadtext color right-column">
                                                    {{ __('messages.intro_text') }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tb-Grid tb-Grid--24">
                                            <div class="tb-GridColumn tb-GridColumn--l--16 tb-GridColumn--m--19 tb-GridColumn--s--20 tb-GridColumn--xs--20
                                                        tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--xs--1">
                                                <div class="details-button" style="margin-top: 0;">
                                                    <a href="{{ route('documents.downloadFile') }}" target="_self">
                                                        <button class="button desktop-button button-link-animation">
                                                            <span class="text">Yuklab olish</span>
                                                            <span class="icon fa fa-download"></span>
                                                        </button>
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
                            <div class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--offset--l--2 container-grid-header">
                                <p class="tagline m-xxs-bottom">{{ __('messages.diabetes') }}</p>
                                <h2 class="h5-s m-xs-bottom title">{{ __('messages.insulin_pens') }}</h2>
                                <p class="description leadtext m-m-bottom">
                                    {{ __('messages.insulin_pens_desc') }}
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
                                            <div class="rowcontainer">
                                                @foreach ($products->chunk(3) as $productChunk)
                                                <div class="contentgrid_row">
                                                    @foreach ($productChunk as $product)
                                                        <div class="columns-3 column has-content-true column-0 top_align contentgrid_column">
                                                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                                <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                    <div>
                                                                        <a href="{{ route('single.product', $product->id) }}" target="_self">
                                                                            <div class="image-video-wrapper">
                                                                                <a href="{{ route('single.product', $product->id) }}" target="_self">
                                                                                    <div class="image-video-content-wrapper m-xs-bottom">
                                                                                        <picture>
                                                                                                <img src="{{ asset('storage/' . $product->image) }}"
                                                                                                 alt="{{ $product->{'name_' . app()->getLocale()} }}"
                                                                                                 loading="eager"
                                                                                                />
                                                                                        </picture>
                                                                                    </div>
                                                                                </a>
                                                                                <div class="right-arrow-animation">
                                                                                    <a href="{{ route('single.product', $product->id) }}" target="_self">
                                                                                        <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                                            {{ $product->{'name_' . app()->getLocale()} }}
                                                                                        </h3>
                                                                                        <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                            {!! Str::limit($product->{'description_' . app()->getLocale()}, 100) !!}
                                                                                        </p>
                                                                                    </a>
                                                                                    <div class="link m-xs-top">
                                                                                        <a href="{{ route('single.product', $product->id) }}" target="_self"
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


            <div class="plaintext aem-GridColumn aem-GridColumn--default--12">
                <div
                    class="background gutters component-padding-topAndBottom color tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24"
                    style="background-color: #e2f0fa"
                >
                    <div
                        class="titlegrid tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                        <div
                            class="color small tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2">
                            <h2 class="text plaintexttitle title color-blue smalltitle">{{__('messages.latest_news2')}}</h2>
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



            <div class="accordion aem-GridColumn aem-GridColumn--default--12">
                <div class="cmp-accordion is-accordion gutters white" data-cmp-is="accordion" style="background-color: white">
                    <div id="accordion" class="cmp-accordion-list component-padding-topAndBottom">
                        <input ref="singleExpansion" type="hidden" value="false" />
                        @foreach($faqs as $index => $faq)
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
                                                            <h3 class="h6" v-html="applyContentStyle('{{ $faq['question_' . $lang] }}')"></h3>
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

                                                        <div class="richtext color-blue paragraph-s" style="margin-bottom: 50px;">
                                                            {{ $faq['answer_' . $lang] }}
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
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
