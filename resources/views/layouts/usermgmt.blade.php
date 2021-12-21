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

            <h1 id="aboutus">USER MANAGEMENT</h1>
            <div class="w3-show-inline-block">
                <div class="w3-bar">
                    <button class="buttonadminsetting">
                        <a id="abuttonsetting" href="#">Manage Department / Section</a>
                    </button>
                    <button class="buttonadminsetting">
                        <a id="abuttonsetting" href="#">Manage Users</a>
                    </button>
                </div>
            </div>

            <div class="col-5 cardadministrator justify-content-center" style="margin:auto; margin-bottom:20px;">
                <h1 id="h2">USER'S SUMMARY BY <span style="color:green;">POSITION</span></h1>
                <table id="example" class="display" style="width:100%; margin:auto;">
                    <thead>
                        <tr>
                            <th>POSITION</th>
                            <th>TOTAL</th>
                            <th>DETAIL</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>CEO / PRESIDENT</td>
                            <td>0</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>EXECUTIVE DIRECTOR</td>
                            <td>1</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>DIRECTOR</td>
                            <td>0</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>SENIOR GENERAL MANAGER</td>
                            <td>1</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>GENERAL MANAGER</td>
                            <td>3</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>DIV EXECUTIVE COORDINATOR</td>
                            <td>19</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>SENIOR MANAGER</td>
                            <td>17</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>MANAGER</td>
                            <td>9</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>ENGINEERING LEADER</td>
                            <td>20</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>ENGINEER</td>
                            <td>216</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>
                </table>
            </div>


            <div class="col-5 cardadministrator justify-content-center" style="margin:auto; margin-bottom:20px;">
                <h1 id="h2">USER'S SUMMARY BY <span style="color:rgb(49, 0, 128);">GRADE</span></h1>
                <table id="example2" class="display" style="width:100%; ">
                    <thead>
                        <tr>
                            <th>GRADES</th>
                            <th>TOTAL</th>
                            <th>DETAIL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>G24</td>
                        <td>0</td>
                        <td>
                            <a href="#">
                                <img src="{{ asset('img/viewbutton.png') }}">    
                            </a>
                        </td>

                        <tr>
                            <td>G23</td>
                            <td>0</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>G22</td>
                            <td>1</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>G21</td>
                            <td>3</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>G20</td>
                            <td>4</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>G19</td>
                            <td>19</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>G18</td>
                            <td>26</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>G17</td>
                            <td>27</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>G16</td>
                            <td>33</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>G15</td>
                            <td>53</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>G14</td>
                            <td>62</td>
                            <td>
                                <a href="#">
                                    <img src="{{ asset('img/viewbutton.png') }}">    
                                </a>
                            </td>
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
