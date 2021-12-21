@include('layouts/default')


@section('page-content')
    <style>
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

    </style>

    <div class="container-fluid">
        <div class="row relative flex items-center">
            <div class="row">

                <div class="col-3">
                    <div class="card" style="border:0px !important; margin-top:50px; margin-bottom:50px;">
                        <div class="card-body">

                            <h1 class="card-title" style="color:#ffffff; text-align:center;">R&D SYSTEM</h1>
                            <div class="card-body d-grid gap-2">
                                <a href="#" class="btn btn-primary">RTMS</a>
                                <a href="#" class="btn btn-primary">DCMS</a>
                                <a href="#" class="btn btn-primary">DOCUMENT NUMBERING</a>
                                <a href="#" class="btn btn-primary">RNDSSR</a>
                                <a href="#" class="btn btn-primary">FMP WEB APPLICATION</a>
                                <a href="#" class="btn btn-primary">ED e-LEARNING</a>
                                <a href="#" class="btn btn-primary">EDMS</a>
                                <a href="#" class="btn btn-primary">VMS</a>
                                <a href="#" class="btn btn-primary">IT ASSET BOOKING</a>
                                <a href="#" class="btn btn-primary">GES</a>
                                <br>
                            </div>

                            <h1 class="card-title" style="color:#ffffff; text-align:center;">BLANK FORM</h1>
                            <div class="card-body d-grid gap-2">
                                <a href="#" class="btn btn-primary">GENERAL FORM</a>
                                <a href="#" class="btn btn-primary">TECHNICAL ADMINISTRATION</a>
                                <a href="#" class="btn btn-primary">ENGINEERING INFORMATION</a>
                                <a href="#" class="btn btn-primary">DMC</a>
                                <br>
                            </div>

                            <h1 class="card-title" style="color:#ffffff; text-align:center;">QUICK LINK</h1>
                            <div class="card-body d-grid gap-2">
                                <a href="#" class="btn btn-primary">MRSB</a>
                                <a href="#" class="btn btn-primary">PEOPLESFOT</a>
                                <a href="#" class="btn btn-primary">SERVICEDESK</a>
                                <a href="#" class="btn btn-primary">EMPICOM</a>
                                <a href="#" class="btn btn-primary">P2STAFFGO</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-9">
                    <div style="border:0px !important; margin-top:50px; margin-bottom:50px;">
                        <h1 id="aboutus">MY PROFILE</h1>
                        <a id="myprofilebutton" href="{{ route('myprofile') }}" data-inline="true">BASIC INFORMATION</a>
                        <a id="myprofilebutton" href="{{ route('roles') }}" data-inline="true">ROLES</a>
                        <a id="myprofilebutton" href="{{ route('hardwareinformation') }}" data-inline="true">HARDWARE
                            INFORMATION</a>
                        <a id="myprofilebutton" href="{{ route('softwareinformation') }}" data-inline="true">SOFTWARE
                            INFORMATION</a>
                    </div>

                    <div>
                        <div class="cardmyprofile justify-content-center">
                            <div class="card-header">
                                HARDWARE INFORMATION
                            </div>
                            <div class="card-body">

                                <div class="row relative flex items-center">
                                    <div class="col-md-5 mx-auto" style="border: 1px solid #C4C4C4;
                                                box-sizing: border-box;
                                                border-radius: 10px;
                                                padding-top: 20px;
                                                padding-bottom: 20px;">
                                        <a id="text" data-inline="true">Monitor : </a>
                                    </div>

                                    <div class="col-md-5 mx-auto" style="border: 1px solid #C4C4C4;
                                                box-sizing: border-box;
                                                border-radius: 10px;
                                                padding-top: 20px;
                                                padding-bottom: 20px;">
                                        <a id="text" data-inline="true">Mouse : </a>
                                    </div>
                                </div>

                                <br>

                                <div class="row relative flex items-center">
                                    <div class="col-md-5 mx-auto" style="border: 1px solid #C4C4C4;
                                                box-sizing: border-box;
                                                border-radius: 10px;
                                                padding-top: 20px;
                                                padding-bottom: 20px;">
                                        <a id="text" data-inline="true">Keyboard : </a>
                                    </div>

                                    <div class="col-md-5 mx-auto" style="border: 1px solid #C4C4C4;
                                                box-sizing: border-box;
                                                border-radius: 10px;
                                                padding-top: 20px;
                                                padding-bottom: 20px;">
                                        <a id="text" data-inline="true">CPU : </a>
                                    </div>
                                </div>

                                <br>

                                <div class="row relative flex items-center">
                                    <div class="col-md-5 mx-auto" style="border: 1px solid #C4C4C4;
                                                box-sizing: border-box;
                                                border-radius: 10px;
                                                padding-top: 20px;
                                                padding-bottom: 20px;">
                                        <a id="text" data-inline="true">RAM : </a>
                                    </div>

                                    <div class="col-md-5 mx-auto" style="border: 1px solid #C4C4C4;
                                                box-sizing: border-box;
                                                border-radius: 10px;
                                                padding-top: 20px;
                                                padding-bottom: 20px;">
                                        <a id="text" data-inline="true">Manufacturer : </a>
                                    </div>
                                </div>

                                <br>

                                <div class="row relative flex items-center">
                                    <div class="col-md-5 mx-auto" style="border: 1px solid #C4C4C4;
                                                box-sizing: border-box;
                                                border-radius: 10px;
                                                padding-top: 20px;
                                                padding-bottom: 20px;">
                                        <a id="text" data-inline="true">GPU : </a>
                                    </div>

                                </div>



                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- FOOTER --}}

            <div class="container-fluid p-0">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-4"
                    style="background:linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(43,142,185,1) 0%, rgba(43,168,185,1) 100%); ">
                    {{-- <p class="col-md-2 mb-0 text-muted"></p> --}}

                    <a href="#"
                        class="col-md-12 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none"
                        style="color:#ffffff !important;">
                        © 2021 - Research & Development, Technical Administation - Engineering Information Section by
                        LARAVEL
                        &nbsp <img src="{{ asset('img/eilogo1.png') }}">
                    </a>

                    {{-- <ul class="nav col-md-2 justify-content-end">
        </ul> --}}
                </footer>
            </div>
