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
                            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ route('pageabout') }}" class="nav-item nav-link">About</a>        
                            <a href="{{ route('pagecontact') }}" class="nav-item nav-link">Contact US</a>            
                
                            <a class="nav-item nav-link" href="{{ route('logincustomer') }}" >Login</a>
                     
                            <a class="nav-item nav-link" href="{{ route('registercustomer') }}" >Register</a>
                        
                        </div>
    
                    </div>
            </div>
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <span class="breadcrumb-item active">Contact</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Contact Us</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form action="{{ route('pagecontactstore') }}" method="post">
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name"
                                required/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email"
                                required />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control"  name="subject" placeholder="Subject"
                                required />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="8" name="message" placeholder="Message"
                                required></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
             @foreach ($staticcompoments as $item)
             <div class="bg-light p-30 mb-3">
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>{{ $item->loction }}</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>{{ $item->email }}</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>{{ $item->PhoneNum }}</p>
            </div>
             @endforeach
               
            </div>
        </div>
    </div>
    <!-- Contact End -->


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