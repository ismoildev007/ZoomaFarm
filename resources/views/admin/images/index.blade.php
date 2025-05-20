@extends('layouts.admin')
@section('title', 'Список изображений')

@section('content')
<main class="nxl-container">
    <div class="nxl-content">

        <!-- Заголовок страницы -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Список изображений</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                    <li class="breadcrumb-item">Изображения</li>
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
                                    <h4 class="bold">Изображения</h4>
                                    <div class="">
                                        <div class="dataTables_filter">
                                            <a href="{{ route('images.create') }}" class="btn btn-sm btn-primary">Добавить</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover" id="imagesList">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Название раздела</th>
                                        <th>Изображение</th>
                                        <th class="text-end">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($images as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->section }}</td>
                                            <td>
                                                @if ($item->image_path)
                                                    <img src="{{ asset('storage/' . $item->image_path) }}" alt="Image" width="50">
                                                @endif
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="{{ route('images.edit', $item->id) }}" class="avatar-text avatar-md" title="Редактировать">
                                                        <i class="feather feather-edit-3"></i>
                                                    </a>
                                                    <form action="{{ route('images.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="avatar-text avatar-md" onclick="return confirm('Вы уверены?')" title="Удалить">
                                                            <i class="feather feather-trash-2"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
