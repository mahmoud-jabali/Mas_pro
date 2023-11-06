{{-- Top --}}
@extends('include_user.top')


<!------------------------------------------ header-start --------------------------------------------->
@include('include_user.header')
<!---------------------------------------- /header-start ---------------------------------------------->
@section('title', 'Profile')

<div style="margin-top: 10%;border:1px solid gray;box-shadow: 5px 5px 10px gray; border-radius:10px ;width:70%;margin-left:15%;margin-bottom: 5%;padding:1%">
    {{-- Fname and deit it --}}
    <h3>Settings</h3>
    <div id="fname-show" style="border-radius:5px; padding:1%; display: flex;width:100%;justify-content: space-between;background-color: rgb(233, 233, 233);">
        <div>
            <p style="color:black">First Name</p>
        </div>
        <div>
            <p style="color:black">{{ $user->fname }}</p>
        </div>
        <div>
            <i class="fa-solid fa-pen-to-square" onclick="editfname()" style="cursor: pointer;"></i>
        </div>
    </div>
    <div id="fname-edit" style="border-radius:5px;padding:1%; background-color: rgb(233, 233, 233);display: none; width:100%">
        <form method="post" action="/fname" style=" width:100%;text-align: center">
            @csrf
            {{-- <div style="width:100%;border:1px solid red"> --}}
            <span style="display: none"><input type="text" value="{{ $user->id }}" name="id"></span>
            <span style="color:black">First Name</span>
            <span><input type="text" value="{{ $user->fname }}" name="fname" id='fnameeditProfile'></span>
            <span><input type="submit" id="fnamebtn" value="Save" id='fnamesaveProfile'
                    style="height: 30px !important; width:10%; font-size: 18px;
                                                background-color: rgba(111, 111, 111, 0.3); border-radius: 5px;"></span>
            <span><input type="button" id="fnamecancel" value="cancel"
                    onclick="canclefname()"style="height: 30px !important; width:10%; font-size: 18px;
                                                background-color: rgba(111, 111, 111, 0.3); border-radius: 5px;"></span>
        </form>
    </div>
    {{-- Lname and edit it --}}
    <div id="lname-show" style="padding:1%; display: flex;width:100%;justify-content: space-between;">
        <div>
            <p style="color:black">Last Name</p>
        </div>
        <div>
            <p style="color:black">{{ $user->lname }}</p>
        </div>
        <div>
            <i class="fa-solid fa-pen-to-square" onclick="editlname()" style="cursor: pointer;"></i>
        </div>
    </div>
    <div id="lname-edit" style="padding:1%; display: none; width:100%">
        <form method="post" action="/lname" style=" width:100%;text-align: center">
            @csrf
            <span style="display: none"><input type="text" value="{{ $user->id }}" name="id"></span>

            <span style="color:black">Last Name</span>

            <span><input type="text" value="{{ $user->lname }}" name="lname" id='lnameeditProfile'></span>

            <span><input type="submit" id="lnamebtn" value="Save"
                    style="height: 30px !important; width:10%; font-size: 18px;
                                                background-color: rgba(111, 111, 111, 0.3); border-radius: 5px;"></span>

            <span><input type="button" id="lnamecancel" value="cancel"
                    onclick="canclelname()"style="height: 30px !important; width:10%; font-size: 18px;
                                                background-color: rgba(111, 111, 111, 0.3); border-radius: 5px;"></span>
        </form>
    </div>
    {{-- Email and edit it --}}
    <div id="email-show" style="border-radius:5px;padding:1%; background-color: rgb(233, 233, 233);display: flex;width:100%;justify-content: space-between;">
        <div>
            <p style="color:black">Email</p>
        </div>
        <div>
            <p style="color:black">{{ $user->email }}</p>
        </div>
        <div>
            <i class="fa-solid fa-pen-to-square" onclick="editemail()" style="cursor: pointer;"></i>
        </div>
    </div>
    <div id="email-edit" style="border-radius:5px;padding:1%; background-color: rgb(233, 233, 233);display: none; width:100%">
        <form method="post" action="/email" style=" width:100%;text-align: center">
            @csrf
            <span style="display: none"><input type="text" value="{{ $user->id }}" name="id"></span>

            <span style="color:black">Email</span>

            <span><input type="text" value="{{ $user->email }}" name="email" id='emaileditProfile'></span>

            <span><input type="submit" id="emailbtn" value="Save"
                    style="height: 30px !important; width:10%; font-size: 18px;
                                                background-color: rgba(111, 111, 111, 0.3); border-radius: 5px;"></span>

            <span><input type="button" id="emailcancel" value="cancel"
                    onclick="cancleemail()"style="height: 30px !important; width:10%; font-size: 18px;
                                                background-color: rgba(111, 111, 111, 0.3); border-radius: 5px;"></span>
        </form>
    </div>
    {{-- Password and edit it --}}
    <div id="password-show" style="padding:1%; display: flex;width:100%;justify-content: space-between;">
        <div>
            <p style="color:black">Password</p>
        </div>
        <div>
            <p style="color:black">********</p>
        </div>
        <div>
            <i class="fa-solid fa-pen-to-square" onclick="editpassword()" style="cursor: pointer;"></i>
        </div>
    </div>
    <div id="password-edit" style="padding:1%; display: none; width:100%">
        <form method="post" action="/password" style=" width:100%;text-align: center">
            @csrf
            <span style="display: none"><input type="text" value="{{ $user->id }}" name="id"></span>

            <span style="color:black">Password</span>

            <span><input type="text" value="" name="password" id='passwordeditProfile'></span>

            <span><input type="submit" id="passwordbtn" value="Save"
                    style="height: 30px !important; width:10%; font-size: 18px;
                                                background-color: rgba(111, 111, 111, 0.3); border-radius: 5px;"></span>

            <span><input type="button" id="passwordcancel" value="cancel"
                    onclick="canclepassword()"style="height: 30px !important; width:10%; font-size: 18px;
                                                background-color: rgba(111, 111, 111, 0.3); border-radius: 5px;"></span>
        </form>
    </div>
    {{-- Mobile and edit it --}}
    <div id="mobile-show" style="border-radius:5px;padding:1%; background-color: rgb(233, 233, 233);display: flex;width:100%;justify-content: space-between;">
        <div>
            <p style="color:black">Mobile</p>
        </div>
        <div>
            <p style="color:black">0{{ $user->phone }}</p>
        </div>
        <div>
            <i class="fa-solid fa-pen-to-square" onclick="editmobile()" style="cursor: pointer;"></i>
        </div>
    </div>
    <div id="mobile-edit" style="border-radius:5px;padding:1%; background-color: rgb(233, 233, 233);display: none; width:100%">
        <form method="post" action="/mobile" style=" width:100%;text-align: center">
            @csrf
            <span style="display: none"><input type="text" value="{{ $user->id }}" name="id"></span>

            <span style="color:black">Mobile</span>

            <span><input type="text" value="0{{ $user->phone }}" name="phone" id='phoneeditProfile'></span>

            <span><input type="submit" id="mobilebtn" value="Save"
                    style="height: 30px !important; width:10%; font-size: 18px;
                                                background-color: rgba(111, 111, 111, 0.3); border-radius: 5px;"></span>

            <span><input type="button" id="mobilecancel" value="cancel"
                    onclick="canclemobile()"style="height: 30px !important; width:10%; font-size: 18px;
                                                background-color: rgba(111, 111, 111, 0.3); border-radius: 5px;"></span>
        </form>
    </div>
    {{-- bdate and edit it --}}
    <div id="bdate-show" style="padding:1%; display: flex;width:100%;justify-content: space-between;">
        <div>
            <p style="color:black">BirthDate</p>
        </div>
        <div>
            <p style="color:black">{{ $user->bdate }}</p>
        </div>
        <div>
            <i class="fa-solid fa-pen-to-square" onclick="editbdate()" style="cursor: pointer;"></i>
        </div>
    </div>
    <div id="bdate-edit" style="padding:1%; display: none; width:100%">
        <form method="post" action="/bdate" style=" width:100%;text-align: center">
            @csrf
            <span style="display: none"><input type="text" value="{{ $user->id }}" name="id"></span>

            <span style="color:black">BirthDate</span>

            <span><input type="date" value="{{ $user->bdate }}" name="bdate" id='bdateeditProfile'></span>

            <span><input type="submit" id="bdatebtn" value="Save"
                    style="height: 30px !important; width:10%; font-size: 18px;
                                                background-color: rgba(111, 111, 111, 0.3); border-radius: 5px;"></span>

            <span><input type="button" id="bdatecancel" value="cancel"
                    onclick="canclebdate()"style="height: 30px !important; width:10%; font-size: 18px;
                                                background-color: rgba(111, 111, 111, 0.3); border-radius: 5px;"></span>
        </form>
    </div>
