@extends('dashLayout.master')
@section('content')
    <div class="container-fluid ">
        <h2 class="mt-5 d-inline-block">Promotions</h2>
        <br>
        <h6 class="d-inline-block">Home / <span class="nav-breadcrumb"><a href="#">Promotions</a></span></h6>
        <a href="#" class="btn float-end py-2 px-4 fs-5">Create Promotion Product</a>
    </div>
    <div class="container-fluid mt-5">
        <table id="example" class="table table-striped recent-table mt-4">
            <thead class="">
                <tr>
                    <th scope="col">Link</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-3 ">Chicken</td>
                    <td class="py-3 "> <span style="background: white;height:100px;display:block;width:100px;padding: 5px;border-radius:50%;"><img src="https://reservq.minionionbd.com/uploads/custom-images/fish-tacos-with-chipotle-crema-2024-01-25-10-56-10-8397.jpg" alt="" height="90px" width="90px" style="border-radius: 50%"></span></td>
                    {{-- <span style="background: #198754; padding: 12px 20px;border-radius: 50%;
                    color: white;">
                    Yes    
                </span> --}}
                </td>
                    
                    <td class="py-3 ">
                        <a href="#" class="action-btn mx-1">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <a href="#" class="action-btn mx-1">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                       
                    </td>
                    
                </tr>
                
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
@endsection
