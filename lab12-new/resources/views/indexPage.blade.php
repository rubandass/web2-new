<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Home</title>
</head>
<body>

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Role</th>
            <th>Batting</th>
            <th>Bowling</th>
            <th>Image</th>
            <th>ODI Runs</th>
            <th>Country</th>
        </tr>
        @foreach($players as $player)
        <tr>
            <td>{{$player->id}}</td>
            <td>{{$player->name}}</td>
            <td>{{$player->age}}</td>
            <td>{{$player->role}}</td>
            <td>{{$player->batting}}</td>
            <td>{{$player->bowling}}</td>
            <td><img src="/images/{{$player->image}}" alt="image" style="width:50px; height:auto;"></td>
            <td>{{$player->odiRuns}}</td>
            <td>{{$player->country_id}}</td>

        </tr>
        @endforeach
    </table>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>