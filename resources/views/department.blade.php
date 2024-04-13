<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setores</title>
</head>
<body>
<h1>Setores</h1>
    <ul>
        @foreach($departments as $department)
            <li>
                {{$department->name}}
                 {{$department->description}}
            </li>
        @endforeach
    </ul>
</body>
</html>