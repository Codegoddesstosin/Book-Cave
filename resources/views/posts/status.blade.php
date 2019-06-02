
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
       
</div>
<div class="panel-body">
<form action="/posts" method="POST">
    {{  csrf_field() }} 



<div class="form-group">
    <label for="contents">Status</label>

    <textarea name="contents" class="form-control"></textarea>
    </div>
  
    <div class="checkbox">
    <label>
      <input type="checkbox" name="live">
      live
      </label>
    </div>
    <div class="form-group">
     <label for="post_on">Post_on</label>
     <input type="datetime-local" name="post_on" class="form-control"> 
 



<input type="submit" class="btn btn-success pull-right">

</form>

</div>
</div>
</div>
</div>
@endsection

