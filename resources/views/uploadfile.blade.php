<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>
</head>
<body>
    {{ Form::open(['url' => '/uploadfile', 'file' => 'true', 'enctype' => 'multipart/form-data']) }}
        <p>Select the file to upload</p>
        {{ Form::file('image') }}
        {{ Form::submit('Upload File') }}
    {{ Form::close() }}
</body>
</html>