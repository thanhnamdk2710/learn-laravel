<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::open(['url' => '/validation']) }}
        <table>
            <tr>
                <td align="center" colspan="2">Login</td>
            </tr>
            <tr>
                <td>Username</td>
                <td>{{ Form::text('username') }}</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>{{ Form::password('password') }}</td>
            </tr>
            <tr>
                <td align="center" colspan="2">{{ Form::submit('Login') }}</td>
            </tr>
        </table>
    {{ Form::close() }}
</body>
</html>