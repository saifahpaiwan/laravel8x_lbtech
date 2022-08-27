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

    @if(session("success"))
    <div style="padding: 1rem; background: #4caf50; margin-bottom: 1rem;">
        {{ session("success")['msg1'] }}
    </div>
    @endif

    <form action="{{ route('save') }}" method="POST">
        @csrf

        <div style="margin-bottom: 10px;">
            <label for="name"> Name :</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
            <div style="margin: 1rem;padding: 1rem;background: #f44336;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <label for="type"> Type :</label>
            <input type="text" name="type" id="type" value="{{ old('type') }}">
            @error('type')
            <div style="margin: 1rem;padding: 1rem;background: #f44336;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <label for="status"> Status :</label>
            <input type="text" name="status" id="status" value="{{ old('status') }}">
            @error('status')
            <div style="margin: 1rem;padding: 1rem;background: #f44336;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label for="tel"> Tel :</label>
            <input type="text" name="tel" id="tel" value="{{ old('tel') }}">
            @error('tel')
            <div style="margin: 1rem;padding: 1rem;background: #f44336;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <label for="email"> Email :</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
            @error('email')
            <div style="margin: 1rem;padding: 1rem;background: #f44336;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 10px;">
            <label for="username"> Username :</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}">
            @error('username')
            <div style="margin: 1rem;padding: 1rem;background: #f44336;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <label for="password"> Password :</label>
            <input type="password" name="password" id="password">
            @error('password')
            <div style="margin: 1rem;padding: 1rem;background: #f44336;">{{ $message }}</div>
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <label for="passwordConf"> Password Conf :</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
            @error('passwordConf')
            <div style="margin: 1rem;padding: 1rem;background: #f44336;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit"> SAVE </button>
    </form>



    <!-- $depaartment->firstItems()+$loop->index -->

</body>

</html>