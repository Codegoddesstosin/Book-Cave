@extends('layouts.master')
@section('content')


<div class ="row">
<div class="col-md-6 col-md-offset-3">
 
<ul class="list -group">

@foreach($post as $posts)

<li class ="list-group-item" style="margin-top:20px">
<div class="panel-body">
<div class="row">
<div class="col-md-2">
 <img src="([$user->getAvatar()])" class="img-responsive">
 </div>
      <h3><strong>   {{ $posts->getPosterName() }} </h3></strong>   

    </div>
  

   
    <span class ="pull-right clearfix">

    <a href="https://twitter.com/red?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-screen-name="false" data-show-count="false">Follow </a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </span> 
       
  
    <div class="panel-body">
         {{ $posts->contents }}

         <a href="/posts/{{ $posts->id }}"

         > Read more</a>
           </br>
           <form action="#" method="POST">
           {{  csrf_field() }} 
           <div style="padding:10px; border-top:1px solid #ddd" class="col-md-12">
           
         <button type="submit" class="btn btn-success btn-small" @click="likePost(posts.id)">
         <i class ="fa fa-thumbs-up"></i>Like
         </p>
        </div>
         </form>
       

       

        
       
               
    <div>
  
    </div>


    <div class="addthis_inline_share_toolbox"></div>

    <div class="panel-footer clearfix"
     style="background-color:white">

       @if($posts->user_id == Auth::id())

       <form action="/posts/{{ $posts->id }}" method="POST" class="pull-right"
          style="margin-left: 25px">

             {{ csrf_field() }}
             {{ method_field('DELETE') }}

           <button class="btn btn-danger btn-small"> 
                      Delete
            </button>
          </form>
          </form>
       @endif
    

      
    </div>

    </div>
    </li>
  @endforeach
  </ul>
   <div class="col-md-4 col-md-offset-4">
       {{ $post->links() }}
</div>
@endsection
