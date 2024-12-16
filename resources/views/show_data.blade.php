<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>name</td>
            <td>email</td>
            <td>phone</td>
            <td>address</td>
        </tr>

        @foreach ($data1 as $detail)

            <tr>
                <td>{{$detail->name}}</td>
                <td>{{$detail->email}}</td>
                <td>{{$detail->phone}}</td>
                <td>{{$detail->address}}</td>
            </tr>

        @endforeach
    </table>
</body>
</html>