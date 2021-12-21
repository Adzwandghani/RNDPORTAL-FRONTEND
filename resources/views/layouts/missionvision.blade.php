@include('layouts/default')


@section('page-content')


<div class="container-fluid">
    <div class="row relative flex items-center">
        <div class="row">

            {{-- <div class="col-3">
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
            </div> --}}

            <div class="col-12">
                <div style="border:0px !important; margin-top:50px; margin-bottom:50px; margin-left:100px; margin-right:100px;">
                    <h1 id="aboutus">MISSION & VISION</h1>



                    <body>
                        <h2>
                            <span style="font-size:16px"><img src="{{ asset('img/vision_mission1.png') }}" style="width:500px; height: 350px; float:right" ></span>
                        </h2>
                        <h2>
                            <span style="font-size:22px; color:#145f7e;"><strong><u>R&amp;D Vision</u>: Create "Perodua New Global Upper System"</strong></span>
                        </h2>
                        <ul>
                            <li><p><span style="font-size:17px; color:#145f7e;">1. Create a new Perodua own unique upper FMC models</span></p></li>
                            <li><p><span style="font-size:17px; color:#145f7e;">2. Readiness to export to advanced countries (Japan & others)</span></p></li>
                        </ul>
                        
                        <h2>
                            <span style="font-size:22px; color:#145f7e;"><strong><u>R&amp;D Mission</u>:</strong></span>
                        </h2>
                        
                        <p class="space" ><span style="font-size:17px; color:#145f7e;">Build resources with management abilities same as DMC <br>FMC Standard resources established and guide RDDP parts dev to achieve:</span></p>
                            
                        <ol type="1" style="font-size:17px; color:#145f7e;">
                            <li><p><span style="font-size:17px; color:#145f7e;">1. World-Class design & the Group No.1 Cost Performance</span></p></li>
                            <li><p><span style="font-size:17px; color:#145f7e;">2. Achieve quality level equivalent to advanced countries (Japan)</span></p></li>
                            <li><p><span style="font-size:17px; color:#145f7e;">3. Achieve Global Std Fuel Consumption</span></p></li>
                            <li><p><span style="font-size:17px; color:#145f7e;">4. Achieve ASEAN Safety Standard</span></p></li>
                            <li><p><span style="font-size:17px; color:#145f7e;">5. No.1 IQS in Malaysia</span></p></li>
                        </ol>
                        
                        </body>

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
            © 2021 - Research & Development, Technical Administation - Engineering Information Section by LARAVEL
            &nbsp <img src="{{ asset('img/eilogo1.png') }}">
        </a>

        {{-- <ul class="nav col-md-2 justify-content-end">
        </ul> --}}
    </footer>
</div>