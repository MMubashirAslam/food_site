@extends('dashLayout.master')
@section('content')
    <div class="container-fluid ">
        <h2 class="mt-5 d-inline-block">Customer List</h2>
        <br>
        <h6 class="d-inline-block">Home / <span class="nav-breadcrumb"><a href="#">Customer List</a></span></h6>
        
    </div>
    <div class="container-fluid mt-5">
        <table id="example" class="table table-striped recent-table mt-4">
            <thead class="">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Join On</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-3 "><b>Name of Person</b></td>
                    <td class="py-3 "> abc@gmail.com</td>
                </td>
                    <td class="py-3 ">0306123444</td>
                    <td class="py-3 ">2024-06</td>
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
