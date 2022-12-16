<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Post</title>
</head>
<body>
    @if(Session::has('post_add'))
    <span>{{Session::get('post_add')}}</span>
    @endif
    <form method="post" action="{{route('save.post')}}">
        @csrf
        Post: <br><input type="text" name="name" value=""><br>
        Description: <br><textarea name="description"></textarea><br>
        <Input type="submit" value="submit"></Input>
    </form>
</body>
</html>