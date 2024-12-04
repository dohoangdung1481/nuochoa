@extends('layouts.app')
@section('content')
    @include('components.slider-home')

    <div class="row text-center pt-5">
        <div class="col-lg-6 m-auto">
            <h1 class="h1" style="font-family: 'Merriweather', serif; font-size: 3rem; font-weight: 700; color: #333; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
                Thank you for viewing and trusting
            </h1>
        </div>
    </div>
    </div>
    @include('components.sanphamnoibat')

    @include('components.sanphammoi')
@endsection
