<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Showing A Specific Driver Info</title>

    <link rel="stylesheet" href="{{ asset('resources/sass/app.scss') }}">
    <script src="{{ asset('resources/js/app.js') }}"></script>
</head>
<body>

<br>

<div class="container">
    <h2>Showing A Specific Driver Info</h2>
    <div>
        <h1>{{$driver->name}}</h1>
        <p>{{$driver->nid}}</p>
        <p>{{$driver->license_no}}</p>
        <p>{{$driver->phone}}</p>

    </div>
</div>
</div>
</body>
</html>