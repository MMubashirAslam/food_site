@extends('dashLayout.master')

@section('content')
{{-- top cards start --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 my-5 ">
                <div class="col py-4 px-4  top-card">
                    <div class="">
                        <p>Total Sales</p>
                        <h2>$<span>0</span></h2>
                    </div>
                    <div class="">
                        <span><i class="fa-solid fa-money-bill-trend-up"></i> </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-5">
                <div class="col py-4 px-4  top-card">
                    <div class="">
                        <p>Total Orders</p>
                        <h2><span>0</span></h2>
                    </div>
                    <div class="">
                        <span><i class="fa-solid fa-clipboard-list"></i> </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-5">
                <div class="col py-4 px-4  top-card">
                    <div class="">
                        <p>Total Customers</p>
                        <h2><span>0</span></h2>
                    </div>
                    <div class="">
                        <span><i class="fa-regular fa-circle-user"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-5">
                <div class="col py-4 px-4  top-card">
                    <div class="">
                        <p>Total Menu Items</p>
                        <h2><span>0</span></h2>
                    </div>
                    <div class="">
                        <span><i class="fa-regular fa-rectangle-list"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- top cards end --}}

    {{-- recent orders start--}}

    <div class="container-fluid px-5 py-4 light-bg table-container" >
        <h2>Recent Orders</h2>
        <table class="table table-striped recent-table mt-4">
            <thead class="">
                <tr >
                    <th class="py-3" scope="col">Order ID</th>
                    <th class="py-3" scope="col">Type</th>
                    <th class="py-3" scope="col">Customer Name</th>
                    <th class="py-3" scope="col">Date</th>
                    <th class="py-3" scope="col">Payment Status</th>
                    <th class="py-3" scope="col">Payment Method</th>
                    <th class="py-3" scope="col">Total</th>
                    <th class="py-3" scope="col">Order Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-3 ">12345</td>
                    <td class="py-3">Delivery</td>
                    <td class="py-3">John Doe</td>
                    <td class="py-3">2024-07-11</td>
                    <td class="py-3 ">Paid</td>
                    <td class="py-3">Credit Card</td>
                    <td class="py-3">$100.00</td>
                    <td class="py-3">Completed</td>
                </tr>
                <tr>
                    <td>67890</td>
                    <td>PickUp</td>
                    <td>Jane Smith</td>
                    <td>2024-07-10</td>
                    <td>Unpaid</td>
                    <td>Cash</td>
                    <td>$50.00</td>
                    <td>Pending</td>
                </tr>
                
            </tbody>
        </table>
    </div>

    {{-- recent orders end--}}

@endsection
