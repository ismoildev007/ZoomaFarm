@extends('layouts.admin')
@section('title', 'Политика конфиденциальности')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- Заголовок страницы -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Политика конфиденциальности</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                        <li class="breadcrumb-item">Политика конфиденциальности</li>
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
                                        <h4 class="bold">Политика конфиденциальности</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Название (RU)</th>
                                            <th class="text-end">Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($privacyPolicies as $policy)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{!! Str::limit(strip_tags($policy->content_ru), 50) !!}</td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="{{ route('privacy.edit', $policy->id) }}" class="avatar-text avatar-md">
                                                            <i class="feather feather-edit-3"></i>
                                                        </a>
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
