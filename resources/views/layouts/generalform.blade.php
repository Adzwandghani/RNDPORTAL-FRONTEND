@include('layouts/default')


@section('page-content')


    <div class="container-fluid">
        <div class="row relative flex items-center">
            <div class="row">

                <div class="col-3">
                    <div class="card" style="border:0px !important; margin-top:50px; margin-bottom:50px;">
                        <div class="card-body">

                            <h1 class="card-title" style="color:#ffffff; text-align:center;">BLANK FORM</h1>
                            <div class="card-body d-grid gap-2">
                                <a href="#" class="btn btn-primary">GENERAL FORM</a>
                                <a href="#" class="btn btn-primary">TECHNICAL ADMINISTRATION</a>
                                <a href="#" class="btn btn-primary">ENGINEERING INFORMATION</a>
                                <a href="#" class="btn btn-primary">DMC</a>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-9">
                    <div style="border:0px !important; margin-top:50px; margin-bottom:550px;">
                        <h1 id="aboutus">GENERAL FORM</h1>

                        <h3 class="h3">R&D Security Access Form</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">DOCUMENT NAME</th>
                                    <th scope="col">CATEGORY</th>
                                    <th scope="col">DOWNLOAD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td>List staff IN/OUT during Rest/public/plant shutdown security form</td>
                                    <td>Security & Secrecy</td>
                                    <td>
                                        <a class="link "
                                            href="\applications\assets\images\homepage\blankform\security\security_form.pdf"
                                            target="_blank"><button class="button">View</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>


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
