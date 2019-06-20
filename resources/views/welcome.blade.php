<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File uploads</title>
    <style>
    * {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
            "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
            "Segoe UI Emoji", "Segoe UI Symbol";
    }
    </style>
</head>
<body>
    <form action="/processEditName" enctype="multipart/form-data" method="POST">
        <p>
            <label for="photo">
                <input type="file" name="photo" id="photo">
            </label>
        </p>
        <button>Upload</button>
        {{ csrf_field() }}
    </form>

</body>
</html>