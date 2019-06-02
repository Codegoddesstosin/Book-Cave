@extends('layouts.master')
@section('content')
 
 <style type="text/css">
  .profile-img {
      max-width:150px;
      border:5px solid #fff;
      border-radius:100%;
      box-shadow: 0 2px 2px rgba(0, 0, , 0.3);
  }
 </style> 
<div class="row">
<div class="col-md-3 col-md-offset-3">
<div class="panel panel-default">
<div class="panel-body text-center">
<img class ="profile-img" src= "http://www.lovemarks.com/wp-content/uploads/profile-avatars/default-avatar-knives-ninja.png">

 <button class="btn btn-success">like</button>
 </div>
</div>
</div>
</div>


@endsection