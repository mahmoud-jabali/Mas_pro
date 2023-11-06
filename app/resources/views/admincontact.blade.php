@extends('blank')
@extends('includes.top')

@section('title', 'Contact')

<?php use Carbon\Carbon;
?>

@section('main')

    <div class="container">
        <h1>Contacts From Users</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Time</th>

                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>

                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{$item->message }}</td>
                        <td>{{$item->created_at }}</td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
