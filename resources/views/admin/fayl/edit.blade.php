@extends('layouts.admin')
@section('title', 'Fayllar')

@section('content')
<form action="{{ route('file.update', ['id' => $id]) }}" method="POST" enctype="multipart/form-data" novalidate class="needs-validation">
    @csrf
    @method('PUT')
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Изменить Файл</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a>Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('documents.index') }}">Файлы</a></li>
                        <li class="breadcrumb-item">Изменить Файл</li>
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
                    <div class="col-lg-12">
                        <div class="card stretch">
                            <div class="card-header">
                                <h5 class="card-title">Файл</h5>
                            </div>
                            <div class="card-body p-4">

                                <div class="form-group pb-3">
                                    <label for="file">Выберите новый файл:</label>
                                    <input type="file" class="form-control" id="file" name="file">
                                    @if($filename)
                                        <div class="mt-3">
                                            <a href="{{ route('documents.downloadFile') }}" class="btn btn-info" target="_blank">Посмотреть текущий файл</a>
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
</form>

@endsection