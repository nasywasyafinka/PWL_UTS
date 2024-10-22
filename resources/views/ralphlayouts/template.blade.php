<!-- resources/views/ralphlayouts/template.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Add your CSS here -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    @include('ralphlayouts.header')

    @yield('content')
    
    @include('ralphlayouts.footer')
</body>
</html>
