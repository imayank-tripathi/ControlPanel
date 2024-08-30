<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512" crossorigin="anonymous" />

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Unified Management Portal - Multipurpose Portal for the VDI End user </title>
    <link rel="icon" type="image/x-icon" href="{{URL::asset("/src/assets/img/favicon.ico")}}">
    <link href="{{URL::asset("/Layouts/horizontal-dark-menu/css/light/loader.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset("/Layouts/horizontal-dark-menu/css/dark/loader.css")}}" rel="stylesheet" type="text/css" />
    <script src="{{URL::asset("/Layouts/horizontal-dark-menu/loader.js")}}"></script>
    <!-- Include SweetAlert CSS file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{URL::asset("/src/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset("/Layouts/horizontal-dark-menu/css/light/plugins.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset("/Layouts/horizontal-dark-menu/css/dark/plugins.css")}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{URL::asset("/src/plugins/src/apex/apexcharts.css")}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset("/src/assets/css/light/dashboard/dash_1.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset("/src/assets/css/dark/dashboard/dash_1.css")}}" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link href="{{URL::asset("/src/assets/css/custom.css")}}" rel="stylesheet" type="text/css">
    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-color: #B0BEC5;
            background-repeat: no-repeat;
        }

        .card0 {
            box-shadow: 0px 4px 8px 0px #757575;
            border-radius: 0px;
        }

        .card2 {
            margin: 0px 40px;
        }

        .logo {
            width: 200px;
            height: 145px;
            margin-top: 20px;
            margin-left: 35px;
        }

        .image {
            width: 360px;
            height: 280px;
        }

        .border-line {
            border-right: 1px solid #EEEEEE;
        }

        .facebook {
            background-color: #3b5998;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer;
        }

        .twitter {
            background-color: #1DA1F2;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer;
        }

        .linkedin {
            background-color: #2867B2;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer;
        }

        .line {
            height: 1px;
            
            background-color: #E0E0E0;
            margin-top: 10px;
        }

        .or {
            width: 10%;
            font-weight: bold;
        }

        .text-sm {
            font-size: 14px !important;
        }

        ::placeholder {
            color: #BDBDBD;
            opacity: 1;
            font-weight: 300
        }

        :-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        ::-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        input, textarea {
            padding: 10px 12px 10px 12px;
            border: 1px solid lightgrey;
            border-radius: 2px;
            margin-bottom: 5px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            color: #2C3E50;
            font-size: 14px;
            letter-spacing: 1px;
        }

        input:focus, textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #304FFE;
            outline-width: 0;
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0;
        }

        a {
            color: inherit;
            cursor: pointer;
        }

        .btn-blue {
            background-color: #1A237E;
            width: 150px;
            color: #fff;
            border-radius: 2px;
        }

        .btn-blue:hover {
            background-color: #000;
            cursor: pointer;
        }

        .bg-blue {
            color: #fff;
            background-color: #0F5FDC;
        }

        @media screen and (max-width: 991px) {
            .logo {
                margin-left: 0px;
            }

            .image {
                width: 300px;
                height: 220px;
            }

            .border-line {
                border-right: none;
            }

            .card2 {
                border-top: 1px solid #EEEEEE !important;
                margin: 0px 15px;
            }
            
        }
        .font-we-8{
            font-weight:800;
        }
        .alig-cent{
            align-content:center
        }
        .mr-l-20{
            margin-left: 20px;
        }
    
    </style>
</head>
<body class="layout-boxed enable-secondaryNav">
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row">
                        <img src="src/assets/img/mainlogos.png" class="logo"  style="width: 262px;">
                    </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                        <img src="src/assets/img/banner.png" class="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 alig-cent text-center">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h3 class="mb-0 mr-4 mt-2 font-we-8" >Unified Management Portal</h3>
                        <h3 class="text-center">Citrix Automation</h3>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div>
                    </div>
                    
                    <div class="row mb-4 justify-content-center">
                        <div class="col-12 col-md-6 px-3 text-center">
                            <a href="{{ url('/login') }}" class="list-inline-item bg-linkedin text-white border-0 rounded-3">
                                <img src="src/assets/img/newlog.png" class="logo">
                            </a>
                            @error('message') 
                                <div class="row has-feedback mr-l-20" style='text-align: center'>
                                    <label class="text text-danger">{{$message}}</label>
                                </div>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3 text-center">
                <small class="ml-4 ml-sm-5 mb-2">Copyright © 2024-25 HCLTech, All rights reserved.</small>
            </div>
        </div>
    </div>
</div>
</body>
</html>