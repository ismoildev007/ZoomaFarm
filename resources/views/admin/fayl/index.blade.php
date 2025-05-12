@extends('layouts.admin')
@section('title', 'Fayllar')


@section('content')
    <main class="nxl-container">
    <div class="nxl-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Список файлов</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                    <li class="breadcrumb-item">Файлы</li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content p-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card stretch stretch-full">
                        <div class="card-body p-0">
                            <div class="px-2 py-3">
                                <div class="d-flex justify-content-between">
                                    <h4 class="bold">Файлы</h4>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover" id="fileList">
                                    <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Название файла</th>
                                            <th>Дата изменения</th>
                                            <th class="text-end">Действия</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $file->id }}</td>
                                            <td>{{ $file->file_name }}</td>
                                            <td>{{ $file->updated_at->format('Y-m-d H:i:s') }}</td>
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="{{ route('documents.editFile', ['id' => $file->id]) }}"
                                                       class="avatar-text avatar-md">
                                                        <i class="feather feather-edit-3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
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
@if(session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            showToast("{{ session('success') }}");
        });

        function showToast(message) {
            const toast = document.createElement('div');
            toast.innerText = message;
            toast.style.position = 'fixed';
            toast.style.bottom = '20px';
            toast.style.right = '20px';
            toast.style.background = '#4BB543';
            toast.style.color = 'white';
            toast.style.padding = '12px 20px';
            toast.style.borderRadius = '6px';
            toast.style.boxShadow = '0 2px 10px rgba(0,0,0,0.2)';
            toast.style.zIndex = '9999';

            document.body.appendChild(toast);

            setTimeout(() => {
                toast.remove();
            }, 3000);
        }
    </script>
@endif

@endsection
