@include('../frontend/inc/header')
<style>
    
    @media only screen and (max-width: 480px) {
        .btn{
            width:250px !important;;
        }
    }
        
        
</style>


<div class="container">
  <div class="row">
    <div class="col-12">
      <div class=" text-center mt-5"></div>
      <div class=" d-flex align-items-center justify-content-center m" style="margin-top:120px;">
        <div class="box text-center text-dark px-5 pb-3" style="width: 35rem;padding-top:4rem;background-color:#E2E2E2;border-radius: 30px;">
          <img class="z-index:1;" style="border: 4px solid white;width:120px;border-radius: 50%; margin-top: -160px;" src="@if($user->profile_photo != null){{asset('profile')}}/{{$user->profile_photo}}@else {{asset('profile/default.jpg')}}  @endif" alt="">
          <div class="d-flex align-items-center justify-content-center">
            <h4 class="text-dark">{{"@"}}{{Auth::user()->name}} &nbsp;</h4>
            <a data-bs-toggle="modal" data-bs-target="#ProfileModal">
              <i class="text-dark fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>
          </div>
          <div class="d-flex">
            <p class="text-dark">{{$user->profile_desp}}</p>
            <a data-bs-toggle="modal" data-bs-target="#ProfiledespModal">
              <i class="text-dark fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    @if($user->role == 'admin') 
    <div class="col-12 d-flex align-items-center justify-content-center mt-3">
      <div class="row">
        <div class="col-12">
          <div class="box3">
            <a href="{{route('all_user')}}" class="btn btn-primary btn-sm px-3 fw-bold py-3" style="width:360px;background-color:#E2E2E2;border:0px;border-radius: 25px;color:rgb(26, 0, 0);">All User List <i class="fa fa-upload float-end" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div> @endif
    <div class="col-12 d-flex align-items-center justify-content-center mt-3">
      <div class="row">
        <div class="col-12">
          <div class="box3">
            <a href="" data-bs-toggle="modal" data-bs-target="#bannerModal" class="btn btn-primary btn-sm px-3 fw-bold py-3" style="width:360px;background-color:#E2E2E2;border:0px;border-radius: 25px;color:rgb(26, 0, 0);">Profile Photo Update <i class="fa fa-upload float-end" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-12 d-flex align-items-center justify-content-center mt-3">
      <div class="row">
        <div class="col-12">
          <div class="box3">
            <a href="" data-bs-toggle="modal" data-bs-target="#ProfilephotoModal" class="btn btn-primary btn-sm px-3 fw-bold py-3" style="width:360px;background-color:#E2E2E2;border:0px;border-radius: 25px;color:rgb(26, 0, 0);">Add Photo <i class="fa fa-upload float-end" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 d-flex align-items-center justify-content-center mt-3">
      <div class="row">
        <div class="col-12">
          <div class="box3">
            <a href="" data-bs-toggle="modal" data-bs-target="#ProfilevideoModal" class="btn btn-primary btn-sm px-3 fw-bold py-3" style="width:360px;background-color:#E2E2E2;border:0px;border-radius: 25px;color:rgb(26, 0, 0);"">Add Video Link 
								<i class=" float-end fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 d-flex align-items-center justify-content-center mt-3">
      <div class="row">
        <div class="col-12">
          <div class="box3">
            <a href="" data-bs-toggle="modal" data-bs-target="#ProfilesocialModal" class="btn btn-primary btn-sm px-3 fw-bold py-3" style="width:360px;background-color:#E2E2E2;border:0px;border-radius: 25px;color:rgb(26, 0, 0);">Add Social Link <i class="float-end fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 d-flex align-items-center justify-content-center mt-3">
      <div class="row">
        <div class="col-12">
          <div class="box3"> @if(session('massage')) <strong class="text-success">{{session('massage')}}</strong>
            <br> @endif @error('old_password') <strong class="text-danger">{{$message}}</strong>
            <br> @enderror @error('password') <strong class="text-danger">{{$message}}</strong>
            <br> @enderror @error('confirmpassword') <strong class="text-danger">{{$message}}</strong>
            <br> @enderror <a href="" data-bs-toggle="modal" data-bs-target="#ProfileurlModal" class="btn btn-primary btn-sm px-3 fw-bold py-3" style="width:360px;background-color:#E2E2E2;border:0px;border-radius: 25px;color:rgb(26, 0, 0);">Change Password <i class="float-end fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 d-flex align-items-center justify-content-center mt-3 mb-5">
      <div class="row">
        <div class="col-12">
          <div class="box3">
            <a href="" data-bs-toggle="modal" data-bs-target="#Profileupdatemodals" class="btn btn-primary btn-sm px-3 fw-bold py-3" style="width:360px;background-color:#E2E2E2;border:0px;border-radius: 25px;color:rgb(26, 0, 0);">Update Your Profile Url <i class="float-end fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{--modal start--}}
<!-- banner name modal -->
<div class="modal fade" id="bannerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Banner Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('name_update')}}" method="post" enctype="multipart/form-data"> @csrf <input type="hidden" value="{{Auth::id()}}" name="id">
           <label for="" class="form-label">Profile Photo</label>
          <small class="text-warning">Image Size should be Square and jpeg,png,jpg,gif max 3MB</small>
          <input type="file" name="profile_photo" class="form-control mb-2" placeholder="Enter Your Name">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- profile name modal -->
