@extends('Auth.compenet.app')
@section('Authuser')
    
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb  mb-30">
                
                  
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Login Account</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form action="{{ route('logincustm') }}" method="post">
@csrf
                        <div class="control-group">
                            <input type="email" class="form-control"  name= "email" placeholder="Your Email" required/>
                            <p class="help-block text-danger"></p>
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="control-group">
                            <input type="text" class="form-control"  name="password" placeholder="Your Password" required />
                            <p class="help-block text-danger"></p>
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                      
                      
                       
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>

@endsection