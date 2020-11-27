<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="icon" href="{{ asset('assets/logo-circle.png') }}">
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
        <script src="{{ asset('/js/frontend.js') }}"></script>

    </head>
    <body>
        <nav class="header">
            <div class="header__link-box">
                {{-- logo --}}
                <a href="{{route('home')}}" class="logo-box">
                    <img src="{{ asset('assets/logo.png') }}" alt="" class="logo">
                </a>
                {{-- home --}}
                <a href="{{route('home')}}" class="link-item"><p class="text-bold text-white">Home</p></a>
                {{-- dashboard for pemerintah and hospital --}}
                @if (auth()->user())
                    @if (auth()->user()->role == 'pemerintah')
                        <a href="{{route('pemerintah-patients')}}" class="link-item"><p class="text-bold text-white">Dashboard</p></a>
                    @elseif (auth()->user()->role == 'rs')
                        <a href="{{route('rs-quota')}}" class="link-item"><p class="text-bold text-white">Dashboard</p></a>
                    @endif
                @else
                    <a href="{{route('home')}}" class="link-item"><p class="text-bold text-white">Home</p></a>
                @endif
                <a href="{{route('contact-us')}}" class="link-item"><p class="text-bold text-white">Contact Us</p></a>
            </div>
            <div class="header__util">
                @if (auth()->user())
                    <!-- Show this if user is logged in -->
                    <div class="dropdown">
                        <button class="dropdown-button"><p class="text-bold text-white">Hi, {{auth()->user()->name}}</p></a>
                        <div class="dropdown-menu">

                            @switch(auth()->user()->role)
                                @case('pasien')
                                    <!-- Show this if patient is logged in -->
                                    <div class="dropdown-section">
                                        <a href="{{route('form')}}" class="dropdown-option">Vaccination Form</a>
                                        <a href="{{route('vacc-ticket')}}" class="dropdown-option">Vaccination Ticket</a>
                                    </div>
                                    <div class="dropdown-section">
                                        <a href="{{route('profile-patient')}}" class="dropdown-option">My Profile</a>
                                    </div>
                                    <!-- Show this if patient is logged in -->
                                    @break

                                @case('pemerintah')
                                    <!-- Show this if pemerintah is logged in -->
                                    <div class="dropdown-section">
                                        <a href="{{route('pemerintah-patients')}}" class="dropdown-option">Patients</a>
                                        <a href="{{route('pemerintah-hospitals')}}" class="dropdown-option">Hospitals</a>
                                    </div>
                                    <div class="dropdown-section">
                                        <a href="{{route('add-hospital')}}" class="dropdown-option">Add Hospital</a>
                                    </div>
                                    <!-- Show this if pemerintah is logged in -->
                                    @break

                                @case('rs')
                                    <!-- Show this if hospital is logged in -->
                                    <div class="dropdown-section">
                                        <a href="{{route('rs-quota')}}" class="dropdown-option">Quota</a>
                                        <a href="{{route('rs-patients')}}" class="dropdown-option">Patients</a>
                                    </div>
                                    <div class="dropdown-section">
                                        <a href="{{route('rs-profile')}}" class="dropdown-option">My Profile</a>
                                    </div>
                                    <!-- Show this if hospital is logged in -->
                                    @break

                                @default
                                    <p>something is wrong!</p>
                            @endswitch

                            <div class="dropdown-section">
                                <a href="logout" class="dropdown-option">Log Out</a>          
                            </div>
                        </div>
                    </div>
                    <!-- Show this is user is logged in -->
                @else
                    <!-- Show this if user is not logged in -->
                    <a href="/login" class="link-item"><p class="text-bold text-white">Login</p></a>
                @endif
                
            </div>
        </nav>

        @yield('content')

        <footer class="footer">
            <a href="{{route('home')}}" class="logo-box">
                <img src="{{ asset('assets/logo.png') }}" alt="" class="logo">
            </a>
            <div class="header__link-box">
                <a href="{{route('home')}}" class="link-item"><p class="text-regular text-white">Home</p></a>
                <a href="{{route('contact-us')}}" class="link-item"><p class="text-regular text-white">Contact Us</p></a>
            </div>
            <div class="header__util">
                <p class="text-regular text-white">&#169;2020-Form | All Rights Reserved</p>
            </div>
        </footer>
    </body>
</html>