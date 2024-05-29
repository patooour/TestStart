<div class="card">
    <div class="card-body">

        <img src=" {{$product->image->path}}" alt=" {{$product->image->name}}"
             height="100"
        class="card-img-top">
        <p class="card-title text-center font-weight-bold">
            {{$product->name}}
        </p>
        <hr>
        <div class="text-center">
                                            <span class="badge badge-primary badge-pill">
                                                {{$product->price}}$
                                            </span>
            <span class="badge badge-danger badge-pill">
                                                {{$product->discount}}%
                                            </span>
        </div>
        <p class="text-truncate mb-0">
            {{$product->description}}
        </p>

        <div class="text-center mt-2">
            <a href="/product/{{$product->id}}"
               class="btn btn-sm">
                More Details
            </a>
            <form action="/cart/add" method="post">
                @csrf
                <input type="hidden" name="pid" value="{{$product->id}}">
                <button class="btn btn-sm btn-success">
                    Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>
