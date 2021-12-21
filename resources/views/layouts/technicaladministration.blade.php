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
                    <div style="border:0px !important; margin-top:50px; margin-bottom:200px;">
                        <h1 id="aboutus">TECHNICAL ADMINISTRATION FORM</h1>

                        <h3 class="h3">Technical Administration Form</h3>
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
                                    <td>Access Control List Request Form (ACL) Form</td>
                                    <td>Blank Form</td>
                                    <td>
                                        <a class="link "
                                            href="\applications\assets\images\homepage\blankform\TA\access_control_list_request_form.pdf"
                                            target="_blank"><button class="button">View</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">2.</th>
                                    <td>Secured Door Access Form</td>
                                    <td>Security Access</td>
                                    <td>
                                        <a class="link "
                                            href="\applications\assets\images\homepage\blankform\TA\secured_door_access_form.pdf"
                                            target="_blank"><button class="button">View</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">3.</th>
                                    <td>Maintenance Service Request Form</td>
                                    <td>Admin</td>
                                    <td>
                                        <a class="link"
                                            href="\applications\assets\images\homepage\blankform\TA\maintenance_service_request_form.pdf"
                                            target="_blank"><button class="button">View</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">4.</th>
                                    <td>R&D Chemical Store Access Permission Form</td>
                                    <td>Blank Form</td>
                                    <td>
                                        <a class="link"
                                            href="\applications\assets\images\homepage\blankform\TA\R&D CHEMICAL STORE ACCESS PERMISSION.xlsx"><button
                                                class="button">Download</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <h3 class="h3">Technical Administration (Visitor Form)</h3>
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
                                    <td>Non-Disclosure Undertaking Form</td>
                                    <td>Blank Form</td>
                                    <td>
                                        <a class="link "
                                            href="\applications\assets\images\homepage\blankform\TA_VISITOR\update_ndu_form.pdf"
                                            target="_blank"><button class="button">View</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">2.</th>
                                    <td>Letter of Commitment Form</td>
                                    <td>Blank Form</td>
                                    <td>
                                        <a class="link "
                                            href="\applications\assets\images\homepage\blankform\TA_VISITOR\letter_of_commitment_form.pdf"
                                            target="_blank"><button class="button">View</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">3.</th>
                                    <td>Usage Device and Equipment in R&D</td>
                                    <td>Security Access</td>
                                    <td>
                                        <a class="link "
                                            href="\applications\assets\images\homepage\blankform\TA_VISITOR\request_for_usage_of_devices_equipment.pdf"
                                            target="_blank"><button class="button">View</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">4.</th>
                                    <td>Perodua Visitor Approval Form</td>
                                    <td>Blank Form</td>
                                    <td>
                                        <a class="link "
                                            href="\applications\assets\images\homepage\blankform\TA_VISITOR\Perodua_Visitors_Approval_Form_Blank.pdf"
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
