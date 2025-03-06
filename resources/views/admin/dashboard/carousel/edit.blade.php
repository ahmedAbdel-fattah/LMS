@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Carousel Item</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Edit Carousel Item</h5>
            <form action="{{ route('carousel.update', $carouselItem->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $carouselItem->title }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Description</label>
                        <textarea name="description" class="form-control">{{ $carouselItem->description }}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Current Image</label><br>
                        <img src="{{ asset('images/carousel/' . $carouselItem->image) }}" width="100" id="currentImage">
                    </div>
                    <div class="form-group col-md-6">
                        <label>New Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*" id="newImage">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Button 1 Text</label>
                        <input type="text" name="button1_text" class="form-control" value="{{ $carouselItem->button1_text }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Button 1 Link</label>
                        <input type="url" name="button1_link" class="form-control" value="{{ $carouselItem->button1_link }}">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Button 2 Text</label>
                        <input type="text" name="button2_text" class="form-control" value="{{ $carouselItem->button2_text }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Button 2 Link</label>
                        <input type="url" name="button2_link" class="form-control" value="{{ $carouselItem->button2_link }}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#newImage').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#currentImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection
