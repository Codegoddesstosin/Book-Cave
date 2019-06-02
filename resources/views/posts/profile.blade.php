@extends ('layouts.master')
 
 <style type="text/css">
  .profile-img {
      max-width:150px;
      border:5px solid #fff;
      border-radius:100%;
      box-shadow: 0 2px 2px rgba(0, 0, , 0.3);
  }
 </style> 
@section ('content')

<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="panel panel-default">
<div class="panel-body text-center">
<img class ="profile-img" src= "http://www.lovemarks.com/wp-content/uploads/profile-avatars/default-avatar-knives-ninja.png">
<button class="btn btn-success">Edit Profile</button>
<h1>{{ $user->name}}</h1>
<h5>{{ $user->email}}</h5>
<h5>{{ $user->dob}}</h5>
 <button class="btn btn-success">Follow</button>
 <small class="text-muted p-t-30 db">Social Profile</small>
 <br/>
 <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
     <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
    <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
</div>
</div>
</div>
</div>
</div>
@endsection
