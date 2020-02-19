<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist List</title>
</head>
<body>

<h1>List of All Arists</h1>
<table>
    <th>Id</th>
    <th>Name</th>
    <th>Description</th>

    <tbody>
        @foreach($allArtists as $artist)
            <tr>
                <td>{{$artist->id}}</td>
                <td>{{$artist->name}}</td>
                <td>{{$artist->desc}}</td>

            </tr>
        @endforeach

    </tbody>
</table>
    
</body>
</html>