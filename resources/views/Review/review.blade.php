@extends('layouts.app')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Books Cave</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<div class="headerv">
    <h1>Books Cave!</h1>
    </div>
@section('content')


<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2"> <span class="color--theme">Books and Average Ratings!</span></h2>
							<p>Read! Learn! Enjoy!</p>
              <p><a href="/books"
         > <button class="btn btn-success">Explore More!</button></a></p>
						</div>
					</div>
	</div>

<div class="bs-example">
@foreach($review as $reviews)
    <table class="table table-dark">
        <thead>
            <tr>
               
                <th>Book Title </th>
                <th>Book Ratings</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
             
                <td>   
                    {{ $reviews->book->title }}</td>
                <td>{{ $reviews->rating }}</td>
              
            </tr>
                    
        </tbody>
    </table>
    @endforeach
</div>

         
@endsection



<style>


  .bs-example{
    	margin: 20px;
   
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
    <p><strong>@Codegoddesstosin 2019</strong></p>
  </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>