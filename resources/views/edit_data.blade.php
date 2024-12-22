<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <form action="{{url('update/'.$edit->id)}}" method="POST">
        @csrf
        <input type="text" name="name" value="{{$edit->name}}">
        <br>
        <input type="text" name="email" value="{{$edit->email}}">
        <br>
        <input type="text" name="phone" value="{{$edit->phone}}">
        <br>
        <input type="text" name="address" value="{{$edit->address}}">
        <br>
        <input type="submit">
    </form>
</body>
</html>