@extends('dashLayout.master')
@section('content')
    <div class="container-fluid ">
        <h2 class="mt-5">PickUp Order list</h2>
        <h6>Home / <span class="nav-breadcrumb"><a href="#">PickUp Order list</a></span></h6>
    </div>
    <div class="container-fluid mt-5">
        <table id="example" class="table table-striped recent-table mt-4">
            <thead class="">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Total</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-3 ">12345</td>
                    <td class="py-3 ">Delivery</td>
                    <td class="py-3 "> John Doe</td>
                    <td class="py-3 ">2024-07-11</td>
                    <td class="py-3 ">Paid</td>
                    <td class="py-3 ">Credit Card</td>
                    <td class="py-3 ">$100.00</td>
                    <td class="py-3 ">Completed</td>
                    <td class="py-3 ">Action</td>
                </tr>
                <tr>
                    <td class="py-3 ">67890</td>
                    <td class="py-3 ">PickUp</td>
                    <td class="py-3 ">Jane Smith</td>
                    <td class="py-3 ">2024-07-10</td>
                    <td class="py-3 ">Unpaid</td>
                    <td class="py-3 ">Cash</td>
                    <td class="py-3 ">$50.00</td>
                    <td class="py-3 ">Pending</td>
                    <td class="py-3 ">Action</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
@endsection
