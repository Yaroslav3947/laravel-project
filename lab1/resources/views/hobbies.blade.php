<!DOCTYPE html>
<html>
<head>
    <title>My Hobbies</title>
</head>
<body>
    <h1>My Hobbies</h1>
    <ul>
        @foreach ($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach
    </ul>
</body>
</html>
