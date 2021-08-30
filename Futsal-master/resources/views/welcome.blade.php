<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GokarnaFutsal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
       <link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
    
            <nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Ftusal</span>
  
            
            <div class="row">
                <div class="btn text-white bg-dark my-1">
                <a class="nav-link" href="/booking">Book Now!</a>
                </div>
                </div>
                
                  <div class="row">
                <div class="btn text-white bg-dark my-1">
                <a class="nav-link" href="#">About Us</a>
                </div>
                </div>
              @if (Route::has('login'))
                <div class="row">
                    <div class="btn text-white bg-dark my-1">
                    @auth
                        <a class="nav-link" href="{{ url('/home') }}" >Home</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
</div>
                    
            </div>
                
                    <div class="row">
                        <div class="btn text-white bg-dark mr-2 my-1 ">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
               
            @endif
                        </div>
                    </div>
            
            </nav>
               
            <div class="row titlebox cl-lg-4">
                <h1 class="text-white pl-2 mt-5">Gokarna Futsal Arena</h1>
                <h3 class="text-white">Set your goals high, and dont stop till you get there.</h3>
            
            
            
            </div>
          

       

        
            </div>
      
    </body>
</html>
