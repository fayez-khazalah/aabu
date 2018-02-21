<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    {{--<h1>Welcome, {{$name}}</h1>--}}
    {{--<h3>Your age is {{$age}}</h3>--}}
        {{-- expr --}}
    @foreach($data as $key => $item)
        <h1>{{$key}}: {{$item}}</h1>
    @endforeach
</body>
</html>