@extends('layouts.admin')

@section('content')
    <form action="{{ route('partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data" novalidate class="needs-validation">
        @csrf
        @method('PUT')
        <main class="nxl-container">
            <div class="nxl-content">
                <div class="page-header">
                    <div class="page-header-left d-flex align-items-center">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Создать Партнера</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a>Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('partners.index') }}">Партнеры</a></li>
                            <li class="breadcrumb-item">Создать Партнера</li>
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
                                    <h5 class="card-title">Детали Партнера</h5>
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
                                                <label for="name_uz">Имя (UZ):</label>
                                                <input type="text" class="form-control" id="name_uz" name="name_uz" value="{{ old('name_uz',$partner->name_uz) }}">
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="description_uz">Описание (UZ):</label>
                                                <textarea class="form-control" id="description_uz" name="description_uz" rows="5">{!!   old('description_en',$partner->description_en) !!}</textarea>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="enContent">
                                            <div class="form-group pb-3">
                                                <label for="name_en">Имя (EN):</label>
                                                <input type="text" class="form-control" id="name_en" name="name_en" value="{{ old('name_en',$partner->name_en) }}">
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="description_en">Описание (EN):</label>
                                                <textarea class="form-control" id="description_en" name="description_en" rows="5">{!!   old('description_en',$partner->description_en) !!}</textarea>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="ruContent">
                                            <div class="form-group pb-3">
                                                <label for="name_ru">Имя (RU):</label>
                                                <input type="text" class="form-control" id="name_ru" name="name_ru" value="{{ old('name_ru',$partner->name_ru) }}">
                                            </div>

                                            <div class="form-group pb-3">
                                                <label for="description_ru">Описание (RU):</label>
                                                <textarea class="form-control" id="description_ru" name="description_ru" rows="5">{!!   old('description_ru',$partner->description_ru) !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card stretch">
                                <div class="card-header">
                                    <h5 class="card-title">Изображение и Сайт</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div class="form-group pb-3">
                                        <label for="logo">Логотип:</label>
                                        <input type="file" class="form-control" id="logo" name="logo">
                                        @if($partner->logo)
                                            <div class="mt-3">
                                                <img src="{{ asset('storage/' . $partner->logo) }}" alt="Current Image" style="width: 100%; max-height: 300px;">
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group pb-3">
                                        <label for="website">Вебсайт:</label>
                                        <input type="url" class="form-control" id="website" name="website" value="{{ old('website',$partner->website) }}">
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
