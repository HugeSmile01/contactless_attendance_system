<!DOCTYPE html>
<html>
<head>
    <title>Attendance View</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Attendance for {{ $session->name }}</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Attendance Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->attendance_status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
