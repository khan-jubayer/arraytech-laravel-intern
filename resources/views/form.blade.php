<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('submit')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter name">
        <br>
        <input type="text" name="email" placeholder="Enter email">
        <br>
        <input type="text" name="phone" placeholder="Enter phone">
        <br>
        <input type="text" name="address" placeholder="Enter address">
        <br>
        <input type="submit">
    </form>
</body>
</html>