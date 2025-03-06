@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <!-- Breadcrumb -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Area</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <a href="{{ route('about.create') }}" class="btn btn-primary px-4">Add New</a>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- About Area Table -->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Button</th>
                            <th>Images</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aboutAreas as $about)
                            <tr>
                                <td>{{ $about->id }}</td>
                                <td>{{ $about->title }}</td>
                                <td>{{ $about->subtitle }}</td>

                                <td>
                                    <a href="{{ $about->btn_link }}" class="btn btn-info btn-sm">{{ $about->btn_text }}</a>
                                </td>
                                <td>
                                    @if ($about->image_1)
                                        <img src="{{ asset('storage/' . $about->image_1) }}" class="img-thumbnail" width="50">
                                    @endif
                                    @if ($about->image_2)
                                        <img src="{{ asset('storage/' . $about->image_2) }}" class="img-thumbnail" width="50">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('about.edit', $about->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('about.destroy', $about->id) }}" method="POST" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
