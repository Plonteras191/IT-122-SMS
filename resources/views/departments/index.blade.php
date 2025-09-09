<!DOCTYPE html>
<html>
<head>
    <title>Departments</title>
</head>
<body>
    <h1>Departments List</h1>
    <ul>
        @foreach ($departments as $department)
            <li>
                <strong>{{ $department->name }}</strong>
                <ul>
                    @foreach ($department->subjects as $subject)
                        <li>Subject: {{ $subject->name }}</li>
                    @endforeach
                    @foreach ($department->faculty as $faculty)
                        <li>Faculty: {{ $faculty->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
