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
                    <a id="hyperlinkadmindashboard" href="{{ route('administrator') }}">ADMINISTRATOR DASHBOARD </a>
                    <a id="hyperlinkadmindashboard" href="{{ route('setting') }}"> &nbsp SYSTEM SETTING</a>
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
                        <div id="bordershadow">
                            <div style="margin:30px;">
                                <a id="atext">System Name :</a>
                                <br>
                                <input type="text" class="form-control" id="exampleInputSystemName"
                                    style="border: 1px solid #C4C4C4; box-sizing: border-box; border-radius: 22px; width:30%;">
                            </div>

                            <div style="margin:30px;">
                                <a id="atext">System URL :</a>
                                <br>
                                <input type="text" class="form-control" id="exampleInputSystemName"
                                    style="border: 1px solid #C4C4C4; box-sizing: border-box; border-radius: 22px; width:30%;">
                            </div>
                            <div style="margin:30px;">
                                <a id="atext">Access :</a>
                                <div>
                                    <input type="radio" value="SUPERADMIN">
                                    <label for="Superadmin">
                                        <a id="atext">Superadmin</a>
                                    </label><br>

                                    <input type="radio" value="ADMINISTRATOR">
                                    <label for="Administrator">
                                        <a id="atext">Administrator</a>
                                    </label><br>

                                    <input type="radio" value="USER">
                                    <label for="User">
                                        <a id="atext">User</a>
                                    </label>
                                </div>
                            </div>

                            <div class="row justify-content-center text-center">
                                <button class="buttonadminsettingsave">
                                    <a id="abuttonsettingsave">Add New Record</a>
                                </button>
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