</div>

<div style="border:1px solid gray;padding:1%;box-shadow: 5px 5px 10px gray; border-radius:10px ;width:70%;margin-left:15%;margin-bottom: 2%">
    <h3>Appointments</h3>
    <div style="border-radius:5px; padding:1%; display: flex;width:100%;justify-content: space-between;background-color: rgb(233, 233, 233);">
        <div>
            <p style="color:black">ID</p>
        </div>
        <div>
            <p style="color:black">Doctor Name</p>
        </div>
        <div>
            <p style="color:black">Specialty</p>
        </div>
        <div>
            <p style="color:black">Date</p>
        </div>
        <div>
            <p style="color:black">Time</p>
        </div>
        <div>
            <p style="color:black">Status</p>
        </div>
    </div>


    @foreach ($res as $item )
    <div style="border-radius:5px; padding:1%; display: flex;width:100%;justify-content: space-between;background-color: rgb(255, 255, 255);" >
        <div>
            <p style="color:black">{{$item->id}}</p>
        </div>
        <div>
            @foreach ($doc as $docs)
                @if ($docs->id == $item->docter_id)
                    <p style="color:black">{{$docs->fname}} &nbsp; {{$docs->lname}}</p>
                @endif
            @endforeach
        </div>
        <div>
            @foreach ($doc as $docs)
                @if ($docs->id == $item->docter_id)
                    <p style="color:black">{{$docs->specialties->name}}</p>
                @endif
            @endforeach
        </div>
        <div>
            <p style="color:black">{{$item->appointment_date}}</p>
        </div>
        <div>
            <p style="color:black">{{$item->appointment_time}}</p>
        </div>
        <div>
            <p style="color:black">{{$item->status}}</p>
        </div>
    </div>
    @endforeach
