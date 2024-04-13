<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionarios</title>
</head>
<body>
    <h1>Funcionarios</h1>
    <ul>
        @foreach($employees as $employee) 
            <li>
                {{ $employee->name }}
                {{ $employee->position }}
                {{ $employee->department->name }}
            </li>
        @endforeach
    </ul>
</body>
</html>