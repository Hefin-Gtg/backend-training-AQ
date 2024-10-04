<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Product Management Application</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
<div class="container">
    <header>
        <h1>@yield('title', '') </h1>
    </header>
    @yield('content')
</div>
</body>
</html>