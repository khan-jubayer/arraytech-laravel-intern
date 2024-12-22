<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>
<style>
    table,tr,td{
        border: 2px solid green;
        border-collapse: collapse;
    }

</style>
<body>
    <table>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Address</td>
            <td>Action</td>
        </tr>

        @foreach ($data1 as $detail)

            <tr>
                <td>{{$detail->name}}</td>
                <td>{{$detail->email}}</td>
                <td>{{$detail->phone}}</td>
                <td>{{$detail->address}}</td>
                <td>
                    <a href={{url('edit-data/'.$detail->id)}}>Edit</a>
                    <a href={{url('delete-data/'.$detail->id)}}>Delete</a>
                </td>

            </tr>

        @endforeach
    </table>
</body>
</html>