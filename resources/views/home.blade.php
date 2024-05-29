@extends('common.index-html')


@section('content')
  {{--  <div class="row">
        <div class="col-12">
            <p class="display-4">
                welcome</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <td>#</td>
                            <td>name</td>
                            <td>price</td>
                            <td>discount</td>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($products as $k => $product)
                        <tr>

                                <td>{{$k+1}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->discount}}</td>
                         </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>--}}
  <div class="container mt-5">
      <div class="row">
          <div class="col-12">
              <div class="card shadow mb-4">
                  <div class="card-body">
                      <p class="text-center h5 font-weight-bold m-0">
                          Top Sales
                      </p>
                  </div>
              </div>
              <div class="card shadow">
                  <div class="card-body owl-carousel owl-theme">
                        @foreach($products as $product)
                          <div class="item">
                              @include('common.singleProduct')
                          </div>
                          @endforeach
                  </div>
              </div>
          </div>
      </div>
  </div>

    @endsection



@section('more-js')
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
        });
    </script>
@endsection
