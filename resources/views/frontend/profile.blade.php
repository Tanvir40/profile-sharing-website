@include('../frontend/inc/header')
<style>
       @media only screen and (max-width: 480px) {
            
            .video{
                width: 180px !important; 
                height: 120px !important;
            }
            .box{
                    width: 20rem !important; 
                }
           
            
        } 

        @media only screen and (min-width: 481px) {
            
            .video{
                width: 265px !important; 
                height: 130px !important;
            }       
            
        } 
       

        @media only screen and (min-width: 1399px) {
                .box{
                    width: 35rem !important; 
                } 

        }

        @media only screen and (min-width: 900px) {
            
            .video{
                width: 260px !important; 
                height: 120px !important;
            }
            .box{
                width: 35rem !important; 
            }
            
        } 

        @media only screen and (min-width: 772px) {
            
            .bi{
                width: 265px !important; 
            }
            .video{
                width: 260px !important; 
                height: 120px !important;
            }
            .box{
                    width: 35rem !important; 
                }
            
        } 
        
    </style>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="image text-center mt-5 z-index-1">
                <embed style="border: 4px solid white;width:120px;border-radius: 50%;" src="@if($user->profile_photo != null){{asset('profile')}}/{{$user->profile_photo}}@else {{asset('profile/default.jpg')}}  @endif" type="image/png">
            </div>

            <div class="box1 d-flex align-items-center justify-content-center" style="margin-top:-50px;">
                <div class="box text-center text-white px-5 pb-5" style="width:35rem !important;padding-top:4rem;background-color:#003B86;z-index:-1;border-radius: 10px;">
                    <h4>{{"@"}}{{$user->name}}</h4>
                    <p>{{substr($user->profile_desp, 0, 200)}}</p>
                </div>
            </div>
        </div>

        <div class="col-md-@if($user->photo_one || $user->photo_two == null)12 @else 6 @endif d-flex align-items-center justify-content-center mt-3">
            <div class="row">
                @if($user->photo_one != null)
                <div class="col-6 col-md-6 col-sm-6">
                    <div class="box-img1">
                        <img class="bi" style="border-radious:10px;border: 4px solid white;width:270px;" src="@if($user->photo_one != null){{asset('photo')}}/{{$user->photo_one}}@else {{asset('profile/default.jpg')}}  @endif" alt="">
                    </div>
                </div>
                @else

                @endif

                @if($user->photo_two != null)
                <div class="col-6 col-md-6 col-sm-6">
                    <div class="box-img1">
                        <img class="bi" style="border-radious:10px;border: 4px solid white;width:270px;" src="@if($user->photo_two != null){{asset('photo')}}/{{$user->photo_two}}@else {{asset('profile/default.jpg')}}  @endif" alt="">
                    </div>
                </div>
                @else

                @endif

            </div>
        </div>

        <div class="col-md-@if($user->video_one || $user->video_two == null)12 @else 6 @endif d-flex align-items-center justify-content-center mt-3">
            <div class="row">
            @if($user->video_one != null)
                <div class="col-6">
                    <div class="box-img1">
                            <iframe class="video" style="border-radius: 10px;" width="265" height="140" src="{{$user->video_one}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                @else

            @endif

            @if($user->video_two != null)
                <div class="col-6">
                    <div class="box-img1">
                    <iframe class="video" style="border-radius: 10px;" width="265" height="140" src="{{$user->video_two}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                @else

            @endif
            </div>
        </div>

        <div class="col-md-@if($user->facebook || $user->twitter == null)12 @else 6 @endif d-flex align-items-center justify-content-center mt-3 ">
            
            <div class="row">
            @if($user->facebook != null)
                <div class="col-6">
                    <div class="box3">
                       <a href="{{$user->facebook}}" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;"><i class="fa fa-facebook-official " aria-hidden="true"></i>&ensp; Facebook</a>
                    </div>
                </div>
            @else

            @endif

            @if($user->twitter != null)
                <div class="col-6">
                    <div class="box3">
                    <a href="{{$user->twitter}}" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;"><i class="fa fa-twitter" aria-hidden="true"></i>&ensp; Twitter</a>
                    </div>
                </div>
            @else

            @endif
            </div>
        </div>

        <div class="col-md-@if($user->linkedin || $user->instragram == null)12 @else 6 @endif d-flex align-items-center justify-content-center mt-3 ">
            
            <div class="row">
            @if($user->linkedin != null)
                <div class="col-6">
                    <div class="box3">
                    <a href="{{$user->linkedin}}" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;"><i class="fa fa-linkedin-square" aria-hidden="true"></i>&ensp; linkedin</a>
                    </div>
                </div>
            @else

            @endif

            @if($user->instragram != null)
                <div class="col-6">
                    <div class="box3">
                    <a href="{{$user->instragram}}" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;"><i class="fa fa-instagram" aria-hidden="true"></i>&ensp; Instragram</a>
                    </div>
                </div>
            @else

            @endif
            </div>
        </div>

        <div class="col-md-@if($user->tumblr || $user->discord == null)12 @else 6 @endif d-flex align-items-center justify-content-center mt-3 ">
            
            <div class="row">
            @if($user->tumblr != null)
                <div class="col-6">
                    <div class="box3">
                    <a href="{{$user->tumblr}}" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;"><i class="fa fa-tumblr-square" aria-hidden="true"></i>&ensp;
                       Tumblr</a>
                    </div>
                </div>
            @else

            @endif

            @if($user->quora != null)
                <div class="col-6">
                    <div class="box3">
                    <a href="{{$user->quora}}" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;"><i class="fa fa-quora" aria-hidden="true"></i>&ensp; Quora</a>
                    </div>
                </div>
            @else

            @endif
            </div>
        </div>

        <div class="col-md-@if($user->reddit || $user->youtube == null)12 @else 6 @endif d-flex align-items-center justify-content-center mt-3 ">
            
            <div class="row">
            @if($user->reddit != null)
                <div class="col-6">
                    <div class="box3">
                    <a href="{{$user->reddit}}" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;"><i class="fa fa-reddit" aria-hidden="true"></i>&ensp; Reddit</a>
                    </div>
                </div>
            @else

            @endif

            @if($user->youtube != null)
                <div class="col-6">
                    <div class="box3">
                    <a href="{{$user->youtube}}" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;"><i class="fa fa-youtube-play" aria-hidden="true"></i>&ensp; Youtube</a>
                    </div>
                </div>
            @else

            @endif
            </div>
        </div>

        <div class="col-md-@if($user->whatsapp || $user->telegram == null)12 @else 6 @endif d-flex align-items-center justify-content-center mt-3 ">
            
            <div class="row">
            @if($user->whatsapp != null)
                <div class="col-6">
                    <div class="box3">
                    <a href="{{$user->whatsapp}}" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;"><i class="fa fa-whatsapp" aria-hidden="true"></i>&ensp; Whatsapp</a>
                    </div>
                </div>
            @else

            @endif

            @if($user->telegram != null)
                <div class="col-6">
                    <div class="box3">
                    <a href="{{$user->telegram}}" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;"><i class="fa fa-telegram" aria-hidden="true"></i>&ensp; Telegram</a>
                    </div>
                </div>
            @else

            @endif
            </div>
        </div>

    </div>
</div>



@include('./frontend/inc/footer')