@extends('layouts.app')
@section('content')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3" role="alert" style="max-width: 250px; font-size: 14px;">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container mt-5 mb-5"> <!-- Thêm mb-5 để footer không chồng lên nội dung -->
    <h1 class="text-center mb-4">Giỏ hàng của bạn</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">Tên sản phẩm</th>
                    <th class="text-center">Số lượng</th>
                    <th class="text-center">Giá</th>
                    <th class="text-center">Tổng cộng</th>
                    <th class="text-center">Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total = 0; // Biến lưu tổng tiền
                @endphp
                @foreach($cartItems as $item)
                    @php
                        $subtotal = $item->price * $item->qty;
                        $total += $subtotal;
                    @endphp
                    <tr>
                        <td class="text-center align-middle">{{ $item->name }}</td>
                        <td class="text-center align-middle">
                            <form action="{{ route('giohang.update', $item->rowId) }}" method="POST" class="d-inline">
                                @csrf
                                <input type="number" name="qty" value="{{ $item->qty }}" min="1" 
                                       class="form-control d-inline text-center" style="width: 70px;">
                                <button type="submit" class="btn btn-sm btn-secondary">Sửa</button>
                            </form>
                        </td>
                        <td class="text-center align-middle">{{ number_format($item->price, 0, ',', '.') }} VND</td>
                        <td class="text-center align-middle">{{ number_format($subtotal, 0, ',', '.') }} VND</td>
                        <td class="text-center align-middle">
                            <form action="{{ route('giohang.remove', $item->rowId) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="text-end mt-4">
        <h4 class="text-danger">Tổng tiền: {{ number_format($total, 0, ',', '.') }} VND</h4>
        <a href="" class="btn btn-success btn-lg mt-3">Thanh toán</a>
    </div>
</div>
@endsection
