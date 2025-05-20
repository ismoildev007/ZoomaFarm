@extends('layouts.admin')
@section('title', 'Добавить изображение')

@section('content')
<main class="nxl-container">
    <div class="nxl-content">

        <!-- Заголовок страницы -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Добавить изображение</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('images.index') }}">Изображения</a></li>
                    <li class="breadcrumb-item">Добавить</li>
                </ul>
            </div>
        </div>

        <!-- Основной контент -->
        <div class="main-content p-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card stretch stretch-full">
                        <div class="card-body p-0">
                            <div class="px-2 py-3">
                                <div class="d-flex justify-content-between">
                                    <h4 class="bold">Добавление изображения</h4>
                                    <div class="">
                                        <a href="{{ route('images.index') }}" class="btn btn-sm btn-secondary">Назад</a>
                                    </div>
                                </div>
                            </div>
                            <div class="px-2 py-3">
                                <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="section" class="form-label">Название раздела</label>
                                        <input type="text" class="form-control @error('section') is-invalid @enderror" id="section" name="section" value="{{ old('section') }}" required>
                                        @error('section')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Изображение</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" required>
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
