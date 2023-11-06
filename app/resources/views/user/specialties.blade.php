{{-- Top --}}
<base href="/public">
@extends('include_user.top')


<!------------------------------------------ header-start --------------------------------------------->
@include('include_user.header')
<!---------------------------------------- /header-start ---------------------------------------------->
@section('title', 'Specialties')

<div class="depertment_area">
    <div class="container">
        <div class="row custom_align align-items-end justify-content-between">
            <div class="col-lg-6">
                <div class="section_title">
                    <h3 style="margin-left:5%;margin-right:5%; width:300px; box-shadow:2px 2px 5px black;padding:1%">Specialties</h3>
                </div>
            </div>
            <div class="col-lg-6">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="depart_ment_tab mb-30"  style="display: flex; flex-wrap: wrap;justify-content: space-around">

                        @foreach ($sp as $item)
                            <div class="sp-div" style="width:30%; text-align: center;border:1px solid gray;border-radius: 10px;margin-bottom:2%">
                                <a href="{{route('specialty',$item->id)}}" style="cursor: pointer">
                                <img src="{{ asset('storage/' . $item->photo) }}" alt="User Image" style="width:100%;border-radius: 50%;">
                                <h3>{{$item->name}}</h3></a>

                            </div>
                        @endforeach

                </div>
            </div>
        </div>

    </div>
</div>



@include('include_user.footer')
<!-- -----------------------------------Java Script-------------------------------- -->

<!-- --------------------------------font-awesome--------------------------------- -->

@extends('include_user.js')
