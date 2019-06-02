

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
<div class="panel-body  text-center">
       Edit Article
</div>
<div class="panel-body">
<form action="/posts/{{ $post->id }}" method="POST">
  
   {{ method_field('PUT') }}
    
   {{ csrf_field() }} 

<div class="form-group">
    <label for="contents">Contents</label>

    <textarea name="contents" class="form-control">{{ $post->contents }}</textarea>
    </div>
  
    <div class="checkbox">
    <label>
      <input type="checkbox" name="live" {{ $post->live == 1 ? 'checked' : '' }}>
      live
      </label>
    </div>
       
    <div class="form-group">
     <label for="post_on">Post_on</label>
     <input type="datetime-local" name="post_on" class="form-control" value="{{ $post->post_on->format('Y-m-d\TH:i:s') }}"> 
      </div>

<input type="submit" class="btn btn-success pull-right">

</form>

</div>
</div>
</div>
</div>
@endsection

