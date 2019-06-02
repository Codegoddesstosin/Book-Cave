
@extends('layouts.app')
<div class="headerv">
    <h1>Books Cave!</h1>
    </div>
@section('content')

    <!-- Books listing -->
    <div class="row">
    <div class="item-wrapper">
              
Book Title:
        <span>${{$book->title}}</span>
    </h3>
    <div class="row">
       Book Description:
        <div class="large-12 columns">
            <p>
                {!! $book->description !!}
            </p>
            Publisher:
            <p>
                {!! $book->publisher !!}
            </p>
              ISBN:
            <p>
                {!! $book->ISBN !!}
            </p>

         

        </div>
    </div>
    <br>
    
</div>
        </div>
     
           

            <div class="item-wrapper">
            <div  id="app">
          
            <star-rating :rating="{{$book->getRatings()}}"></star-rating>
                <br>
            </div>
                <br>
                @if(auth()->check())

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Rate Me!</button>  
                 @include('books.partials.bookreview')
                 @else
                    <a href="/login" class="button" >Write a review</a>

                @endif
            </div>

            <div class="item-wrapper">
                <ul>               
                </ul>
            </div>
        </div>


        <div class="item-wrapper">
                <ul>
                @foreach($book->review as $review)
     
                        <li>
                 
                         Rating: {{$review->rating}}
                        </li>
                </ul>
            </div>




            </div>


       

        <script src="https://unpkg.com/vue-star-rating/dist/star-rating.min.js"></script>

           
    
        @endforeach
 
   
 </div>

@endsection

<style>

{
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Raleway;
  background-color: #202125;
}

.heading {
    text-align: center;
    font-size: 2.0em;
    letter-spacing: 1px;
    padding: 40px;
    color: white;
}

.gallery-image {
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.gallery-image img {
  height: 250px;
  width: 350px;
  transform: scale(1.0);
  transition: transform 0.4s ease;
}

.img-box {
  box-sizing: content-box;
  margin: 10px;
  height: 250px;
  width: 350px;
  overflow: hidden;
  display: inline-block;
  color: white;
  position: relative;
  background-color: white;
}

.caption {
  position: absolute;
  bottom: 5px;
  left: 20px;
  opacity: 0.0;
  transition: transform 0.3s ease, opacity 0.3s ease;
}

.transparent-box {
  height: 250px;
  width: 350px;
  background-color:rgba(0, 0, 0, 0);
  position: absolute;
  top: 0;
  left: 0;
  transition: background-color 0.3s ease;
}

.img-box:hover img { 
  transform: scale(1.1);
}

.img-box:hover .transparent-box {
  background-color:rgba(0, 0, 0, 0.5);
}

.img-box:hover .caption {
  transform: translateY(-20px);
  opacity: 1.0;
}

.img-box:hover {
  cursor: pointer;
}

.caption > p:nth-child(2) {
  font-size: 0.8em;
}

.opacity-low {
  opacity: 0.5;
}

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
  padding: 10px;
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