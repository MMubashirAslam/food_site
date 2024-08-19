@extends('dashLayout.master')
@section('content')
    <div class="container-fluid ">
        <h2 class="mt-5 d-inline-block">Product</h2>
        <br>
        <h6 class="d-inline-block">Home / <span class="nav-breadcrumb"><a href="#">Product</a></span></h6>
        <a href="/create-product" class="btn float-end py-2 px-4 fs-5">Create Button</a>
    </div>
    <div class="container-fluid mt-5">
        <table id="example" class="table table-striped recent-table mt-4">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Is Popular</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $product)
                <tr>
                    <td class="py-3">
                        <img src="{{ $product->img }}" alt="{{ $product->name }}" height="50px" width="90px">
                    </td>
                    <td class="py-3">{{ $product->name }}</td>
                    <td class="py-3">{{ $product->new_price }}</td>
                    <td class="py-3">
                        @if($product->popular)
                            <span style="background: #dc3545; padding: 12px 20px; border-radius: 50%; color: white;">Yes</span>
                        @else
                            <span style="background: #198754; padding: 12px 20px; border-radius: 50%; color: white;">No</span>
                        @endif
                    </td>
                    <td class="py-3">
                        <div class="checkbox-wrapper-6">
                            <input class="tgl tgl-light status-checkbox" id="cb{{ $product->pid }}" data-id="{{ $product->pid }}" type="checkbox" {{ $product->status ? 'checked' : '' }}/>
                            <label class="tgl-btn" for="cb{{ $product->pid }}"></label>
                        </div>
                    </td>
                    <td class="py-3">
                        <a href="/edit-product/{{ $product->pid }}" class="action-btn mx-1">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <a href="/delete-product/{{ $product->pid }}" class="action-btn mx-1">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                        {{-- <a href="" class="action-btn mx-1">
                            <i class="fa-regular fa-images"></i>
                        </a> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
@endsection
<script src="assets/dashboard/js/jquery.js"></script>
<script>
    var updateStatusUrl = "{{ route('product.updateStatus') }}";
</script>

<script>
      $(document).ready(function (){
         // product update status 
       $('.status-checkbox').change(function() {
        var product_id = $(this).data('id');
        var status = $(this).is(':checked') ? 1 : 0;
        // console.log(product_id)
        $.ajax({
            url: "{{ route('product.updateStatus') }}",
    type: "POST",
    data: {
        _token: "{{ csrf_token() }}",
        product_id: product_id,
        status: status
    },
    success: function(response) {
        if(response.success) {
            // alert(response.message);
        } else {
            // alert(response.message);
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