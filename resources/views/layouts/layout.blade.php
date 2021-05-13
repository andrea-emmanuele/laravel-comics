<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DC Comics</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    @include('layouts.header.header')
    @include('layouts.main.main')
    @include('layouts.footer.footer')

    <script src="../js/app.js"></script>
</body>
</html>
