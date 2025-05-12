@extends('layouts.admin')
@section('title', 'Список партнеров')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Список партнеров</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                        <li class="breadcrumb-item">Партнеры</li>
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
                                        <h4 class="bold">Партнеры</h4>
                                        <div class="">
                                            <div class="dataTables_filter">
                                                <a href="{{ route('partners.create') }}" class="btn btn-sm btn-primary">Добавить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover" id="partnersList">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Имя (УЗ)</th>
                                            <th>Имя (РУ)</th>
                                            <th>Имя (АН)</th>
                                            <th>Сайт</th>
                                            <th>Логотип</th>
                                            <th class="text-end">Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($partners as $partner)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $partner->name_uz }}</td>
                                                <td>{{ $partner->name_ru }}</td>
                                                <td>{{ $partner->name_en }}</td>
                                                <td>
                                                    @if ($partner->website)
                                                        <a href="{{ $partner->website }}" target="_blank">{{ $partner->website }}</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($partner->logo)
                                                        <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name_en }}" width="50">
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="{{ route('partners.show', $partner->id) }}" class="avatar-text avatar-md d-none">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <a href="{{ route('partners.edit', $partner->id) }}" class="avatar-text avatar-md">
                                                            <i class="feather feather-edit-3"></i>
                                                        </a>
                                                        <form action="{{ route('partners.destroy', $partner->id) }}" method="POST" style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="border-0 bg-transparent js-delete-btn" type="submit"  onclick="return confirm('Ushbu faoliyatni o‘chirishni xohlaysizmi?')">
                                                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="O'chirish" aria-label="O'chirish">
                                                                    <i class="feather-trash-2"></i>
                                                                </a>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @if ($partners->isEmpty())
                                    <div class="card-body">
                                        <p class="text-center">На данный момент Partner нет.</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
