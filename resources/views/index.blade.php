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
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar End -->
 <!-- Carousel Start -->
 
  
<!-- Carousel End -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="front/img/carousel-1.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">BEE</h1>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="front/img/product-2.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">QUEENS</h1>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="front/img/carousel-3.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">HONEEY</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div class="col-lg-4">
        <div class="product-offer mb-30" style="height: 200px;">
            <img class="img-fluid" src="Front/img/product-4.jpg" alt="">
            <div class="offer-text">
             
                <h3 class="text-white mb-3">Honey</h3>
        
            </div>
        </div>
        <div class="product-offer mb-30" style="height: 200px;">
            <img class="img-fluid" src="Front/img/product-2.jpg" alt="">
            <div class="offer-text">
       
                <h3 class="text-white mb-3">Queen</h3>
 
            </div>
        </div>
    </div>
</div>
</div>

<!-- Categories Start -->
<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
                <div class="cat-item d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{ asset('Front/img/cat-1.jpg') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Bee</h6>
                        <small class="text-body">{{ $sumbee}} Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{ asset('Front/img/product-3.jpg') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Queen</h6>
                        <small class="text-body">{{ $sumQueen }} Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{ asset('Front/img/product-6.jpg') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Honey</h6>
                        <small class="text-body">{{ $sumHoney }} Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{ asset('Front/img/carousel-3.jpg') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Others</h6>
                        <small class="text-body">{{ $sumOthers }} Products</small>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- Categories End -->


<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Bee</span></h2>
    <div class="row px-xl-5">
        @foreach ($bees as $bee)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="/beeimage/{{$bee->image}}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="{{ route('pagecart') }}"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Name : {{$bee->name}}</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>Price : {{$bee->price}} $</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                       
                        <small>Qantylly : {{$bee->qantylly}}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


     
    </div>
</div>
<!-- Products End -->



<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Honey</span></h2>
    <div class="row px-xl-5">
        @foreach ($honeys as $honey)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="/honeyimage/{{$honey->image}}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="{{ route('pagecart') }}"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Name: {{$honey->name}}</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>Price : {{$honey->price}} $</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                       
                        <small>Qantylly : {{$honey->qantylly}} kg</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


     
    </div>
</div>
<!-- Products End -->

<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Queen</span></h2>
    <div class="row px-xl-5">
        @foreach ($Queens as $Queen)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="/queenimage/{{$Queen->image}}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="{{ route('pagecart') }}"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Name:{{$Queen->name}}</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>Price :{{$Queen->price}}</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                       
                        <small>Qantylly :{{$Queen->qantylly}}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


     
    </div>
</div>
<!-- Products End -->

<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Others</span></h2>
    <div class="row px-xl-5">
        @foreach ($others as $other)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="/othersimage/{{$other->image}}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href="{{ route('pagecart') }}"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Name:{{$other->name}}</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>Price :{{$other->price}}</h5>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                       
                        <small>Qantylly :{{$other ->qantylly}}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


     
    </div>
</div>
<!-- Products End -->


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