<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1> Data All </h1>
    <ul>
        @foreach($data['all'] as $row)
        <li> {{ $row->name }} </li>
        @endforeach
    </ul>

    <h1> Data find </h1>
    <p> {{ $data['find']->name }} </p>

    <h1> Data where </h1>
    @if(isset($data['where']))
    <p> {{ $data['where']->name }} </p>
    @endif

    <form action="{{ route('save') }}" method="POST">
        @csrf
        <div style="margin-bottom: 10px;"> 
            <label for="name"> Name :</label>
            <input type="text" name="name" id="name">
        </div>
        <div style="margin-bottom: 10px;"> 
            <label for="type"> Type :</label>
            <input type="text" name="type" id="type">
        </div> 
        <div style="margin-bottom: 10px;"> 
            <label for="status"> Status :</label>
            <input type="text" name="status" id="status">
        </div> 

        <div style="margin-bottom: 10px;"> 
            <label for="tel"> Tel :</label>
            <input type="text" name="tel" id="tel">
        </div> 
        <div style="margin-bottom: 10px;"> 
            <label for="email"> Email :</label>
            <input type="email" name="email" id="email">
        </div>  

        <div style="margin-bottom: 10px;"> 
            <label for="username"> Username :</label>
            <input type="text" name="username" id="username">
        </div> 
        <div style="margin-bottom: 10px;"> 
            <label for="password"> Password :</label>
            <input type="password" name="password" id="password">
        </div> 
        <div style="margin-bottom: 10px;"> 
            <label for="passwordConf"> Password Conf :</label>
            <input type="password" name="passwordConf" id="passwordConf">
        </div>   

        <button type="submit"> SAVE </button>
    </form>


    <!-- $depaartment->firstItems()+$loop->index -->

</body>

</html>