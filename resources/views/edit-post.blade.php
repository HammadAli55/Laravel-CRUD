<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add Post</title>
    </head>
    <body>
        <form method="post" action="{{route('update.post')}}">
            @csrf
            <input type="hidden" name="id" value="{{$post -> id}}">
            Post: <br><input type="text" name="name" value="{{$post -> name}}"><br>
            Description: <br><textarea name="description">{{$post-> description}}</textarea><br>
            <button type="submit" value="Submit">Submit</button>
            <button>
                <a href="/post-list">Back</a>
            </button>
            @if(Session::has('post_update'))
                <span><b>{{Session::get('post_update')}}</b></span>
            @endif
        </form>
    </body>
</html>