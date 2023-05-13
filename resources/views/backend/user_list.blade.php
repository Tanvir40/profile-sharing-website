@include('../frontend/inc/header') <div class="container">
  <div class="row">
    <div class="col-md-12 mt-3 mb-3">
      <table class="table ">
        <thead>
          <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Join date</th>
          </tr>
        </thead>
        <tbody> @foreach($users as $key=> $user) <tr>
            <td>{{$key+1}}</td>
            <td>
              <img width="50px" src="{{asset('profile')}}/{{$user->profile_photo}}" alt="No Image">
            </td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->format('d-M-Y')}}</td>
          </tr> @endforeach </tbody>
      </table>
    </div>
  </div>
</div> @include('../frontend/inc/footer')