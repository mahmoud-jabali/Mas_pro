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
            <div class="card-header">Login</div>

            <div class="card-body">
                <form method="post" action="{{route('log')}}">
                    {{-- <input type="hidden" name="_token" value="pLo6I9Pzgz9ua4L0pLLmiLhtnVlL4wjHo8i78hK2"> --}}
                   @csrf

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control " name="password" required>
                        </div>
                    </div>


                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
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
