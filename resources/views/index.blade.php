@extends('layouts/default')

@section('page-content')
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="padding-left:30px; padding-right:30px; padding-top:80px;">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('img/a.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none "
                    style="background: linear-gradient(180deg, rgba(41,108,128,1) 0%, rgba(41,108,128,1) 0%, rgba(143,255,1,0) 100%);">
                    <h5 style="color:#ffffff;">First slide label</h5>
                    <p style="color:#ffffff;">Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('img/b.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none"
                    style="background: linear-gradient(180deg, rgba(41,108,128,1) 0%, rgba(41,108,128,1) 0%, rgba(143,255,1,0) 100%);">
                    <h5 style="color:#ffffff;">Second slide label</h5>
                    <p style="color:#ffffff;">Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/c.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none"
                    style="background: linear-gradient(180deg, rgba(41,108,128,1) 0%, rgba(41,108,128,1) 0%, rgba(143,255,1,0) 100%);">
                    <h5 style="color:#ffffff;">Third slide label</h5>
                    <p style="color:#ffffff;">Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-fluid" style="margin-top:50px; margin-bottom:50px; ">
        <div class="row relative flex items-center">
            <div class="row">

                <div class="col-6">
                    <div class="card" style="height:20rem; border:0px !important;">
                        <div class="card-body">

                            {{-- <h5 class="card-title" style="color:#000000;">LOGIN FORM</h5> --}}
                            <div class="container">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{ asset('img/rndportal_big.png') }}" style="padding:10%; margin:5px;">
                                    </div>

                                    <div class="col-8">
                                        <form>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"
                                                    style="padding-top:16px;">USERNAME</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp"
                                                    style="border: 1px solid #FFFFFF; box-sizing: border-box; border-radius: 22px;">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1"
                                                    style="border: 1px solid #FFFFFF; box-sizing: border-box; border-radius: 22px;">
                                            </div>
                                            <div class="d-grid gap-2 justify-content-center">
                                                
                                                <button type="submit" class="btn" id="button-login"><a id="logintextbutton" href="{{ route('userhomepage') }}">LOGIN</a></button>
                                            </div>

                                            <a class="d-grid gap-4 justify-content-center" href=""
                                                style="color:#ffffff; text-decoration: solid;">FORGOT
                                                PASSWORD</a>
                                            <a class="d-grid gap-4 justify-content-center" href=""
                                                style="color:#ffffff; text-decoration: solid;">REGISTRATION</a>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <button onclick="topFunction()" id="myBtn" title="Go to top">
                                <img src="{{ asset('img/button_scroll_up.png') }}">
                            </button>

                            <style>
                                body {
                                    font-family: Arial, Helvetica, sans-serif;
                                    font-size: 20px;
                                }

                                #myBtn {
                                    display: none;
                                    position: fixed;
                                    bottom: 20px;
                                    right: 30px;
                                    z-index: 99;
                                    font-size: 18px;
                                    border: none;
                                    outline: none;
                                    cursor: pointer;
                                }

                            </style>

                            <script>
                                //Get the button
                                var mybutton = document.getElementById("myBtn");

                                // When the user scrolls down 20px from the top of the document, show the button
                                window.onscroll = function() {
                                    scrollFunction()
                                };

                                function scrollFunction() {
                                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                                        mybutton.style.display = "block";
                                    } else {
                                        mybutton.style.display = "none";
                                    }
                                }

                                // When the user clicks on the button, scroll to the top of the document
                                function topFunction() {
                                    document.body.scrollTop = 0;
                                    document.documentElement.scrollTop = 0;
                                }
                            </script>




                        </div>
                    </div>
                </div>

                <div class="col-2">

                    <div class="prayertime-container" style="height:20rem;">
                        <p class="title">PRAYER TIME </p>
                        <p class="city">Location : </p>

                        {{-- <table style="width:100%">
                            <tr>
                            <td class="latitude"></td>
                            <td class="longitude"></td>
                            </tr>
                        </table> --}}

                        <p class="gregorian">Date : </p>
                        <p class="hijri">Islamic Date : </p>

                        <table class="tableprayertime">

                            <tr>
                                <td>Subuh</td>
                                <td class="Fajr"></td>
                            </tr>

                            <tr>
                                <td>Zohor</td>
                                <td class="Dhuhr"></td>
                            </tr>

                            <tr>
                                <td>Asar</td>
                                <td class="Asr"></td>
                            </tr>

                            <tr>
                                <td>Maghrib</td>
                                <td class="Maghrib"></td>

                            </tr>
                            <tr>
                                <td>Isyak</td>
                                <td class="Isha"></td>
                            </tr>

                        </table>


                    </div>
                </div>



                <div class="col-2">
                    <div class="weather-container" style="height:20rem;">
                        <p class="title">WEATHER</p>
                        <p class="name">Location : </p>
                        <img class="icon">
                        <p class="weather">Type : </p>
                        <p class="description">Description : </p>
                        <p class="temp"></p>
                    </div>
                </div>


                <div class="col-2">
                    <div class="card" style="height:20rem;">
                        <div class="card-body shadow-default" id="calendar">

                            <!--javascript-->
                            <script src="{{ URL::asset('js/dycalendar.min.js') }}" />
                            </script>

                            <script>
                                dycalendar.draw({
                                    target: "#calendar",
                                    type: "month",
                                    highlighttoday: true
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    </div>


@section('page-content-two')
    <section id="rndsystem" class="relative min-h-screen flex items-center"
        style="background-image: url(../img/section_rnd_system.png);">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl" style="color:#FFFFFF;">R&D SYSTEM</span></h2>
            <!--<h3 class="text-2xl sm:text-4xl italic text-black">with Adzwandghani</h3>-->
            <!--</div>-->

            <div class="container" style="margin-top:50px; margin-bottom:50px;">
                <div class="row">
                    <div class="row justify-content-center text-center">
                        <div class="col-2">
                            <div class="cardrndsystem" style="width: 200px; height:320px; padding-right:5px;">
                                <div class="card-body">
                                    <img id="rndsystemimg" src="{{ asset('img/manhour.png') }}" class="d-block w-100"
                                        alt="...">
                                    <h5 id="rndsystemfont" class="card-title" style="color:#000000;">MANHOUR<br>SYSTEM
                                    </h5>
                                    <a href="#" class="button-33">VIEW</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="cardrndsystem" style="width: 200px; height:320px; padding-right:5px;">
                                <div class="card-body">
                                    <img src="{{ asset('img/doccentralize.png') }}" class="d-block w-100" alt="...">
                                    <h5 id="rndsystemfont" class="card-title" style="color:#000000;">DOCUMENT CENTRALIZE
                                    </h5>
                                    <a href="#" class="button-33">VIEW</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-2">
                            <div class="cardrndsystem" style="width: 200px; height:320px; padding-right:5px;">
                                <div class="card-body">
                                    <img src="{{ asset('img/docnumbering.png') }}" class="d-block w-100" alt="...">
                                    <h5 id="rndsystemfont" class="card-title" style="color:#000000;">DOCUMENT NUMBERING
                                    </h5>
                                    <a href="#" class="button-33">VIEW</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-2">
                            <div class="cardrndsystem" style="width: 200px; height:320px; padding-right:5px;">
                                <div class="card-body">
                                    <img src="{{ asset('img/ssr.png') }}" class="d-block w-100" alt="...">
                                    <h5 id="rndsystemfont" class="card-title" style="color:#000000;">R&D
                                        SERVICE<br>REQUEST
                                    </h5>
                                    <a href="#" class="button-33">VIEW</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="cardrndsystem" style="width: 200px; height:320px; padding-right:5px;">
                                <div class="card-body">
                                    <img src="{{ asset('img/fmpwebapp.png') }}" class="d-block w-100" alt="...">
                                    <h5 id="rndsystemfont" class="card-title" style="color:#000000;">FMP WEB<br>APP</h5>
                                    <a href="#" class="button-33">VIEW</a>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="container" style="margin-top:50px; margin-bottom:50px;">
                    <div class="row">
                        <div class="row d-flex justify-content-center text-center">

                            <div class="col-2">
                                <div class="cardrndsystem" style="width: 200px; height:320px; padding-right:5px;">
                                    <div class="card-body">
                                        <img src="{{ asset('img/edelearning.png') }}" class="d-block w-100" alt="...">
                                        <h5 id="rndsystemfont" class="card-title" style="color:#000000;">
                                            ED<br>e-LEARNING
                                        </h5>
                                        <a href="#" class="button-33">VIEW</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="cardrndsystem" style="width: 200px; height:320px; padding-right:5px;">
                                    <div class="card-body">
                                        <img src="{{ asset('img/edms.png') }}" class="d-block w-100" alt="...">
                                        <h5 id="rndsystemfont" class="card-title" style="color:#000000;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp EDMS &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h5>
                                        <a href="#" class="button-33">VIEW</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="cardrndsystem" style="width: 200px; height:320px; padding-right:5px;">
                                    <div class="card-body">
                                        <img src="{{ asset('img/vms.png') }}" class="d-block w-100" alt="...">
                                        <h5 id="rndsystemfont" class="card-title" style="color:#000000;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp VMS &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h5>
                                        <a href="#" class="button-33">VIEW</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-2">
                                <div class="cardrndsystem" style="width: 200px; height:320px; padding-right:5px;">
                                    <div class="card-body">
                                        <img src="{{ asset('img/itasset.png') }}" class="d-block w-100" alt="...">
                                        <h5 id="rndsystemfont" class="card-title" style="color:#000000;">IT
                                            ASSET<br>BOOKING</h5>
                                        <a href="#" class="button-33">VIEW</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-2">
                                <div class="cardrndsystem" style="width: 200px; height:320px; padding-right:5px;">
                                    <div class="card-body">
                                        <img src="{{ asset('img/guess.png') }}" class="d-block w-100" alt="...">
                                        <h5 id="rndsystemfont" class="card-title" style="color:#000000;">GUESS ENTRANCE
                                            SYSTEM</h5>
                                        <a href="#" class="button-33">VIEW</a>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

    </section>

@section('page-content-three')
    <section id="blankform" class="relative min-h-screen flex items-center"
        style="background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgb(178 206 135) 0%, rgba(126,215,14,0) 100%)">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl" style="color:#000000;">BLANK FORM</span></h2>

            <div class="container mx-auto" style="margin-top:50px; margin-bottom:50px;">
                <div class="row">
                    <div class="row">
                        <div class="col-6">
                            <div class="relative flex items-center">
                                <img src="{{ asset('img/blank_form.gif') }}">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="d-grid gap-2" style="padding-top:220px;">

                                <div>
                                    <ul id="stack">
                                        <li id="stackli">
                                            <a href="{{ route('generalform') }}">
                                                <span id="stackspan"></span>
                                                <span id="stackspan"></span>
                                                <span id="stackspan"></span>
                                                <span id="stackspan"></span>
                                                <span id="stackspan" class="fa fa-facebook">GENERAL</span>
                                            </a>
                                        </li>
                                        <li id="stackli">
                                            <a href="{{ route('technicaladministration') }}">
                                                <span id="stackspan"></span>
                                                <span id="stackspan"></span>
                                                <span id="stackspan"></span>
                                                <span id="stackspan"></span>
                                                <span id="stackspan" class="fa fa-twitter">TA</span>
                                            </a>
                                        </li>
                                        <li id="stackli">
                                            <a href="{{ route('engineeringinformation') }}">
                                                <span id="stackspan"></span>
                                                <span id="stackspan"></span>
                                                <span id="stackspan"></span>
                                                <span id="stackspan"></span>
                                                <span id="stackspan" class="fa fa-instagram">EI</span>
                                            </a>
                                        </li>
                                        <li id="stackli">
                                            <a href="{{ route('dmc') }}">
                                                <span id="stackspan"></span>
                                                <span id="stackspan"></span>
                                                <span id="stackspan"></span>
                                                <span id="stackspan"></span>
                                                <span id="stackspan" class="fa fa-linkedin">DMC</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>


                                {{-- <button class="btn" type="button">GENERAL FORM</button>
                                <button class="btn" type="button">TECHNICAL ADMINISTRATION</button>
                                <button class="btn" type="button">ENGINEERING INFORMATION</button>
                                <button class="btn" type="button">DMC</button> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@section('page-content-four')
    <section id="article" class="flex items-center" style="background-image: url(../img/curve-up.png);">
        <div class="container mx-auto text-center">

            <div class="container mx-auto" style="margin-top:50px; margin-bottom:50px;">
                <div class="row">
                    <div class="row">
                        <div class="col-6">
                            <div class="card relative flex items-center" id="card-article">
                                <div class="card-body"
                                    style="background:linear-gradient(180deg, rgba(2,0,36,1) 0%, rgb(26, 101, 133) 0%, rgba(43,168,185,1) 100%">
                                    <h1 class="card-title" style="color:#ffffff;">LATEST ARTICLE</h1>

                                    <div class="cardarticle">
                                        <div class="card-body d-grid gap-2">
                                            <a href="#" class="btn btn-primary">SHE MESSAGE</a>
                                            <a href="#" class="btn btn-primary">MVA MESSAGE</a>
                                            <a href="#" class="btn btn-primary">MESSAGE FROM MR TAKAHASHI</a>
                                            <a href="#" class="btn btn-primary">SALES VOLUMES OF EACH BRAND IN NOV 2018</a>
                                            <a href="#" class="btn btn-primary">SALES VOLUMES OF EACH BRAND IN DEC 2018</a>
                                            <a href="#" class="btn btn-primary">SALES VOLUMES OF EACH BRAND IN JAN 2019</a>
                                            <a href="#" class="btn btn-primary">SALES VOLUMES OF EACH BRAND IN NOV 2019</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="relative flex items-center">
                                <img src="{{ asset('img/article.gif') }}">
                                </lottie-player>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@section('page-content-five')
    <section id="quicklink" class="relative flex items-center" style="background-color:#f2f2f2">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl" style="color:#000000;">QUICK LINK</span></h2>

            <div class="container" style="margin-top:50px; margin-bottom:50px;">
                <div class="row">
                    <div class="row d-flex justify-content-center text-center">

                        <div class="col-2">
                            <a href="#">
                                <img src="{{ asset('img/mrsb.png') }}" class="d-block w-100" alt="...">
                            </a>
                        </div>

                        <div class="col-2">
                            <a href="#">
                                <img src="{{ asset('img/peoplesoft.png') }}" class="d-block w-100" alt="...">
                            </a>
                        </div>


                        <div class="col-2">
                            <a href="#">
                                <img src="{{ asset('img/servicedesk.png') }}" class="d-block w-100" alt="...">
                            </a>
                        </div>


                        <div class="col-2">
                            <a href="#">
                                <img src="{{ asset('img/empicom.png') }}" class="d-block w-100" alt="...">
                            </a>
                        </div>

                        <div class="col-2">
                            <a href="#">
                                <img src="{{ asset('img/p2staffgo.png') }}" class="d-block w-100" alt="...">
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
