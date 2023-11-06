@extends('blank')
@extends('includes.top')

@section('title', 'Appointment')

<?php use Carbon\Carbon;
?>

@section('main')
<div class="col-lg-12">
    <!-- USER DATA-->
    <div class="user-data m-b-30" style="background-color: white;padding:2%">
        <div class="row justify-content-between mb-3">
            <div class="col-lg-8">
                <h3 class="title-3">
                    <i class="zmdi zmdi-account-calendar"></i> Appointments
                </h3>
            </div>
            <div class="col mb-2" >

                <form method="post">
                    <p style="text-align: left; color: #888">Total number of Appointments: {{$sum}} &nbsp;
                </form>
            </div>
            <div class="table-responsive table-data">

            <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Confirm</th>
                            <th>Cancel</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($appointments as $appointment)
                    <tr>
                            @foreach ($user as $us)
                                @if ($us->id == $appointment->user_id)
                                    <td>{{$us->fname}}</td>
                                @endif
                            @endforeach
                            @foreach ($doc as $docs)
                            @if ($docs->id == $appointment->docter_id)
                                <td>{{$docs->fname}}&nbsp;{{$docs->lname}}</td>
                            @endif
                            @endforeach
                        <td>{{ Carbon::parse($appointment->appointment_date)->format('Y-m-d') }}</td>
                        <td>{{ Carbon::parse($appointment->appointment_time)->format('H:i A') }}</td>
                        <td>{{ $appointment->status }}</td>
                        <td>
                            <form method="post" action="{{ route('confirm') }}" >
                                @csrf
                                {{-- @method('PUT') --}}
                                <input type="hidden" class="btn btn-outline-primary" value="{{$appointment->id}}" name='id'>
                                @if($appointment->status=='confirmed')
                                    <input type="submit" class="btn btn-outline-primary" value="Pending">
                                @elseif($appointment->status=='pending')
                                    <input type="submit" class="btn btn-outline-primary" value="Confirmed">
                                @else
                                    <input type="submit" class="btn btn-outline-primary" value="Confirmed">
                                @endif
                            </form>
                        </td>
                        <td>
                            <form method="post" action="{{ route('cancel') }}" >
                                @csrf
                                {{-- @method('PUT') --}}
                                <input type="hidden" class="btn btn-outline-primary" value="{{$appointment->id}}" name='id'>
                                <input type="submit" class="btn btn-outline-danger" value="Canceled">
                            </form>
                        </td>
                    </tr>
                @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END USER DATA-->
    </div>
</div>
@endsection
