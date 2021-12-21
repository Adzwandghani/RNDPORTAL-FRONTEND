<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RNDPortal</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dycalendar.min.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/PrayTimes.js') }}" /></script>
    <script type="text/javascript" src="{{ URL::asset('js/weatherscript.js') }}" /></script>
    
</head>

<body class="bg-WHITE-700 text-white">
    <header class="fixed top-0 left-0 right-0 z-10"
        style="background:linear-gradient(180deg, rgba(2,0,36,1) 0%, rgb(19, 93, 124) 0%, rgba(43,168,185,1) 100%);">
        <div class="container mx-auto flex justify-between p-10" style="padding-bottom: 10px; padding-top: 10px">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/perodua.png') }}" alt="" title="">
            </a>
            <!--<h1 class="text-xl mx-2 font-black"> RNDPortal </h1>-->
            <nav class="-mx-10" style="padding-bottom: 10px; padding-top: 25px">


                <!-- Large button groups (default and split) -->
                <div class="btn-group">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="background:linear-gradient(180deg, rgba(2,0,36,1) 0%, rgb(19, 93, 124) 0%, rgba(43,168,185,1) 100%)!IMPORTANT;">
                        ABOUT US
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('about') }}">ABOUT US</a></li>
                        <li><a class="dropdown-item" href="{{ route('privacypolicy') }}">PRIVACY POLICY</a></li>
                        <li><a class="dropdown-item" href="{{ route('supports') }}">SUPPORTS</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="background:linear-gradient(180deg, rgba(2,0,36,1) 0%, rgb(19, 93, 124) 0%, rgba(43,168,185,1) 100%)!IMPORTANT;">
                        BACKGROUND
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('missionvision') }}">RND MISSION & VISION</a></li>
                        <li><a class="dropdown-item" href="{{ route('organization') }}">RND ORGANIZATION</a></li>
                        <li><a class="dropdown-item" href="{{ route('staffdirectory') }}">RND STAFF DIRECTORY</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <button class="btn btn-secondary btn-lg" type="button" style="background:linear-gradient(180deg, rgba(2,0,36,1) 0%, rgb(19, 93, 124) 0%, rgba(43,168,185,1) 100%)!IMPORTANT;">
                        <a href="#article" style="color:#ffffff; text-decoration: solid;">ARTICLE</a>
                    </button>
                </div>


                <div class="btn-group">
                    <button class="btn btn-secondary btn-lg" type="button" style="background:linear-gradient(180deg, rgba(2,0,36,1) 0%, rgb(19, 93, 124) 0%, rgba(43,168,185,1) 100%)!IMPORTANT;">
                        <a href="#rndsystem" style="color:#ffffff; text-decoration: solid;">R&D SYSTEM</a>
                    </button>
                    <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">MANHOUR SYSTEM</a></li>
                        <li><a class="dropdown-item" href="#">DOC. CENTRALIZE MGMT SYSTEM</a></li>
                        <li><a class="dropdown-item" href="#">RND GENERAL DOC. NUMBERING SYSTEM</a></li>
                        <li><a class="dropdown-item" href="#">R&D SERVICE REQUEST</a></li>
                        <li><a class="dropdown-item" href="#">FMP WEB APPLICATIONS</a></li>
                        <li><a class="dropdown-item" href="#">ED e-LEARNING</a></li>
                        <li><a class="dropdown-item" href="#">EDMS</a></li>
                        <li><a class="dropdown-item" href="#">VMS</a></li>
                        <li><a class="dropdown-item" href="#">IT ASSET BOOKING</a></li>
                        <li><a class="dropdown-item" href="#">GUESS ENTRANCE SYSTEM</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <button class="btn btn-secondary btn-lg" type="button" style="background:linear-gradient(180deg, rgba(2,0,36,1) 0%, rgb(19, 93, 124) 0%, rgba(43,168,185,1) 100%)!IMPORTANT;">
                        <a href="#blankform" style="color:#ffffff; text-decoration: solid;">BLANK FORM</a>
                    </button>
                    <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('generalform') }}">GENERAL FORM</a></li>
                        <li><a class="dropdown-item" href="{{ route('technicaladministration') }}">TECHNICAL ADMINISTRATION</a></li>
                        <li><a class="dropdown-item" href="{{ route('engineeringinformation') }}">ENGINEERING INFORMATION</a></li>
                        <li><a class="dropdown-item" href="{{ route('dmc') }}">DMC</a></li>
                    </ul>
                </div>

                <div class="btn-group">
                    <button class="btn btn-secondary btn-lg" type="button"
                        style="background:linear-gradient(180deg, rgba(2,0,36,1) 0%, rgb(19, 93, 124) 0%, rgba(43,168,185,1) 100%)!IMPORTANT;">
                        <a href="#quicklink" style="color:#ffffff; text-decoration: solid;">QUICK LINK</a>
                    </button>
                    <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">PERODUA MRSB</a></li>
                        <li><a class="dropdown-item" href="#">PEOPLESOFT</a></li>
                        <li><a class="dropdown-item" href="#">PERODUA SERVICEDESK</a></li>
                        <li><a class="dropdown-item" href="#">EMPICOM</a></li>
                        <li><a class="dropdown-item" href="#">P2STAFFGO</a></li>
                    </ul>
                </div>


            </nav>

            <a href="{{ route('home') }}">
                <img src="{{ asset('img/rndportal.png') }}" alt="" title="">
            </a>
        </div>
    </header>

    <main>
        @yield('page-content')
    </main>

    <main>
        @yield('page-content-two')
    </main>

    <main>
        @yield('page-content-three')
    </main>

    <main>
        @yield('page-content-four')
    </main>

    <main>
        @yield('page-content-five')
    </main>



    <div class="container-fluid p-0">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-4"
            style="background:linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(43,142,185,1) 0%, rgba(43,168,185,1) 100%); ">
            {{-- <p class="col-md-2 mb-0 text-muted"></p> --}}

            <a href="#"
                class="col-md-12 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none"
                style="color:#ffffff !important;">
                © 2021 - Research & Development, Technical Administration - Engineering Information Section by LARAVEL
                &nbsp <img src="{{ asset('img/eilogo1.png') }}">
            </a>

            {{-- <ul class="nav col-md-2 justify-content-end">
            </ul> --}}
        </footer>
    </div>


    {{-- <footer class="bg-light text-center text-sm-start">

        
    <div style="background:linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(43,142,185,1) 0%, rgba(43,168,185,1) 100%);">
        
            <p class="text-center p-3"><img src="{{ asset('img/eilogo1.png') }}" style="float:left">© 2021 - Company, Engineering Information Section by LARAVEL<img src="{{ asset('img/eilogo1.png') }}" style="float:right"></p>
        
    </div>

    </footer> --}}
</body>

</html>
