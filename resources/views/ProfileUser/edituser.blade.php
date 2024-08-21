@extends('Auth.compenet.app')
@section('Authuser')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb  mb-30">
                    @if (session()->has('message'))
                        <div class="alert alert-success ">
                            <button type="button" class="close" data-dismiss="alert">X</button>
                            {{ session()->get('message') }}
                        </div>
                    @endif

                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Update My
                Profile</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form action="{{ route('myprofilestor') }}" method="post">
                        @csrf
                        <div class="control-group">
                            <input type="name" class="form-control" value="{{ $userprofile->name }}" name= "name"
                                placeholder="Your Name" required />
                            <p class="help-block text-danger"></p>

                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" value="{{ $userprofile->email }}" name= "email"
                                placeholder="Your Email" required />
                            <p class="help-block text-danger"></p>

                        </div>

                        <div class="control-group">
                            <input type="text" class="form-control" value="{{ $userprofile->password }}" name="password"
                                placeholder="Your Password" required />
                            <p class="help-block text-danger"></p>

                        </div>


                        <div class="control-group">
                            <input type="text" class="form-control" value="{{ $userprofile->addrees }}" name="addrees"
                                placeholder="Your Addrees" required />
                            <p class="help-block text-danger"></p>

                        </div>


                        <div class="control-group">
                            <input type="text" class="form-control" value="{{ $userprofile->phone }}" name="phone"
                                placeholder="Your Phone" required />
                            <p class="help-block text-danger"></p>

                        </div>



                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        @endsection
