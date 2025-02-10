@extends('layouts.admin')

@section('title', 'Til Fayllarini Tahrirlash')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Til Fayllarini Tahrirlash</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                        <li class="breadcrumb-item">Til Tahrirlash</li>
                    </ul>
                </div>
            </div>

            <div class="main-content p-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-3">
                                <div class="px-2 py-3">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="bold">Til Fayllari</h4>
                                    </div>
                                </div>

                                <!-- Modal oynasi -->
                                <div id="successModal" class="modal fade" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Информация</h5>
                                            </div>
                                            <div class="modal-body">
                                                <p>Файл сохраняется, подождите 5 секунд...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Til fayllarini ko‘rsatish -->
                                <table  width="100%" class="p-5">
                                    <thead>
                                    <tr>
                                        <th>Kalit</th>
                                        <th>UZ</th>
                                        <th>RU</th>
                                        <th>EN</th>
                                        <th>Saqlash</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($translations['uz'] as $key => $value)
                                        <tr>
                                            <td>{{ $key }}</td>
                                            <form method="POST" action="{{ route('admin.lang.update') }}" class="lang-form">
                                                @csrf
                                                <input type="hidden" name="save_key" value="{{ $key }}">
                                                <td>
                                                    <textarea name="translations[uz]" class="form-control">{{ $translations['uz'][$key] ?? '' }}</textarea>
                                                </td>
                                                <td>
                                                    <textarea name="translations[ru]" class="form-control">{{ $translations['ru'][$key] ?? '' }}</textarea>
                                                </td>
                                                <td>
                                                    <textarea name="translations[en]" class="form-control">{{ $translations['en'][$key] ?? '' }}</textarea>
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-success">Saqlash</button>
                                                </td>
                                            </form>
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
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".lang-form").forEach(function (form) {
                form.addEventListener("submit", function (e) {
                    e.preventDefault(); // Form yuborilishini bloklash

                    let modal = document.getElementById("successModal");
                    let bootstrapModal = new bootstrap.Modal(modal);
                    bootstrapModal.show();

                    setTimeout(() => {
                        bootstrapModal.hide(); // Modalni yopish
                        form.submit(); // Formni jo‘natish
                    }, 6000);
                });
            });
        });
    </script>
@endsection
