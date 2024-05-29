<html>
<head>
    <meta charset="UTF-8">
    <title>ECO SAMPLE | LOGIN</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">
    @yield('more-css')
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-lg-8 offset-0 offset-lg-2">
            <div class="card shadow">
                <div class="card-body">
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            <p class="m-0">
                                {{Session::get('error')}}
                            </p>
                        </div>
                    @endif

                      @include('common.errors')

                    <h2 class="text-center">
                        Login
                    </h2>
                    <hr>
                    <form action="" method="POST">

@csrf
                        <div class="form-group row">
                            <label for="username" class="col-form-label col-12">Username</label>
                            <div class="col-12">
                                <input type="text" name="username" class="form-control" value="{{old('username')}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-form-label col-12">Password</label>
                            <div class="col-12">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>

                        <div class="text-center mt-2">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </div>
                        <div class="text-center text-muted">
                            <span>Does not have an account?</span>
                            <a href="/register">
                                Register
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('/assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('/assets/js/popper.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.js')}}"></script>
<script src="{{asset('/assets/js/fontawesome.min.js')}}"></script>
</body>
</html>
