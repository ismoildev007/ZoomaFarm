@extends('layouts.admin')
@section('title', 'Заявки на сотрудничество')

@section('content')
<main class="nxl-container">
    <div class="nxl-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Заявки на сотрудничество</h5>
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
                                    <h4 class="bold">Заявки на сотрудничество</h4>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover" id="partnerRequestList">
                                    <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Название компании</th>
                                            <th>Контактное лицо</th>
                                            <th>Телефон</th>
                                            <th>Email</th>
                                            <th>Сообщение</th>
                                            <th>Статус</th>
                                            <th class="text-end">Действия</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($partnerRequests as $request)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $request->company_name }}</td>
                                            <td>{{ $request->contact_person }}</td>
                                            <td>{{ $request->phone }}</td>
                                            <td>{{ $request->email }}</td>
                                            <td>{{ $request->message }}</td>
                                            <td>
                                                <form action="{{ route('partner_requests.updateStatus', $request->id) }}" method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('PATCH')
                                                    <select name="status" onchange="this.form.submit()" class="form-select form-select-sm resume-status-select">
                                                        <option value="new" {{ $request->status == 'new' ? 'selected' : '' }}>Новая</option>
                                                        <option value="reviewed" {{ $request->status == 'reviewed' ? 'selected' : '' }}>Рассмотрено</option>
                                                        <option value="accepted" {{ $request->status == 'accepted' ? 'selected' : '' }}>Принято</option>
                                                        <option value="rejected" {{ $request->status == 'rejected' ? 'selected' : '' }}>Отклонено</option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    <form action="{{ route('partner-requests.destroy', $request->id) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="avatar-text avatar-md" onclick="return confirm('Вы уверены, что хотите удалить?')">
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
                            <div class="pagination-wrapper">
                                {{ $partnerRequests->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selects = document.querySelectorAll('.resume-status-select');

        function updateSelectColor(select) {
            const value = select.value;
            select.style.color = '#fff';

            switch (value) {
                case 'new':
                    select.style.backgroundColor = '#ffc107'; // желтый
                    break;
                case 'reviewed':
                    select.style.backgroundColor = '#17a2b8'; // синий-зеленый
                    break;
                case 'accepted':
                    select.style.backgroundColor = '#28a745'; // зеленый
                    break;
                case 'rejected':
                    select.style.backgroundColor = '#dc3545'; // красный
                    break;
                default:
                    select.style.backgroundColor = '#ffffff';
                    select.style.color = '#000';
            }
        }

        selects.forEach(select => {
            updateSelectColor(select);
            select.addEventListener('change', function () {
                updateSelectColor(this);
            });
        });
    });
</script>

<style>
    .form-select {
        width: 100%;
        padding: 0.5rem 1rem;
        font-size: 1rem;
        color: #333;
        background-color: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-select:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 6px rgba(0, 123, 255, 0.5);
    }

    .form-select:hover {
        border-color: #007bff;
    }

    .form-select:active {
        border-color: #28a745;
    }
</style>

@endsection
