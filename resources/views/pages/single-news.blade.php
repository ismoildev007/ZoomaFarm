@extends('layouts.product-news-contact')

<?php
 $lang = app()->getLocale();
    ?>
@section('content')
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
            <div class="investornews aem-GridColumn aem-GridColumn--default--12">
                <link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/components/content/investornews/clientlibs.min.441ea127d28c5e527124ca862bc7f8c6.css"
                    type="text/css"
                />
                <script
                    type="text/javascript"
                    src="../../etc.clientlibs/nncorp/components/content/investornews/clientlibs.min.3a2957e9d0a43b4564bea444aaf9fe37.js"
                    async=""
                ></script>

                <div>
                    <div class="background gutters component-padding" style="background-color: #fcf2f5">
                        <div class="investornews-wrapper" v-cloak="">
                            <div class="titlegrid tb-Grid tb-Grid--24">
                                <div
                                    class="titleframe frameinverted xsmall tb-GridColumn tb-GridColumn--l--19 tb-GridColumn--m--20 tb-GridColumn--offset--l--2">
                                    <div class="tb-Grid tb-Grid--l--19 tb-Grid--m--20 tb-Grid--s--20 tb-Grid--xs--20">
                                        <div
                                            class="tb-GridColumn tb-GridColumn--l--19 tb-GridColumn--m--16 tb-GridColumn--s--18 tb-GridColumn--xs--20">

                                        </div>
                                    </div>
                                </div>
                            </div>
                           <img style="width: 100%; object-fit: cover;"
     src="{{ asset('storage/'.$news->image) }}"
     alt="News Image" />
                            <div class="tb-Grid tb-Grid--24">
                                <div
                                    class="tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--offset--m--1">
                                    <div class="frame-box tb-Grid tb-Grid--l--24 tb-Grid--m--22 frame-padding">
                                        <div
                                            class="below-title-container tb-GridColumn tb-GridColumn--l--17 tb-GridColumn--m--20 tb-GridColumn--offset--l--4 tb-GridColumn--offset--m--1"
                                        >
                                            @php
                                                $date = \Carbon\Carbon::parse($news->date);
                                                $month = __('messages.months')[$date->month];
                                                $year = __('messages.year');
                                            @endphp
                                            <div class="datetime">
                                                <p id="news_time" class="paragraph-s color-blue">
                                                    {{ $date->year }} {{ $year }} {{ $date->day }} {{ $month }}
                                                </p>

                                            </div>

{{--                                            <div class="pdfs-container">--}}
{{--                                                <a--}}
{{--                                                    class="download-link"--}}
{{--                                                    aria-label="Download pdf"--}}
{{--                                                    @click="downloadPDF('Novo Nordisk A\/S: CagriSema demonstrates superior weight loss in adults with obesity or overweight in the REDEFINE 1 trial', '4723091','https://ml-eu.globenewswire.com/Resource/Download/7c3d19b8-3501-4dcf-b698-33a21f73cbbe')"--}}
{{--                                                >--}}
{{--                                                    <span class="icon icon-download-seablue"></span>--}}
{{--                                                    Announcement.pdf--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
                                        </div>

                                        <div
                                            class="news-content color-blue paragraph-l tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1"
                                        >
                                            <div class="section-wrapper richtext color-blue introtextsection">
                                                <h2 class="subsubheader h2 m-m-bottom">
                                                {{$news['title_'.$lang]}}
                                                </h2>
                                                <div class="content">
                                                    {!!  $news['content_'.$lang]!!}
                                                </div>
                                            </div>

{{--                                            <div class="download-section-wrapper">--}}
{{--                                                <h2 class="subsubheader h2 m-m-bottom">Yuklab olish</h2>--}}
{{--                                                <div class="pdfs-container">--}}
{{--                                                    <a--}}
{{--                                                        class="download-link"--}}
{{--                                                        aria-label="Download pdf"--}}
{{--                                                        @click="downloadPDF('Novo Nordisk A\/S: CagriSema demonstrates superior weight loss in adults with obesity or overweight in the REDEFINE 1 trial', '4723091','https://ml-eu.globenewswire.com/Resource/Download/7c3d19b8-3501-4dcf-b698-33a21f73cbbe')"--}}
{{--                                                    >--}}
{{--                                                        <span class="icon icon-download-seablue"></span>--}}
{{--                                                        Announcement.pdf--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
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

