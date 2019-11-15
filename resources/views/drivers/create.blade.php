<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create A New Driver</title>

    <link rel="stylesheet" href="{{ asset('resources/sass/app.scss') }}">
    <script src="{{ asset('resources/js/app.js') }}"></script>
</head>
<body>
<br>
<div class="container">
    <h2>Create A new Driver</h2>

    <form class="form-horizontal" action="{{route('drivers.store')}}" method="POST">

        <!-- csrf token field -->

        {{csrf_field()}}


        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Enter your name"  name="name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="nid">nid : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nid" placeholder="Enter your nid"  name="nid">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="license_no">License : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="license_no" placeholder="Enter your License no."  name="license_no">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="phone">Phone No :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="phone" placeholder="Enter your phone no." name="phone">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">

            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>