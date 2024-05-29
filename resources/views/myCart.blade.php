@extends('common.index-html')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body pb-1">
                        @if ($details == null || count($details) == 0)
                            <div class="text-center mb-2 text-danger">
                                <i class="fa fa-exclamation-triangle fa-5x"></i>
                            </div>
                            <div class="alert alert-warning">
                                <p class="m-0">
                                    You don't have any items in your shopping cart.
                                    You can buy new and recommended products by visiting
                                    the <a href="/">Home</a> page.
                                </p>
                            </div>
                        @else
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price EA</th>
                                    <th>Discount EA</th>
                                    <th>Amount</th>
                                    <th>Total Price</th>
                                    <th>Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $overallPrice = 0.0;
                                @endphp
                                @foreach($details as $k=> $detail)
                                    <tr class="text-center">
                                        @php
                                            $totalPrice =  $detail->price * (1 - $detail->discount / 100.0) * $detail->amount;
                                            $overallPrice += $totalPrice;
                                        @endphp
                                        <td>{{$k + 1}}</td>
                                        <td>{{$detail->product->name}}</td>
                                        <td>{{$detail->price}}$</td>
                                        <td>{{$detail->discount}}%</td>
                                        <td>{{$detail->amount}}</td>
                                        <td>{{ceil($totalPrice * 100.0) / 100.0}}$</td>
                                        <td class="form-inline">
                                            <form action="/cart/update" method="POST">
                                                @csrf
                                                <input type="hidden" name="pid" value="{{$detail->product_id}}">
                                                <input type="hidden" name="k" value="1">
                                                <button class="btn btn-sm btn-primary">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </form>
                                            <form action="/cart/update" class="mx-1" method="POST">
                                                @csrf
                                                <input type="hidden" name="pid" value="{{$detail->product_id}}">
                                                <input type="hidden" name="k" value="-1">
                                                <button class="btn btn-sm btn-warning">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </form>
                                            <form action="/cart/update" method="POST">
                                                @csrf
                                                <input type="hidden" name="pid" value="{{$detail->product_id}}">
                                                <input type="hidden" name="k" value="0">
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr class="text-center font-weight-bold">
                                    <td colspan="5">Overall Price</td>
                                    <td>{{ceil($overallPrice * 100.0 )/ 100.0}}$</td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="text-right mb-2">
                                <a href="/cart/checkout" class="btn btn-success px-4">
                                    Checkout Order
                                </a>
                            </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="my-5"></div>
    </div>

@endsection
