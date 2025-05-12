@extends('layouts.admin')
@section('title', 'Список миссий')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Список миссий</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                        <li class="breadcrumb-item">Миссии</li>
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
                                        <h4 class="bold">Миссии</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover" id="missionList">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Заголовок</th>
                                            <th>Изображение</th>
                                            <th>Дата</th>
                                            <th class="text-end">Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($missions as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->title_ru }}</td>
                                                <td>
                                                    @if ($item->image)
                                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title_ru }}" width="50">
                                                    @endif
                                                </td>
                                                <td>{{ $item->created_at->format('d.m.Y H:i') }}</td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="{{ route('missions.edit', $item->id) }}" class="avatar-text avatar-md">
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
