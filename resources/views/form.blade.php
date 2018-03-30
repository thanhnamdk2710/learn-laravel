<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    {!! Form::open(['url' => 'foo/bar']) !!}
        {!! Form::text('username', 'Username') !!}<br>
        {!! Form::text('email', 'email@gmail.com') !!}<br>
        {!! Form::password('password') !!}<br>
        {!! Form::checkbox('name', 'value') !!}<br>
        {!! Form::radio('name', 'value') !!}<br>
        {!! Form::file('image') !!}<br>
        {!! Form::select('size', ['L' => 'Large', 'S' => 'Small']) !!}<br>
        {!! Form::submit('Click Me') !!}
    {!! Form::close() !!}
</body>
</html>