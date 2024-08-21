@extends('beehoney.compoment.app')
@section('frontuser')
@php
$totalQuantity = 0;
@endphp

@if(session('cart'))
@foreach(session('cart') as $item)
    @php
    $totalQuantity += $item['quantity'];
    @endphp
@endforeach
@endif    
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
                        <img class="position-absolute w-100 h-100" src="{{ asset('front/img/carousel-1.jpg') }}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">BEE</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('front/img/product-2.jpg') }}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">QUEENS</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('front/img/carousel-3.jpg') }}" style="object-fit: cover;">
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
        <img class="img-fluid" src="{{ asset('Front/img/product-4.jpg') }}" alt="">
        <div class="offer-text">
         
            <h3 class="text-white mb-3">Honey</h3>
    
        </div>
    </div>
    <div class="product-offer mb-30" style="height: 200px;">
        <img class="img-fluid" src="{{ asset('Front/img/product-2.jpg') }}" alt="">
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
                    <a class="btn btn-outline-dark btn-square"
                    data-product-id="{{ $bee->id }}"
                    href="{{ route('pagecart') }}"><i class="fa fa-shopping-cart"></i></a>
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
                    <a class="btn btn-outline-dark btn-square" 
                    data-product-id="{{ $honey->id }}" href="{{ route('pagecart') }}"><i class="fa fa-shopping-cart"></i></a>
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
                    <a class="btn btn-outline-dark btn-square"data-product-id="{{ $Queen->id }}" href="{{ route('pagecart') }}"><i class="fa fa-shopping-cart"></i></a>
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
                    <a class="btn btn-outline-dark btn-square" data-product-id="{{ $other->id }}" href="{{ route('pagecart') }}"><i class="fa fa-shopping-cart"></i></a>
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
@endsection
    @section('scripts')

    <script type="text/javascript">
        $(".add-to-cart").click(function (e) {
            e.preventDefault();
    
            var productId = $(this).data("product-id");
            var productQuantity = $(this).siblings(".product-quantity").val();
            var cartItemId = $(this).data("cart-item-id");
    
            $.ajax({
                url: "{{ route('add-movie-to-shopping-cart') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}', 
                    product_id: productId,
                    quantity: productQuantity,
                    cart_item_id: cartItemId
                },
                success: function (response) {
                    $('#cart-quantity').text(response.cartCount);
                     alert('Cart Updated');
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    // Handle errors (e.g., display an error message)
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
 
</div>
</div>
<!-- Products End -->
@endsection