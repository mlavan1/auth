<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Dashboard</title>
    <style>
        *{
            font-size:15px;
        }
        .align-nav{
            position: absolute;
            right:10%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" style="font-size:20px;" href="#">Home | Dashboard</a>
        <div style="margin-left:700px;" class="align-nav" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto" >
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('auth.dashboard') }}">Home&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('auth.about') }}">About&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('auth.contact') }}">Contact&nbsp;&nbsp;&nbsp;&nbsp;</a>
              </li>
             
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profile
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="javascript:void(0)">Email : {{ $LoginUserInfo['email'] }}</a>
                <a class="dropdown-item" href="javascript:void(0)">User Name : {{ $LoginUserInfo['name'] }}</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('auth.logout') }}" style="color:red">Logout</a>
              </div>
            </li>
            
          </ul>
          
        </div>
      </nav>
    {{-- <div class="container">
        <div class="col-md-8 col-md-offset-0" style="background-color:rgb(255, 255, 255)">
            <table class="table table-hover">
                <thead>
                    <th>Name</th>
                    <th>email</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $LoginUserInfo['name'] }}</td>
                        <td>{{ $LoginUserInfo['email'] }}</td>
                        <td><a href="{{ route('auth.logout') }}">Logout</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}    
</body>
</html>