
@extends('layouts.app')
@section('content')

<section class="py-5">
    
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/000000/ffffff.jpg" alt="...">
            </div>
            <div class="col-md-6 text-black">
                <div class="small mb-1">{{ $sanpham->san_pham_id }}</div>
                <h1 class="display-5 fw-bolder">{{ $sanpham->ten_san_pham }}</h1>
                <div class="fs-5 mb-5">
                    <span>{{ number_format($sanpham->gia, 0, ',', '.') }} VND</span>
                </div>
                <p class="lead"> {{ $sanpham->mo_ta }}</p>
                <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem">
                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        Thêm vào giỏ hàng</button>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Phần sản phẩm tương tự -->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5">
        <h2 class="fw-bolder mb-4">Sản phẩm tương tự</h2>
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center">
            <!-- Sản phẩm 1 -->
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="https://dummyimage.com/450x300/000000/ffffff.jpg" alt="...">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">Sản phẩm 1</h5>
                            $25.00
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><button class="btn btn-outline-dark">Thêm vào giỏ</button></div>
                    </div>
                </div>
            </div>
            <!-- Sản phẩm 2 -->
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="https://dummyimage.com/450x300/000000/ffffff.jpg" alt="...">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">Sản phẩm 2</h5>
                            $30.00
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><button class="btn btn-outline-dark">Thêm vào giỏ</button></div>
                    </div>
                </div>
            </div>
            <!-- Sản phẩm 3 -->
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="https://dummyimage.com/450x300/000000/ffffff.jpg" alt="...">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">Sản phẩm 3</h5>
                            $35.00
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><button class="btn btn-outline-dark">Thêm vào giỏ</button></div>
                    </div>
                </div>
            </div>
            <!-- Sản phẩm 4 -->
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="https://dummyimage.com/450x300/000000/ffffff.jpg" alt="...">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">Sản phẩm 4</h5>
                            $40.00
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><button class="btn btn-outline-dark">Thêm vào giỏ</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
