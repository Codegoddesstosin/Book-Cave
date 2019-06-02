@extends('layouts.app')
<div class="headerv">
    <h1>Books Cave!</h1>
    </div>
@section('content')


<section class="hero text-center">

        <br/>
        <br/>
        <br/>
        <br/>
        <h2>
            <strong>
            <img class ="thumbnail" src="images/frontb.jpg">
                Hello, Welcome to Books Cave! 
            </strong>
        </h2>
    
        <br>
        <a href="/books">
            <button class="btn btn-success">Check out latest Books!</button>
        </a>
    </section>
    <br/>
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
  padding: 30px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 90px;
}




img.thumbnail {
   width: 100px;
   height: 150px;
}




</style>



<div class="footer">
    <p>@Codegoddesstosin 2019</p>
  </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>