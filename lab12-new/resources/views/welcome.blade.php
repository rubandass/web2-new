<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
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
        @foreach($the_big_array as $person)
        <tr>
            <td>{{$id++}}</td>
            <td>{{$person[0]}}</td>
            <td>{{$person[1]}}</td>
            <td>{{$person[2]}}</td>
            <td>{{$person[3]}}</td>
            <td>{{$person[4]}}</td>
            <td>{{$person[5]}}</td>
            <td>{{$person[6]}}</td>
            <td>{{$person[7]}}</td>

        </tr>
        @endforeach
    </table>
</body>
</html>