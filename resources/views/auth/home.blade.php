<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-md-5">
                @if(session("success"))
                <div style="padding: 1rem; background: #4caf50; margin-bottom: 1rem;">
                    {{ session("success") }}
                </div>
                @endif

                <!-- // ====== // -->
                @auth
                    <div class="mb-2"> {{ auth()->user()->name }} </div>
                    <div class="mb-2"> {{ auth()->user()->email }} </div>

                    <a href="{{ route('logout') }}">
                        <div class="h4"> log out </div>
                    </a> 
                @else
                    <a href="{{ route('login') }}"> Login </a>
                @endauth 
                <!-- // ====== // -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>