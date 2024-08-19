<aside id="aside">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
               <div class="">
                <img src="{{ asset( $logo )}}" width="90px" alt="" class="m-4 img-fluid">
               </div>

                <h6 class="side-heading " style="margin-left: 15px;">Dashboard</h6>
                <ul style="margin-left: -28px"> 
                    <li class="side-list px-3 pt-3 pb-2 li-main">
                      <i class="fa-brands fa-dochub " style="margin-right: 20px"></i><a href="/dashboard">Dashboard</a></li>
                       
                      
                    {{-- start of another collapsable --}}
                    <div class="accordion my-2" id="accordionExample">
                        <div class="accordion-item border border-0">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 18px">
                                    <i class="fa-solid fa-clipboard-list" style="margin-right: 20px"></i> Orders
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <ul style="border-left:1px solid red">
                                    <li class="mt-3 mb-2 aside-li text-muted"><a href="/all-orders">All Orders</a></li>
                                    <li class="my-2 aside-li text-muted"><a href="/delivery-orders">Delivery Order</a></li>
                                    <li class="my-2 aside-li text-muted"><a href="/pickup-orders">PickUp Order</a></li>
                                    <li class="my-2 aside-li text-muted"><a href="/restaurant-orders">InRestaurant Order</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>  {{-- end of another collapsable --}}
                    
                    {{-- start of another collapsable --}}
                    <div class="accordion my-2" id="accordionExample">
                      <div class="accordion-item border border-0">
                          <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="font-size: 18px">
                                  <i class="fa-solid fa-burger" style="margin-right: 20px"></i> Product Manage
                              </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                              <ul style="border-left:1px solid red">
                                  <li class="mt-3 mb-2 aside-li text-muted"><a href="/create-product">Create Product</a></li>
                                  <li class="my-2 aside-li text-muted"><a href="/product">Product</a></li>
                                  <li class="my-2 aside-li text-muted"><a href="/categories">Categories</a></li>
                                  <li class="my-2 aside-li text-muted"><a href="/optional-items">Optional Items</a></li>
                                  <li class="my-2 aside-li text-muted"><a href="/promotions">Promotions</a></li>
                                  <li class="my-2 aside-li text-muted"><a href="/delivery-area">Delivery Area</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>  {{-- end of one collapsable --}}
                  <li class="side-list px-3 py-3">
                    <i class="fa-solid fa-users" style="margin-right: 20px"></i><a href="/customer-list">Customer List</a></li>
                    <li class="side-list px-3 py-3">
                      <i class="fa-regular fa-thumbs-up" style="margin-right: 20px"></i><a href="/product-reviews">Product Reviews</a></li>
                      <li class="side-list px-3 py-3">
                        <i class="fa-regular fa-message" style="margin-right: 20px"></i><a href="/messages">Message</a></li>
                        <li class="side-list px-3 py-3">
                            <i class="fa-solid fa-gears" style="margin-right: 20px"></i><a href="/settings">Settings</a></li>
        
                </ul> {{-- end ul of sidebar links --}}
           
                </div>

            {{-- end col --}}
        </div>
    </div>

       
</aside>