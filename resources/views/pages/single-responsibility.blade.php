@extends('layouts.product-news-contact')

<?php
$lang = app()->getLocale();
?>
@section('content')

    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
            <div class="investornews aem-GridColumn aem-GridColumn--default--12">

                <link rel="stylesheet"
                      href="../../etc.clientlibs/nncorp/components/content/investornews/clientlibs.min.441ea127d28c5e527124ca862bc7f8c6.css"
                      type="text/css" />
                <script type="text/javascript"
                        src="../../etc.clientlibs/nncorp/components/content/investornews/clientlibs.min.3a2957e9d0a43b4564bea444aaf9fe37.js"
                        async=""></script>

                <div>
                    <div class="background gutters component-padding" style="background-color: #fcf2f5">
                        <div class="investornews-wrapper" v-cloak="">
                            <div class="titlegrid tb-Grid tb-Grid--24">
                                <div
                                    class="titleframe frameinverted xsmall tb-GridColumn tb-GridColumn--l--19 tb-GridColumn--m--20 tb-GridColumn--offset--l--2">
                                    <div
                                        class="tb-Grid tb-Grid--l--19 tb-Grid--m--20 tb-Grid--s--20 tb-Grid--xs--20">
                                        <div
                                            class="tb-GridColumn tb-GridColumn--l--19 tb-GridColumn--m--16 tb-GridColumn--s--18 tb-GridColumn--xs--20">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tb-GridColumn tb-GridColumn--l--10 tb-GridColumn--m--10 tb-GridColumn--xs--24">
                                <img style="width: 100%; height: auto; object-fit: contain; border-radius: 8px;"
                                     src="{{ asset('storage/'.$news->image) }}"
                                     alt="News Image" />
                            </div>

                            <!-- Matn (o‘ng tomonda) -->
                            <div class="tb-GridColumn tb-GridColumn--l--14 tb-GridColumn--m--14 tb-GridColumn--xs--24">
                                <div class="frame-box frame-padding">
                                    <div class="news-content color-blue paragraph-l">
                                        <div class="section-wrapper richtext color-blue introtextsection">
                                            <h2 class="subsubheader h2 m-m-bottom">
                                                {{ $news['title_'.$lang] }}
                                            </h2>
                                            <div class="content">
                                                {!! $news['description_'.$lang] !!}
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

    <!-- Modal oynasi -->
    <style>
        .dr-form input {
            padding: 20px 30px;
            border-radius: 4px;
            border: none;
        }
        .dr-form textarea {
            border-radius: 4px;
            border: none;
        }
    </style>
{{--    <!-- Bootstrap JS (agar layout faylda mavjud bo'lmasa, pastga qo'yiladi) -->--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>--}}

    <!-- AJAX Submit -->
    <script>
        document.getElementById('resumeForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            }).then(response => {
                if (response.ok) {
                    const modal = bootstrap.Modal.getInstance(document.getElementById('resumeModal'));
                    modal.hide();
                    alert('✅ Rezyume muvaffaqiyatli yuborildi!');
                    form.reset();
                } else {
                    alert('❌ Xatolik yuz berdi. Qayta urinib ko‘ring.');
                }
            }).catch(error => {
                console.error('Xatolik:', error);
                alert('❌ Server bilan bog‘lanishda xatolik.');
            });
        });
    </script>
@endsection
