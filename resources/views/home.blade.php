@extends('layouts.app')
@section('content')
<div class="container">
    <div class="uplode-cotent">
        <h3 class="text-center mb-5">Upload your album</h3>
    <form action="{{route('save-images')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif       

        <div class="form-group">
            <div class="custom-file">
                <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple">
                <label class="custom-file-label" for="images">Choose image</label>
            </div>
        </div>

        <div class="form-group">
            <input class="form-control" name="title" type="text" placeholder="Enter the album title">
        </div>

        <div class="form-group">
          <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Enter the descrption"></textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">
            Save
        </button>

        <div class="user-image">
            <div class="imgPreview"> </div>
        </div> 

      </form>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    $(function() {
    // Multiple images preview with JavaScript
    var multiImgPreview = function(input, imgPreviewPlaceholder) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#images').on('change', function() {
        multiImgPreview(this, 'div.imgPreview');
    });
    });    
</script>
</div>
@endsection
