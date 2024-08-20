@extends('layouts.master')
@section('content')
{{-- start shop top --}}
    <div class="container-fluid p-0 mt-5">
        <div class="slider">
            <div class="slide">
                <img src="{{ asset('assets/front/images/shop-banner.png') }}" alt="" class="img-fluid">
            </div>
            <div class="slide">
                <img src="{{ asset('assets/front/images/shop1.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    {{-- end shop top --}}
    {{-- start body container --}}
    <div class="container-fluid tab-container py-5">
        <div class="container ">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12">
                  <div class="col-12 shop-tab p-4 rounded-3">
                    <h4>All Details</h4>
                    <span class="divider"></span>
                    <ul class="nav nav-tabs mt-4 p-0" id="myTab" role="tablist">
                      <li class="nav-item3 my-1" role="presentation">
                        <button class="nav-link active" id="menu-tab" data-bs-toggle="tab" data-bs-target="#menu" type="button" role="tab" aria-controls="menu" aria-selected="true">
                          <img src="{{ asset('assets/front/images/menu-cc.png') }}" alt=""> <span>Menu</span>
                        </button>
                      </li>
                      <li class="nav-item3 my-1" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">
                          <img src="{{ asset('assets/front/images/common.png') }}" alt=""> <span>Reviews</span>
                        </button>
                      </li>
                      <li class="nav-item3 " role="presentation">
                        <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab" aria-controls="info" aria-selected="false">
                          <img src="{{ asset('assets/front/images/info-x.png') }}" alt=""> <span>Restaurant Info</span>
                        </button>
                      </li>
                    </ul>
                  </div>
                    <div class="col-12 shop-tab p-4 rounded-3 mt-4">
                      <h4>Categories</h4>
                      <img src="{{ asset('assets/front/images/sd.png') }}" alt="" class="img-fluid">
  
                    
                     </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12  mt-4 mt-lg-0 tab-content" id="myTabContent">
                  
                  <div class="col-12 shop-tab px-4 py-3 rounded-3 mx-1 tab-pane fade show active"  id="menu" role="tabpanel" aria-labelledby="menu-tab">
                    <div class="row">
                      <div class="col-12 ">
                            <section class="splide" aria-label="Splide Basic HTML Example" style="padding-left: 10px;">
                              <div class="splide__track">
                                <ul class="splide__list nav nav-tabs2" id="myTab" role="tablist">
                                  <li class="nav-item splide__slide" role="presentation">
                                    <button
                                      class="nav-link2 active  "
                                      id="home-tab"
                                      data-bs-toggle="tab"
                                      data-bs-target="#home"
                                      type="button"
                                      role="tab"
                                      aria-controls="home"
                                      aria-selected="true"
                                    >
                                      Pizza
                                    </button>
                                  </li>
                                  <li class="nav-item  splide__slide" role="presentation">
                                    <button
                                      class="nav-link2  "
                                      id="profile-tab"
                                      data-bs-toggle="tab"
                                      data-bs-target="#profile"
                                      type="button"
                                      role="tab"
                                      aria-controls="profile"
                                      aria-selected="false"
                                    >
                                      Deals
                                    </button>
                                  </li>
                                  <li class="nav-item splide__slide" role="presentation">
                                    <button
                                      class="nav-link2  "
                                      id="contact-tab"
                                      data-bs-toggle="tab"
                                      data-bs-target="#contact"
                                      type="button"
                                      role="tab"
                                      aria-controls="contact"
                                      aria-selected="false"
                                    >
                                      Sauces
                                    </button>
                                  </li>
                                  <li class="nav-item splide__slide " role="presentation">
                                    <button
                                      class="nav-link2  "
                                      id="contact-tab2"
                                      data-bs-toggle="tab"
                                      data-bs-target="#contact2"
                                      type="button"
                                      role="tab"
                                      aria-controls="contact2"
                                      aria-selected="false"
                                    >
                                      Specialities
                                    </button>
                                  </li>
                                </ul>
                               
                              </div>
                              
                            </section>
                            <div class="tab-content mt-5">
                              <div
                                class="tab-pane fade show active"
                                id="home"
                                role="tabpanel"
                                aria-labelledby="home-tab"
                              >
                                <h4 class="mb-4">Pizza <span>(9)</span></h4>  
                                <div class="multi-border"></div>
                                <div class="col-12">
                                  <div class="product-card mt-3 py-3" style="border-bottom: 1px solid rgb(196, 196, 196)">
                                    <div class="row">
                                      <div class="col-2">
                                        <img src="{{ asset('assets/front/images/detail1.png') }}" alt="" class="img-fluid" height="70px" width="70px">
                                      </div>
                                      <div class="details col-10">
                                        <h3 class="m-0">Cauliflower Pizza</h3>
                                        <p class="text-muted m-0">Special offer 
                                          <span class="more-text"> - Get 50% off on your first purchase!</span>
                                          <span class="read-more">... Read More</span>
                                      </p>
                                        <p><span class="old-price">Rs 999</span> <span>Rs 1299</span></p>
                                      </div>
                                      <div class="footer">
                                        <form action="" class="float-end form-group d-flex">
                                          <div class="d-flex align-items-center mx-3">
                                            <button type="button" class="ctrl-btn decrement-btn border border-1">-</button>
                                            <div class="number-display mx-3" style="display: inline-block; border-radius: 0px; text-align: center;">1</div>
                                            <button type="button" class="ctrl-btn increment-btn border border-1">+</button>
                                        </div>
                                          <button type="button" class="btn px-4 py-2 " style="border-radius:0px; font-weight:500" data-bs-toggle="modal" data-bs-target="#exampleModal">Order now</button>
                                        </form>
                                      </div>
                                    </div>
                                    
                                  </div>
                                  <div class="product-card mt-3 py-3" style="border-bottom: 1px solid rgb(196, 196, 196)">
                                    <div class="row">
                                      <div class="col-2">
                                        <img src="{{ asset('assets/front/images/detail1.png') }}" alt="" class="img-fluid" height="70px" width="70px">
                                      </div>
                                      <div class="details col-10">
                                        <h3 class="m-0">Cauliflower Pizza</h3>
                                        <p class="text-muted m-0">Special offer 
                                          <span class="more-text"> - Get 50% off on your first purchase!</span>
                                          <span class="read-more">... Read More</span>
                                      </p>
                                        <p><span class="old-price">Rs 999</span> <span>Rs 1299</span></p>
                                      </div>
                                      <div class="footer">
                                        <form action="" class="float-end form-group d-flex">
                                          <div class="d-flex align-items-center mx-3">
                                            <button type="button" class="ctrl-btn decrement-btn border border-1">-</button>
                                            <div class="number-display mx-3" style="display: inline-block; border-radius: 0px; text-align: center;">1</div>
                                            <button type="button" class="ctrl-btn increment-btn border border-1">+</button>
                                        </div>
                                          <button type="button" class="btn px-4 py-2" style="border-radius:0px; font-weight:500" data-bs-toggle="modal" data-bs-target="#exampleModal">Order now</button>
                                        </form>
                                      </div>
                                    </div>
                                    
                                  </div>
                                  <div class="product-card mt-3 py-3" style="border-bottom: 1px solid rgb(196, 196, 196)">
                                    <div class="row">
                                      <div class="col-2">
                                        <img src="{{ asset('assets/front/images/detail1.png') }}" alt="" class="img-fluid" height="70px" width="70px">
                                      </div>
                                      <div class="details col-10">
                                        <h3 class="m-0">Cauliflower Pizza</h3>
                                        <p class="text-muted m-0">Special offer 
                                          <span class="more-text"> - Get 50% off on your first purchase!</span>
                                          <span class="read-more">... Read More</span>
                                      </p>
                                        <p><span class="old-price">Rs 999</span> <span>Rs 1299</span></p>
                                      </div>
                                      <div class="footer">
                                        <form action="" class="float-end form-group d-flex">
                                          <div class="d-flex align-items-center mx-3">
                                            <button type="button" class="ctrl-btn decrement-btn border border-1">-</button>
                                            <div class="number-display mx-3" style="display: inline-block; border-radius: 0px; text-align: center;">1</div>
                                            <button type="button" class="ctrl-btn increment-btn border border-1">+</button>
                                        </div>
                                          <button type="button" class="btn px-4 py-2" style="border-radius:0px; font-weight:500" data-bs-toggle="modal" data-bs-target="#exampleModal">Order now</button>
                                        </form>
                                      </div>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                              <div
                                class="tab-pane fade"
                                id="profile"
                                role="tabpanel"
                                aria-labelledby="profile-tab"
                              >
                                Content for Profile Tab 2
                              </div>
                              <div
                                class="tab-pane fade"
                                id="contact"
                                role="tabpanel"
                                aria-labelledby="contact-tab"
                              >
                                Content for Contact Tab 2
                              </div>
                              <div
                              class="tab-pane fade"
                              id="contact2"
                              role="tabpanel"
                              aria-labelledby="contact-tab2"
                            >
                              Content for Contact2 Tab 2
                            </div>
                          </div>
                          </div>
                     </div>
                   </div>
                   <div class="col-12 shop-tab px-4 py-3 rounded-3 mx-1 tab-pane fade "  id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <div class="row">
                      <div class="col-12 ">
                            
                          </div>
                     </div>
                   </div>
                   <div class="col-12 shop-tab px-4 py-3 rounded-3 mx-1 tab-pane fade "  id="info" role="tabpanel" aria-labelledby="info-tab">
                    <div class="row">
                      <div class="col-12 ">
                            <h3>Info Tab</h3>
                          </div>
                     </div>
                   </div>

                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12 col-xs-12 mt-4 mt-xl-0">
                  <div class="col-12 shop-tab p-4 rounded-3" >
                    <h4>Best Selling Products</h4>
                    <div class="divider"></div>
                    <div class="row mt-4 py-3 border border-1">
                      <div class="splide offer-splide">
                        <div class="splide__track">
                          <ul class="splide__list">
                            <li class="splide__slide">
                              <div class="col-12">
                                <div class="offer-img">
                                  <img src="{{ asset('assets/front/images/offer1.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="offer-details mt-4">
                                  <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                                  <h4>Cauliflower Pizza</h4>
                                  <p> <span class="old-price">Rs 1299</span> <span class="new-price">Rs 999</span></p>
                                  <p><img src="{{ asset('assets/front/images/location.png') }}" alt="" class="img-fluid"> 1157, Broadway, New York</p>
                                </div>
                                <div class="footer">
                                  <button type="button" class="btn px-3 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now</button>
                                </div>
                              </div>
                            </li>
                            <li class="splide__slide">
                              <div class="col-12">
                                <div class="offer-img">
                                  <img src="{{ asset('assets/front/images/offer1.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="offer-details mt-4">
                                  <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                                  <h4>Cauliflower Pizza</h4>
                                  <p> <span class="old-price">Rs 1299</span> <span class="new-price">Rs 999</span></p>
                                  <p><img src="{{ asset('assets/front/images/location.png') }}" alt="" class="img-fluid"> 1157, Broadway, New York</p>
                                </div>
                                <div class="footer">
                                  <button type="button" class="btn px-3 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now</button>
                                </div>
                              </div>
                            </li>
                            
                          </ul>
                        </div>
                      </div>
                      
                    </div>
                </div>
                <div class="col-12 shop-tab p-4 mt-4  rounded-3" >
                  <h4>Sale Products</h4>
                  <div class="divider"></div>
                  <div class="row mt-4 py-3 border border-1">
                    <div class="splide offer-splide2">
                      <div class="splide__track">
                        <ul class="splide__list">
                          <li class="splide__slide">
                            <div class="col-12">
                              <div class="offer-img">
                                <img src="{{ asset('assets/front/images/offer1.png') }}" alt="" class="img-fluid">
                              </div>
                              <div class="offer-details mt-4">
                                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                                <h4>Cauliflower Pizza</h4>
                                <p> <span class="old-price">Rs 1299</span> <span class="new-price">Rs 999</span></p>
                                <p><img src="{{ asset('assets/front/images/location.png') }}" alt="" class="img-fluid"> 1157, Broadway, New York</p>
                              </div>
                              <div class="footer">
                                <button type="button" class="btn px-3 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now</button>
                              </div>
                            </div>
                          </li>
                          <li class="splide__slide">
                            <div class="col-12">
                              <div class="offer-img">
                                <img src="{{ asset('assets/front/images/offer1.png') }}" alt="" class="img-fluid">
                              </div>
                              <div class="offer-details mt-4">
                                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                                <h4>Cauliflower Pizza</h4>
                                <p> <span class="old-price">Rs 1299</span> <span class="new-price">Rs 999</span></p>
                                <p><img src="{{ asset('assets/front/images/location.png') }}" alt="" class="img-fluid"> 1157, Broadway, New York</p>
                              </div>
                              <div class="footer">
                                <button type="button" class="btn px-3 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Order Now</button>
                              </div>
                            </div>
                          </li>
                          
                        </ul>
                       
                      </div>
                    </div>
                    
                  </div>
                   {{-- modal start --}}
                   <form method="post" action="">
                    @csrf
                   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog shop-popup">
                      <div class="modal-content">
                        <div class="modal-header border border-0 p-0" >
                          <img src="{{ asset('assets/front/images/pop-img.jpg') }}" alt="" class="modal-image">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background: white;border-radius:50%"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                        <div class="modal-body">
                          <h2>Chicken Karahi</h2>
                          <p>Half / Full</p>
                          <h2 style="font-size:18px;margin-bottom:10px">Rs 1,520</h2>
                          <hr class="text-muted">
                          <div class="variation border border-1 px-3 py-2 rounded-3">
                            <h4>Variation</h4>
                            <div class="checkbox-wrapper mt-4" onclick="selectRadio(this)">
                              <input type="radio" name="size" value="half" class="custom-checkbox my-2" />
                              <label>Half</label>
                              <label class="float-end">Rs 15555</label>
                              <br>
                            </div>
                            <div class="checkbox-wrapper mt-3" onclick="selectRadio(this)">
                              <input type="radio" name="size" value="full" class="custom-checkbox my-2" />
                              <label>Full</label>
                              <label class="float-end">Rs 15555</label>
                              <br>
                            </div>
                            
                          <span class="px-3 py-1 rounded-5">Required</span>
                            
                          </div>
                          <div class="optional mt-4">
                            <h3 class="secondary-heading">Frequently bought together</h3>
                            <p class="text-muted">Other around you liked this  </p>
                            <span class="px-3 py-1 rounded-5">Optional</span>
                          </div>
                          <div class="items">
                            <div id="products-container">
                              <!-- Add your products here -->
                              <div class="form-group mt-4 mt-md-0 checkbox-wrapper my-1" onclick="selectCheckbox(this)">
                                <input type="checkbox" class="large-checkbox">
                                <label for=""><img src="{{ asset('assets/front/images/food.png') }}" alt="" width="70px" class="opt-img"> <span>Fresh Salad</span> </label>
                                <div class="float-end d-inline-block mt-3">
                                    <div class="d-flex align-items-center">
                                        <button type="button" class="ctrl-btn decrement-btn border border-1">-</button>
                                        <div class="number-display" style="width: 20px; display: inline-block; border-radius: 0px; text-align: center;">1</div>
                                        <button type="button" class="ctrl-btn increment-btn border border-1">+</button>
                                        <label class="mx-3"> Rs 500</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4 mt-md-0 checkbox-wrapper my-1" onclick="selectCheckbox(this)">
                              <input type="checkbox" class="large-checkbox">
                              <label for=""><img src="{{ asset('assets/front/images/food.png') }}" alt="" width="70px" class="opt-img"> <span>Fresh Salad</span> </label>
                              <div class="float-end d-inline-block mt-3">
                                  <div class="d-flex align-items-center">
                                      <button type="button" class="ctrl-btn decrement-btn border border-1">-</button>
                                      <div class="number-display" style="width: 20px; display: inline-block; border-radius: 0px; text-align: center;">1</div>
                                      <button type="button" class="ctrl-btn increment-btn border border-1">+</button>
                                      <label class="mx-3"> Rs 500</label>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group mt-4 mt-md-0 checkbox-wrapper my-1" onclick="selectCheckbox(this)">
                            <input type="checkbox" class="large-checkbox">
                            <label for=""><img src="{{ asset('assets/front/images/food.png') }}" alt="" width="70px" class="opt-img"> <span>Fresh Salad</span> </label>
                            <div class="float-end d-inline-block mt-3">
                                <div class="d-flex align-items-center">
                                    <button type="button" class="ctrl-btn decrement-btn border border-1">-</button>
                                    <div class="number-display" style="width: 20px; display: inline-block; border-radius: 0px; text-align: center;">1</div>
                                    <button type="button" class="ctrl-btn increment-btn border border-1">+</button>
                                    <label class="mx-3"> Rs 500</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4 mt-md-0 checkbox-wrapper my-1" onclick="selectCheckbox(this)">
                          <input type="checkbox" class="large-checkbox">
                          <label for=""><img src="{{ asset('assets/front/images/food.png') }}" alt="" width="70px" class="opt-img"> <span>Fresh Salad</span> </label>
                          <div class="float-end d-inline-block mt-3">
                              <div class="d-flex align-items-center">
                                  <button type="button" class="ctrl-btn decrement-btn border border-1">-</button>
                                  <div class="number-display" style="width: 20px; display: inline-block; border-radius: 0px; text-align: center;">1</div>
                                  <button type="button" class="ctrl-btn increment-btn border border-1">+</button>
                                  <label class="mx-3"> Rs 500</label>
                              </div>
                          </div>
                      </div>
                      <div class="form-group mt-4 mt-md-0 checkbox-wrapper my-1" onclick="selectCheckbox(this)">
                        <input type="checkbox" class="large-checkbox">
                        <label for=""><img src="{{ asset('assets/front/images/food.png') }}" alt="" width="70px" class="opt-img"> <span>Fresh Salad</span> </label>
                        <div class="float-end d-inline-block mt-3">
                            <div class="d-flex align-items-center">
                                <button type="button" class="ctrl-btn decrement-btn border border-1">-</button>
                                <div class="number-display" style="width: 20px; display: inline-block; border-radius: 0px; text-align: center;">1</div>
                                <button type="button" class="ctrl-btn increment-btn border border-1">+</button>
                                <label class="mx-3"> Rs 500</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-4 mt-md-0 checkbox-wrapper my-1" onclick="selectCheckbox(this)">
                      <input type="checkbox" class="large-checkbox">
                      <label for=""><img src="{{ asset('assets/front/images/food.png') }}" alt="" width="70px" class="opt-img"> <span>Fresh Salad</span> </label>
                      <div class="float-end d-inline-block mt-3">
                          <div class="d-flex align-items-center">
                              <button type="button" class="ctrl-btn decrement-btn border border-1">-</button>
                              <div class="number-display" style="width: 20px; display: inline-block; border-radius: 0px; text-align: center;">1</div>
                              <button type="button" class="ctrl-btn increment-btn border border-1">+</button>
                              <label class="mx-3"> Rs 500</label>
                          </div>
                      </div>
                  </div>
                  <div class="form-group mt-4 mt-md-0 checkbox-wrapper my-1" onclick="selectCheckbox(this)">
                    <input type="checkbox" class="large-checkbox">
                    <label for=""><img src="{{ asset('assets/front/images/food.png') }}" alt="" width="70px" class="opt-img"> <span>Fresh Salad</span> </label>
                    <div class="float-end d-inline-block mt-3">
                        <div class="d-flex align-items-center">
                            <button type="button" class="ctrl-btn decrement-btn border border-1">-</button>
                            <div class="number-display" style="width: 20px; display: inline-block; border-radius: 0px; text-align: center;">1</div>
                            <button type="button" class="ctrl-btn increment-btn border border-1">+</button>
                            <label class="mx-3"> Rs 500</label>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-4 mt-md-0 checkbox-wrapper my-1" onclick="selectCheckbox(this)">
                  <input type="checkbox" class="large-checkbox">
                  <label for=""><img src="{{ asset('assets/front/images/food.png') }}" alt="" width="70px" class="opt-img"> <span>Fresh Salad</span> </label>
                  <div class="float-end d-inline-block mt-3">
                      <div class="d-flex align-items-center">
                          <button type="button" class="ctrl-btn decrement-btn border border-1">-</button>
                          <div class="number-display" style="width: 20px; display: inline-block; border-radius: 0px; text-align: center;">1</div>
                          <button type="button" class="ctrl-btn increment-btn border border-1">+</button>
                          <label class="mx-3"> Rs 500</label>
                      </div>
                  </div>
              </div>
              <div class="form-group mt-4 mt-md-0 checkbox-wrapper my-1" onclick="selectCheckbox(this)">
                <input type="checkbox" class="large-checkbox">
                <label for=""><img src="{{ asset('assets/front/images/food.png') }}" alt="" width="70px" class="opt-img"> <span>Fresh Salad</span> </label>
                <div class="float-end d-inline-block mt-3">
                    <div class="d-flex align-items-center">
                        <button type="button" class="ctrl-btn decrement-btn border border-1">-</button>
                        <div class="number-display" style="width: 20px; display: inline-block; border-radius: 0px; text-align: center;">1</div>
                        <button type="button" class="ctrl-btn increment-btn border border-1">+</button>
                        <label class="mx-3"> Rs 500</label>
                    </div>
                </div>
            </div>
            <!-- Repeat the above block for each product -->
                          </div>
                          <button id="view-more-btn" type="button" class="hidden"><i class="fa-solid fa-angle-down"></i> View More</button>
                      
                          </div>
                          <hr class="text-muted">
                          <div class="notes">
                            <h3 class="secondary-heading">Special Instructions</h3>
                            <p>Special requests are subject to the Restaurant approval.</p>
                            <textarea name="notes" placeholder="eg No Mayo" id="" cols="60" rows="3" class="px-2" style="width: 100%"></textarea>
                          </div>
                        </div>
                        <div class="modal-footer">
                          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                          <div class="d-flex align-items-center">
                            <button type="button" class="ctrl-btn decrement-btn border border-1">-</button>
                            <div class="number-display mx-3" style="width: 20px; display: inline-block; border-radius: 0px; text-align: center;">1</div>
                            <button type="button" class="ctrl-btn increment-btn border border-1">+</button>
                        </div>
                        
                          <button type="submit" class="btn btn-primary w-75">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                  {{-- modal end --}}
              </div>
              </div>
            </div>
        </div>
    </div>
    {{-- end body container --}}

    
  <!-- Your custom JS to initialize the slider -->
  <script>
   
