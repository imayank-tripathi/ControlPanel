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
    <link href="{{URL::asset("/Layouts/vertical-dark-menu/css/light/loader.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset("/Layouts/vertical-dark-menu/css/dark/loader.css")}}" rel="stylesheet" type="text/css" />
    <script src="{{URL::asset("/Layouts/vertical-dark-menu/loader.js")}}"></script>
    <!-- <script src="{{URL::asset("/Layouts/vertical-light-menu/loader.js")}}"></script> -->
    <!-- Include SweetAlert CSS file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{URL::asset("/src/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset("/Layouts/vertical-dark-menu/css/light/plugins.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset("/Layouts/vertical-dark-menu/css/dark/plugins.css")}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{URL::asset("/src/plugins/src/apex/apexcharts.css")}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset("/src/assets/css/light/dashboard/dash_1.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset("/src/assets/css/dark/dashboard/dash_1.css")}}" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link href="{{URL::asset("/src/assets/css/custom.css")}}" rel="stylesheet" type="text/css">
    <style>
        body.dark .layout-px-spacing {
            padding: 0 30px !important;
            min-height: calc(100vh - 112px) !important;
        }
    </style>
</head>
<body class="layout-boxed enable-secondaryNav">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512" crossorigin="anonymous"></script>

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <div class="loading hidden">Loading&#8230;</div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">
        <header class="header navbar navbar-expand-sm expand-header">

            <!-- <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a> -->
            
            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    
                       {{--  <img src="{{URL::asset("/src/assets/img/logo.svg")}}" class="navbar-logo" alt="logo"> --}}
                    
                </li>
                <li class="nav-item theme-text">
                    <a href="{{ url('') }}" class="nav-link">AI Powered HCL LIBRESPACE 3.0</a>
                </li>
            </ul>


            <ul class="navbar-item flex-row ms-lg-auto ms-0 action-area">

                <li class="nav-item dropdown language-dropdown">
                    <!-- <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{URL::asset("/src/assets/img/1x1/us.svg")}}" class="flag-width" alt="flag">
                    </a> -->
                    <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                        <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="{{URL::asset("/src/assets/img/1x1/us.svg")}}" class="flag-width" alt="flag"> <span class="align-self-center">&nbsp;English</span></a>
                        
                    </div>
                </li>

                <li class="nav-item theme-toggle-item">
                    <a href="javascript:void(0);" class="nav-link theme-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon dark-mode"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun light-mode"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    </a>
                </li>

             

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-container">
                            <div class="avatar avatar-sm avatar-indicators avatar-online">
                                @php 
                                $img = !empty(auth()->user()->photo) ? auth()->user()->photo : 'src/assets/img/avi.JPG';
                                @endphp
                                <img alt="" src="{{URL::asset($img)}}" class="rounded-circle">
                            </div>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <div class="emoji me-2">
                                    &#x1F44B;
                                </div>
                                <div class="media-body">
                                    <h5>{{session('azure_display_name')}}</h5>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- <div class="dropdown-item">
                            <a href="user-profile.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>Profile</span>
                            </a>
                        </div> -->
                        
                        <div class="dropdown-item">
                            <a href="{{URL::to('/logout')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                    
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('user.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">
                    <!--  BEGIN BREADCRUMBS  -->
                    <div class="secondary-nav">
                        <div class="breadcrumbs-container" data-page-heading="Analytics">
                            <header class="header navbar navbar-expand-sm">
                                <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                </a>
                                
                            </header>
                        </div>
                    </div>
                    <!--  END BREADCRUMBS  -->
                <!-- START Dashboard -->
                    @yield('user_content')
                    
                <!-- END Dashboard -->       

                </div>

            </div>
           <!--  BEGIN FOOTER  -->
            
            @include('user.footer')
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{URL::asset("/src/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{URL::asset("/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js")}}"></script>
    <script src="{{URL::asset("/src/plugins/src/mousetrap/mousetrap.min.js")}}"></script>
    <script src="{{URL::asset("/src/plugins/src/waves/waves.min.js")}}"></script>
    <script src="{{URL::asset("/Layouts/vertical-dark-menu/app.js")}}"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!-- <script src="{{URL::asset("/src/plugins/src/apex/apexcharts.min.js")}}"></script>
    <script src="{{URL::asset("/src/assets/js/dashboard/dash_1.js")}}"></script> -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<!-- Include SweetAlert JavaScript file -->
   <!-- SweetAlert -->
  {{--  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
