@extends('layouts.admin')

@section('content')
    <form action="{{ route('values.update', $values->id) }}" method="POST" enctype="multipart/form-data" novalidate class="needs-validation" onsubmit="updateEditorContent()">
        @csrf
        @method('PUT')

        <main class="nxl-container">
            <div class="nxl-content">
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Редактировать Миссию</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                            <li class="breadcrumb-item">Миссия</li>
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
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card stretch">
                                <div class="card-header">
                                    <h5 class="card-title">Детали Миссии</h5>
                                </div>
                                <div class="card-body p-4">
                                    <ul class="nav-tab-items-wrapper nav nav-justified invoice-overview-tab-item">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#uzContent">O'zbekcha</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#enContent">English</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#ruContent">Русский</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content pt-3">
                                        <div class="tab-pane fade show active" id="uzContent">
                                            <div class="form-group pb-3">
                                                <label for="title_uz">Заголовок (UZ):</label>
                                                <input type="text" class="form-control" id="title_uz" name="title_uz" value="{{ old('title_uz', $values->title_uz) }}" required>
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="description_uz">Контент (UZ):</label>
                                                <div id="editor_uz" style="height:400px;">{!! old('description_uz', $values->description_uz) !!}</div>
                                                <input type="hidden" id="text_uz" name="description_uz">
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="enContent">
                                            <div class="form-group pb-3">
                                                <label for="title_en">Заголовок (EN):</label>
                                                <input type="text" class="form-control" id="title_en" name="title_en" value="{{ old('title_en', $values->title_en) }}" required>
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="description_en">Контент (EN):</label>
                                                <div id="editor_en" style="height:400px;">{!! old('description_en', $values->description_en) !!}</div>
                                                <input type="hidden" id="text_en" name="description_en">
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="ruContent">
                                            <div class="form-group pb-3">
                                                <label for="title_ru">Заголовок (RU):</label>
                                                <input type="text" class="form-control" id="title_ru" name="title_ru" value="{{ old('title_ru', $values->title_ru) }}" required>
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="description_ru">Контент (RU):</label>
                                                <div id="editor_ru" style="height:400px;">{!! old('description_ru', $values->description_ru) !!}</div>
                                                <input type="hidden" id="text_ru" name="description_ru">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card stretch">
                                <div class="card-header">
                                    <h5 class="card-title">Изображение Миссии</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div class="form-group pb-3">
                                        <label for="image">Изображение:</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        @if($values->image)
                                            <div class="mt-3">
                                                <img src="{{ asset('storage/' . $values->image) }}" alt="Current Image" style="width: 100%; max-height: 300px;">
                                            </div>
                                        @endif
                                    </div>
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

            editorUz.root.innerHTML = `{!! old('description_uz', $values->description_uz) !!}`;
            editorEn.root.innerHTML = `{!! old('description_en', $values->description_en) !!}`;
            editorRu.root.innerHTML = `{!! old('description_ru', $values->description_ru) !!}`;

            function updateEditorContent() {
                document.getElementById('text_uz').value = editorUz.root.innerHTML;
                document.getElementById('text_en').value = editorEn.root.innerHTML;
                document.getElementById('text_ru').value = editorRu.root.innerHTML;
            }

            // Ensure the editor content is updated before form submission
            document.querySelector('form').addEventListener('submit', function(event) {
                updateEditorContent();
            });
        </script>
@endsection
