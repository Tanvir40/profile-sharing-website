<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="{{asset('fav.jpeg')}}" rel="icon" type="image/x-icon">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" /><meta name="apple-mobile-web-app-title" content="CodePen"><link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" /><link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" /> -->
    <title>Reset Password Form</title>
    <style>
     /*@media only screen and (min-width: 990px) {*/
     /*   .navbar-brand {*/
     /*     padding-top: 35px !important;*/
     /*   }*/
     /* }*/
      @import url(https://fonts.googleapis.com/css?family=Roboto:300);

      .login-page {
        width: 360px;
        padding: 5% 0 0;
        margin: auto;
      }

      .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        border-radius:25px;
      }

      .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #E8F0FE;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
      }

      .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #003B86;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #ffffff;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
      }

      .form button:hover,
      .form button:active,
      .form button:focus {
        background: #003B86;
      }

      .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
      }

      .form .message a {
        color: #4CAF50;
        text-decoration: none;
      }

      .form .register-form {
        display: none;
      }

      .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
      }

      .container:before,
      .container:after {
        content: "";
        display: block;
        clear: both;
      }

      .container .info {
        margin: 50px auto;
        text-align: center;
      }

      .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
      }

      .container .info span {
        color: #4d4d4d;
        font-size: 12px;
      }

      .container .info span a {
        color: #000000;
        text-decoration: none;
      }

      .container .info span .fa {
        color: #EF3B3A;
      }
      @media (min-width: 992px){
        .navbar-expand-lg .navbar-nav {
            flex-direction: row;
            margin-left: -40px;
        }

      body {
        background-color: rgb(210, 180, 140);
         !important;
        /* fallback for old browsers */
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }

      /*@media only screen and (min-width: 600px) and (max-width: 991px) {*/
      /*  .nav-link {*/
      /*    width: 250px !important;*/
      /*    margin-left: 280px !important;*/
      /*    margin-bottom: 5px !important;*/
      /*  }*/

      /*  @media only screen and (min-width: 300px) {*/
      /*    .nav-item {*/
      /*      margin: 5px !important;*/
      /*    }*/
          @media only screen and (min-width: 992px){
        .navbar-nav {
            margin-right: 8rem !important;
        }
    }
    
    @media only screen and (min-width: 300px) and (max-width: 991px) {
        .navbar-collapse {
          margin-right: 80px; !important;
        }
        
        @media only screen and (min-width: 350px) and (max-width: 767px) {
            .nav-link {
              width: 150px;
              margin-left: 90px;
              margin-bottom: 5px;
            }
        }
    
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .nav-link {
              width: 200px;
              margin-left: 90px;
              margin-bottom: 5px;
            }
        }
        
    }
     @media (min-width: 992px){
        .navbar-expand-lg .navbar-nav {
            flex-direction: row;
            margin-left: -40px;
        }
    </style>
    <script>
      window.console = window.console || function(t) {};
    </script>
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(210,180,140);">
    <div class="container-fluid">
      <a class="navbar-brand " href="{{route('index')}}">
        <img width="140px" src="{{asset('logo.jpeg')}}" alt="" class="ms-3">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-row-reverse g-2 text align-items-center justify-content-center" style="margin-top: 45px;margin-right: 0px;" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a class="nav-link active text-dark text-bold fw-bold border px-3 py-0" style="background-color:#E2E2E2;border-radius: 25px;padding-left: 30px !important;
    padding-right: 30px !important;
    padding-top: 5px !important;
    padding-bottom: 5px !important;" aria-current="page" href="{{route('index')}}">Home</a>
          </li> @auth <li class="nav-item  px-2">
            <a class="nav-link  active text-primary text-bold fw-bold border px-3 py-0" style="background-color:#E2E2E2;border-radius: 25px;padding: 10px;" href="{{route('profile')}}">Profile</a>
          </li>
          <li class="nav-item  px-2">
            <a class="nav-link  active text-dark text-bold fw-bold border px-3 py-0" style="background-color:#E2E2E2;border-radius: 25px;padding: 10px;" href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="nav-item  px-2">
            <a class="nav-link  active text-dark text-bold fw-bold border px-3 py-0" style="background-color:#E2E2E2;border-radius: 25px;padding: 10px;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
          </li> @else <li class="nav-item  px-2">
            <a class="nav-link active text-dark text-bold fw-bold border px-3 py-0" style="background-color:#E2E2E2;border-radius: 25px;padding-left: 30px !important;
    padding-right: 30px !important;
    padding-top: 5px !important;
    padding-bottom: 5px !important;" href="{{route('register')}}">Sign up</a>
          </li>
          <li class="nav-item  px-2">
            <a class="nav-link  active text-dark text-bold fw-bold border px-3 py-0" style="background-color:#E2E2E2;border-radius: 25px;padding-left: 30px !important;
    padding-right: 30px !important;
    padding-top: 5px !important;
    padding-bottom: 5px !important;" href="{{route('login')}}">Login</a>
          </li> @endauth
        </ul>
      </div>
    </div>
  </nav>
  <body translate="no" style=" background-color: rgb(210,180,140);!important">
    <div class="login-page">
      <div class="form">
        <h3>{{ __('Reset Password') }}</h3>
        <form method="POST" action="{{ route('password.update') }}"> @csrf <input type="hidden" name="token" value="{{ $token }}">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus> @error('email') <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span> @enderror 
          
          <div class="d-flex">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your new password">
                    <i class="fa fa-eye" id="togglePassword" style="margin-left: -30px;margin-top: 17px; cursor: pointer;"></i>
          </div>
          @error('password') <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span> @enderror 
          
          <div class="d-flex">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter your confirm password">
          <i class="fa fa-eye" id="togglePasswords" style="margin-left: -30px;margin-top: 17px; cursor: pointer;"></i>
          </div>
          <button type="submit" class="text-dark" style="background-color:#E2E2E2; border-radius:10px;">{{ __('Reset Password') }}</button>
          <p class="message">Already registered? <a style="color:#003B86 !important;" href="{{ route('login') }}">Sign In</a>
          </p>
        </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script id="rendered-js">
      $('.message a').click(function() {
        $('form').animate({
          height: "toggle",
          opacity: "toggle"
        }, "slow");
      });
      //# sourceURL=pen.js
    </script>
    
      <script>
        const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
    </script>
    
    <script>
        const togglePasswords = document.querySelector('#togglePasswords');
  const passwords = document.querySelector('#password-confirm');

  togglePasswords.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = passwords.getAttribute('type') === 'password' ? 'text' : 'password';
    passwords.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
    </script>
  </body>
</html>