@php 
    $sanpham = \App\Models\Sanpham::orderBy('ngay_tao', 'desc')->take(8)->get(); 
@endphp

<section style="background-color: #fff;">
    <div class="container py-5">
        <h3 class="text-center mt-4 mb-5 text-dark"><strong>Sản Phẩm Nổi Bật</strong></h3>

        <div class="row text-center">
            @foreach ($sanpham as $sp)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                
                    <div class="card shadow-sm" style="background-color: #fff; color: #000;">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                            <a href="{{ route('sanpham.show', ['id' => $sp->san_pham_id]) }}">
                                <img src="{{ asset('img/panther1.webp') }}" class="w-100" />
                            </a>
                        </div>
                        <div class="card-body">
                            <!-- Tên sản phẩm - màu chữ đen -->
                            <h5 class="card-title mb-3 text-dark">{{ $sp->ten_san_pham }}</h5>
                            <!-- Mô tả sản phẩm - màu chữ đen -->
                            <p class="text-dark">{{ $sp->mo_ta }}</p>
                            <!-- Giá sản phẩm - màu chữ đen -->
                            <h6 class="mb-3 text-dark">{{ number_format($sp->gia, 0, ',', '.') }} VND</h6>
                            <!-- Nút thêm vào giỏ hàng -->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <form action="{{ route('giohang.add', ['id' => $sp->san_pham_id]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="san_pham_id" value="{{ $sp->san_pham_id }}">
                                        <input type="hidden" name="ten_san_pham" value="{{ $sp->ten_san_pham }}">
                                        <input type="hidden" name="gia" value="{{ $sp->gia }}">
                                        
                                        <!-- Nút cộng/trừ và trường hiển thị số lượng -->
                                        <div class="input-group mb-3" style="max-width: 10rem; margin: 0 auto;">
                                            <button type="button" class="btn btn-outline-secondary" onclick="updateQuantity({{ $sp->san_pham_id }}, -1)"><i class="bi bi-dash"></i></button>
                                            <input type="number" name="qty" id="qty_{{ $sp->san_pham_id }}" class="form-control text-center" value="1" min="1" style="width: 4rem; -moz-appearance: textfield; -webkit-appearance: none; appearance: none;" readonly>
                                            <button type="button" class="btn btn-outline-secondary" onclick="updateQuantity({{ $sp->san_pham_id }}, 1)"><i class="bi bi-plus"></i></button>
                                        </div>
                                        
                                        <!-- Nút thêm vào giỏ -->
                                        <button type="submit" class="btn btn-outline-dark">Thêm vào giỏ</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{route('sanpham.all')}}" class="btn btn-secondary">Xem thêm</a>
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
