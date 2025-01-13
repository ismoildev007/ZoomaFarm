@extends('layouts.admin')

@section('content')
    <form action="{{ route('about-teams.update', $aboutTeam->id) }}" method="POST" enctype="multipart/form-data" novalidate class="needs-validation" onsubmit="updateEditorContent()">
        @csrf
        @method('PUT')

        <main class="nxl-container">
            <div class="nxl-content">
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Члены команды нашей компании</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                            <li class="breadcrumb-item">Члены команды нашей компании</li>
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
                                    <h5 class="card-title">Детали информации</h5>
                                </div>
                                <div class="card-body p-4">
                                    <ul class="nav-tab-items-wrapper nav nav-justified invoice-overview-tab-item">
                                        <li class="nav-item">
                                            <a href="#uzContent" class="nav-link active" data-bs-toggle="tab" data-bs-target="#uzContent">O'zbekcha</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#enContent" class="nav-link" data-bs-toggle="tab" data-bs-target="#enContent">English</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#ruContent" class="nav-link" data-bs-toggle="tab" data-bs-target="#ruContent">Русский</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content pt-3">
                                        @foreach (['uz', 'en', 'ru'] as $lang)
                                            <div class="tab-pane fade show {{ $lang == 'uz' ? 'active' : '' }}" id="{{ $lang }}Content">
                                                <div class="form-group pb-3">
                                                    <label for="short_content_{{ $lang }}">Чем мы занимаемся (кратко) ({{ strtoupper($lang) }}):</label>
                                                    <textarea class="form-control" id="short_content_{{ $lang }}" name="short_content_{{ $lang }}" required>{{ old('short_content_' . $lang, optional($aboutTeam)->{'short_content_' . $lang}) }}</textarea>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="about_or_company_{{ $lang }}">About or Company ({{ strtoupper($lang) }}):</label>
                                                    <img src="/manual/about_or_company.png" alt="Current Image" class="img-thumbnail mt-2" height="50" width="200">
                                                    <div id="about_{{ $lang }}" style="height:200px;">{!! old('about_or_company_' . $lang, $aboutTeam->{'about_or_company_' . $lang}) !!}</div>
                                                    <input type="hidden" id="about_or_company_{{ $lang }}" name="about_or_company_{{ $lang }}">
                                                </div>
                                                <hr>
                                                <div class="form-group pb-3">
                                                    <label for="description_title_{{ $lang }}">Описание Заголовок ({{ strtoupper($lang) }}):</label>
                                                    <img src="/manual/description.png" alt="Current Image" class="img-thumbnail mt-2" height="50" width="200">
                                                    <input type="text" class="form-control" id="description_title_{{ $lang }}" name="description_title_{{ $lang }}" value="{{ old('description_title_' . $lang, $aboutTeam->{'description_title_' . $lang}) }}" required>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="description_{{ $lang }}">Описание ({{ strtoupper($lang) }}):</label>
                                                    <div id="descriptionEditor_{{ $lang }}" style="height:200px;">{!! old('description_' . $lang, $aboutTeam->{'description_' . $lang}) !!}</div>
                                                    <input type="hidden" id="description_{{ $lang }}" name="description_{{ $lang }}">
                                                </div>
                                                <hr>
                                                <div class="form-group pb-3">
                                                    <label for="content_title_{{ $lang }}">Контент Заголовок ({{ strtoupper($lang) }}):</label>
                                                    <img src="/manual/content.png" alt="Current Image" class="img-thumbnail mt-2" height="50" width="200">
                                                    <input type="text" class="form-control" id="content_title_{{ $lang }}" name="content_title_{{ $lang }}" value="{{ old('content_title_' . $lang, $aboutTeam->{'content_title_' . $lang}) }}" required>
                                                </div>
                                                <div class="form-group pb-3">
                                                    <label for="content_{{ $lang }}">Контент ({{ strtoupper($lang) }}):</label>
                                                    <div id="editor_{{ $lang }}" style="height:200px;">{!! old('content_' . $lang, $aboutTeam->{'content_' . $lang}) !!}</div>
                                                    <input type="hidden" id="text_{{ $lang }}" name="content_{{ $lang }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card stretch">
                                <div class="card-header">
                                    <h5 class="card-title">Изображение</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group pb-3">
                                        <img src="/manual/production.png" alt="Current Image" class="img-thumbnail mt-2" height="50" width="200">
                                        <label for="production">производство:</label>
                                        <input type="text" class="form-control" id="production" name="production" value="{{ old('production', $aboutTeam->{'production'}) }}" required oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    </div>
                                    <div class="form-group pb-3">
                                        <img src="/manual/research_and_development.png" alt="Current Image" class="img-thumbnail mt-2" height="50" width="200">
                                        <label for="research_and_development">исследования и разработки:</label>
                                        <input type="text" class="form-control" id="research_and_development" name="research_and_development" value="{{ old('research_and_development', $aboutTeam->{'research_and_development'}) }}" required oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    </div>
                                    <div class="form-group pb-3">
                                        <img src="/manual/our_employees_work.png" alt="Current Image" class="img-thumbnail mt-2" height="50" width="200">
                                        <label for="our_employees_work">наши сотрудники работают:</label>
                                        <input type="text" class="form-control" id="our_employees_work" name="our_employees_work" value="{{ old('our_employees_work', $aboutTeam->{'our_employees_work'}) }}" required oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    </div>
                                    <div class="form-group pb-3">
                                        <img src="/manual/countries_use.png" alt="Current Image" class="img-thumbnail mt-2" height="50" width="150">
                                        <label for="countries_use">Cтраны используют:</label>
                                        <input type="text" class="form-control" id="countries_use" name="countries_use" value="{{ old('countries_use', $aboutTeam->{'countries_use'}) }}" required oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    </div>
                                    <div class="form-group">
                                        <label for="image" style="font-weight: 900">описание изображения:</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        @if ($aboutTeam->image)
                                            <img src="{{ asset('storage/' . $aboutTeam->image) }}" alt="Current Image" class="img-thumbnail mt-2" width="200">
                                        @endif
                                    </div>
                                    <div class="form-group mt-4">
                                        <label for="photo" style="font-weight: 900">контент изображения:</label>
                                        <input type="file" class="form-control" id="photo" name="photo">
                                        @if ($aboutTeam->content_image)
                                            <img src="{{ asset('storage/' . $aboutTeam->content_image) }}" alt="Current Image" class="img-thumbnail mt-2" width="200">
                                        @endif
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
        // Quill editorini barcha tillar uchun yaratish
        @foreach (['uz', 'en', 'ru'] as $lang)
        var aboutEditor{{ ucfirst($lang) }} = new Quill('#about_{{ $lang }}', { theme: 'snow' });
        var descriptionEditor{{ ucfirst($lang) }} = new Quill('#descriptionEditor_{{ $lang }}', { theme: 'snow' });
        var contentEditor{{ ucfirst($lang) }} = new Quill('#editor_{{ $lang }}', { theme: 'snow' });

        // Editorning mavjud qiymatini to'ldirish
        aboutEditor{{ ucfirst($lang) }}.root.innerHTML = `{!! old('about_or_company_' . $lang, $aboutTeam->{'about_or_company_' . $lang}) !!}`;
        descriptionEditor{{ ucfirst($lang) }}.root.innerHTML = `{!! old('description_' . $lang, $aboutTeam->{'description_' . $lang}) !!}`;
        contentEditor{{ ucfirst($lang) }}.root.innerHTML = `{!! old('content_' . $lang, $aboutTeam->{'content_' . $lang}) !!}`;
        @endforeach

        // Form yuborilishidan oldin qiymatlarni yashirin inputlarga kiritish
        function updateEditorContent() {
            @foreach (['uz', 'en', 'ru'] as $lang)
            document.getElementById('about_or_company_{{ $lang }}').value = aboutEditor{{ ucfirst($lang) }}.root.innerHTML;
            document.getElementById('description_{{ $lang }}').value = descriptionEditor{{ ucfirst($lang) }}.root.innerHTML;
            document.getElementById('text_{{ $lang }}').value = contentEditor{{ ucfirst($lang) }}.root.innerHTML;
            @endforeach
        }
    </script>
    <style>
        hr{
            border: 2px solid red;
        }
    </style>

@endsection
