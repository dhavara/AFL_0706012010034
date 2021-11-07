<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">

    <link rel="icon" href="{{ url('assets/favicon/perkuliahan.png?v=2') }}" type="image/png" />
    <title>@yield("title")</title>
</head>

<body>
    @include('layout.navigation')
    <div class="container">

        <div class="my-5">
            @yield('page_title')
            @yield('main_content')
        </div>

        <div class="fixed-bottom bg-dark text-primary justify-content-center d-flex">
            <footer>AFL Web Development</footer>
        </div>

    </div>
</body>

</html>
