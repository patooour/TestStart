<html>
<head>
    <meta charset="UTF-8">
    <title>ECO SAMPLE | REGISTER</title>
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
                        Register
                    </h2>
                    <hr>
                    <form action="" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="firstName" class="col-form-label col-12">First Name</label>
                            <div class="col-12">
                                <input type="text" name="firstName"
                                       value="{{old('firstName')}}"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-form-label col-12">Last Name</label>
                            <div class="col-12">
                                <input type="text" name="lastName"
                                       value="{{old('lastName')}}"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-form-label col-12">Username</label>
                            <div class="col-12">
                                <input type="text"
                                       value="{{old('username')}}"
                                       name="username" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-form-label col-12">Email</label>
                            <div class="col-12">
                                <input type="text"
                                       value="{{old('email')}}"
                                       name="email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-form-label col-12">Password</label>
                            <div class="col-12">
                                <input type="password"

                                       name="password" class="form-control">
                            </div>
                        </div>

                        <div class="text-center mt-2">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                        <div class="text-center text-muted">
                            <span>Having an account?</span>
                            <a href="/login">
                                Login
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
