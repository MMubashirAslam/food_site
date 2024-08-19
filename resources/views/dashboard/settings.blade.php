@extends('dashLayout.master')
@section('content')
<form class="col-md-6" action="{{ route('doSettings') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    @if ($errors->any())
     @foreach ($errors as $error_message)
         <p>{{ $error_message }}</p>
     @endforeach
    @endif
    
  </div>
  <div class="form-group" id="form-group">
      <input type="text" class="form-control" id="title" name="title" placeholder="Title">
  </div>
  <div class="form-group ">
      <div class="file-upload">
          <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger('click')">Add Image</button>
          <div class="image-upload-wrap">
              <input class="file-upload-input" name="logo" type='file' onchange="readURL(this);" accept="image/*" />
              <div class="drag-text">
                  <h3>Drag and drop a file or select add Image</h3>
              </div>
          </div>
          <div class="file-upload-content">
              <img class="file-upload-image" src="#" alt="your image" />
              <div class="image-title-wrap">
                  <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
              </div>
          </div>
      </div>
      <button class="btn mt-4" type="submit">
          Change Title or Logo
      </button>
  </div>
</form>

@endsection


<script>
   
</script>