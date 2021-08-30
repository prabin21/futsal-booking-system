<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
    
   <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">
    </head>
    
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                <h1>Todays Booking</h1>
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-warning">
                    <a href="/package" class="nav-link text-white">Package</a>
                    </button>
                </div>
                <div class="col-lg-2">
                     <button class="btn btn-danger">
                    
                  <a class="nav-link text-white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                     
                     </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-success">
                            <th>Player Name</th>
                            <th>Player Contact</th>
                            <th>Player Email</th>
                            <th>Booked Time</th>
                            <th>Booked Field</th>
                            </tr>
                        </thead> 
                        <tbody>
                        @foreach ($games as $games)
                            <tr class="text-success">
                                <td> {{ $games->player_Name }} </td>
                                <td> {{ $games->player_Contact }} </td>
                                <td> {{ $games->player_Email }} </td>
                                <td> {{ $games->booked_Time }} </td>
                                <td> {{ $games->booked_Ground }} </td>
                               
                            </tr>
                        @endforeach
                        </tbody>
                           
                    </table>
                
                </div>
            
            </div>
        </div>
    </body>
</html>