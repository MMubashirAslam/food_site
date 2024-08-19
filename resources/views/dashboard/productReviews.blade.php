@extends('dashLayout.master')
@section('content')
    <div class="container-fluid ">
        <h2 class="mt-5 d-inline-block">Reviews</h2>
        <br>
        <h6 class="d-inline-block">Home / <span class="nav-breadcrumb"><a href="#">Reviews</a></span></h6>
    </div>
    <div class="container-fluid mt-5">
        <table id="example" class="table table-striped recent-table mt-4">
            <thead class="">
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Product</th>
                    <th scope="col">User</th>
                    <th scope="col">Review</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-3 ">1</td>
                    <td class="py-3 "> Chicken</td>
                    <td class="py-3 ">Username</td>
                    <td class="py-3 "> this is review</td>
                    <td class="py-3 "> <i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i><i class="fa-solid fa-star" style="color: #FFD43B;"></i></td>
                </td>
                    <td class="py-3 "><div class="checkbox-wrapper-6">
                        <input class="tgl tgl-light" id="cb1-6" name="0" type="checkbox"/>
                        <label class="tgl-btn" for="cb1-6">
                      </div></td>
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
