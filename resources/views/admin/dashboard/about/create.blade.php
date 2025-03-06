@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add About Area</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Add New About Area</h5>
            <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf

                <div class="col-md-6">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Subtitle</label>
                    <input type="text" name="subtitle" class="form-control" placeholder="Enter subtitle" required>
                </div>

                <div class="col-md-12">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" placeholder="Enter description" required></textarea>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Icon 1 Class</label>
                    <input type="text" name="icon_1" class="form-control" placeholder="Icon class (e.g. la la-star)">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Icon 2 Class</label>
                    <input type="text" name="icon_2" class="form-control" placeholder="Icon class (e.g. la la-star)">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Icon 3 Class</label>
                    <input type="text" name="icon_3" class="form-control" placeholder="Icon class (e.g. la la-star)">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Button Text</label>
                    <input type="text" name="btn_text" class="form-control" placeholder="Enter button text" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Button Link</label>
                    <input type="url" name="btn_link" class="form-control" placeholder="Enter button link" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Image 1</label>
                    <input type="file" name="image_1" id="image1" class="form-control" accept="image/*">
                    <img id="previewImage1" src="{{ url('upload/no_image.jpg') }}" class="img-thumbnail mt-2" width="100">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Image 2</label>
                    <input type="file" name="image_2" id="image2" class="form-control" accept="image/*">
                    <img id="previewImage2" src="{{ url('upload/no_image.jpg') }}" class="img-thumbnail mt-2" width="100">
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
        $('#image1').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#previewImage1').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });

        $('#image2').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#previewImage2').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>
@endsection
