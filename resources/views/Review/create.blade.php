@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
            <title>Laravel</title>
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
                                <h4 class="m-b-0 text-white">Give Ratings</h4>
               </div>
                            <div class="card-body">
                           <div class="col-lg-4 col-md-4">
                        <div class="card">
                        
                        <hr>
                         
                        </div>
                    </div>

                             
                        <form action="/review" method="POST">
                        {{  csrf_field() }} 
        
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                
                        
                                             <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Description</label>
                                                    <input type="text" name="description" class="form-control form-control-danger" placeholder="">
                                                    <small class="form-control-feedback">  </small> </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Ratings</label>
                                                    <input type="number" name="rating" class="form-control form-control-danger" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
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

<script src="https://unpkg.com/vue-star-rating/dist/star-rating.min.js"></script>