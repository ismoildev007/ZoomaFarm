@extends('layouts.product-news-contact')
<?php
$lang = app()->getLocale();
?>
@section('content')
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
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
                            <h1 class="h1-s">
                              @lang('messages.latest_news2')
                            </h1>
                        </div>
                        <div class="ln-box tb-GridColumn tb-GridColumn--l--24" style="background-color: white">
                            <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24">
                                <div
                                    class="ln-container tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--2">
                                    <div class="ln-link-list">
                                        @if($newsLatest3->isNotEmpty())
                                            @foreach($newsLatest3 as $item)
                                                <a href="{{route('single.news',$item->id)}}" aria-label=""
                                                   class="ln-link-item m-l-bottom right-arrow-animation color-blue">
                                                    @php
                                                        $date = \Carbon\Carbon::parse($item->date);
                                                        $month = __('messages.months')[$date->month];
                                                        $year = __('messages.year');
                                                    @endphp

                                                    <p class="job-name">
                                                        {{ $date->year }} {{ $year }} {{ $date->day }} {{ $month }}
                                                    </p>

                                                    <div class="location-info m-xxs-top">
                                                        <p class="paragraph-s">
                                                            {{ $item['title_'.$lang] }}
                                                        </p>
                                                    </div>
                                                    <div class="job-category m-xxs-top">
                                                        <p class="paragraph-s">
                                                            {{ __('messages.read_more_text') }}<span
                                                                class="icon icon-right-arrow m-xxs-left"></span>
                                                        </p>
                                                    </div>
                                                </a>
                                            @endforeach
                                        @else
                                            <p>Yangiliklar topilmadi.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="anchorscrollcomponent aem-GridColumn aem-GridColumn--default--12">
                <a id="EarthquakeRelief" class="anchor-target"></a>
                <div>
                    <div class="layoutcontainergrid responsivegrid section">
                        <link
                            rel="stylesheet"
                            href="../../etc.clientlibs/nncorp/components/content/layoutcontainergrid/clientlibs.min.8e68a20a5b5ff888db6d5b26377b9644.css"
                            type="text/css"
                        />
                        <script
                            type="text/javascript"
                            src="../../etc.clientlibs/nncorp/components/content/layoutcontainergrid/clientlibs.min.171a7ca77be56f15301624914902fc77.js"
                            async=""
                        ></script>

                        <div class="layout-container-grid">
                            <div class="gutters component-padding-topAndBottom frameinverted shift outer-container"
                                 style="background-color: rgb(223, 239, 238)">
                                <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24">
                                    <div
                                        class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--offset--l--2 container-grid-header">
                                        <h2 class="h5-s m-xs-bottom title">{{ __('messages.selected_stories') }}</h2>

                                    </div>
                                    <div
                                        class="frame-padding tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                                        style="background-color: white"
                                    >
                                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--22 tb-Grid--m--24 tb-Grid--s--24">
                                            <div
                                                class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                                            >
                                                <div class="rowcontainer">
                                                    @if($newsLatest1)
                                                        <div class="contentgrid_row">
                                                            <div class="columns-1 column has-content-true column-0 top_align contentgrid_column">
                                                                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                                    <div class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                        <div class="image-video-wrapper">
                                                                            <div class="image-video-content-wrapper m-xs-bottom">
                                                                                <img src="{{ asset('storage/' . $newsLatest1->image) }}"
                                                                                     alt="{{ $newsLatest1->title_uz }}"
                                                                                     loading="eager" />
                                                                            </div>
                                                                            <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                                {{ $newsLatest1->title_uz }}
                                                                            </h3>
                                                                            <p class="color-blue subtext paragraph-s paragraph-line-break rtl-text">
                                                                                {!!   $newsLatest1->content_uz !!}
                                                                            </p>
                                                                            <div class="link m-xs-top right-arrow-animation">
                                                                                <a href="{{route('single.news',['id' => $item->id])}}"
                                                                                   target="_self"
                                                                                   aria-label="{{ $newsLatest1->title_uz }}"
                                                                                   class="color-blue link-label m-xxs-right paragraph-s">
                                                                                    {{ __('messages.read_more') }}
                                                                                    <span class="icon icon-right-arrow m-xxs-left"></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif


                                                    <div class="contentgrid_row">
                                                        @foreach($news as $item)
                                                            <div
                                                                class="columns-3 column has-content-true column-{{ $loop->index }} top_align contentgrid_column">
                                                                <div
                                                                    class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                                    <div
                                                                        class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                        <div>
                                                                            <div class="image-video-wrapper">
                                                                                <div
                                                                                    class="image-video-content-wrapper m-xs-bottom">
                                                                                    <img
                                                                                        src="{{ asset('storage/' . $item->image) }}"
                                                                                        alt="{{ $item['title_'.$lang] }}"
                                                                                        loading="eager"/>
                                                                                </div>
                                                                                <h3 class="color-blue subtext subheadline paragraph-s rtl-text">
                                                                                    {{ $item['title_'.$lang] }}
                                                                                </h3>

                                                                                <div
                                                                                    class="link m-xs-top right-arrow-animation">
                                                                                    <a href="{{route('single.news',['id' => $item->id])}}"
                                                                                       target="_self"
                                                                                       aria-label="{{ $item['title_'.$lang]}}"
                                                                                       class="color-blue link-label m-xxs-right paragraph-s">
                                                                                        {{ __('messages.read_more_text') }}
                                                                                        <span
                                                                                            class="icon icon-right-arrow m-xxs-left"></span>
                                                                                    </a>
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
    </div>
@endsection
