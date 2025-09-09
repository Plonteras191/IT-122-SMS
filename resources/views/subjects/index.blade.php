<!DOCTYPE html>
<html>
<head>
    <title>Subjects</title>
</head>
<body>
    <h1>Subjects List</h1>
    <ul>
        @foreach ($subjects as $subject)
            <li>
                {{ $subject->name }} - Department: {{ $subject->department->name }}
            </li>
        @endforeach
    </ul>
</body>
</html>
