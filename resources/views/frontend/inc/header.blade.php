<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
         .bi{
                border-radius:10px !important;
            }
       @media only screen and (max-width: 480px) {
            .bi{
                width: 180px !important;
                border-radius:10px !important;
            }
            .video{
                width: 180px !important; 
                height: 110px !important;
            }
            .btn{
                width: 180px !important;  
            }
            .nav-link{
                width: 150px;
                margin: 5px;
            }
            .video{
                width: 40px !important;
                height: 40px !important;
            }
            .footer{
                width: 40px !important;
                height: 40px !important;
                border: 2px solid white;
            }
            .footers{
                width: 60px !important;
                height: 60px !important;
            }
            .videos{
                width: 60px !important;
                height: 60px !important;
            }
            .box{
                width: 23rem !important; 
            }
            .nav-link{
            width: 150px;
            margin-left: 90px;
            margin-bottom: 5px;
        }
        }

        @media only screen and (max-width: 900px) {
            .box{
                width: 24rem !important; 
            } 
            .video{
                width: 30px !important;
                height: 30px !important;
            }
            .footer{
                width: 30px !important;
                height: 30px !important;
                border: 2px solid white;
            } 
            .videos{
                width: 90px !important;
                height: 90px !important;
            }
            .footers{
                width: 90px !important;
                height: 90px !important;
                border: 2px solid white;
            } 
            .nav-link{
            width: 150px;
            margin-left: 90px;
            margin-bottom: 5px;
        }
        
        }

        @media only screen and (max-width: 480px) {
            .box{
                width: 22rem !important; 
            } 
            .card{
                width: 20rem !important;
                margin-left:18px !important; 
            } 
            
            .videos{
                width: 80px !important;
                height: 80px !important;
            }
            .footers{
                width: 80px !important;
                height: 80px !important;
                border: 2px solid white;
            } 

            .video{
                width: 80px !important;
                height: 80px !important;
            }
            .footer{
                width: 80px !important;
                height: 80px !important;
                border: 2px solid white;
            } 
        }
         @media only screen and (min-width: 990px) {
          .navbar-nav{
            padding-left: 75px;
            }  
        }
       
    </style>
  </head>
  <body style="background-color: rgb(210,180,140);">


  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(210,180,140);">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


            <div class="collapse navbar-collapse flex-row-reverse g-2 text align-items-center justify-content-center" style="margin-top: 45px;margin-right: 80px;" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item px-2">
                    <a class="nav-link active  text-bold fw-bold border px-3 py-0" style="background-color:#E2E2E2;border-radius: 25px;padding-left: 30px !important;
    padding-right: 30px !important;
    padding-top: 5px !important;
    padding-bottom: 5px !important; color:rgb(26, 0, 0);" aria-current="page" href="{{route('index')}}">Home</a>
                  </li>
                  @auth
                  <li class="nav-item  px-2">
                      <a class="nav-link  active  text-bold fw-bold border px-3 py-0" style="background-color:#E2E2E2;border-radius: 25px;padding-left: 30px !important;
    padding-right: 30px !important;
    padding-top: 5px !important;
    padding-bottom: 5px !important;color:rgb(26, 0, 0);" href="{{route('profile')}}">Profile</a>
                    </li>
                    <li class="nav-item  px-2">
                        <a class="nav-link  active  text-bold fw-bold border px-3 py-0" style="background-color:#E2E2E2;border-radius: 25px;padding-left: 30px !important;
    padding-right: 30px !important;
    padding-top: 5px !important;
    padding-bottom: 5px !important;color:rgb(26, 0, 0);" href="{{route('home')}}">Dashboard</a>
                    </li>
                    <li class="nav-item  px-2">
                      <a class="nav-link  active  text-bold fw-bold border px-3 py-0" style="background-color:#E2E2E2;border-radius: 25px;padding-left: 30px !important;
    padding-right: 30px !important;
    padding-top: 5px !important;
    padding-bottom: 5px !important;color:rgb(26, 0, 0);" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                  </li>
                    @else
                  <li class="nav-item  px-2">
                    <a class="nav-link active  text-bold fw-bold border px-3 py-0" style="background-color:#E2E2E2;border-radius: 25px;padding-left: 30px !important;
    padding-right: 30px !important;
    padding-top: 5px !important;
    padding-bottom: 5px !important;color:rgb(26, 0, 0);"  href="{{route('register')}}">Sign up</a>
                  </li>
                  <li class="nav-item  px-2">
                      <a class="nav-link  active  text-bold fw-bold border px-3 py-0" style="background-color:#E2E2E2;border-radius: 25px;padding-left: 30px !important;
    padding-right: 30px !important;
    padding-top: 5px !important;
    padding-bottom: 5px !important;color:rgb(26, 0, 0);" href="{{route('login')}}">Login</a>
                  </li>
                  @endauth
                </ul>
    </div>
  </div>
</nav>
