<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Song List</title>
</head>
<body>
    <h1>List of All Songs</h1>
<table>
    <th>Id</th>
    <th>Title</th>
    

    <tbody>
        @foreach($allSongs as $song)
            <tr>
                <td>{{$song->id}}</td>
                <td>{{$song->title}}</td>
               

            </tr>
        @endforeach

    </tbody>
</table>
    
</body>
</html>