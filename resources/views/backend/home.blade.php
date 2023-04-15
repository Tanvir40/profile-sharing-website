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
                        <a href=""><i class="text-white fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    </div>
                    <div class="d-flex">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo tempore omnis dolore, harum mollitia quisquam sapiente libero laudantium</p>
                    <a href=""><i class="text-white fa fa-pencil-square-o" aria-hidden="true"></i></a>
                </div>
                </div>
            </div>
        </div>

       
        <div class="col-12 d-flex align-items-center justify-content-center mt-3">
            
          <div class="row">
              <div class="col-12">
                  <div class="box3">
                     <a href="" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:360px;background-color:#E2E2E2;border:0px;border-radius: 25px;">Add Photo <i class="fa fa-upload float-end" aria-hidden="true"></i></a>
                  </div>
                  
              </div>
              
          </div>
      </div>

      <div class="col-12 d-flex align-items-center justify-content-center mt-3">
          
          <div class="row">
              <div class="col-12">
                  <div class="box3">
                     <a href="" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:360px;background-color:#E2E2E2;border:0px;border-radius: 25px;">Add Video Link <i class="float-end  fa fa-pencil-square-o" aria-hidden="true"></i></a>
                  </div>
              </div>
              
          </div>
      </div>

      <div class="col-12 d-flex align-items-center justify-content-center mt-3">
          
          <div class="row">
              <div class="col-12">
                  <div class="box3">
                     <a href="" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:360px;background-color:#E2E2E2;border:0px;border-radius: 25px;">Add Social Link <i class="float-end fa fa-pencil-square-o" aria-hidden="true"></i></a>
                  </div>
              </div>
              
          </div>
      </div>

      <div class="col-12 d-flex align-items-center justify-content-center mt-3 mb-5">
          
          <div class="row">
              <div class="col-12">
                  <div class="box3">
                     <a href="" class="btn btn-primary btn-sm text-primary px-3 fw-bold" style="width:360px;background-color:#E2E2E2;border:0px;border-radius: 25px;">Url<i class="fa fa-link" aria-hidden="true"></i><br> Title<i class=" fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                  </div>
              </div>
              
          </div>
      </div>

    </div>
</div>

@include('../frontend/inc/footer')