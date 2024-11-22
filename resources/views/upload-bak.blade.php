<!DOCTYPE html>
<html>
<head>
    <title>Upload Image and Audio</title>
</head>
<body>
    <h1>Upload Image and Audio</h1>
    
    @if(session('success'))
        <p>{{ session('success') }}</p>
        <a href="{{ Storage::url(session('output')) }}" download>Download Combined File</a>
    @endif

    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <label for="image">Choose Image:</label>
        <input type="file" name="image" required>

        <label for="audio">Choose Audio:</label>
        <input type="file" name="audio" required>

        <button type="submit">Upload</button>
    </form>
</body>
</html>
