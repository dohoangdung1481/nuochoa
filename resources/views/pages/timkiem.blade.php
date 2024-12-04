@extends('layouts.app')
@section('content')
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5">
        <h2 class="fw-bolder mb-4">{{ $searchTerm }}</h2>
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center">
            
            @foreach($sanpham as $sanpham)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Hình ảnh sản phẩm -->
                    <img class="card-img-top" src="./img/panther1.webp" alt="">
                    
                    <!-- Chi tiết sản phẩm -->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Tên sản phẩm -->
                            <h5 class="fw-bolder">{{ $sanpham->ten_san_pham }}</h5>
                            
                            <!-- Mô tả sản phẩm -->
                            <p class="text-muted small mt-2">
                                {{ $sanpham->mo_ta }}
                            </p>
                            
                            <!-- Giá sản phẩm -->
                            {{ number_format($sanpham->gia, 0, ',', '.') }} VND
                        </div>
                    </div>
                  
                    <div class="text-center">
                        <form action="{{ route('giohang.add', ['id' => $sanpham->san_pham_id]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="san_pham_id" value="{{ $sanpham->san_pham_id }}">
                            <input type="hidden" name="ten_san_pham" value="{{ $sanpham->ten_san_pham }}">
                            <input type="hidden" name="gia" value="{{ $sanpham->gia }}">
                            
                            <!-- Nút cộng/trừ và trường hiển thị số lượng -->
                            <div class="input-group mb-3" style="max-width: 10rem; margin: 0 auto;">
                                <button type="button" class="btn btn-outline-secondary" onclick="updateQuantity({{ $sanpham->san_pham_id }}, -1)"><i class="bi bi-dash"></i></button>
                                <input type="number" name="qty" id="qty_{{ $sanpham->san_pham_id }}" class="form-control text-center" value="1" min="1" style="width: 4rem; -moz-appearance: textfield; -webkit-appearance: none; appearance: none;" readonly>
                                <button type="button" class="btn btn-outline-secondary" onclick="updateQuantity({{ $sanpham->san_pham_id }}, 1)"><i class="bi bi-plus"></i></button>
                            </div>
                            
                            <!-- Nút thêm vào giỏ -->
                            <button type="submit" class="btn btn-outline-dark">Thêm vào giỏ</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
<script>
    // Hàm cập nhật số lượng
    function updateQuantity(id, change) {
        const input = document.getElementById(`qty_${id}`);
        const currentValue = parseInt(input.value);
        const newValue = currentValue + change;

        if (newValue >= 1) { // Chỉ cho phép giá trị >= 1
            input.value = newValue;
        }
    }
</script>
@endsection

