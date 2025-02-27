<!DOCTYPE html>
<html>
<head>
    <title>Section View</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h2>Sections</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Section Name</th>
                    <th>Teacher Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sections as $section)
                    <tr>
                        <td>{{ $section->name }}</td>
                        <td>{{ $section->teacher->name }}</td>
                        <td>
                            <a href="{{ route('teacher.section_view', $section->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('teacher.section_edit', $section->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('teacher.section_delete', $section->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
