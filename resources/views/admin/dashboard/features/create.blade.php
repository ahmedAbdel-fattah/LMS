@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Feature</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Add New Feature</h5>
            <form action="{{ route('features.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-bold">Title</label>
                    <input type="text" name="title" class="form-control form-control-lg" placeholder="Enter feature title" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Description</label>
                    <textarea name="description" class="form-control form-control-lg" rows="4" placeholder="Enter feature description" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Icon (SVG or FontAwesome class)</label>
                    <input type="text" name="icon" class="form-control form-control-lg" placeholder="Paste SVG code or FontAwesome class" required>
                </div>
                <div class="text-end">
                    <a href="{{ route('features.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save Feature</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
