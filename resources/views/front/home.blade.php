<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ \App\Models\SettingModal::where('key', 'title')->value('value') ?? 'Set title in Admin panel' }}</title>
        {{-- Bootstrap file --}}
        <link rel="stylesheet" href="assets/dashboard/css/bootstrap.min.css">
        {{-- font awesome file --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- slider css files --}}
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
         {{-- main css file --}}
         <link rel="stylesheet" href="assets/front/css/style.css">
         <style>
            .links li a{
        text-shadow: 1px 2px 5px black;
    color: white;

            }
            select[name="location"] {
                color: white !important;
            }
            .landing{
                height: 90vh;
                background-image: url('assets/front/images/landing.png');    
                width: 100%;
                animation: backgroundChange 15s infinite;
                background-size: cover;
                background-position: center;
            }
            @keyframes backgroundChange{
                0% {background-image: url('assets/front/images/landing.png');}
                50% {background-image: url('assets/front/images/landing-2.png');}
            }
         </style>
    </head>
<body>
    <div class="landing" >
        @include('layouts.header')
        {{-- start first container --}}
        <div class="container mb-5">
            <div class="row mt-md-5">
                <div class="col-lg-6 pt-5 landing-container mt-md-3">
                    <img src="{{ asset('assets/front/images/top.png') }}" alt="">
                    <h1 class="text-light mt-3">Order Healthy And Fresh Food Any Time</h1>
                    <p class="text-light mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore perferendis voluptatum dolorem sunt, iste molestiae harum blanditiis delectus, sit aliquid quo ullam placeat! Nesciunt excepturi eius illo dignissimos deserunt voluptas!</p>
                    <form class="mt-4" style="position: relative;z-index:0;">
                        <input type="text" placeholder="Search Keywords " class="py-4 px-3 w-100"> <button class="btn" style="position:absolute;right:20px;width:80px;height:70%;margin-top:10px;"><i class="fa-solid fa-magnifying-glass" style="color: black;"></i></button>
                    </form>
                </div>
            </div>
        </div>
       {{-- end first container --}}
    </div> 
    {{-- endlanding  --}}

    {{-- start categories container --}}
    <div class="container my-5">
        <div class="info my-5">
            <h5 class="mini-heading mb-0">TOP FOODS</h5>
            <h2 class="heading mt-0">Our Categories</h2>
            <span class="divider"></span>
        </div>
        <div class="container">
            <div class="slider">
                <div class="slide">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="slide">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="col-12">
                                <div class="category-card">
                                    <div class="card-image">
                                        <img src="{{ asset('assets/front/images/food.png') }}" width="100%" alt="" class="img-fluid">
                                    </div>
                                    <div class="card-text">
                                        <h6 class="category-name">Pizza</h6>
                                        <p class="category-detail">12 Restaurant Products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
            
               
    </div>
    {{-- end categories container --}}
    {{-- start offer container --}}
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 mb-md-0 mb-3">
                <div class="offer-card" >
                    <img src="{{ asset('assets/front/images/offer.png') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="offer-card" >
                    <img src="{{ asset('assets/front/images/offer.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    {{-- end offer container --}}


    {{-- start super container --}}
    <div class="container">

   
    <div class="info my-5">
        <h5 class="mini-heading mb-0">Super Delicious</h5>
        <h2 class="heading mt-0">Super Delicious Deal</h2>
        <span class="divider"></span>
    </div>

    <div class="row mb-4" >
        <div class="col-md-4 col-12 mb-3">
            <div class="col-12 border border-1 mr-2 px-4 py-2">
                <img src="{{ asset('assets/front/images/super.png') }}" alt="" class="img-fluid">
                <h4>Crispy Fry Burger</h4>
                <p>Howdy Special, A well-seasoned, crispy fried
                    chicken fillet slathered with a</p>
                    <span class="old-price">Rs 690.00</span> <span class="sale-price">Rs 500</span>
            </div>
        </div>
        <div class="col-md-4 col-12 mb-3">
            <div class="col-12 border border-1 mr-2 px-4 py-2">
                <img src="{{ asset('assets/front/images/super.png') }}" alt="" class="img-fluid">
                <h4>Crispy Fry Burger</h4>
                <p>Howdy Special, A well-seasoned, crispy fried
                    chicken fillet slathered with a</p>
                    <span class="old-price">Rs 690.00</span> <span class="sale-price">Rs 500</span>
            </div>
        </div>
        <div class="col-md-4 col-12 mb-3">
            <div class="col-12 border border-1  px-4 py-2">
                <img src="{{ asset('assets/front/images/super.png') }}" alt="" class="img-fluid">
                <h4>Crispy Fry Burger</h4>
                <p>Howdy Special, A well-seasoned, crispy fried
                    chicken fillet slathered with a</p>
                    <span class="old-price">Rs 690.00</span> <span class="sale-price">Rs 500</span>
            </div>
        </div>
    </div>
    <div class="row mb-4" >
        <div class="col-md-4 col-12 mb-3">
            <div class="col-12 border border-1 mr-2 px-4 py-2">
                <img src="{{ asset('assets/front/images/super.png') }}" alt="" class="img-fluid">
                <h4>Crispy Fry Burger</h4>
                <p>Howdy Special, A well-seasoned, crispy fried
                    chicken fillet slathered with a</p>
                    <span class="old-price">Rs 690.00</span> <span class="sale-price">Rs 500</span>
            </div>
        </div>
        <div class="col-md-4 col-12 mb-3">
            <div class="col-12 border border-1 mr-2 px-4 py-2">
                <img src="{{ asset('assets/front/images/super.png') }}" alt="" class="img-fluid">
                <h4>Crispy Fry Burger</h4>
                <p>Howdy Special, A well-seasoned, crispy fried
                    chicken fillet slathered with a</p>
                    <span class="old-price">Rs 690.00</span> <span class="sale-price">Rs 500</span>
            </div>
        </div>
        <div class="col-md-4 col-12 mb-3">
            <div class="col-12 border border-1  px-4 py-2">
                <img src="{{ asset('assets/front/images/super.png') }}" alt="" class="img-fluid">
                <h4>Crispy Fry Burger</h4>
                <p>Howdy Special, A well-seasoned, crispy fried
                    chicken fillet slathered with a</p>
                    <span class="old-price">Rs 690.00</span> <span class="sale-price">Rs 500</span>
            </div>
        </div>
    </div>
</div>
    {{-- end super container --}}

    {{-- start discount container --}}
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 discount-banner p-0" >
                <img src="{{ asset('assets/front/images/discount.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    {{-- end discount container --}}

 
     @include('layouts.footer')

    {{-- jquery file --}}
    <script src="assets/dashboard/js/jquery.js"></script>
    {{-- slider js file --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/dashboard/js/bootstrap.bundle.js"></script>
    {{-- Js file  --}}
    <script src="assets/front/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slider').slick({
                dots: true,
                arrows:true,
                infinite: true,
                speed: 1500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 5000,
                pauseOnHover: true,
                responsive:[{
                    speed:5000,
                }]
            });
        });
    </script>
    
</body>
</html>