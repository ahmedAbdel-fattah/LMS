@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Carousel Item</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Add New Carousel Item</h5>
            <form action="{{ route('carousel.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf

                <div class="col-md-6">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" placeholder="Enter description"></textarea>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
                </div>
                <div class="col-md-6">
                    <img id="showImage" src="{{ url('upload/no_image.jpg') }}" class="img-thumbnail" width="100">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Button 1 Text</label>
                    <input type="text" name="button1_text" class="form-control" placeholder="Enter button 1 text">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Button 1 Link</label>
                    <input type="url" name="button1_link" class="form-control" placeholder="Enter button 1 link">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Button 2 Text</label>
                    <input type="text" name="button2_text" class="form-control" placeholder="Enter button 2 text">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Button 2 Link</label>
                    <input type="url" name="button2_link" class="form-control" placeholder="Enter button 2 link">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary px-4">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>
@endsection
