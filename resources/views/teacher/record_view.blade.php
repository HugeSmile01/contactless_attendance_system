<!DOCTYPE html>
<html>
<head>
    <title>Record View</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Records for {{ $section->name }}</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Session Name</th>
                    <th>Date</th>
                    <th>Attendance Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $record)
                    <tr>
                        <td>{{ $record->session_name }}</td>
                        <td>{{ $record->date }}</td>
                        <td>{{ $record->attendance_status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
