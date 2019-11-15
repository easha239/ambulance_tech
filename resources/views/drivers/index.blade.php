<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>All Drivers List</title>

    <link rel="stylesheet" href="{{ asset('resources/sass/app.sicss') }}">
    <script src="{{ asset('resources/js/app.js') }}"></script>
</head>
<body>

<br>
<div class="container">

    <ul class="list-unstyled">
        <li><a href="{{ route('drivers.create') }}" class="btn btn-sm btn-success ">Create a new Driver</a></li>
    </ul>

    <h2>All Drivers Lists</h2>

    <ul class="list-group">
        @foreach($drivers as $driver)
            <li class="list-group-item">

                <a href="{{route('drivers.show', ['id'=>$driver->id])}}">{{$driver->name}} {{$driver->nid}} {{$driver->license_no}} ({{$driver->phone}})</a>
                |
                <a href="{{route('drivers.edit', ['id'=>$driver->id] )}}">Edit</a>
                |

                <form action="{{ route ('drivers.destroy', ['id'=>$driver->id] ) }}" method="POST" onsubmit="return confirm('Do You Want to Delete this Information?')">

                    {{ csrf_field() }}

                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>


            </li>
        @endforeach
    </ul>
</div>

</body>
</html>