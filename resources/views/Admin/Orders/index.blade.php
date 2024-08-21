
@extends('Admin.app.layouts')
@section('admin')

<div class="content">
    <div class="py-4 px-3 px-md-4">
        @if (session()->has('message'))

        <div class="alert alert-success ">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{ session()->get('message')}}
        </div>
    @endif
        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">Orders</div>

        </div>
<div class="row">
   

    <div class="col-12" >
       
        <div class="card mb-3 mb-md-4">
          
            <div class="card-header">
                <h5 class="font-weight-semi-bold mb-0">All Orders </h5>
            </div>

            <div class="card-body pt-0">
                <div class="table-responsive-xl">
                    <table class="table text-nowrap mb-0">
                        <thead>
                        <tr>
                            <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Name</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Price</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Qantylly</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Image</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">created_at</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">updated_at</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Status</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">UpdateStatus</th>
                  
                        </tr>
                        </thead>                                       
                      
                        <tbody>
                            @foreach($data as $row)
                        <tr>
                            <td class="py-3">{{$row->id}}</td>
                            <td class="py-3">{{$row->name}}</td>
                            </td>
                            <td class="py-3">{{$row->price}}</td>
                            <td class="py-3">{{$row->quantity}}</td>
                            <td class="py-3"><img class="img_deg"hight="100" width="100" src="/cartimage/{{$row->image}}"></td>
                            <td class="py-3">{{$row->created_at}}</td>
                            <td class="py-3">{{$row->updated_at}}</td>
                            <td class="py-3">{{$row->stauts}}</td>
                            <td class="py-3">
                                <a href="{{route('orderstutaccpet',$row->id)}}"
                                    onclick="return confirm('Are You Sure Accept This')"
                                     class="btn btn-outline-primary"> Active</a>
                 
                             
                          </td>
                            </td>
                           
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
