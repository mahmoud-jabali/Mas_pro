{{-- Top --}}
<base href="/public">
@extends('include_user.top')


<!------------------------------------------ header-start --------------------------------------------->
@include('include_user.header')
<!---------------------------------------- /header-start ---------------------------------------------->
@section('title', 'Specialty')

<div class="Fsection">
    <h1><span>Doc</span>tors</h1>
    {{-- <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
         Repudiandae iure, ducimus molestias modi eligendi <br>
          dolorem quibusdam iste culpa </h4> --}}
</div>
<div class="row" style="margin-top:10%!important">
    <div class="col-lg-12" style="">
        <h1 style="margin-left:5%;margin-right:5%; width:200px; box-shadow:2px 2px 5px black">{{ $sp->name }}</h1>
        <div class="depart_ment_tab mb-30" style="display: flex; flex-wrap: wrap;justify-content: space-around;padding:2%">
            @foreach ($doc as $item)
            <div class="doctor-card">
                <div class="doctor-card-header">
                    Doctors
                </div>
                <div class="doctor-card-body">
                    <a href="{{route('doctor',$item->id)}}" class="card-title">Dr. {{ $item->fname }}&nbsp;{{ $item->lname }}
                    <img class="card-img2" src="{{ asset('storage/' . $item->photo) }}" alt="Sample Image"></a>
                    <p class="card-text">{{$item->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>



@include('include_user.footer')
<!-- -----------------------------------Java Script-------------------------------- -->

<!-- --------------------------------font-awesome--------------------------------- -->

@extends('include_user.js')
