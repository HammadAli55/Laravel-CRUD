<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            padding: 5px;
            border: 1px solid;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td> {{$post -> id}} </td>
            <td> {{$post -> name}} </td>
            <td> {{$post -> description}} </td>
        </tr>
        @endforeach
    </table>
</body>
</html>