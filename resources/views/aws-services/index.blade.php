<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload to S3</title>
</head>

<body>
    <div>
        <form action="{{ route('upload-to-s3') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="file">Choose a file to upload:</label>
            <input type="file" name="file" id="file" required>
            <button type="submit">Upload</button>
        </form>
    </div>
</body>

</html>
