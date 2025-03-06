@extends('admin.admin_dashboard')
@section('admin')

    <!-- Breadcrumb Navigation -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('carousel.index') }}">Carousel Items</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Item</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Card Section -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">{{ $carouselItem->title }}</h5>
        </div>
        <div class="card-body">
            <div class="text-center mb-3">
                <img src="{{ asset('images/carousel/' . $carouselItem->image) }}" width="300" class="img-fluid rounded shadow">
            </div>

            <p><strong>Description:</strong> {{ $carouselItem->description }}</p>

            @if($carouselItem->button1_text || $carouselItem->button2_text)
                <div class="mt-4">
                    @if($carouselItem->button1_text)
                        <a href="{{ $carouselItem->button1_link }}" class="btn btn-primary me-2">{{ $carouselItem->button1_text }}</a>
                    @endif
                    @if($carouselItem->button2_text)
                        <a href="{{ $carouselItem->button2_link }}" class="btn btn-success">{{ $carouselItem->button2_text }}</a>
                    @endif
                </div>
            @endif
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('carousel.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
