@extends('layouts.admin')
@section('title', 'Список продуктов')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Список продуктов</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                        <li class="breadcrumb-item">Продукты</li>
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
                                        <h4 class=" bold ">Продукты</h4>
                                        <div class="">
                                            <div class="dataTables_filter">
                                                <a href="{{ route('products.create') }}"
                                                   class="btn btn-sm btn-primary">Добавить</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover" id="productList">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Название (УЗ)</th>
                                            <th>Название (РУ)</th>
                                            <th>Название (АН)</th>
                                            <th>Изображение</th>
                                                <th class="text-end">Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->name_uz }}</td>
                                                <td>{{ $product->name_ru }}</td>
                                                <td>{{ $product->name_en }}</td>
                                                <td>
                                                    @if ($product->image)
                                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name_en }}" width="50">
                                                    @endif
                                                </td>
                                                <td >
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="{{ route('products.show', $product->id) }}"
                                                           class="avatar-text avatar-md d-none">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <a href="{{ route('products.edit', $product->id) }}"
                                                           class="avatar-text avatar-md">
                                                            <i class="feather feather-edit-3"></i>
                                                        </a>
                                                        <form
                                                            action="{{ route('products.destroy', $product->id) }}"
                                                            method="POST" style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                    class="avatar-text avatar-md"
                                                                    onclick="return confirm('Are you sure?')">
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

