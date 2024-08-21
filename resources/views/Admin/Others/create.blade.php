@extends('Admin.app.layouts')
@section('admin')

<div class="content">
    <div class="py-4 px-3 px-md-4">
        <div class="card mb-3 mb-md-4">
        @if (session()->has('message'))
        <div class="alert alert-success ">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{ session()->get('message')}}
        </div>
    @endif
            <div class="card-body">
                <!-- Breadcrumb -->
                <nav class="d-none d-md-block" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('others') }}">Others</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create New Others</li>
                    </ol>
                </nav>
                <!-- End Breadcrumb -->

                <div class="mb-3 mb-md-4 d-flex justify-content-between">
                    <div class="h3 mb-0">Create New Others</div>
                </div>
             
                <!-- Form -->
       
                    <form action="{{route('othersstore')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                <label for="">Name</label>
                                <input type="text" class="form-control"  name="name" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="name">Country</label>
                                <input type="text" class="form-control"  name="country" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="">Type</label>
                                <input type="text" class="form-control"  name="type" required>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="">Qantylly</label>
                                <input type="number" class="form-control"  name="qantylly" required>
                            </div>

                            <div class="form-group col-12 col-md-6">
                                <label >Price</label>
                                <input type="number" class="form-control" name="price" required>
                            </div>

                            <div class="form-group col-12 col-md-6">
                                <label for="">Image</label>
                                <input type="file" class="form-control"  name="image" required>
                            </div></div>
                            
                    
                        <button type="submit" class="btn btn-success float-right ">Create</button>
                    </form>
                </div>
                <!-- End Form -->
            </div>
        </div>


    </div>


</div>
</div>
</main>


@endsection