@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>Book Cave!</title>
        <!-- Fonts -->
        <link rel="stylesheet"  href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
         <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Create Book</h4>
               </div>
                            <div class="card-body">
                           <div class="col-lg-4 col-md-4">
                        <div class="card">
        
                            </div>
                        </div>
                    </div>

                             
                        <form action="/books" method="POST">
                        {{  csrf_field() }} 
                                <label> Upload Book Image </label>
                                 <input type="file" name="avatar">
                                 <input type="hidden" name="_token" value="{{ csrf_token () }}">

                                    {{ csrf_field () }}
                                    <div class="form-body">
                                   
                                        <div class="row p-t-20">
                                
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Title</label>
                                                    <input type="text" name="title" class="form-control form-control-danger" placeholder="" required>
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>

                                            <!--/span-->
                                           

                                             <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Description</label>
                                                    <input type="text" name="description" class="form-control form-control-danger" placeholder="" required>
                                                    <small class="form-control-feedback">  </small> </div>
                                            </div>
                                        </div>
                                        
                                        </div>
                                        
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Publisher</label>
                                                    <input type="text" name="publisher" class="form-control" required>
                                                </div>
                                            </div>
                                        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>ISBN</label>
                                                    <input type="text" name="ISBN" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                                                           <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                       
                                    </div>



                                        </div>
                                    </div>
                                    
                                </form>

                                
                            </div>
                        </div>
                    </div>
                </div>













        </div>
    </div>
</div>
  
</body>
   

</html>

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




</style>



<div class="footer">
    <p>@Codegoddesstosin 2019</p>
  </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>