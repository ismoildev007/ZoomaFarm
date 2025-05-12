@extends('layouts.admin')
@section('title', 'Список вакансий')

@section('content')
<main class="nxl-container">
    <div class="nxl-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Список вакансий</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                    <li class="breadcrumb-item">Вакансии</li>
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
                                    <h4 class="bold">Вакансии</h4>
                                    <div class="">
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover" id="vacancyList">
                                    <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Ф.И.О.</th>
                                            <th>Телефон</th>
                                            <th>Должность</th>
                                            <th>Файл CV</th>
                                            <th>Статус</th>
                                            <th class="text-end">Действия</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($resumes as $resume)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $resume->full_name }}</td>
                                            <td>{{ $resume->phone }}</td>
                                            <td>{{ $resume->position_applied }}</td>
                                            <td>
                                                <a href="{{ asset('storage/' . $resume->cv_file) }}" target="_blank" class="btn btn-sm btn-success">Скачать</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('resumes.updateStatus', $resume->id) }}" method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('PATCH')
                                                    <select name="status" onchange="this.form.submit()" class="form-select form-select-sm resume-status-select">
                                                        <option value="pending" {{ $resume->status == 'pending' ? 'selected' : '' }}>Ожидает</option>
                                                        <option value="approved" {{ $resume->status == 'approved' ? 'selected' : '' }}>Одобрено</option>
                                                        <option value="rejected" {{ $resume->status == 'rejected' ? 'selected' : '' }}>Отклонено</option>
                                                    </select>
                                                </form>
                                            </td>

                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    <form action="{{ route('resumes.destroy', $resume->id) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="avatar-text avatar-md" onclick="return confirm('Are you sure?')">
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
                                {{ $resumes->links() }}
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
                case 'pending':
                    select.style.backgroundColor = '#ffc107'; // sariq
                    break;
                case 'approved':
                    select.style.backgroundColor = '#28a745'; // yashil
                    break;
                case 'rejected':
                    select.style.backgroundColor = '#dc3545'; // qizil
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
        /* Asosiy select styling */
.form-select {
    width: 100%; /* Butun kenglikni egallash */
    padding: 0.5rem 1rem; /* Ichki masofa */
    font-size: 1rem; /* O'lcham */
    color: #333; /* Matn rangi */
    background-color: #fff; /* Oq fon */
    border: 2px solid #e0e0e0; /* Yengil kulrang chiziq */
    border-radius: 8px; /* Yumshatilgan burchaklar */
    transition: all 0.3s ease-in-out; /* Silliq o'tish animatsiyasi */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Yengil soyali effekt */
}

/* Fokusda bo'lsa */
.form-select:focus {
    border-color: #007bff; /* Fokusda ko'k rang */
    outline: none; /* Fokusning tashqi chizig'ini olib tashlash */
    box-shadow: 0 0 6px rgba(0, 123, 255, 0.5); /* Ko'k soyali effekt */
}

/* Selectga tanlangan holat */
.form-select option {
    background-color: #fff; /* Oq fon */
    color: #333; /* Qora matn */
}

/* "O'zgartirish" holatida rang */
.form-select option[value="pending"]:checked {
    background-color: #f1f3f5; /* Yengil kulrang */
    color: #007bff; /* Ko'k matn */
}

/* "Qabul qilindi" holatida rang */
.form-select option[value="approved"]:checked {
    background-color: #d4edda; /* Yashil fon */
    color: #28a745; /* Yashil matn */
}

/* "Bekor qilindi" holatida rang */
.form-select option[value="rejected"]:checked {
    background-color: #f8d7da; /* Qizil fon */
    color: #dc3545; /* Qizil matn */
}

/* Hover holatdagi rang */
.form-select:hover {
    border-color: #007bff; /* Hoverda ko'k chiziq */
}

/* Bosilgan holat */
.form-select:active {
    border-color: #28a745; /* Yashil chiziq */
}

/* Selectning pastki chizig'ini zamonaviy ko'rinishda qilish */
.form-select option:focus {
    background-color: #007bff; /* Fokusda ko'k fon */
    color: #fff; /* Oq matn */
}

    </style>


@endsection
