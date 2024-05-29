@extends('common.index-html')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <p class="text-center h5 font-weight-bold m-0">
                            {{$product->name}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-9">
                                <ul class="list-unstyled my-0">
                                    <li>
                                        <i class="fa fa-caret-right"></i>
                                        <span>Price:</span>
                                        <span class="font-weight-bold">{{$product->price}}</span>
                                        <span class="font-weight-bold">$</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right"></i>
                                        <span>Discount:</span>
                                        <span class="font-weight-bold">{{$product->discount}}</span>
                                        <span class="font-weight-bold">%</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right"></i>
                                        <span>Amount:</span>
                                        <span class="font-weight-bold">{{$product->amount}}</span>
                                        <span class="font-weight-bold"></span>
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right"></i>
                                        <span>Is Available?</span>
                                        <span class="font-weight-bold">{{$product->is_available ? "Yes" : "No"}}</span>
                                        <span></span>
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right"></i>
                                        <span>Is New?</span>
                                        <span class="font-weight-bold">{{$product->is_new ? "Yes" : "No"}}</span>
                                        <span></span>
                                    </li>
                                    <li>
                                        <i class="fa fa-caret-right"></i>
                                        <span>Description</span>
                                        <span class="font-weight-bold">{{$product->description}}</span>
                                        <span></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-3">
                                <img src="{{$product->image->path}}"
                                     class="img-fluid rounded"
                                     alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="row mt-3">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body owl-theme owl-carousel">
                        --}}{{--                        @for($i = 0; $i < 10; $i++)--}}{{--
                        <div class="item">
                            <img src="{{asset('/assets/images/Koala.jpg')}}"
                                 class="img-fluid rounded"
                                 height="300"
                                 alt="">
                        </div>
                        <div class="item">
                            <img src="{{asset('/assets/images/JellyFish.jpg')}}"
                                 class="img-fluid rounded"
                                 height="300"
                                 alt="">
                        </div>
                        <div class="item">
                            <img src="{{asset('/assets/images/Penguins.jpg')}}"
                                 class="img-fluid rounded"
                                 height="300"
                                 alt="">
                        </div>
                        <div class="item">
                            <img src="{{asset('/assets/images/Tulips.jpg')}}"
                                 class="img-fluid rounded"
                                 height="300"
                                 alt="">
                        </div>
                        --}}{{--@endfor--}}{{--
                    </div>
                </div>
            </div>
        </div>--}}

        <div class="row mt-4">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <p class="text-center h5 font-weight-bold m-0">
                            Recommendations
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body owl-carousel owl-theme">
                        @foreach($topSalesProducts as $product)
                            <div class="item">
                               @include('common.singleProduct')
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="my-5"></div>
    </div>

@endsection


@section('more-js')
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
        });
    </script>
@endsection
