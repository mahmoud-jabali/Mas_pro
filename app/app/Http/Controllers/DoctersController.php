<?php

namespace App\Http\Controllers;

use App\Models\Docters;
use App\Models\reservation;
use Illuminate\Http\Request;
use App\Models\specialties;
use App\Models\time;
use Illuminate\Validation\Validator;


class DoctersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docters=Docters::all();
        $sp = specialties::all();
        $sum=count($docters);
        return view('adminDoc',compact('docters','sum' , 'sp' ));
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
        //
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'description' => 'required',
            'specialties_id' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    // check if there is a img and save the path for it
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('images', 'public');
        } else {
            $imagePath = null;
        }
        $docters = Docters::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'description' => $request->input('description'),
            'specialties_id' => $request->input('specialties_id'),
            'photo' => $imagePath,
        ]);

        if ($docters) {
            return redirect()->route('docters.index')->with('success', 'doc created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create doc.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Docters $docters)
    {
        $docters=Docters::all();
        $sp = specialties::all();
        $times = time::all();
        // $sum=count($docters);

        return view('user/index',compact('docters','sp','times' ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docters $docters)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Docters $docters)
    {
        //
        $doc=docters::findorFail($request->id);
        // dd($request);
        // $user=new users();
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('images', 'public');
        } else {
            $imagePath = null;
        }
        $doc->fname=$request->fname;
        $doc->lname=$request->lname;
        $doc->photo=$imagePath;
        $doc->description=$request->description;
        $doc->specialties_id=$request->specialties_id;
        $doc->update();
        return redirect()->route('docters.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        docters::findorFail($id)->delete();
        return redirect()->route('docters.index');
    }

    public function spDoctors($id){
        // dd($id);
        $doc=Docters::where('specialties_id', $id)->get();
        $sp=specialties::find($id);

        return view('user/specialty',compact('doc','sp'));
    }
    public function storeSelectedSpecialty(Request $request)
    {
        $selectedSpecialty = $request->input('selectedSpecialty');
        session()->put('selectedSpecialty', $selectedSpecialty);

        return response()->json(['message' => 'Specialty stored successfully']);
    }
    public function doctorDetails($id){
        $docter=Docters::find($id);
        // $sp = specialties::all( );
        $time=time::all();
        $res=reservation::where('docter_id',$id)->get();
        return view('user/doctors',compact('docter','time','res'));

    }
    public function searchDoctor(Request $request)
    {
        $searchQuery = $request->input('search');

        $doctors = Docters::where('fname', 'LIKE', "%$searchQuery%")
                        ->orWhere('lname', 'LIKE', "%$searchQuery%")
                        // ->orWhere('fname'+' '+'lname','LIKE',"%$searchQuery%" + " " + "%$searchQuery%")
                        ->get();

        if ($doctors->isEmpty()) {
            return redirect()->back()->with('error', 'Doctor not found.');
        } else {

            return redirect()->route('doctor', ['id' => $doctors[0]->id]);
        }
    }
}
