<!DOCTYPE html>
<html>
<head>
    <title>Student Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Welcome, {{ Auth::user()->name }}</h2>
        <p>This is the student home page.</p>
        <a href="{{ route('student.qr_scan') }}" class="btn btn-primary">Scan QR Code</a>
        <a href="{{ route('logout') }}" class="btn btn-secondary">Logout</a>
    </div>
</body>
</html>
