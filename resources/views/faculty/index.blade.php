<!DOCTYPE html>
<html>
<head>
    <title>Faculty</title>
</head>
<body>
    <h1>Faculty List</h1>
    <ul>
        @foreach ($faculty as $member)
            <li>
                {{ $member->name }} - Department: {{ $member->department->name }}
            </li>
        @endforeach
    </ul>
</body>
</html>
