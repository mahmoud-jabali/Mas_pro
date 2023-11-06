<?php

namespace App\Http\Controllers;

use App\Models\Docters;
use App\Models\reservation;
use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = users::all();
        $sum = count($users);
        return view('adminUsers', compact('users', 'sum'));
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
        $result = users::create($request->all());
        if ($result) {
            return redirect('/users');

        } else {
            return response('failed');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(users $users)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\users  $users
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
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = users::findorFail($request->id);
        // dd($request);
        // $user=new users();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->is_admin = $request->is_admin;
        $user->bdate = $request->bdate;
        $user->gender = $request->gender;
        $user->update();
        return redirect('/users');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        users::findorFail($id)->delete();
        return redirect('/users');
    }


    //////////////////Profile//////////////////
    public function userProfile(Request $request)
    {
        $user = User::find($request->session()->get('user_id'));
        $res=reservation::Where('user_id',$request->session()->get('user_id'))->get();
        $doc=Docters::all();
        // dd($res);
        // dd($user );
        return view('user/userProfile', compact('user','res','doc'));
    }

    public function fnameedit(Request $request)
    {
        // return "aaaaa";
        $user = User::find($request->id);
        // dd($request);
        $user->fname = $request->fname;
        $user->update();
        return redirect()->route('profile.fname');
    }

    public function lnameedit(Request $request)
    {
        // return "aaaaa";
        $user = User::find($request->id);
        // dd($request);
        $user->lname = $request->lname;
        $user->update();
        return redirect()->route('profile.fname');
    }

    public function emailedit(Request $request)
    {
        // return "aaaaa";
        $user = User::find($request->id);
        // dd($request);
        $user->email = $request->email;
        $user->update();
        return redirect()->route('profile.fname');
    }

    public function passwordedit(Request $request)
    {
        // return "aaaaa";
        $user = User::find($request->id);
        // dd($request);
        $user->password = $request->password;
        $user->update();
        return redirect()->route('profile.fname');
    }

    public function mobileedit(Request $request)
    {
        // return "aaaaa";
        $user = User::find($request->id);
        // dd($request);
        $user->phone = $request->phone;
        $user->update();
        return redirect()->route('profile.fname');
    }

    public function bdateedit(Request $request)
    {
        // return "aaaaa";
        $user = User::find($request->id);
        // dd($request);
        $user->bdate = $request->bdate;
        $user->update();
        return redirect()->route('profile.fname');
    }

    public function userreg(Request $request)
    {
        $user = new users;
        $data = $request->validate([
            'fname' => 'required|min:3|max:255',
            'lname' => 'required|min:3|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required_with:conf-password|same:conf-password|max:255|min:5',
            'conf-password' => 'required',
            'phone' => 'required|numeric|min:10',
            'bdate' => 'required',
            'gender' => 'required'
        ]);

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->bdate = $request->bdate;
        $user->gender = $request->gender;
        $user->save();
        return redirect(route('login'));
    }

    public function login(Request $request)
    {
        // dd($request);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = Users::where('email', $request->email)
            ->where('password', $request->password)
            ->first();
        if ($user) {
            // dd($user->is_admin);
            $request->session()->put('name', $user->fname);
            $request->session()->put('isadmin', $user->is_admin);
            $request->session()->put('user_id', $user->id);
            // dd(session()->get('user_id'));
            if ($user->is_admin == 1) {
                return redirect('/users');
            } elseif ($user->is_admin == 0) {
                return redirect('/home');
            }
        } else {
            return redirect('/home');
        }
    }

    public function logout(){
        session()->flush();
        return redirect('/home');

    }
}
