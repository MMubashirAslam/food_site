@extends('dashLayout.master')
@section('content')
    <div class="container-fluid ">
        <h2 class="mt-5 d-inline-block">Optional Items</h2>
        <br>
        <h6 class="d-inline-block">Home / <span class="nav-breadcrumb"><a href="#">Optional Items</a></span></h6>
        <a href="#" class="btn float-end py-2 px-4 fs-5" data-bs-toggle="modal" data-bs-target="#myModal">Add Item</a>
    </div>
    <div class="container-fluid mt-5">
        <table id="example" class="table table-striped recent-table mt-4">
            <thead class="">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            <tbody>

                  @foreach($opItems as $item)
        <tr>
            <td class="py-3">{{ $item->name }}</td>
            <td class="py-3">{{ $item->quantity }}</td>
            <td class="py-3">
                <div class="checkbox-wrapper-6">
                    <input class="tgl tgl-light" id="cb{{ $item->oid }}" name="status" data-id="{{ $item->oid }}" type="checkbox" {{ $item->status ? 'checked' : '' }} />
                    <label class="tgl-btn" for="cb{{ $item->oid }}"></label>
                </div>                
            </td>
            <td class="py-3">
                <a href="" class="action-btn mx-1">
                    <i class="fa-regular fa-pen-to-square"></i>
                </a>
                <a href="" class="action-btn mx-1" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();">
                    <i class="fa-solid fa-trash-can"></i>
                </a>
                <form id="delete-form-{{ $item->oid }}" action="" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @endforeach
                    
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Popup Title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/add-optional" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="text" name="name" placeholder="Name" class="form-control">
            </div>
            <div class="mb-3">
                <input type="text" name="price" placeholder="Price" class="form-control">
            </div>
            <div class="mb-3">
                <input type="file" name="img" placeholder="Add Image" class="form-control">
            </div>
            <div class="mb-3">
                <select name="status" id="" class="form-select">
                    <option value="1" selected>On</option>
                    <option value="0">Off</option>
                </select>
            </div>
            <button type="submit" class="btn">Save</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
@endsection
<script src="assets/dashboard/js/jquery.js"></script>
<script>
    
    $(document).ready(function() {
        // $('.message-popup-success').css('display', 'none !important');
    $('.tgl').change(function() {
        var status = $(this).is(':checked') ? 1 : 0; 
        var itemId = $(this).attr('id').replace('cb', '');
        // var id = $(this).data('id');
        $.ajax({
            url: '/update-status',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}', 
                id: itemId,
                status: status
            },
            success: function(response) {
                if (response.success) {
                    var hideTimeout;

// Function to start showing the popup and animating the progress bar
function showPopup() {
    $('.message-popup-success').addClass('active');
    $('.progress-bar')[0].offsetWidth; // Force reflow
    $('.progress-bar').css('width', '100%');

    // Set timeout to hide the popup after 3 seconds if not hovered
    hideTimeout = setTimeout(function() {
        $('.message-popup-success').removeClass('active');
        $('.progress-bar').css('width', '0'); // Reset progress bar
    }, 3000);
}

// Function to handle mouse enter and clear hide timeout
$('.message-popup-success').on('mouseenter', function() {
    clearTimeout(hideTimeout);
});

// Function to handle mouse leave and start hide timeout
$('.message-popup-success').on('mouseleave', function() {
    hideTimeout = setTimeout(function() {
        $('.message-popup-success').removeClass('active');
        $('.progress-bar').css('width', '0'); // Reset progress bar
    }, 3000);
});

// Initial trigger to show popup (you can call this based on your condition)
showPopup();
                } else {
                    alert('Failed to update status.');
                }
            },
            error: function(xhr, status, error) {
        console.error("Error Status: " + status);
        console.error("Error Details: " + error);
        console.error("Response Text: " + xhr.responseText);
        alert('An error occurred while updating the status.');
    }
        });
    });
});

</script>