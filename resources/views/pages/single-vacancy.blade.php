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

                        <img style="width: 100%; height: 400px; object-fit: cover;"
                            src="{{ asset('storage/'.$news->image) }}"
                            alt="News Image" />

                        <div class="tb-Grid tb-Grid--24">
                            <div
                                class="tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--offset--m--1">
                                <div
                                    class="frame-box tb-Grid tb-Grid--l--24 tb-Grid--m--22 frame-padding">

                                    <div
                                        class="news-content color-blue paragraph-l tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1">
                                        <div class="section-wrapper richtext color-blue introtextsection">
                                            <h2 class="subsubheader h2 m-m-bottom">
                                                {{$news['title_'.$lang]}}
                                            </h2>
                                            <div class="content">
                                                {!!  $news['content_'.$lang] !!}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 p-4">
                            <h2>{{ __('messages.send_resume') }}</h2>
                            <div class="col-12">
                                <form action="{{ route('resumes.store') }}" method="POST" class="dr-form" enctype="multipart/form-data"
                                    id="resumeForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="mb-3">
                                                <label for="full_name" class="form-label">{{ __('messages.your_name') }}</label>
                                                <input type="text" name="full_name" id="full_name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">{{ __('messages.email_vacansy') }}</label>
                                                <input type="email" name="email" id="email" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">{{ __('messages.phone_vacancy') }}</label>
                                                <input type="tel" name="phone" id="phone" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 d-none">
                                            <div class="mb-3">
                                                <label for="position_applied" class="form-label">Qaysi lavozimga topshiryapsiz?</label>
                                                <input type="text" name="position_applied" id="position_applied" class="form-control" value="{{$news['title_'.$lang]}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6">
                                            <div class="mb-3">
                                                <label for="cv_file" class="form-label">{{ __('messages.resume') }}</label>
                                                <input type="file" name="cv_file" id="cv_file" class="form-control" accept=".pdf,.doc,.docx" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="cover_letter" class="form-label">{{ __('messages.motivational') }}</label>
                                                <textarea name="cover_letter" id="cover_letter" class="form-control" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" style="background-color: #001965;">{{ __('messages.send') }}</button>
                                </form>
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
<!-- Bootstrap JS (agar layout faylda mavjud bo'lmasa, pastga qo'yiladi) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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
