    {{-- Top --}}
    <base href="/public">
    @extends('include_user.top')

    <!-- header-start -->
    <!------------------------------------------ header-start --------------------------------------------->
    @include('include_user.header')
       <!---------------------------------------- /header-start ---------------------------------------------->
       @section('title','Doctor')



                <div class="doctor-card" style="width:70%;margin-left:auto;margin-right:auto;margin-top:12%">
                    <div>
                        @if(session()->has('resMessage')!=NULL)
                            @if(session()->get('resMessage')=='This time allready has been booked')
                                <p class="alert alert-danger">{{session()->get('resMessage')}}</p>
                            @endif
                            @if(session()->get('resMessage')=='Booked Successfully')
                                <p class="alert alert-success">{{session()->get('resMessage')}}</p>
                            @endif
                        @endif
                    </div>
                    <div class="doctor-card-header" style="font-size: 25px">
                        Dr. {{ $docter->fname }}&nbsp;{{ $docter->lname }}
                    </div>
                    <div class="doctor-card-body" style="display: flex;justify-content:space-around">
                        <img class="card-img2" src="{{ asset('storage/' . $docter->photo) }}" alt="Sample Image" style="width:30%">
                        <p class="card-text" style="width:60%;margin-top:3%">
                            {{$docter->description}}<br><br><br>
                            <input type="button" class="boxed-btn3" id="appButton" value="Add Appointment" >
                        </p>
                    </div>
                </div>
                <div class="doctor-card" style="width:70%; margin-right:15%; margin-left:15%; display:none" id="appDiv">
                    <div class="doctor-card-header" style="font-size: 25px">
                        Book Appointment
                    </div>
                    <div style="width:100%;" id='bookAppDiv'>
                    <form method="post" action="{{route('reservationDoc')}}" style="width:100%;padding:1%;height:480px;margin:0 auto">
                            @csrf
                            <div style="display: flex;justify-content:space-around;width:100%">
                                <div style="width:40%;margin-left:auto;margin-right:auto">
                                    <label for="spNameDocPage" style="display: inline-block;width:100%;clip:auto;height:30px;color:black;position: relative;font-size:20px">Specialty</label><br>
                                    <input type="text" id="spNameDocPage" value="{{$docter->specialties->name}}"@disabled(true) >
                                </div>
                                <div style="width:40%;margin-left:auto;margin-right:auto">
                                    <label for="docNameDocPage" style="display: inline-block;width:100%;clip:auto;height:30px;color:black;position: relative;font-size:20px" >Doctor</label><br>
                                    <input type="text" id="docNameDocPage" value="{{$docter->fname}}&nbsp;{{ $docter->lname }}"@disabled(true)><br>
                                    <input type="hidden" value="{{$docter->id}}"name='id'><br>
                                </div>
                            </div>
                            <br>
                            <div style="display: flex;justify-content:space-around;width:100%">
                                <div style="width:40%;margin-left:auto;margin-right:auto">
                                    <label for="dateDocPage" style="display: inline-block;width:100%;clip:auto;height:30px;color:black;position: relative;font-size:20px">Date</label><br>
                                    <input type="date" id="dateDocPage" style="border: 1px solid rgb(197, 197, 197);border-radius: 3px" onchange="dateChange({{$docter}},{{$time}},{{$res}})" name='appointment_date' >
                                </div>
                                <div style="width:40%;margin-left:auto;margin-right:auto">
                                    <label for="timeDocPage" style="display: inline-block;width:100%;clip:auto;height:30px;color:black;position: relative;font-size:20px" >Time</label><br>
                                    <select  class="form-select bg-light text-secondary-emphasis time-select" id="timeSelect" name='appointment_time' style="overflow-y:scroll ">
                                        <option selected disabled>Time</option>
                                        @foreach ($time as $item)
                                            <option value="{{$item->id}}">{{$item->time}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br><br><br><br>
                            <div>
                                <input type="submit" value="Book Appointment" id="bookbtnDocPage" class="boxed-btn3">
                            </div>
                        </form>
                    </div>
                </div>
<script>
    document.getElementById('appButton').addEventListener('click',function(){
        document.getElementById('appDiv').style.display='block';
    });
    function dateChange(docter,time,res){
        let select=document.getElementById('timeSelect');
        let date=document.getElementById('dateDocPage').value;
        res.map(element=>{
            // console.log(element['appointment_date']);
            if(date==element['appointment_date'])
            // console.log('hhhh');
                time.map(timee=>{
                    // console.log(element['appointment_time']);
                    if(timee['time']!=element['appointment_time']){
                        let op=document.createElement('option');
                        op.value=timee['id'];
                        op.text=timee['time'];
                        // console.log(op);
                        select.appendChild(op);
                    }
                })
        });

       };
    </script>

 <!-------------------------------- footer Section ---------------------------------->

 @include('include_user.footer')
 <!-- -----------------------------------Java Script-------------------------------- -->

   <!-- --------------------------------font-awesome--------------------------------- -->

     @extends('include_user.js')
