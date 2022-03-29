<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/indexStyle.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <title>Index</title>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="{{asset('company-logo.png') }}" alt="logo" width="70px" height="50">
            <h4 class="logo">ABC Company</h4>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-link" href="#">About</a></li>
                <li><a class="nav-link" href="#">Specs</a></li>
                <li><a class="nav-link" href="#">Products</a></li>
                <li><a class="nav-link" href="#">Contact</a></li> 
            </ul>
        </nav>
        <div class="cart">
            <a class="login-btn" href="/auth/login">Login</a>
            <a class="register-btn" href="/auth/register">Register</a>
        </div>
    </header>
    <main>
        <section class="presentation">
            <div class="introduction">
                <div class="intro-text">
                    <h1>Laptop for the future</h1>
                    <p>The new 14 Inch Retina display with double layered touch screen and a strong dependable display</p>

                </div>
                <div class="cta">
                    <button class="cta-select">14 Inch</button>
                    <button class="cta-add">Add to Cart</button>
                </div>
            </div>
            <div class="cover">
                <img src="{{ asset('indexPage/laptopPNG.png') }}" width="450x" height="350px" alt="notebook">
            </div>
        </section>
        <img  class="big-circle" src="{{ asset('indexPage/circlePNG.png') }}" width="500px" height:"500px" alt="">
        <img  class="medium-circle" src="{{ asset('indexPage/circlePNG.png') }}" width="500px" height:"500px" alt="">
        <img  class="small-circle" src="{{ asset('indexPage/circlePNG.png') }}" width="500px" height:"500px" alt="">



    </main>
</body>
</html>