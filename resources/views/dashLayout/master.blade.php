<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ \App\Models\SettingModal::where('key', 'title')->value('value') ?? 'Set title in Admin panel' }}</title>
    {{-- Bootstrap file --}}
    <link rel="stylesheet" href="assets/dashboard/css/bootstrap.min.css">
    {{-- font awesome file --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- datatable --}}
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    {{-- main css file --}}
    <link rel="stylesheet" href="assets/dashboard/css/style.css">
</head>
<body>

    

   
    <main>
       <div class="container-fluid ">
            <div class="row" style="height:100%">
                <div class="col-xl-2 col-lg-3 col-sm-4 p-0"> 
                    @include('dashLayout/aside')
                </div>
                <div class="col-xl-10 col-lg-9 col-sm-8 d-container ">
                    @include('dashLayout/header')
                    <div class="message-popup-success active">
                        <p class="mt-3">This is popup</p>
                        <i class="fa-solid fa-xmark" style="color: #ce0000;"></i>
                        <div class="progress-bar"></div>
                    </div>
                    
                    @yield('content')
                </div>
            </div>
       </div>
    </main>

   <script src="assets/dashboard/js/jquery.js"></script>
    <script src="assets/dashboard/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    {{-- rich text editor --}}
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="assets/dashboard/js/main.js"></script>

    <script>
     document.addEventListener('DOMContentLoaded', function() {
    var pop = document.querySelector('.message-popup-success');
    if (pop) {
        // alert(0)
        pop.classList.remove('active');
    }
});

      $(document).ready(function() {
          // Initialize DataTable (assuming you have a table with id="example")
          $('#example').DataTable();
  
          // Bind dragover and dragleave events for image upload wrap
          $('.image-upload-wrap').on('dragover', function () {
              $(this).addClass('image-dropping');
          });
          
          $('.image-upload-wrap').on('dragleave', function () {
              $(this).removeClass('image-dropping');
          });

          
      });
  
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
  
              reader.onload = function(e) {
                  $('.image-upload-wrap').hide();
                  $('.file-upload-image').attr('src', e.target.result);
                  $('.file-upload-content').show();
                  $('.image-title').html(input.files[0].name);
              };
  
              reader.readAsDataURL(input.files[0]);
          } else {
              removeUpload();
          }
      }
  
      function removeUpload() {
          $('.file-upload-input').replaceWith($('.file-upload-input').clone());
          $('.file-upload-content').hide();
          $('.image-upload-wrap').show();
          $('.image-upload-wrap').removeClass('image-dropping');
      }
  </script>
  
</body>
</html>