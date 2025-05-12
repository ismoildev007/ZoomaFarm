@extends('layouts.admin')

@section('title', 'Til Fayllarini Tahrirlash')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">

            <div class="main-content ">
                <h2>Редактирование переводов</h2>

                @if(session('success'))
                    <!-- Сообщение об успешном сохранении перевода -->
                    <div class="alert alert-success">{{ session('success') }}</div>

                    <!-- Скрипт для показа модального окна -->
                    <script>
                        window.onload = function () {
                            $('#successModal').modal('show'); // Открытие модального окна
                            setTimeout(function () {
                                location.reload(); // Обновление страницы через 3 секунды
                            }, 3000);
                        };
                    </script>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif


                <!-- Til fayllarini ko‘rsatish -->
                <table class="table table-bordered">
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
                                            <textarea name="translations[uz]" class="form-control">{{ is_array($translations['uz'][$key] ?? '') ? json_encode($translations['uz'][$key]) : ($translations['uz'][$key] ?? '') }}</textarea>
                                </td>
                                <td>
                                            <textarea name="translations[ru]"
                                                      class="form-control">{{ is_array($translations['ru'][$key] ?? '') ? json_encode($translations['ru'][$key]) : ($translations['ru'][$key] ?? '') }}</textarea>
                                </td>
                                <td>
                                            <textarea name="translations[en]"
                                                      class="form-control">{{ is_array($translations['en'][$key] ?? '') ? json_encode($translations['en'][$key]) : ($translations['en'][$key] ?? '') }}</textarea>
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
    </main>


    <!-- JavaScript (Modalni ochish, yopish va formni yuborish) -->
    <!-- Модальное окно -->
    <div id="successModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Перевод обновлён!</h5>
                </div>
                <div class="modal-body">
                    <p>Подождите 3 секунды, чтобы изменения вступили в силу...</p>
                </div>
            </div>
        </div>
    </div>

@endsection
