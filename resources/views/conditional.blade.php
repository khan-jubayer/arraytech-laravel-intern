<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Logic</title>
</head>
<body>
    <h1>Conditional Logic Example</h1>

    @if($isLoggedIn)
        <p>Welcome, you are logged in!</p>
    @else
        <p>Please log in to continue.</p>
    @endif
</body>
</html>
