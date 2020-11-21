<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>
            @yield('meta-title')
        </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="header">
            <div class="header__link-box">
                <a href="/home" class="logo-box">
                    <!-- <img src="" alt="" class="logo"> -->
                    <p class="text-bold text-white text-uppercase">MyVacc</p>
                </a>
                <a href="/home" class="link-item"><p class="text-bold text-white">Home</p></a>
                <a href="#" class="link-item"><p class="text-bold text-white">Contact Us</p></a>
            </div>
            <div class="header__util">
                <a href="/login" class="link-item"><p class="text-bold text-white">Login</p></a>
            </div>
        </nav>

        @yield('content')

        <footer class="footer">
            <div class="logo-box">
                <!-- <img src="" alt="" class="logo"> -->
                <p class="text-bold text-white text-uppercase">MyVacc</p>
            </div>
            <div class="header__link-box">
                <a href="#" class="link-item"><p class="text-regular text-white">Home</p></a>
                <a href="#" class="link-item"><p class="text-regular text-white">Contact Us</p></a>
            </div>
            <div class="header__util">
                <p class="text-regular text-white">&#169;2020-Form | All Rights Reserved</p>
            </div>
        </footer>
    </body>
</html>