//     document.addEventListener('DOMContentLoaded', function () {
//   new Splide('.splide',{
//     type : 'loop',
//     perPage : 3 ,
//     perMove : 1,
//   }).mount();
// });

  </script>
    {{-- <script>
        let currentOffset = 0;

function updateButtons() {
    const navTabs = document.querySelector('.nav-tabs');
    const container = document.querySelector('.nav-tabs-container');
    const containerWidth = container.offsetWidth;
    const navTabsWidth = navTabs.scrollWidth;

    if (currentOffset >= 0) {
        document.getElementById('move-left').disabled = true;
    } else {
        document.getElementById('move-left').disabled = false;
    }

    if (containerWidth - currentOffset >= navTabsWidth) {
        document.getElementById('move-right').disabled = true;
    } else {
        document.getElementById('move-right').disabled = false;
    }
}

document.getElementById('move-left').addEventListener('click', () => {
    const navTabs = document.querySelector('.nav-tabs');
    const container = document.querySelector('.nav-tabs-container');
    const containerWidth = container.offsetWidth;

    currentOffset += containerWidth; // Move by container width
    if (currentOffset > 0) currentOffset = 0;
    navTabs.style.transform = `translateX(${currentOffset}px)`;
    updateButtons();
});

document.getElementById('move-right').addEventListener('click', () => {
    const navTabs = document.querySelector('.nav-tabs');
    const container = document.querySelector('.nav-tabs-container');
    const containerWidth = container.offsetWidth;
    const navTabsWidth = navTabs.scrollWidth;

    currentOffset -= containerWidth; // Move by container width
    if (containerWidth - currentOffset > navTabsWidth) currentOffset = containerWidth - navTabsWidth;
    navTabs.style.transform = `translateX(${currentOffset}px)`;
    updateButtons();
});

window.addEventListener('resize', updateButtons);
 
// Initial call to set button states
updateButtons();
        </script> --}}
   
@endsection