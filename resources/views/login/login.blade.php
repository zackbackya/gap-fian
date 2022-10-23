<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Garda Adhi Pratama | Login Page</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="{{ asset('login-template/css/style.css')}}" type="text/css" media="all" />
    <!--//Style-CSS -->
    <link rel="stylesheet" href="{{ asset('login-template/css/font-awesome.min.css')}}" type="text/css" media="all">

</head>

<body background="{{ asset('login-template/images/slide-2.jpg')}}">
    <div class="w3l-signinform">
        <!-- container -->
        <div class="wrapper">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h1>Garda Adhi<span style="color:#2eca6a"> Pratama</span></h1>
                    
                    <h2>Log In</h2>

                    @if(session()->has('loginError'))
                    <div class="alert alert-primary" role="alert">
                     {{ session('loginError') }}
                    </div>
                    <br>
                    @endif

                    <form action="/login" method="post">
                        @csrf
                        <div class="input-group">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" id="username" name="username" placeholder="Username" @error('username') is-invalid @enderror required="" autofocus>
                        </div>
                        <div class="input-group two-groop">
                            <span><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input type="Password" id="password" name="password" placeholder="Password" required="">
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Log In</button>
                    </form>
                
                    
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        <!-- footer -->
        <div class="footer">
            <!--<p>&copy; 2021 Gathering Log In form. All Rights Reserved | Design by <a href="https://w3layouts.com/"
                    target="blank">W3layouts</a></p>
            -->
        </div>
        <!-- footer -->
    </div>

</body>

</html>