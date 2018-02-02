<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DTI - @yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="css/custome.css">
    <link rel="stylesheet" href="css/animate.css">
    
 
</head>
<body id="page-top">
    <script defer src="js/bootstrap.min.js"></script>
    <script async type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>    
    <script src="js/swiper.min.js"></script>
    <script src="js/paraxify.min.js"></script>
    <script src="js/modernizr-custom.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/parallax.min.js"></script>
    
    
    
   
   
    @section('header')
    @show
    @section('head')
    @show

    @yield('slide')
    
    @yield('content')

    @yield('footer')

 

    <script>
            var mySwiper = new Swiper ('.swiper-container', {
              calculateHeight:true,
              loop: true,
              autoplay: {
                delay: 5000,
              },
          
              // If we need pagination
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                  return '<span class="' + className + '" >' + (index + 1) + '</span>';
                },
              },
          
              // Navigation arrows
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              }
            })

            var wow =new WOW().init();

            if(!Modernizr.touchevents){
             var myParaxify = new paraxify('.paraxify');
            }


            </script>
</body>
</html>