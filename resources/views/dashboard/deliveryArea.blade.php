@extends('dashLayout.master')
@section('content')
    <div class="container-fluid ">
        <h2 class="mt-5 d-inline-block">Delivery Area</h2>
        <br>
        <h6 class="d-inline-block">Home / <span class="nav-breadcrumb"><a href="#">Delivery Area</a></span></h6>
        <a href="#" class="btn float-end py-2 px-4 fs-5">Create Delivery Area</a>
    </div>
    <div class="container-fluid mt-5">
        <table id="example" class="table table-striped recent-table mt-4">
            <thead class="">
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Name</th>
                    <th scope="col">Delivery Time</th>
                    <th scope="col">Delivery Fee</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-3 text-danger">1</td>
                    <td class="py-3 ">Name of Location</td>
                    <td class="py-3 ">20 -25 Minutes</td>
                    <td class="py-3 ">Rs 999</td>
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
