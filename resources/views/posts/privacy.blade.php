@extends('layouts.master')
@section('content')

@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Protect your tweets</div>

                <div class="card-body">
                
                    Only current followers and people you approve of in future can see your tweets //checkbox
                </div>
            </div>
        </div>
    </div>
</div>
</br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Receive messages from anyone</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  You will be able to receive messages from anyone even if you dont follow them // checkbox
                </div>
            </div>
        </div>
    </div>
</div
</br>
</br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show read receipts</div>

                <div class="card-body">  
                  When someone sends you a message, people in the conversation will know when you have seen it.  //checkbox
                </div>
            </div>
        </div>
    </div>
</div




@endsection



@endsection