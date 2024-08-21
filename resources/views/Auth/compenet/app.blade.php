<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bee and Honey</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('Front/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('Front/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('Front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('Front/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="col-lg-4">
        <a href="" class="text-decoration-none">
            <span class="h1 text-uppercase text-primary bg-dark px-2">BEE</span>
            <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">HONEY</span>
        </a>
    </div>
 
             
             
               

    @yield('Authuser')


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Front/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('Front/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('Front/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('Front/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('Front/js/main.js') }}"></script>
</body>

</html>