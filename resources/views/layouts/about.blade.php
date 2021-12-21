@include('layouts/default')


@section('page-content')

<div class="container-fluid">
    <div class="row relative flex items-center">


            {{-- <div class="col-3">
                <div class="card" style="border:0px !important; margin-top:50px; margin-bottom:50px;"> --}}
                    {{-- <div class="card-body">

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
                    </div> --}}
                {{-- </div>
            </div> --}}

            <div class>
                <div style="border:0px !important; margin-top:50px; margin-bottom:50px; margin-left:100px; margin-right:100px;">
                    <h1 id="aboutus">ABOUT US</h1>
                    <img src="{{ asset('img/aboutus.png') }}" style="margin:auto;">
                    <br>
                    <br>
                    <p id="paragraphaboutus"> &nbsp &nbsp <b>P</b>erodua’s R&D Division is located within the group’s headquarters in Sungai Choh, Rawang. The R&D Division occupies an area of more than 100,000 m². It started operations in January 1996 with a team of 8 engineers and a manager but has since grown rapidly into a major division with some 350 staff. Perodua’s R&D has the highest concentration of engineers and designers in the group of which comprises of 80% from its total staffs.
                        <br>
                        <br>
                        &nbsp &nbsp <b>T</b>here are five departments within the R&D and they are Product Planning, Styling & Modelling, Engineering Design, Testing & Experimental and Technical Administation. Within these departments are sections which are assigned specific tasks. Perodua has invested some RM97 million in the last 13 years on facilities alone and more than RM1.5 billion on model development. This underlines Perodua’s strong commitment to the localisation policy and in-house development capabilities, as well as the government’s aspiration to see local companies enhance their R&D expertise. Perodua’s R&D capabilities include the development of ‘full skin-change’ and some structural related changes.
                        <br>
                        <br>
                        &nbsp &nbsp <b>I</b>n the near future, Perodua’s R&D plans to increase its expertise in developing its own ‘full upper-body’ and ‘floor development.’ To date, the R&D has already developed 8 models in-house, beginning with simple cosmetic changes and gradually increasing the capabilities to skin change and structural modifications. Our strategic partnership with Daihatsu Motor Co. Ltd (DMC) allows us to tap into the technologically advanced facilities and manpower expertise of DMC to support our local engineers during our research and development stage. This smart partnership and efficient technology transfer enables Perodua’s R&D to accelerate its capabilities and to venture into new technologies with confidence.</p>
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

