@extends('layouts.admin')

@section('content')
    <form action="{{ route('answer-questions.update', $answer->id) }}" method="POST" enctype="multipart/form-data" novalidate class="needs-validation" onsubmit="updateEditorContent()">
        @csrf
        @method('PUT')

        <main class="nxl-container">
            <div class="nxl-content">
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Вопрос ответ</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Главная</a></li>
                            <li class="breadcrumb-item">Новости</li>
                        </ul>
                    </div>
                    <div class="page-header-right ms-auto">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
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
                                    <h5 class="card-title">Вопрос ответ</h5>
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
                                                <label for="question_uz">Вопрос  (UZ):</label>
                                                <input type="text" class="form-control" id="question_uz"  name="question_uz" value="{{ old('question_uz', $answer->question_uz) }}" required>
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="answer_uz">ответ (UZ):</label>
                                                <input type="text" id="answer_uz" name="answer_uz" class="form-control" value="{{ old('answer_uz', $answer->answer_uz) }}" required>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade show" id="enContent">
                                            <div class="form-group pb-3">
                                                <label for="question_en">Вопрос  (EN):</label>
                                                <input type="text" class="form-control" id="question_en" name="question_en" value="{{ old('question_en', $answer->question_en) }}" required>
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="answer_en">ответ (EN):</label>
                                                <input type="text" class="form-control" id="answer_en" name="answer_en" value="{{ old('answer_en', $answer->answer_en) }}" required>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade show" id="ruContent">
                                            <div class="form-group pb-3">
                                                <label for="question_ru">Вопрос  (RU):</label>
                                                <input type="text" class="form-control" id="question_ru" name="question_ru" value="{{ old('question_ru', $answer->question_ru) }}" required>
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="answer_ru">ответ (RU):</label>
                                                <input type="text" class="form-control" id="answer_uz" name="answer_ru" value="{{ old('answer_ru', $answer->answer_ru) }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card stretch">
                                <div class="card-body p-4">
                                    <div class="form-group pb-3">
                                        <label for="type">Type:</label>
                                        <select name="type" class="form-control" data-select2-selector="status" required>
                                            <option data-bg="bg-success" value="vacancy" {{ $answer->type == 'vacancy' ? 'selected' : '' }}>
                                                Vacancy
                                            </option>
                                            <option data-bg="bg-primary" value="product" {{ $answer->type == 'product' ? 'selected' : '' }}>
                                                Product
                                            </option>
                                        </select>
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



            function updateEditorContent() {
                document.getElementById('text_uz').value = editorUz.root.innerHTML;
                document.getElementById('text_en').value = editorEn.root.innerHTML;
                document.getElementById('text_ru').value = editorRu.root.innerHTML;
            }

            document.querySelector('form').addEventListener('submit', function(event){
                updateEditorContent();
            });
        </script>
@endsection
