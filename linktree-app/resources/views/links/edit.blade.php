<!DOCTYPE html>
<html>
<head>
    <title>Edit Link</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Link</h1>
        <form action="{{ route('links.update', $link->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $link->title }}" required>
            </div>
            <div class="form-group">
                <label for="url">URL</label>
                <input type="url" class="form-control" id="url" name="url" value="{{ $link->url }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Link</button>
        </form>
    </div>
</body>
</html>
