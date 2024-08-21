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
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('homepage') }}">Home</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $item)
                        <tr>
                            <td class="align-middle"><img src="{{ isset($item['poster']) ? $item['poster'] : 'N/A' }}" alt="" style="width: 50px;"> {{ $item['name'] }}</td>
                        
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">${{ $item['price'] }}</td>
                            <td data-th="Subtotal" class="text-center">${{ $item['price'] * $item['quantity'] }}</td>
                            {{-- <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td> --}}
                        </tr>
                        @endforeach
                        @endif
                         
                    </tbody>
                </table>
            </div>
                    </div>
              
             
            </div>
        </div>
    </div>
    <!-- Cart End -->
@endsection



@section('scripts')
<script type="text/javascript">
  
    $(".delete-item").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.item') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
@endsection