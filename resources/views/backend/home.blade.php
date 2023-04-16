@include('../frontend/inc/header')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class=" text-center mt-5">
               
            </div>
            
            <div class=" d-flex align-items-center justify-content-center m" style="margin-top:120px;">
                
                <div class="box text-center text-white px-5 pb-3" style="width: 35rem;padding-top:4rem;background-color:#003B86;border-radius: 10px;">
                    <img class="z-index:1;" style="border: 4px solid white;width:120px;border-radius: 50%; margin-top: -200px;" src="{{asset('frontend/img/saby.jpg')}}" alt="">
                    <div class="d-flex align-items-center justify-content-center">
                        <h4>{{"@"}}{{Auth::user()->name}} &nbsp;</h4>
                        <a data-bs-toggle="modal" data-bs-target="#ProfileModal">
                            <i class="text-white fa fa-pencil-square-o" aria-hidden="true" ></i>
                        </a>
                    </div>
                    <div class="d-flex">
                    <p>{{$user->profile_desp}}</p>
                    <a data-bs-toggle="modal" data-bs-target="#ProfiledespModal"><i class="text-white fa fa-pencil-square-o" aria-hidden="true"></i></a>
                </div>
                </div>
            </div>
        </div>

       
        <div class="col-12 d-flex align-items-center justify-content-center mt-3">
            
          <div class="row">
              <div class="col-12">
                  <div class="box3">
                     <a href="" data-bs-toggle="modal" data-bs-target="#ProfilephotoModal" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:360px;background-color:#E2E2E2;border:0px;border-radius: 25px;">Add Photo <i class="fa fa-upload float-end" aria-hidden="true"></i></a>
                  </div>
                  
              </div>
              
          </div>
      </div>

      <div class="col-12 d-flex align-items-center justify-content-center mt-3">
          
          <div class="row">
              <div class="col-12">
                  <div class="box3">
                     <a href="" data-bs-toggle="modal" data-bs-target="#ProfilevideoModal" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:360px;background-color:#E2E2E2;border:0px;border-radius: 25px;">Add Video Link <i class="float-end  fa fa-pencil-square-o" aria-hidden="true"></i></a>
                  </div>
              </div>
              
          </div>
      </div>

      <div class="col-12 d-flex align-items-center justify-content-center mt-3">
          
          <div class="row">
              <div class="col-12">
                  <div class="box3">
                     <a href="" data-bs-toggle="modal" data-bs-target="#ProfilesocialModal" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:360px;background-color:#E2E2E2;border:0px;border-radius: 25px;">Add Social Link <i class="float-end fa fa-pencil-square-o" aria-hidden="true"></i></a>
                  </div>
              </div>
              
          </div>
      </div>

      <div class="col-12 d-flex align-items-center justify-content-center mt-3 mb-5">
          
          <div class="row">
              <div class="col-12">
                  <div class="box3">
                     <a href="" data-bs-toggle="modal" data-bs-target="#ProfileurlModal" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:360px;background-color:#E2E2E2;border:0px;border-radius: 25px;">Url<i class="fa fa-link" aria-hidden="true"></i><br> Title<i class=" fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                  </div>
              </div>
              
          </div>
      </div>

    </div>
</div>


{{--modal start--}}

<!-- profile name modal -->
<div class="modal fade" id="ProfileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile Name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control mb-2" placeholder="Enter Your Name">

        <label for="" class="form-label">Profile Photo</label>
        <input type="file" class="form-control " >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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
      <label for="" class="form-label">Description</label>
        <textarea name="desp" id="" cols="30" rows="10" class="form-control">Enter Description</textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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
      <label for="" class="form-label">Photo 1</label>
        <input type="file" class="form-control mb-2" placeholder="Enter Your Photo">
        <label for="" class="form-label">Photo 2</label>
        <input type="file" class="form-control" placeholder="Enter Your Photo">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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
      <label for="" class="form-label">Video 1</label>
        <input type="link" class="form-control mb-2" placeholder="Enter Your video Link">
        <label for="" class="form-label">Video 2</label>
        <input type="link" class="form-control" placeholder="Enter Your video Link">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- profile social modal -->
<div class="modal fade" id="ProfilesocialModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile Name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <label for="" class="form-label">FaceBook Url</label>
      <input type="link" class="form-control mb-2" placeholder="Enter Your FaceBook Url">

      <label for="" class="form-label">Twitter Url</label>
      <input type="link" class="form-control mb-2" placeholder="Enter Your Twitter Url">

      <label for="" class="form-label">Linkedin Url</label>
      <input type="link" class="form-control mb-2" placeholder="Enter Your Linkedin Url">

      <label for="" class="form-label">Instragram Url</label>
      <input type="link" class="form-control mb-2" placeholder="Enter Your Instragram Url">

      <label for="" class="form-label">Tumblr Url</label>
      <input type="link" class="form-control mb-2" placeholder="Enter Your Tumblr Url">

      <label for="" class="form-label">Discord Url</label>
      <input type="link" class="form-control mb-2" placeholder="Enter Your Discord Url">

      <label for="" class="form-label">Reddit Url</label>
      <input type="link" class="form-control mb-2" placeholder="Enter Your Reddit Url">

      <label for="" class="form-label">Youtube Url</label>
      <input type="link" class="form-control mb-2" placeholder="Enter Your 	Youtube Url">

      <label for="" class="form-label">Whatsapp Url</label>
      <input type="link" class="form-control mb-2" placeholder="Enter Your Whatsapp Url">

      <label for="" class="form-label">Telegram Url</label>
      <input type="link" class="form-control mb-2" placeholder="Enter Your Telegram Url">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- profile url modal -->
<div class="modal fade" id="ProfileurlModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile Url</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <label for="" class="form-label">Profile Url</label>
      <input type="link" class="form-control" placeholder="Enter Your Profile Url">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

{{--Modal End--}}

@include('../frontend/inc/footer')