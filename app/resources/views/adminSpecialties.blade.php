@extends('blank')
@extends('includes.top')

@section('title', 'Specialties')



@section('main')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="container border-radius">
                <div id="editdiv" style="background-color: white; text-align: center; padding:1%; display:none">
                    <form method="post" action="{{ route('specialties.update',5) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="id-input" name="id" >
                        <label class="col-2">Name:</label>
                        <input class="col-3" id="name-input" type="text"  name="name" ><br><br>
                        <label class="col-2">photo:</label>
                        <input class="col-5" id="photo-input" type="file" name="photo"><br>
                        <input type="submit" class="btn btn-outline-secondary" value="Save">
                    </form>
                </div>
                <div id="adddiv" style="background-color: white; text-align: center; padding:1%; display:none">
                    <form method="post" action="{{route('specialties.store')}}" enctype="multipart/form-data">
                        @csrf
                        <label class="col-2">Name:</label>
                        <input class="col-3" type="text" name="name" required placeholder="Enter New Specialty.."><br><br>
                        <label class="col-2">photo:</label>
                        <input class="col-5" id="photo-input" type="file" name="photo"><br>
                        <input type="submit" class="btn btn-outline-secondary" value="Add">
                    </form>
                </div>
            </div>
            <hr>
            <div class="col-lg-12">
                <!-- USER DATA-->
                <div class="user-data m-b-30" style="background-color: white;padding:2%">
                    <div class="row justify-content-between mb-3">
                        <div class="col-lg-8">
                            <h3 class="title-3">
                                <i class="zmdi zmdi-account-calendar"></i> Specialties
                            </h3>
                        </div>
                        <div class="col mb-2" >

                            <form method="post">
                                <p style="text-align: left; color: #888">
                                 Number of Specialties: {{$sum}} &nbsp;
                                </p>
                                <input type="button" id="addUser-btn" class="btn btn btn-secondary" value="Add New Specialty" name="adding">
                            </form>
                        </div>

                        <div class="table-responsive table-data">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Picture</td>
                                        <td>Name</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($specialties as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $item->photo) }}" alt="speciaalties Image" style="height: 50px">
                                        </td>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            <form method="post" action="{{ route('specialties.edit',$item->id) }}" >
                                                <input type="button" class="btn btn-outline-primary" value="Edit" name="editpro" onclick="editsp({{$item}})" >
                                            </form>
                                        </td>
                                        <td>
                                            <form method="post"action="{{ route('specialties.destroy',$item->id) }}" >
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-outline-danger" value="Delete">
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

        </div>
    </div>



@endsection
