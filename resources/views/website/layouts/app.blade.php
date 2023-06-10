<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mwancelele | </title>
    <meta name="description" content="Insurancy is sharp Insurance agency website template based on HTML CSS and JavaScript specially designed for insurance company, insurance agency and startup agency.">
    <meta name="keywords" content="insurance broker website template, website template for insurance company, insurance website templates free download, insurance company website template, life insurance website template, insurance agency website template, auto insurance website template, insurance agency, html5 website template, insurance website examples, car insurance website template, insurance responsive website template free download">
    <meta name="author" content="atulcodex - Atul Prajapati | Web Developer">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('logo.jpeg')}}">

    <!-- External CSS link -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Ionic icons CDN -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <!-- Jquery CDN link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="">
<!-- Scroll to top starts -->
<button id="topBtn">
    <ion-icon name="arrow-up-outline"></ion-icon>
</button>
<!-- Scroll to top ends -->

<!-- Navigation starts -->
@include('website.layouts.nav')
<!-- Navigation ends -->


<!-- Hero section starts -->
@stack('hero')
<!-- Hero section ends -->
@yield('sections')

<!-- Why us section starts -->



<!--------------- Footer ------------------>
<footer>
    <div class="footer-container">
        <p class="para-line white">Copyright © {{date('Y')}}</p>
    </div>
</footer>
<!--------------- Footer ------------------>




<!-------------- Importing JS file -------------->
<script src="js/script.js"></script>


<script>
    // ------------------------ Scroll to top button --------------------
    $(document).ready(function(){
        $(window).scroll(function(){
            if($(this).scrollTop() > 40)
            {
                $('#topBtn').fadeIn();
            }
            else
            {
                $('#topBtn').fadeOut();
            }
        });

        $("#topBtn").click(function(){
            $('html, body').animate({scrollTop: 0},800);
        });
    });
    // ------------------------ Scroll to top button --------------------
</script>
</body>
</html>
