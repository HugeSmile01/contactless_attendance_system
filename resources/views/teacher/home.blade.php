<!DOCTYPE html>
<html>
<head>
    <title>Teacher Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Welcome, {{ Auth::user()->name }}</h2>
        <p>This is the teacher home page.</p>
        <ul>
            <li><a href="{{ route('teacher.attendance') }}">View Attendance</a></li>
            <li><a href="{{ route('teacher.records') }}">View Records</a></li>
            <li><a href="{{ route('teacher.sections') }}">View Sections</a></li>
            <li><a href="{{ route('teacher.students') }}">View Students</a></li>
        </ul>
    </div>
</body>
</html>
