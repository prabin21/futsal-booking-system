<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Myprofile;
use DB;
use App\Speciality;
use App\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
        public function __construct()
    {
        $this->middleware('auth:admin');
    }
   

    
    public function index()
    {
         $todaydate = Carbon::now();   //getiing today's date
         $today = $todaydate->format('Y-m-d');  //fomatting timestamp into Y-M-D 
        
         $games = DB::table('bookings')->where('booked_Date', $today)->get();
         
             return view('admin.dashboard', ['games' => $games ]);
       
    }

   
    
  
    
    
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
