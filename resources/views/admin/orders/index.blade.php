@extends('layouts.admin')
@section('title', 'Список заказов')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Список заказов</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Главная</a></li>
                        <li class="breadcrumb-item">Заказы</li>
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
                                        <h4 class="bold">Заказы</h4>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover" id="ordersList">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Имя клиента</th>
                                            <th>Телефон</th>
                                            <th>Сообщение</th>
                                            <th>Статус</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $order->name }}</td>
                                                <td>{{ $order->phone }}</td>
                                                <td>{{ $order->message }}</td>
                                                <td>
                                                    <form action="{{ route('orders.update-status', $order->id) }}" method="POST">
                                                        @csrf
                                                        <select class="form-control status-selector" name="status" onchange="this.form.submit()">
                                                            <option value="new" {{ $order->status == 'new' ? 'selected' : '' }}>New</option>
                                                            <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                                                            <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                                            <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                        </select>
                                                    </form>

                                                </td>
                                                <td>
                                                    <!-- Actions -->
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
    <script>
        document.querySelectorAll('.status-selector').forEach(item => {
            item.addEventListener('change', function() {
                const orderId = this.getAttribute('data-order-id');
                const status = this.value;
                fetch(`/admin/orders/${orderId}/update-status`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ status: status })
                })
                    .then(response => response.json())
                    .then(data => {
                        alert('Status updated successfully!');
                    })
                    .catch(error => {
                        console.error('Error updating status:', error);
                    });
            });
        });
    </script>

@endsection
