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
    
    @foreach($gambar as $value)
        <img width="40%" height="40%" src="{{ asset('/storage/'. $value->nama_file) }}">
    @endforeach

    <br/>
    <a href="/">Upload Lagi?</a>

</body>
</html>