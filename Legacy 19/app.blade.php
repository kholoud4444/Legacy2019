<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <title>Minders-Entrepreneurship Organization</title>
        <link rel="icon" href="img/micon.png" type="img/icon type">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="Font/font.css">

</head>
<body>
    @include('layouts.nav')
    
            @yield('content')

    @include('layouts.footer')

        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <script async defer crossorigin="anonymous"
          src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v5.0"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/main.js"></script>
        <!--<script>
                AOS.init({
                   
                });
        
        
        </script>-->
</body>
</html>
