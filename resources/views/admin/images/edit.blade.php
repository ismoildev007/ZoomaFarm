@extends('layouts.admin')

@section('title', 'Редактировать изображение')

@section('content')
<form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
    @csrf
    @method('PUT')

    <main class="nxl-container">
        <div class="nxl-content">

            <!-- Заголовок страницы -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Редактировать изображение</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('images.index') }}">Изображения</a></li>
                        <li class="breadcrumb-item">Редактировать</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                </div>
            </div>

            <!-- Ошибки -->
            @if ($errors->any())
                <div class="alert alert-danger m-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Основной контент -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card stretch">
                            <div class="card-header">
                                <h5 class="card-title">Детали изображения</h5>
                            </div>
                            <div class="card-body p-4">

                                <div class="form-group pb-3">
                                    <label for="section">Название раздела:</label>
                                    <input type="text" class="form-control" id="section" name="section" value="{{ old('section', $image->section) }}" required>
                                </div>

                                <div class="form-group pb-3">
                                    <label for="image">Новое изображение (по желанию):</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <div class="card-body text-center">
                                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="Текущее изображение" class="img-fluid rounded shadow" style="max-height: 300px;">
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
