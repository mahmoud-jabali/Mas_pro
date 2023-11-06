<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\time;
use App\Models\Docters;
use App\Models\users;

use App\Models\reservation;
use App\Models\specialties;
use Illuminate\Http\Request;
use GrahamCampbell\ResultType\Success;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $appointments=reservation::all();
        $user=users::all();
        $doc=Docters::all();
        // dd($doc);
        $sum = count($appointments);
        $date = Carbon::parse();
        return view('adminapoint',compact('appointments','date','user','doc','sum'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $docters=Docters::all();
        // dd($docters);
        $sp = specialties::all();
        $times = time::all();

        $selectedTime = time::findOrFail($request->input('time'));

        $request->validate([

            'appointment_date' => 'required|date|after_or_equal:today',

        ]);
        $appointmentDate = date('Y-m-d', strtotime($request->input('appointment_date')));
        // dd($appointmentDate);
        // $appointmentTime = date('H:i:s', strtotime($request->input('time')));
        // $reser=new reservation();
        // $reser->user_id=session()->get('user_id');
        // $reser->docter_id=$request->input('docter_id');
        // $reser->appointment_date=$appointmentDate;
        // $reser->appointment_time=$selectedTime->time;
        // $reser->save();
        reservation::create([
            'user_id' => $request->input('user_id'),
            'docter_id' => $request->input('docter_id'),
            'appointment_date' => $appointmentDate,
            'appointment_time' => $selectedTime->time,
        ]);

        // $request->session()->flash('success', 'Appointment booked successfully.');

        return view('user/index',compact('docters' ,'sp','times'));
    }

    /**
     * Display the specified resource.
     */
    public function show(reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $res=reservation::find($request->id);
        // dd($request);
        $res->status="canceled";
        $res->update();
        return redirect()->route('appointment.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($id);
        $res=reservation::find($request->id);
        // dd($request);
        if($res->status=='pending'){
            $res->status="confirmed";
            $res->update();
            return redirect()->route('appointment.edit');
        }elseif($res->status=='confirmed'){
            $res->status="pending";
            $res->update();
            return redirect()->route('appointment.edit');
        }else{
            $res->status="confirmed";
            $res->update();
            return redirect()->route('appointment.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reservation $reservation)
    {
        //
    }

    public function AddResDocPage(Request $request ){

        $time=time::all();
        // dd($request);
        $res=reservation::where('docter_id',$request->id)->get();

        $docter=Docters::find($request->id);

        $selectedTime = time::findOrFail($request->input('appointment_time'));

        $reservation=reservation::where('docter_id',$request->id)->get();
        // dd($reservation);
        $request->validate([

            'appointment_date' => 'required|date|after_or_equal:today',

        ]);
        foreach($reservation as $res){
            if($request->appointment_date==$res->appointment_date){
                foreach ($time as $timee) {
                    if($selectedTime->time==$res->appointment_time){
                        session()->flash('resMessage', "This time already has been booked");
                        return view('user/doctors',compact('docter','time','res'));
                    }
                }
            }
        }
        $reser=new reservation();
        $reser->user_id=session()->get('user_id');
        $reser->docter_id=$request->id;
        $reser->appointment_date=$request->appointment_date;
        $reser->appointment_time=$selectedTime->time;
        $reser->save();
        session()->flash('resMessage', "Booked Successfully");
        return view('user/doctors',compact('docter','time','res'));
    }
}
