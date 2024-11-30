@php $sanpham = \App\Models\Sanpham::orderBy('ngay_tao', 'desc')->take(6)->get(); @endphp
<section style="background-color: #eee;">
    <div class="text-center container py-5">
        <h3 class="mt-4 mb-5"><strong>Sản Phẩm Nổi Bật</strong></h3>

        <div class="row">
            @foreach ($sanpham as $sp)
            <div class="col-lg-4 col-md-12 mb-4">
                <a href="{{ route('sanpham.show', ['id' => $sp->san_pham_id]) }}">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <img src="./img/panther1.webp" class="w-100" />
                            <a href="#!">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">{{ $sp->ten_san_pham }}</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>{{ $sp->mo_ta }}</p>
                            </a>
                            <h6 class="mb-3">{{ $sp->gia }}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            
            
        </div>
    </div>
</section>
