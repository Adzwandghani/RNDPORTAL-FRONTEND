@include('layouts/default')


@section('page-content')

    <head>
        {{-- Adding Datatable Style cdn --}}
        <link rel="stylesheet" href="{{asset('DataTables/jquery.dataTables.min.css')}}" />
        {{-- Adding JQuery cdn --}}
        <script src="{{URL::asset('DataTables/jquery-3.5.1.js')}}"></script>
        {{-- Adding Datatable cdn --}}
        <script src="{{URL::asset('DataTables/jquery.dataTables.min.js')}}"></script>
        {{-- Initializing Database --}}
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );

            $(document).ready(function() {
                $('#example2').DataTable();
            } );
        </script>

    </head>

    <div class="container-fluid">
        <div class="row relative flex items-center">
            <div class="row relative flex items-center">
                <div style="border:0px !important; margin-top:50px; margin-bottom:50px;">
                <h1 id="aboutus">ADMINISTRATOR'S DASHBOARD</h1>
                </div>

                <div class="card-body">
                    <div class="cardadministrator justify-content-center">
                        <a id="administratorsettingheadertext">SETTINGS</a>
                        
                        <div class="row justify-content-center text-center">
                            <div class=col-2>
                                <img data-inline="true" src="{{ asset('img/settings.png') }}" style="margin:auto;">
                                <a href="{{ route('setting') }}" id="administratorsubsetting" style="text-align: center; padding:auto;">SETTING</a>
                            </div>
                            <div class=col-2>
                                <img data-inline="true" src="{{ asset('img/access.png') }}" style="margin:auto;">
                                <a href="{{ route('access') }}" id="administratorsubsetting" style="text-align: center; padding:auto;">ACCESS PERMISSION</a>
                            </div>
                            <div class=col-2>
                                <img data-inline="true" src="{{ asset('img/usermanagement.png') }}" style="margin:auto;">
                                <a href="{{ route('usermgmt') }}" id="administratorsubsetting" style="text-align: center; padding:auto;">USER MANAGEMENT</a>
                            </div>
                            <div class=col-2>
                                <img data-inline="true" src="{{ asset('img/password.png') }}" style="margin:auto;">
                                <a href="{{ route('passwordmanager') }}" id="administratorsubsetting" style="text-align: center; padding:auto;">PASSWORD MANAGER</a>
                            </div>
                            <div class=col-2>
                                <img data-inline="true" src="{{ asset('img/content.png') }}" style="margin:auto;">
                                <a href="{{ route('contentmanager') }}" id="administratorsubsetting" style="text-align: center; padding:auto;">CONTENT MANAGER</a>
                            </div>
                            <div class=col-2>
                                <img data-inline="true" src="{{ asset('img/usersoftware.png') }}" style="margin:auto;">
                                <a href="{{ route('usersoftware') }}" id="administratorsubsetting" style="text-align: center; padding:auto;">USER SOFTWARE</a>
                            </div>
                        </div>
                    </div>

                </div>
                
                    <div class="col-6 cardadministrator justify-content-center" style="margin:auto; margin-bottom:20px;">
                        <h1 id="h2"><span style="color:green;">USER'S</span> ACTIVITY LOGS</h1>
                            <table id="example" class="display" style="width:100%; margin:auto;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Last Activity</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>IP Address</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MOHD AMIRUDDIN BIN BADRODDIN</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>NOR ASHIKIN BINTI SALIM</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>NORHANIZA BINTI MOHD RADZUAN</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>MUHAMAD ADZWAN BIN MOHAMAD GHANI</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>ATIQAH BINTI KAMARUZAMAN</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>NORHAYATY BINTI YAKUP</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>MUHAMAD IKHWAN BIN ISMAIL</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>MUHAMMAD FIRDAUS BIN YUSOF</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>NORHANIZA BINTI MOHD RADZUAN</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>NORHAYATY BINTI YAKUP</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>
                            </table>
                    </div>


                    <div class="col-6 cardadministrator justify-content-center" style="margin:auto; margin-bottom:20px;">
                        <h1 id="h2"><span style="color:red;">ADMIN'S</span> ACTIVITY LOGS</h1>
                                <table id="example2" class="display" style="width:100%; ">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Last Activity</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>IP Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MOHD AMIRUDDIN BIN BADRODDIN</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>NOR ASHIKIN BINTI SALIM</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>NORHANIZA BINTI MOHD RADZUAN</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>MUHAMAD ADZWAN BIN MOHAMAD GHANI</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>ATIQAH BINTI KAMARUZAMAN</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>NORHAYATY BINTI YAKUP</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>MUHAMAD IKHWAN BIN ISMAIL</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>MUHAMMAD FIRDAUS BIN YUSOF</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>NORHANIZA BINTI MOHD RADZUAN</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>

                                    <tr>
                                        <td>NORHAYATY BINTI YAKUP</td>
                                        <td>Login</td>
                                        <td>28 SEPTEMBER 2021</td>
                                        <td>10.45</td>
                                        <td>10.60.4.131</td>
                                    </tr>
                                    
                                </table>
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
