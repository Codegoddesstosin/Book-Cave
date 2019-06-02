
@extends('layouts.app')
<div class="headerv">
    <h1>Books Cave!</h1>
    </div>
@section('content')



<a href="/books/create"
         > <button class="btn btn-success">Create Book!</button></a>

  
<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">All <span class="color--theme">Books Cave!</span></h2>
							<p>Read! Learn! Enjoy!</p>
						</div>
					</div>
	</div>

<ul class="list-group">
@foreach($book as $books)
<li class ="list-group-item" style="margin-top:20px">
<div class="panel-body">
<div class="row">
<div class="col-md-2">

 </div>
 Book Number
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
    </div>
    </li> 
  @endforeach
 
</div>
@endsection



<style>






.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #1abc9c;
  color: black;
  text-align: center;
}


.headerv {
  padding: 20px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 90px;
}




img.thumbnail {
   width: 100px;
   height: 150px;
}

.productbox {
    position: relative;
 border: 1px solid #ddd;
border-radius: 4px;
-webkit-transition: all .2s ease-in-out; 
}
.caption {
	padding:10px;
	background-color:rgba(0,0,0,0.7);
    position: absolute;
    bottom: 0;
    width: 100%;
    max-height: 40%;
    overflow: hidden;
  	font-size: 11px;
  color: #FFF;

}
.finalprice {
  font-size:15px;
    color: #AAFCAE;
}
h5 {
  margin-top: 0px;
  color: white;
  max-height: 30px;
  overflow: hidden;
}
.img-responsive img{
	width: 100%;    
}
.container {
	width: 100%;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  padding: 5px;
}
.btn-block {
margin-top: 5px;
}
.saleoffrate{
position: absolute;
    top:10px;
    left: 10px;
padding-top: 13px;
text-align:center;
background-color: rgba(76, 174, 76,0.8);
color: #FFFFFF;
border-radius: 50%;
height: 50px;
width: 50px;
line-height: 13px;
}
@media (min-width: 384px) and (max-width: 768px) {
  .img-responsive img{
      max-width: 50%;
  }
  .img-responsive{
      text-align: center;
  }  
}

</style>



<div class="footer">
    <p>@Codegoddesstosin 2019</p>
  </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>