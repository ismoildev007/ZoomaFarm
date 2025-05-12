@extends('layouts.admin')

@section('content')
    <form action="{{ route('privacy.update', $policy->id) }}" method="POST" enctype="multipart/form-data" novalidate class="needs-validation" onsubmit="updateEditorContent()">
        @csrf
        @method('PUT')

        <main class="nxl-container">
            <div class="nxl-content">
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Редактировать Политику конфиденциальности</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                            <li class="breadcrumb-item">Конфиденциальность</li>
                        </ul>
                    </div>
                    <div class="page-header-right ms-auto">
                        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger m-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="main-content">
                    <div class="card stretch">
                        <div class="card-header">
                            <h5 class="card-title">Контент</h5>
                        </div>
                        <div class="card-body p-4">
                            <ul class="nav nav-justified invoice-overview-tab-item">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#uzContent">O'zbekcha</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#enContent">English</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#ruContent">Русский</a>
                                </li>
                            </ul>

                            <div class="tab-content pt-3">
                                <div class="tab-pane fade show active" id="uzContent">
                                    <label>Контент (UZ):</label>
                                    <div id="editor_uz" style="height:400px;">{!! old('content_uz', $policy->content_uz) !!}</div>
                                    <input type="hidden" name="content_uz" id="text_uz">
                                </div>
                                <div class="tab-pane fade" id="enContent">
                                    <label>Контент (EN):</label>
                                    <div id="editor_en" style="height:400px;">{!! old('content_en', $policy->content_en) !!}</div>
                                    <input type="hidden" name="content_en" id="text_en">
                                </div>
                                <div class="tab-pane fade" id="ruContent">
                                    <label>Контент (RU):</label>
                                    <div id="editor_ru" style="height:400px;">{!! old('content_ru', $policy->content_ru) !!}</div>
                                    <input type="hidden" name="content_ru" id="text_ru">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

        <script>
        
            var editorUz = new Quill('#editor_uz', { theme: 'snow' });
            var editorEn = new Quill('#editor_en', { theme: 'snow' });
            var editorRu = new Quill('#editor_ru', { theme: 'snow' });

            editorUz.root.innerHTML = `{!! old('content_uz', $policy->content_uz) !!}`;
            editorEn.root.innerHTML = `{!! old('content_en', $policy->content_en) !!}`;
            editorRu.root.innerHTML = `{!! old('content_ru', $policy->content_ru) !!}`;

            function updateEditorContent() {
                document.getElementById('text_uz').value = editorUz.root.innerHTML;
                document.getElementById('text_en').value = editorEn.root.innerHTML;
                document.getElementById('text_ru').value = editorRu.root.innerHTML;
            }

            document.querySelector('form').addEventListener('submit', function(event) {
                updateEditorContent();
            });
        </script>
    </form>
@endsection
