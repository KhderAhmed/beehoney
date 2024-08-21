
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
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
    
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
    
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ route('homepage') }}" class="nav-item nav-link active">Home</a>
                         
                            <a href="{{ route('pagecart') }}" class="nav-item nav-link">Cart</a>
                                  
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">{{ Auth::guard('customer')->user()->name }} <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="{{ route('myprofile') }}" class="dropdown-item active">MyProfile</a>
                                    <a href="{{ route('customlogout') }}" class="dropdown-item">Logout</a>
                                </div>
                            </div>
    
                         </div>
                        </div>
    
                    </div>
            </div>
            </nav>

    <!-- Navbar End -->

@yield('frontuser')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-0 pt-0">
        <div class="row px-xl-2 pt-2">
           
            <div class="col-lg-8 col-md-12">
              
            </div>
        </div>
        <div class="row border-top mx-xl-3 py-2" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
 
            </div>
          
    </div>
    <!-- Footer End -->


  


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