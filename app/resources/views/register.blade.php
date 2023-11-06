<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <main class="py-4">
        <div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Register</div>

            <div class="card-body">
                <form method="post" action="{{route('register')}}">
                    @csrf

                    <div class="row mb-3">
                        <label for="fname" class="col-md-4 col-form-label text-md-end">First name</label>

                        <div class="col-md-6">
                            <input id="fname" type="text" class="form-control " name="fname" value="" required autocomplete="Last name" autofocus>
                            @if ($errors->has('fname'))
                                <p class="alert alert-danger ">{{ $errors->first('fname') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lname" class="col-md-4 col-form-label text-md-end">Last name</label>

                        <div class="col-md-6">
                            <input id="lname" type="text" class="form-control " name="lname" value="" required autocomplete="lname" autofocus>
                            @if ($errors->has('lname'))
                                <p class="alert alert-danger ">{{ $errors->first('lname') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email">
                            @if ($errors->has('email'))
                                <p class="alert alert-danger ">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">
                            @if ($errors->has('password'))
                                <p class="alert alert-danger ">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="conf-password" class="col-md-4 col-form-label text-md-end">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="conf-password" type="password" class="form-control " name="conf-password" required autocomplete="new-password">
                            @if ($errors->has('conf-password'))
                                <p class="alert alert-danger ">{{ $errors->first('conf-password') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="phone" class="col-md-4 col-form-label text-md-end">Phone</label>

                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control " name="phone" value="" required autocomplete="phone" autofocus>
                            @if ($errors->has('phone'))
                                <p class="alert alert-danger ">{{ $errors->first('phone') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="bdate" class="col-md-4 col-form-label text-md-end">Birth Date</label>

                        <div class="col-md-6">
                            <input id="bdate" type="date" class="form-control " name="bdate" value="" required autocomplete="bdate" autofocus>
                            @if ($errors->has('bdate'))
                                <p class="alert alert-danger ">{{ $errors->first('bdate') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">

                        <label for="gender" class="col-md-4 col-form-label text-md-end">Gender</label>
                        <div  class="col-md-6">
                        <select class="col-md-6" name="gender" id="gender">
                            <option class="col-md-6"  value="Male">Male</option>
                            <option class="col-md-6" value="Female">Female</option>
                        </select>
                        @if ($errors->has('gender'))
                        <p class="alert alert-danger ">{{ $errors->first('gender') }}</p>
                    @endif
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <input type="submit" class="btn btn-primary">

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
    </main>

</body>
</html>
