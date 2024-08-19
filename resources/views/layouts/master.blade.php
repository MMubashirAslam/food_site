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
    {{-- splide css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
     {{-- main css file --}}
     <link rel="stylesheet" href="assets/front/css/style.css">
</head>
<body>
    <header>
        @include('layouts.header')
    </header>
    

    @yield('content')
    
    
    @include('layouts.footer')
   
</body>
{{-- jquery file --}}
<script src="assets/dashboard/js/jquery.js"></script>
{{-- splide js file  --}}
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
{{-- slider js file --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/dashboard/js/bootstrap.bundle.js"></script>
{{-- Js file  --}}
<script src="assets/front/js/main.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slider').slick({
            dots: true,
            arrows:false,
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
</html>