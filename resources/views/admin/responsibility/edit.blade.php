@extends('layouts.admin')

@section('content')
    <form action="{{ route('responsibility.update', $responsibility->id) }}" method="POST" enctype="multipart/form-data" novalidate class="needs-validation">
        @csrf
        @method('PUT')
        <main class="nxl-container">
            <div class="nxl-content">
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Редактировать Обязанность</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a>Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('responsibility.index') }}">Обязанности</a></li>
                            <li class="breadcrumb-item">Редактировать</li>
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
                                    <h5 class="card-title">Детали Обязанности</h5>
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
                                                <input type="text" class="form-control" id="title_uz" name="title_uz" value="{{ old('title_uz',$responsibility->title_uz) }}">
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="description_uz">Описание (UZ):</label>
                                                <textarea class="form-control" id="description_uz" name="description_uz" rows="5">{!! old('description_uz',$responsibility->description_uz) !!}</textarea>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="enContent">
                                            <div class="form-group pb-3">
                                                <label for="title_en">Заголовок (EN):</label>
                                                <input type="text" class="form-control" id="title_en" name="title_en" value="{{ old('title_en',$responsibility->title_en) }}">
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="description_en">Описание (EN):</label>
                                                <textarea class="form-control" id="description_en" name="description_en" rows="5">{!! old('description_en',$responsibility->description_en) !!}</textarea>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="ruContent">
                                            <div class="form-group pb-3">
                                                <label for="title_ru">Заголовок (RU):</label>
                                                <input type="text" class="form-control" id="title_ru" name="title_ru" value="{{ old('title_ru',$responsibility->title_ru) }}">
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="description_ru">Описание (RU):</label>
                                                <textarea class="form-control" id="description_ru" name="description_ru" rows="5">{!! old('description_ru',$responsibility->description_ru) !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card stretch">
                                <div class="card-header">
                                    <h5 class="card-title">Изображения и Дата</h5>
                                </div>
                                <div class="card-body p-4">

                                    {{-- Rasm yuklash --}}
                                    <div class="form-group pb-3">
                                        <label for="image">Изображение </label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        @if($responsibility->image)
                                            <img src="{{ asset('storage/' . $responsibility->image) }}" class="img-fluid mt-2" width="100">
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
@endsection
