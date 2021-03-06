<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
    <style>
        .formdiv{
            background-color:#fff;
            padding:50px;
            border-radius:25px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1),
            0 5px 10px rgba(0,0,0,0.1),
            0 5px 10px rgba(0, 0, 0, 0.1),
            0 5px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body style="background-color:#f5f5f5">
    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4 formdiv">
                <h4>Register</h4><hr>
                <form action="{{ route('auth.save') }}" method="post">
                    @csrf
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>  
                    @endif
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter full name" value="{{ old('name') }}" autocomplete=off>
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter email address" value="{{ old('email') }}" auntocomplete=off>
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password"  class="form-control" id="password" placeholder="Enter password" value="">
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation"  class="form-control" id="password" placeholder="Enter password" value="">
                        <span class="text-danger">@error('password_confirmation'){{ $message }} @enderror</span>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                    <br>
                    Already have an account,<a href="{{ route('auth.login') }}"> Sign in</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>