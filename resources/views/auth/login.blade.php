<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>
<body style="background-color:#f5f5f5;">
    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4" style="background-color:#fff;
                                                        padding:50px;
                                                        border-radius:10px;
                                                        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1),
                                                        0 5px 10px rgba(0,0,0,0.1),
                                                        0 5px 10px rgba(0, 0, 0, 0.1),
                                                        0 5px 10px rgba(0, 0, 0, 0.1);                  
            ">
                <h4>Login | Authenticate</h4><hr>
                <form action="{{ route('auth.check') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @csrf
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter email address" value="{{ old('email') }}" >
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password"  class="form-control" id="password" placeholder="Enter password">
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                    <br>
                    I don't have an account,<a href="{{ route('auth.register') }}"> Create new account</a>
                </form>
            </div>
        </div>
    </div>


</body>
</html>