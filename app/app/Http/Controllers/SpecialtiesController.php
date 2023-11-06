<?php

namespace App\Http\Controllers;

use App\Models\specialties;
use Illuminate\Http\Request;

class SpecialtiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialties=specialties::all();
        $sum=count($specialties);
        return view('adminSpecialties',compact('specialties','sum'));
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
        $request->validate([
            'name' => 'required',
            'photo' => 'image|mimes:jpeg,JPEG,png,PNG,jpg,JPG,gif,GIF|max:2048'
        ]);
        // dd($request);
    // check if there is a img and save the path for it
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('images', 'public');
        } else {
            $imagePath = null;
        }
        $sp = specialties::create([
            'name' => $request->input('name'),
            'photo' => $imagePath,
        ]);

        if ($sp) {
            return redirect()->route('specialties.index');
        } else {
            return response('failed');
        }

    //     $result=specialties::create($request->all());
    //     if($result){
    //         return redirect()->route('specialties.index');
    //     }else{
    //         return response('failed');
    //     }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\specialties  $specialties
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\specialties  $specialties
     * @return \Illuminate\Http\Response
     */
    public function edit(specialties $specialties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\specialties  $specialties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, specialties $specialties)
    {
        $specialties=specialties::findorFail($request->id);
        $specialties->name=$request->name;
        $specialties->update();
        return redirect()->route('specialties.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\specialties  $specialties
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        specialties::findorFail($id)->delete();
        return redirect()->route('specialties.index');
    }
    public function spView(){
        $sp=specialties::all();
        return view('user/specialties',compact('sp'));
    }

}
