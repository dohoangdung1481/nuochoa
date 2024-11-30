@extends('layouts.app')
@section('content')
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5">
        <h2 class="fw-bolder mb-4">{{$searchTerm}}</h2>
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center">
            <!-- Sản phẩm 1 -->
            @foreach($sanpham as $sanpham)
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="https://dummyimage.com/450x300/000000/ffffff.jpg" alt="...">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">{{ $sanpham->ten_san_pham }}</h5>
                            {{$sanpham->gia}} VND
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><button class="btn btn-outline-dark">Thêm vào giỏ</button></div>
                    </div>
                </div>
            </div>
          @endforeach
</section>
@endsection
