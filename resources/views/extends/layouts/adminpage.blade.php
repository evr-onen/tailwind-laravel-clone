<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('pageName')</title>
    @vite('resources/css/app.css')
    <!-- Material Icons Link -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;400;700&family=Poppins:wght@100;400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body class="h-full bg-teal-100">
    @include('components/adminHeader')
    <div class="page @yield('pageName')  bg-teal-100 w-full  pt-10 ">
        asdasdasd
        @yield('content')
    </div>
    @include('components/footer')
    @vite('resources/js/app.js')
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</body>

</html>
