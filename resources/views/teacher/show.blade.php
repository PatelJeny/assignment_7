<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Teacher Details</h1>
    
        <div class="card">
            <div class="card-header">
                {{ $teacher->name }}
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $teacher->email }}</p>
                <a href="{{ route('teachers.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    
</body>
</html>