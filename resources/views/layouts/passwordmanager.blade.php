@include('layouts/default')


@section('page-content')

    <head>
        {{-- Adding Datatable Style cdn --}}
        <link rel="stylesheet" href="{{ asset('DataTables/jquery.dataTables.min.css') }}" />
        {{-- Adding JQuery cdn --}}
        <script src="{{ URL::asset('DataTables/jquery-3.5.1.js') }}"></script>
        {{-- Adding Datatable cdn --}}
        <script src="{{ URL::asset('DataTables/jquery.dataTables.min.js') }}"></script>
        {{-- Initializing Database --}}
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });

            $(document).ready(function() {
                $('#example2').DataTable();
            });
        </script>

    </head>
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

            <h1 id="aboutus">PASSWORD MANAGER</h1>
            <div class="w3-show-inline-block">
                <div class="w3-bar">
                    <button class="buttonadminsetting">
                        <a id="abuttonsetting" href="{{ route('passwordmanager') }}">HOME</a>
                    </button>
                    <button class="buttonadminsetting">
                        <a id="abuttonsetting" href="{{ route('passwordmanagerview') }}">VIEW</a>
                    </button>
                    <button class="buttonadminsetting">
                        <a id="abuttonsetting" href="{{ route('passwordmanageraddnew') }}">ADD NEW</a>
                    </button>
                </div>
            </div>

            <div class="col-12 cardadministrator justify-content-center" style="margin:auto; margin-bottom:20px;">
                <h1 id="h2">PASSWORD MANAGER ACTIVITY LOGS</h1>
                <table id="example" class="display" style="width:100%; margin:auto;">
                    <thead>
                        <tr>
                            <th>NAME</th>
                            <th>LAST ACTIVITY</th>
                            <th>DATE</th>
                            <th>TIME</th>
                            <th>IP ADDRESS</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>MUHAMAD ADZWAN BIN MOHAMAD GHANI</td>
                            <td>LOGIN TO EI PASS MGR</td>
                            <td>28 SEP 2021</td>
                            <td>10.45</td>
                            <td>10.60.4.131</td>
                        </tr>

                        <tr>
                            <td>MUHAMAD ADZWAN BIN MOHAMAD GHANI</td>
                            <td>LOGIN TO EI PASS MGR</td>
                            <td>28 SEP 2021</td>
                            <td>10.45</td>
                            <td>10.60.4.131</td>
                        </tr>

                        <tr>
                            <td>MUHAMAD ADZWAN BIN MOHAMAD GHANI</td>
                            <td>LOGIN TO EI PASS MGR</td>
                            <td>28 SEP 2021</td>
                            <td>10.45</td>
                            <td>10.60.4.131</td>
                        </tr>

                        <tr>
                            <td>MUHAMAD ADZWAN BIN MOHAMAD GHANI</td>
                            <td>LOGIN TO EI PASS MGR</td>
                            <td>28 SEP 2021</td>
                            <td>10.45</td>
                            <td>10.60.4.131</td>
                        </tr>

                        <tr>
                            <td>MUHAMAD ADZWAN BIN MOHAMAD GHANI</td>
                            <td>LOGIN TO EI PASS MGR</td>
                            <td>28 SEP 2021</td>
                            <td>10.45</td>
                            <td>10.60.4.131</td>
                        </tr>

                        <tr>
                            <td>MUHAMAD ADZWAN BIN MOHAMAD GHANI</td>
                            <td>LOGIN TO EI PASS MGR</td>
                            <td>28 SEP 2021</td>
                            <td>10.45</td>
                            <td>10.60.4.131</td>
                        </tr>

                        <tr>
                            <td>MUHAMAD ADZWAN BIN MOHAMAD GHANI</td>
                            <td>LOGIN TO EI PASS MGR</td>
                            <td>28 SEP 2021</td>
                            <td>10.45</td>
                            <td>10.60.4.131</td>
                        </tr>

                        <tr>
                            <td>NORHANIZA BINTI MOHD RADZUAN</td>
                            <td>LOGIN TO EI PASS MGR</td>
                            <td>28 SEP 2021</td>
                            <td>10.45</td>
                            <td>10.60.4.131</td>
                        </tr>

                        <tr>
                            <td>MUHAMAD IKHWAN BIN ISMAIL</td>
                            <td>LOGIN TO EI PASS MGR</td>
                            <td>28 SEP 2021</td>
                            <td>10.45</td>
                            <td>10.60.4.131</td>
                        </tr>

                        <tr>
                            <td>MUHAMMAD FIRDAUS BIN YUSOF</td>
                            <td>LOGIN TO EI PASS MGR</td>
                            <td>28 SEP 2021</td>
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
                © 2021 - Research & Development, Technical Administation - Engineering Information Section by
                LARAVEL
                &nbsp <img src="{{ asset('img/eilogo1.png') }}">
            </a>

            {{-- <ul class="nav col-md-2 justify-content-end">
        </ul> --}}
        </footer>
    </div>
