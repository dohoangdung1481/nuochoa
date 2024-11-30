@extends('layouts.app')
@section('content')
    @include('components.slider-home')

    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categories of The Month</h1>
            <p>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
                {{-- @foreach ($danhmuc as $dm)
                {{$dm->ten_danh_muc}}
                @endforeach --}}
            </p>
        </div>
    </div>

    @include('components.sanphamnoibat')

    @include('components.sanphammoi')
@endsection
