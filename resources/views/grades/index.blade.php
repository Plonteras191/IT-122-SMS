<!DOCTYPE html>
<html>
<head>
    <title>Grades</title>
</head>
<body>
    <h1>Grades List</h1>
    <ul>
        @foreach ($grades as $grade)
            <li>
                Student: {{ $grade->student->name }} - Subject: {{ $grade->subject->name }} - Grade: {{ $grade->grade }}
            </li>
        @endforeach
    </ul>
</body>
</html>
