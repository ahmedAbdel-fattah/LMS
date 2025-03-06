@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <!-- Breadcrumb -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Feature Management</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <a href="{{ route('features.create') }}" class="btn btn-primary px-4">Add Feature</a>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <div class="row">
        @foreach ($features as $feature)
            <div class="col-lg-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <div class="icon-element mx-auto mb-3">
                            {!! $feature->icon !!}
                        </div>
                        <h5 class="card-title">{{ $feature->title }}</h5>
                        <p class="card-text">{{ $feature->description }}</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('features.edit', $feature->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('features.destroy', $feature->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
