<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Search</title>
</head>

<body>
    <div class="mt-5">
        <form class="text-center" method="post" action="/showPlayers">
            {{csrf_field()}}
            <div class="container input-group col-md-4">
                <select class="custom-select" name="role">
                    <option selected>Show All</option>
                    @foreach ($roles as $role){
                    <option value="{{$role}}">{{$role}}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary" name="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</html>