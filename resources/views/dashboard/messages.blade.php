@extends('dashLayout.master')
@section('content')
    <div class="container-fluid ">
        <h2 class="mt-5 d-inline-block">Messages</h2>
        <br>
        <h6 class="d-inline-block">Home / <span class="nav-breadcrumb"><a href="#">Messages</a></span></h6>
    </div>
    <div class="container-fluid mt-5">
        <table id="example" class="table table-striped recent-table mt-4">
            <thead class="">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-3 ">User name</td>
                    <td class="py-3 "> email here</td>
                    <td class="py-3 "> phone here</td>
                    <td class="py-3 "> Subject here</td>
                    <td class="py-3 "> message here</td>
                </td>
                    <td class="py-3 "><div class="checkbox-wrapper-6">
                        <input class="tgl tgl-light" id="cb1-6" name="0" type="checkbox"/>
                        <label class="tgl-btn" for="cb1-6">
                      </div></td>
                    
                </tr>
                
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
@endsection
