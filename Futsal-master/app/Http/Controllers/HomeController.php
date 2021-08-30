<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $id = \Auth::user()->id;
        $users = DB::select('select * from users where id=?' ,[$id]);
        foreach($users as $user)
        $usermail = $user->email;
        
        $bookings = DB::select('select * from bookings where player_Email=? order by booked_Date asc' , [$usermail]);
        
        foreach($bookings as $booking)
        
        return view('home', ['bookings' => $bookings]);
            
            
    }
}
