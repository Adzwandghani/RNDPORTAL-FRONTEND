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
                    <div style="border:0px !important; margin-top:50px; margin-bottom:500px;">
                        <h1 id="aboutus">DMC FORM</h1>
                        <h3 class="h3">DMC Application Form</h3>
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
                                    <td>DMC Shagai User Application Form</td>
                                    <td>DMC</td>
                                    <td>
                                        <a class="link"
                                            href="\applications\assets\images\homepage\blankform\DMC\DMC_User_Account.xls"><button
                                                class="button">Download</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">2.</th>
                                    <td>DMC Sharing Folder Use Application Form</td>
                                    <td>DMC</td>
                                    <td>
                                        <a class="link "
                                            href="\applications\assets\images\homepage\blankform\DMC\DMC_Sharing_Folder_Use_Application_Form(PMSB).xls"><button
                                                class="button">Download</button></a>
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
