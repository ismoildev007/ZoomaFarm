@extends('layouts.admin')
@section('title', 'Ответственность')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Ответственность</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                        <li class="breadcrumb-item">Ответственность</li>
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
                                        <h4 class="bold">Ответственность</h4>
                                        <div class="">
                                            <div class="dataTables_filter">
                                                <a href="{{ route('responsibility.create') }}" class="btn btn-sm btn-primary">Добавить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover" id="partnersList">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Заголовок (УЗ)</th>
                                            <th>Заголовок (РУ)</th>
                                            <th>Заголовок (АН)</th>
                                            <th>Изображение</th>
                                            <th class="text-end">Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($items as $partner)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $partner->title_uz }}</td>
                                                <td>{{ $partner->title_ru }}</td>
                                                <td>{{ $partner->title_en }}</td>
                                                <td>
                                                    @if ($partner->image)
                                                        <img src="{{ asset('storage/' . $partner->image) }}" alt="{{ $partner->name_en }}" width="50">
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="{{ route('responsibility.edit', $partner->id) }}" class="avatar-text avatar-md">
                                                            <i class="feather feather-edit-3"></i>
                                                        </a>
                                                        <form action="{{ route('responsibility.destroy', $partner->id) }}" method="POST" style="display: inline-block;">
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
                                @if ($items->isEmpty())
                                    <div class="card-body">
                                        <p class="text-center">На данный момент Документы нет.</p>
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
