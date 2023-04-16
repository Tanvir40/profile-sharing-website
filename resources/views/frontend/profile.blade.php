@include('../frontend/inc/header')
<style>
       @media only screen and (max-width: 480px) {
            
            .video{
                width: 180px !important; 
                height: 110px !important;
            }
            
        }
        
    </style>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="image text-center mt-5 z-index-1">
                <embed style="border: 4px solid white;width:120px;border-radius: 50%;" src="{{asset('frontend/img/saby.jpg')}}" type="image/png">
            </div>

            <div class="box1 d-flex align-items-center justify-content-center" style="margin-top:-50px;">
                <div class="box text-center text-white px-5 pb-5" style="width: 35rem;padding-top:4rem;background-color:#003B86;z-index:-1;border-radius: 10px;">
                    <h4>{{"@"}}{{Auth::user()->name}}</h4>
                    <p>{{$user->profile_desp}}</p>
                </div>
            </div>
        </div>

        <div class="col-md-@if($user->photo_one || $user->photo_two == null)12 @else 6 @endif d-flex align-items-center justify-content-center mt-3">
            <div class="row">
                @if($user->photo_one != null)
                <div class="col-md-6">
                    <div class="box-img1">
                        <img class="bi" style="border-radious:10px;border: 4px solid white;width:270px;" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" alt="">
                    </div>
                </div>
                @else

                @endif

                @if($user->photo_two != null)
                <div class="col-md-6">
                    <div class="box-img1">
                        <img class="bi" style="border-radious:10px;border: 4px solid white;width:270px;" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" alt="">
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
                        <iframe class="video" style="border-radius: 10px;" width="265" height="140" src="https://www.youtube.com/embed/OqtR1ZlEHwY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                @else

            @endif

            @if($user->video_two != null)
                <div class="col-6">
                    <div class="box-img1">
                        <iframe class="video" style="border-radius: 10px;" width="265" height="140" src="https://www.youtube.com/embed/OqtR1ZlEHwY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                       <button class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;">Facebook</button>
                    </div>
                </div>
            @else

            @endif

            @if($user->twitter != null)
                <div class="col-6">
                    <div class="box3">
                       <button class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;">Twitter</button>
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
                       <button class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;">linkedin</button>
                    </div>
                </div>
            @else

            @endif

            @if($user->instragram != null)
                <div class="col-6">
                    <div class="box3">
                       <button class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;">instragram</button>
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
                       <button class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;">tumblr</button>
                    </div>
                </div>
            @else

            @endif

            @if($user->discord != null)
                <div class="col-6">
                    <div class="box3">
                       <button class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;">discord</button>
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
                       <button class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;">reddit</button>
                    </div>
                </div>
            @else

            @endif

            @if($user->youtube != null)
                <div class="col-6">
                    <div class="box3">
                       <button class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;">youtube</button>
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
                       <button class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;">whatsapp</button>
                    </div>
                </div>
            @else

            @endif

            @if($user->telegram != null)
                <div class="col-6">
                    <div class="box3">
                       <button class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:260px;background-color:#E2E2E2;border:0px;border-radius: 25px;">telegram</button>
                    </div>
                </div>
            @else

            @endif
            </div>
        </div>

    </div>
</div>



@include('./frontend/inc/footer')