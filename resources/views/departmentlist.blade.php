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
        <input type="text" name="name">
        <input type="text" name="type">
        <input type="text" name="status">
        <button type="submit"> SAVE </button>
    </form>
    
</body>
</html>