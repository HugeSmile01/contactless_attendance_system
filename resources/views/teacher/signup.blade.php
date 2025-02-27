<!DOCTYPE html>
<html>
<head>
    <title>Teacher Signup</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Teacher Signup</h2>
        <form method="POST" action="{{ route('teacher.signup') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
        <p>Already have an account? <a href="{{ route('teacher.login') }}">Login here</a></p>
    </div>
</body>
</html>
