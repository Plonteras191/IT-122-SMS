<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h1>Students List</h1>
    <ul>
        @foreach ($students as $student)
            <li>
                <strong>{{ $student->name }}</strong> ({{ $student->email }})
                <ul>
                    @foreach ($student->grades as $grade)
                        <li>Subject ID: {{ $grade->subject_id }} - Grade: {{ $grade->grade }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>

