<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Booking</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
       
        
    </head>
    <body style="background-color:Lavender;">
        <div class="contianer">
            
            <div class="row">
                <div class="col-md-12">
                       @if(Session::has('message'))
            <div class="alert alert-success">
            <p class="mes">
               <strong>Message:</strong>{{Session::get('message')}}
            </p>
            </div>@endif
            
            
            
             @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li class="err">{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
                        <h1 class="text-info d-flex justify-content-center py-4">Get your Booking Now!!</h1>
                    <button class="btn btn-warning d-inline-flex"><a href="/home">Get Back to Dashboard</a></button>
                </div>
            </div>
            
            <form method="POST" action="/booking">
                @csrf
            <div class="row form-group">
                <div class="col-md-12">
                    <h2 class="text-warning d-flex justify-content-center">Choose Your Playing Ground.</h2>
                </div>
            </div>
              <div class="row form-group">
                <div class="col-md-12">
                    <div class="form-group d-flex justify-content-center">
                        <h3 for="select" class="font-weight-bold">Choose Date</h3>
                        <div class="d-inline-flex">
                        <input class="form-control" type="date" name="date">
                        </div>    
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <div class="form-group d-flex justify-content-center">
                        <h3 for="select" class="font-weight-bold">Select Ground</h3>
                        <div class="d-inline-flex">
                        <select class="form-control" name="ground_type">
                            <option value="Larger">A: Larger</option>
                            <option value="Medium">B: Medium</option>
                            <option value="Cricsal">C: Cricsal</option>
                        </select>
                        </div>    
                    </div>
                </div>
            </div>
               <div class="row form-group">
                <div class="col-md-12">
                    <div class="form-group d-flex justify-content-center">
                        <h3 for="select" class=" font-weight-bold">Select Time</h3>
                        <div class="d-inline-flex">
                        <input type="time" class="form-control" name="time" id="mytime" min="06:00" max="19:00"> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-inline-flex">
                    <div class="btn btn-success mx-auto"><input type="submit" value="Confirm Booking..." id="confirm" onClick="myFunction"></div>
                </div>
            </div>
        </form>
        </div>
    
    </body>
</html>