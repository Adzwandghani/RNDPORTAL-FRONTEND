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
        <div class="row relative flex items-center">
            <div class="row">

                <div class="col-3">
                    
                </div>

                <div class="col-9">

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