<div class="modal fade" id="ProfileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile Name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('name_update')}}" method="post" enctype="multipart/form-data"> @csrf <input type="hidden" value="{{Auth::id()}}" name="id">
          <label for="" class="form-label">Name</label>
          <input type="text" name="name" class="form-control mb-2" placeholder="Enter Your Name">
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- profile desp modal -->
<div class="modal fade" id="ProfiledespModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile Description</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('desp_update')}}" method="post"> @csrf <input type="hidden" value="{{Auth::id()}}" name="id">
          <label for="" class="form-label">Description</label>
          <textarea name="profile_desp" id="myInput" pattern=".{52,}" title="hello" cols="30" rows="10" class="form-control">Enter Description</textarea>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- profile photo modal -->
<div class="modal fade" id="ProfilephotoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile Photo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('photo_update')}}" method="post" enctype="multipart/form-data"> @csrf <input type="hidden" value="{{Auth::id()}}" name="id">
          <label for="" class="form-label">Photo 1</label>
          <small class="text-warning">Image Size 1600*800 and jpeg,png,jpg,gif max 3MB</small>
          <input type="file" name="photo_one" class="form-control mb-2" placeholder="Enter Your Photo">
          <label for="" class="form-label">Photo 2</label>
          <small class="text-warning">Image Size 1600*800 and jpeg,png,jpg,gif max 3MB</small>
          <input type="file" name="photo_two" class="form-control" placeholder="Enter Your Photo">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- profile video modal -->
<div class="modal fade" id="ProfilevideoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile Video Link</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('video_update')}}" method="post"> @csrf <input type="hidden" value="{{Auth::id()}}" name="id">
          <label for="" class="form-label">Video 1</label>
          <input type="link" name="video_one" class="form-control mb-2" placeholder="https://www.youtube.com/watch?v=">
          <label for="" class="form-label">Video 2</label>
          <input type="link" name="video_two" class="form-control" placeholder="https://www.youtube.com/watch?v=">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- profile social modal -->
<div class="modal fade" id="ProfilesocialModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Social Links</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('social_update')}}" method="post"> @csrf <input type="hidden" value="{{Auth::id()}}" name="id">
          <label for="" class="form-label">FaceBook Url</label>
          <input type="link" name="facebook" class="form-control mb-2" placeholder="Enter Your FaceBook Url" @if($user->facebook != null) value="{{$user->facebook}}" @else value="" @endif"> <label for="" class="form-label">Twitter Url</label>
          <input type="link" name="twitter" class="form-control mb-2" placeholder="Enter Your Twitter Url" @if($user->twitter != null) value="{{$user->twitter}}" @else value="" @endif"> <label for="" class="form-label">Linkedin Url</label>
          <input type="link" name="linkedin" class="form-control mb-2" placeholder="Enter Your Linkedin Url" @if($user->linkedin != null) value="{{$user->linkedin}}" @else value="" @endif"> <label for="" class="form-label">Instragram Url</label>
          <input type="link" name="instragram" class="form-control mb-2" placeholder="Enter Your Instragram Url" @if($user->instragram != null) value="{{$user->instragram}}" @else value="" @endif"> <label for="" class="form-label">Tumblr Url</label>
          <input type="link" name="tumblr" class="form-control mb-2" placeholder="Enter Your Tumblr Url" @if($user->tumblr != null) value="{{$user->tumblr}}" @else value="" @endif"> <label for="" class="form-label">Quora Url</label>
          <input type="link" name="quora" class="form-control mb-2" placeholder="Enter Your quora Url" @if($user->quora != null) value="{{$user->quora}}" @else value="" @endif"> <label for="" class="form-label">Reddit Url</label>
          <input type="link" name="reddit" class="form-control mb-2" placeholder="Enter Your Reddit Url" @if($user->reddit != null) value="{{$user->reddit}}" @else value="" @endif"> <label for="" class="form-label">Youtube Url</label>
          <input type="link" name="youtube" class="form-control mb-2" placeholder="Enter Your 	Youtube Url" @if($user->youtube != null) value="{{$user->youtube}}" @else value="" @endif"> <label for="" class="form-label">Whatsapp Url</label>
          <input type="link" name="whatsapp" class="form-control mb-2" placeholder="Enter Your Whatsapp Url" @if($user->whatsapp != null) value="{{$user->whatsapp}}" @else value="" @endif"> <label for="" class="form-label">Telegram Url</label>
          <input type="link" name="telegram" class="form-control mb-2" placeholder="Enter Your Telegram Url" @if($user->telegram != null) value="{{$user->telegram}}" @else value="" @endif">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- password update modal -->
<div class="modal fade" id="ProfileurlModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('profile_update')}}" method="post"> @csrf <input type="hidden" value="{{Auth::id()}}" name="id">
          <label for="" class="form-label mb-2">Old Password</label>
          <input type="text" name="old_password" class="form-control" placeholder="Enter Your Old Password">
          <label for="" class="form-label mb-2">New Password</label>
          <input type="text" name="password" class="form-control" placeholder="Enter Your New Password">
          <label for="" class="form-label mb-2">Confirm Password</label>
          <input type="text" name="confirmpassword" class="form-control" placeholder="Enter Your Confirm Password">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- profile url modal -->
<div class="modal fade" id="Profileupdatemodals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Profile Url</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('profile_url_update')}}" method="post"> @csrf <input type="hidden" value="{{Auth::id()}}" name="id">
          <label for="" class="form-label mb-2">Profile Url</label>
          <input type="text" name="profile_url" class="form-control" placeholder="Enter Your Profile Url Without Space">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
  var textarea = document.getElementById('myInput');

  textarea.addEventListener('textarea', function() {
    textarea.setCustomValidity('');
  });

  textarea.addEventListener('invalid', function() {
    if (textarea.value.length < 52) {
      textarea.setCustomValidity('Please enter at least 52 letters.');
    }
  });
</script>
{{--Modal End--}} @include('../frontend/inc/footer')