</div>
<script>
    function editfname() {
        document.getElementById('fname-show').style.display = 'none';
        document.getElementById('fname-edit').style.display = 'flex';
        // document.getElementById('fname-edit').style.justify-content='space-around';
    }

    function canclefname() {
        document.getElementById('fname-show').style.display = 'flex';
        document.getElementById('fname-edit').style.display = 'none';
    }

    function editlname() {
        document.getElementById('lname-show').style.display = 'none';
        document.getElementById('lname-edit').style.display = 'flex';
    }

    function canclelname() {
        document.getElementById('lname-show').style.display = 'flex';
        document.getElementById('lname-edit').style.display = 'none';
    }

    function editemail() {
        document.getElementById('email-show').style.display = 'none';
        document.getElementById('email-edit').style.display = 'flex';
    }

    function cancleemail() {
        document.getElementById('email-show').style.display = 'flex';
        document.getElementById('email-edit').style.display = 'none';
    }

    function editpassword() {
        document.getElementById('password-show').style.display = 'none';
        document.getElementById('password-edit').style.display = 'flex';
    }

    function canclepassword() {
        document.getElementById('password-show').style.display = 'flex';
        document.getElementById('password-edit').style.display = 'none';
    }

    function editmobile() {
        document.getElementById('mobile-show').style.display = 'none';
        document.getElementById('mobile-edit').style.display = 'flex';
    }

    function canclemobile() {
        document.getElementById('mobile-show').style.display = 'flex';
        document.getElementById('mobile-edit').style.display = 'none';
    }

    function editbdate() {
        document.getElementById('bdate-show').style.display = 'none';
        document.getElementById('bdate-edit').style.display = 'flex';
    }

    function canclebdate() {
        document.getElementById('bdate-show').style.display = 'flex';
        document.getElementById('bdate-edit').style.display = 'none';
    }
</script>

@include('include_user.footer')
<!-- -----------------------------------Java Script-------------------------------- -->

<!-- --------------------------------font-awesome--------------------------------- -->

@extends('include_user.js')
