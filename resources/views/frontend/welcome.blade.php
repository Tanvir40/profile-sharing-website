@include('../frontend/inc/header')
<!--<style>
               
        @media only screen and (min-width: 1400px) {
            .box{
                width: 40rem !important; 
            } 

        }

        @media only screen and (max-width: 1200px) {
            .box{
                width: 29rem !important; 
            }  
        }

        @media only screen and (max-width: 992px) {
            .card{
                width: 14rem !important;
                
            }  
        }
        
        @media only screen and (max-width: 772px) {
            .box{
                width: 29rem !important; 
            } 
            .card{
                width: 27rem !important;
                
            }  
        }

        @media only screen and (max-width: 480px) {
            .box{
                width: 22rem !important; 
            } 
            .card{
                width: 20rem !important;
                
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
        
    </style> -->
<style>
  @media only screen and (min-width: 300px) {
    .carousel_image {
      width: 100% !important;
      height: 300px !important;
    }
  }

  @media only screen and (min-width: 600px) {
    .carousel_image {
      width: 100% !important;
      height: 450px !important;
    }
  }

  @media only screen and (min-width: 801px) {
    .carousel_image {
      width: 100% !important;
      height: 450px !important;
    }
  }

  @media only screen and (min-width: 1025px) {
    .carousel_image {
      width: 100% !important;
      height: 500px !important;
    }
  }

  @media only screen and (min-width: 1281px) {
    .carousel_image {
      width: 100% !important;
      height: 500px !important;
    }
  }

  @media only screen and (min-width: 481px) and (max-width: 767px) {
    .card {
      width: 350px !important;
      height: 265px !important;
    }

    .box {
      width: 355px !important;
    }
  }

  @media only screen and (min-width: 768px) and (max-width: 900px) {
    .card {
      width: 174px !important;
      height: 265px !important;
    }

    .box {
      width: 355px !important;
    }

    .videos {
      width: 80px !important;
      height: 80px !important;
    }

    .footers {
      width: 80px !important;
      height: 80px !important;
      border: 2px solid white;
    }
  }
</style>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="image text-center mt-5">
        <h2 style="margin-bottom:100px;">Star Member</h2>
      </div>
      <!-- <div class=" d-flex align-items-center justify-content-center" style="margin-top:80px;"></div> -->
      <div class="row">
        <div class="col-md-3 "></div>
        <div class="col-md-6">
          <div class="box text-center text-dark px-5 pb-3" style="padding-top:4rem;background-color:#E2E2E2;border-radius: 30px;">
            <a href="{{route('profile_details',$userone->profile_url)}}">
              <img class="z-index:1;" style="border: 4px solid white;width:120px;border-radius: 50%; margin-top: -200px;" src="@if($userone->profile_photo != null){{asset('profile')}}/{{$userone->profile_photo}}@else {{asset('profile/default.jpg')}} @endif" alt="">
            </a>
            <div class="d-flex align-items-center justify-content-center">
              <a class="text-decoration-none" href="{{route('profile_details',$userone->profile_url)}}">
                <h4 class="text-dark">{{'@'}}{{$userone->name}} &nbsp;</h4>
              </a>
            </div>
            <div class="d-flex text-center">
              <p>{{substr($userone->profile_desp, 0, 100)}}</p>
            </div>
            <div class="row m-0 p-0">
              <div class="col-4">
                <img class="footers z-index:1;" height="80" style="border: 4px solid white;width:80px;" src="@if($userone->photo_one != null){{asset('photo')}}/{{$userone->photo_one}}@else {{asset('profile/default.jpg')}}  @endif" alt="">
              </div> @if($userone->video_one != null) <div class="col-4">
                <iframe class="videos" style="border-radius: 10px;" width="80" height="80" src="https://www.youtube.com/embed/{{$userone->video_one}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div> @else @endif <div class="col-4">
                <img height="80" class="footers z-index:1;" style="border: 4px solid white;width:80px;" src="@if($userone->photo_two != null){{asset('photo')}}/{{$userone->photo_two}}@else {{asset('profile/default.jpg')}}  @endif" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
    <div class="container">
      <div class="text-center mt-5">
        <h4 class="mb-5">New Members</h4>
      </div>
      <div class="row d-flex ">
        <div class="text-center col-md-3"></div>
        <div class="text-center col-md-6 d-flex">
          <div class="row"> @foreach($users as $user) 
          
            
          <div class="col-md-6 col-sm-12 mb-5">
              <div class="card mb-6" style="background-color: #E2E2E2;border-radius: 20px;">
                <div class="card-body">
                  <a href="{{route('profile_details',$user->profile_url)}}">
                    <img class="z-index:1;" style="border: 4px solid white;width:70px;border-radius: 50%; margin-top: -70px;" src="@if($user->profile_photo != null){{asset('profile')}}/{{$user->profile_photo}}@else {{asset('profile/default.jpg')}}  @endif" alt="">
                  </a>
                  <a href="{{route('profile_details',$user->profile_url)}}" class="text-decoration-none">
                    <h6 class="text-dark bold">{{'@'}}{{$user->name}}</h6>
                  </a>
                  <p class="text-dark fw-light" style="font-size:0.8rem;">{{substr($user->profile_desp, 0, 30)}}</p>
                  <div class="row m-0 p-0">
                    <div class="col-4">
                      <img class="footer z-index:1;" height="50" style="border: 4px solid white;width:50px;" src="@if($user->photo_one != null){{asset('photo')}}/{{$user->photo_one}}@else {{asset('profile/default.jpg')}}  @endif" alt="">
                    </div> @if($user->video_one != null) <div class="col-4">
                      <iframe class="video" style="border-radius: 10px;" width="70" height="50" src="https://www.youtube.com/embed/{{$user->video_one}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div> @else @endif <div class="col-4">
                      <img height="50" class="footer z-index:1;" style="border: 4px solid white;width:50px;" src="@if($user->photo_two != null){{asset('photo')}}/{{$user->photo_two}}@else {{asset('profile/default.jpg')}}  @endif" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div> @endforeach </div>
        </div>
        <div class="text-center col-md-3"></div>
      </div>
    </div>
  </div>
</div> @include('./frontend/inc/footer')