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
        <div class="row relative flex items-center"
            style="border:0px !important; margin-top:50px; margin-bottom:50px; margin-left:100px; margin-right:100px;">
            <div style="  background-color: rgb(19, 93, 124); width: 2000px; padding: 20px; border-radius: 10px;">
                <div>
                    <a id="hyperlinkadmindashboard" href="{{ route('administrator') }}">ADMINISTRATOR DASHBOARD</a>
                </div>
            </div>

            <h1 id="aboutus">SETTING</h1>
            <div class="w3-show-inline-block">
                <div class="w3-bar">
                    <button class="buttonadminsetting">
                        <a id="abuttonsetting" href="{{ route('setting') }}">System Setting</a>
                    </button>
                    <button class="buttonadminsetting">
                        <a id="abuttonsetting" href="{{ route('settingaddnewsystem') }}">Add New System</a>
                    </button>
                </div>
            </div>

            <div class="col-12 cardadministratorsetting justify-content-center" style="margin-bottom:20px;">
                <div class="container">
                    <div class="row justify-content-center">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrap">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>System Name</th>
                                        <th>System URL</th>
                                        <th>Access</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">23</th>
                                        <td>HOD Manage Staff</td>
                                        <td>cms/usermgmt/my_staff</td>
                                        <td>Superadmin</td>
                                        <td>
                                            <a href="#">
                                                <img src="{{ asset('img/viewbutton.png') }}">    
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">22</th>
                                        <td>CAE Document Manager</td>
                                        <td>rwa/caecon/cae_mancode</td>
                                        <td>Superadmin Administrator</td>
                                        <td>
                                            <a href="#">
                                                <img src="{{ asset('img/viewbutton.png') }}">    
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">21</th>
                                        <td>R&D Online Project Management System</td>
                                        <td>pmo</td>
                                        <td>Superadmin</td>
                                        <td>
                                            <a href="#">
                                                <img src="{{ asset('img/viewbutton.png') }}">    
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">20</th>
                                        <td>Manage Attendance</td>
                                        <td>cms/rasc/showracletter</td>
                                        <td>Superadmin Administrator</td>
                                        <td>
                                            <a href="#">
                                                <img src="{{ asset('img/viewbutton.png') }}">    
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">19</th>
                                        <td>IT Asset Booking</td>
                                        <td>cms/itassetbooking</td>
                                        <td>Superadmin Administrator</td>
                                        <td>
                                            <a href="#">
                                                <img src="{{ asset('img/viewbutton.png') }}">    
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
