
@extends ('layouts.master')
 

@section ('content')

<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="panel panel-default">
<div class="panel-body text-center">
    <span> Article Tosin Esther

    <small>
      <a href="/posts/{{ $post->id }}/edit">Edit</a>
      </small>
    </span>
    <span class="pull-right">
     </span>

</div>
<div class="panel-body">
{{ $post->contents }}

<div class="col-md-10">
<hr>
<ul class="list-unstyled list-inline">
     
<li>
    

    </li>
    </br>
    <li>
    <form action="#" method="POST">
    <button class="btn btn-info btn-xs" type="button" data-toggle="collapse" data-target="#comment-{{$post->id}}" aria-expanded="false" arial-controls="#comments-{{$post->id}}"><i class="fa fa-comments-0"></i>Comment</button>
       </br>
      </br>
       <button type="submit" class="btn btn-info btn-xs"><i class="fa fa-thumbs-up"></i>Like Status</button>
       </form>
    </li>
  </ul>


</div>
</div>
</div>
</div>
  <div class="panel-footer clearfix">
      
      <form action="#" method="POST">
      {{  csrf_field() }} 
     <div class="form-group">
     <div class="input-group">
       <input type="text" type="form-control" name="comments-text" id="comments-text" placeholder="post comment...">
         <span class="input-group-btn">
           <button class="btn btn-default " type="submit">Go</button>
           </span>

        </div>

    </div>
     </form>
  <div class="collapse" id="comment-{{$post->id}}">
  



  <h1> hi </h1>

  </div>
</div>
@endsection

