@extends('layouts.app')
@section('content')

<div class ="row">

<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">All <span class="color--theme">Books!</span></h2>
				
						</div>
					</div>
	</div>
<div class="col-md-6 col-md-offset-3"> 
<ul class="list -group">
@foreach($book as $books)
<li class ="list-group-item" style="margin-top:20px">
<div class="panel-body">
<div class="row">
<div class="col-md-2">

 </div>
      <h3><strong>{{ $books->id}} </h3></strong>   
    </div>
     <div class="panel-body">
         {{ $books->title }}
         {{ $books->description }}
         <a href="/books/{{ $books->id }}"
         > Read more! Rate!</a>
         </p>
        </div>
           
    <div>
  
    </div>



    <div class="item-wrapper">
                <ul>
                @foreach($book->review as $review)
     
                        <li>
                         Rating: {{$review->rating}}
                        </li>
                </ul>
            </div>


            @endforeach
 
 

    </div>
    </li>
    
  @endforeach
 
   
</div>
@endsection



