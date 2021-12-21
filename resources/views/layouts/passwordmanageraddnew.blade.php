@include('layouts/default')


@section('page-content')AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAW

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

            <div class="col-12 borderbackground justify-content-center" style="margin:auto; margin-bottom:20px;">
                <div style="margin:30px;">
                    <a id="atext">PASSWORD CATEGORY :

                    <input type="text" class="form-control" id="exampleInputSystemName"
                        style="border: 1px solid #C4C4C4; box-sizing: border-box; border-radius: 22px; width:30%;">
                    </a>
                </div>

                <div style="margin:30px;">
                    <a id="atext">APPLICATION NAME :</a>

                    <input type="text" class="form-control" id="exampleInputSystemName"
                        style="border: 1px solid #C4C4C4; box-sizing: border-box; border-radius: 22px; width:30%;">
                </div>

                <div style="margin:30px;">
                    <a id="atext">USERNAME :</a>

                    <input type="text" class="form-control" id="exampleInputSystemName"
                        style="border: 1px solid #C4C4C4; box-sizing: border-box; border-radius: 22px; width:30%;">
                </div>

                <div style="margin:30px;">
                    <a id="atext">PASSWORD :</a>

                    <input type="text" class="form-control" id="exampleInputSystemName"
                        style="border: 1px solid #C4C4C4; box-sizing: border-box; border-radius: 22px; width:30%;">
                </div>

                <div style="margin:30px;">
                    <a id="atext">DETAILS :</a>

                    <input type="text" class="form-control" id="exampleInputSystemName"
                        style="border: 1px solid #C4C4C4; box-sizing: border-box; border-radius: 22px; width:30%;">
                </div>

                <div style="margin:30px;">
                    <a id="atext">REMARKS :</a>

                    <input type="text" class="form-control" id="exampleInputSystemName"
                        style="border: 1px solid #C4C4C4; box-sizing: border-box; border-radius: 22px; width:30%;">
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
