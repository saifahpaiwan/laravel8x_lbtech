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
                @if(session("error"))
                <div style="padding: 1rem; background: #ddd; margin-bottom: 1rem;">
                    {{ session("error") }}
                </div>
                @endif

                <form action="{{ route('forget.password.post') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 pb-2">
                            <h1> Forgotpassword </h1>
                        </div>
                        <div class="col-md-12 pb-2">
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                      
                        <div class="col-md-12 pb-2">
                            <button type="submit"> sand email </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>