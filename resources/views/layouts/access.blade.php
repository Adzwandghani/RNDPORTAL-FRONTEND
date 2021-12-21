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

            <h1 id="aboutus">ACCESS PERMISSION</h1>

            <div id="bordershadow">
                <div style="margin:30px;">
                    <a id="atext">Role Name :</a>
                    <br>
                    <input type="text" class="form-control" id="exampleInputSystemName"
                        style="border: 1px solid #C4C4C4; box-sizing: border-box; border-radius: 22px; width:30%;">
                </div>

                <div style="margin:30px;">
                    <a id="atext">Description :</a>
                    <br>
                    <input type="text" class="form-control" id="exampleInputSystemName"
                        style="border: 1px solid #C4C4C4; box-sizing: border-box; border-radius: 22px; width:30%;">
                </div>

                <div class="row justify-content-center text-center">
                    <button class="buttonadminsettingsave">
                        <a id="abuttonsettingsave">ADD NEW ROLE</a>
                    </button>
                </div>
            </div>

            <div id="bordershadow">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ROLE TYPE</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                    <th>MANAGE USERS</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <th scope="row">Superadmin</th>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('img/edit.png') }}">    
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('img/delete.png') }}">    
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('img/manageuser.png') }}">    
                                        </a>
                                    </td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <th scope="row">Administrator</th>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('img/edit.png') }}">    
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('img/delete.png') }}">    
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('img/manageuser.png') }}">    
                                        </a>
                                    </td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <th scope="row">Users</th>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('img/edit.png') }}">    
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('img/delete.png') }}">    
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img src="{{ asset('img/manageuser.png') }}">    
                                        </a>
                                    </td>
                                    <td>300</td>
                                </tr>

                            </tbody>
                        </table>
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
