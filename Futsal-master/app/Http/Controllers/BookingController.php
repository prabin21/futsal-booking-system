<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Carbon\Carbon;
use App\Booking;
use DB;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book');
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
            
        $this->validate($request,[
                'date' => 'required|date',
                'time' => 'required'
            ]);
        
        $todaydate = Carbon::now();   //getiing today's date
        $t = $todaydate->format('Y-m-d');  //fomatting timestamp into Y-M-D 

        //getting Booking information
        $date = $request->input('date');
        $ground_type = $request->input('ground_type');
//        echo $ground_type;
        
        $time = $request->input('time');
        
      
        if(!Auth::check()){

            return redirect('/login')->with('message', 'Please Login Before Procedding!');
            
        }
        else{
                 if ($date < $t) {
                     return redirect('/booking')->with('message', 'Provided date already Expired');
                } 
                else{
                    
                      //getting data of authenticated User
                    $id = \Auth::user()->id;
                    $users = DB::select('select * from users where id=?' ,[$id]);
                    foreach($users as $user)
                        $username = $user->name;
                        $usercontact = $user->contact;
                        $useremail = $user->email;
       
                    
                    
                    $booking = new Booking;
                    
                    $booking->player_Name = $username;
                    $booking->player_Contact = $usercontact;
                    $booking->player_Email = $useremail;
                    $booking->booked_Date = $date;
                    $booking->booked_Time = $time;
                    $booking->booked_Ground = $ground_type;
                    
                    $booking->save();
                    return redirect('/booking')->with('message', 'Booking Confirmed!');
                    
                }
        }
       
        
        
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
