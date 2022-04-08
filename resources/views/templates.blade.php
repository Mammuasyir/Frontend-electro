<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('landing/img/logo.png')}}" type="image/x-icon">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="landing/uicons/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="{{asset('landing/fontawesome-free-5.15.4-web/css/all.css')}}">

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('landing/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('landing/css/style.css')}}">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Farsan&family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <title>ELECTRON</title>
</head>

<style type="text/css">
    .pembungkus {
        position: relative;
    }

    .text-dlm {
        position: absolute;
        left: 170px;
        top: 230px;
        color: #33334f;
        font-family: 'Work Sans';
        font-size: 60px;
    }

    .bg {
        background-size: cover;
    }
</style>

<body>

@include('includes.navbar')

    <div class="content_area">
        @yield('content')
    </div>

@include('includes.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="http://electron-pln.com/ecommerce/js/jquery-3.2.1.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/js/popper.js"></script>
    <script src="http://electron-pln.com/ecommerce/js/bootstrap.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/js/stellar.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/isotope/isotope-min.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/js/jquery.ajaxchimp.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/flipclock/timer.js"></script>
    <script src="http://electron-pln.com/ecommerce/vendors/counter-up/jquery.counterup.js"></script>
    <script src="http://electron-pln.com/ecommerce/js/mail-script.js"></script>
    <script src="http://electron-pln.com/ecommerce/js/theme.js"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

</body>

</html>