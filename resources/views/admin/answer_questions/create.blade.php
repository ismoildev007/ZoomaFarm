@extends('layouts.admin')

@section('content')
    <form action="{{ route('answer-questions.store') }}" method="POST" enctype="multipart/form-data" novalidate class="needs-validation" onsubmit="updateEditorContent()">
        @csrf

        <main class="nxl-container">
            <div class="nxl-content">
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Создать Вопрос ответ</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Главная</a></li>
                            <li class="breadcrumb-item">Вопрос ответ</li>
                        </ul>
                    </div>
                    <div class="page-header-right ms-auto">
                        <button type="submit" class="btn btn-sm btn-primary">Создать</button>
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
                                    <h5 class="card-title">Детали Вопрос ответ</h5>
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
                                        @foreach (['uz' => 'O\'zbekcha', 'en' => 'English', 'ru' => 'Русский'] as $lang => $label)
                                            <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ $lang }}Content">
                                                <div class="form-group pb-3">
                                                    <label for="question_{{ $lang }}">Вопрос  ({{ strtoupper($lang) }}):</label>
                                                    <input type="text" class="form-control" id="question_{{ $lang }}" name="question_{{ $lang }}" value="{{ old('question_' . $lang) }}" required>
                                                </div>

                                                <div class="form-group pb-3">
                                                    <label for="answer_{{ $lang }}">ответ ({{ strtoupper($lang) }}):</label>
                                                    <input type="text" class="form-control" id="answer_{{ $lang }}" name="answer_{{ $lang }}" value="{{ old('answer_' . $lang) }}" required>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card stretch">
                                <div class="card-body p-4">
                                    <div class="form-group pb-3">
                                        <label for="image">Type:</label>
                                        <select name="type" class="form-control" data-select2-selector="status" required>
                                            <option data-bg="bg-success" value="vacancy">Vacancy</option>
                                            <option data-bg="bg-primary" value="product">Product</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </form>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <script>
        var editors = {
            'uz': new Quill('#editor_uz', { theme: 'snow' }),
            'en': new Quill('#editor_en', { theme: 'snow' }),
            'ru': new Quill('#editor_ru', { theme: 'snow' })
        };

        function updateEditorContent() {
            for (const [lang, editor] of Object.entries(editors)) {
                document.getElementById('text_' + lang).value = editor.root.innerHTML;
            }
        }

        document.querySelector('form').addEventListener('submit', function(event){
            updateEditorContent();
        });
    </script>
@endsection
