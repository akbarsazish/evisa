<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>استار فود</title>

    <link rel="stylesheet" href="{{ url('/resources/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/resources/assets/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('/resources/assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('/resources/assets/css/bootstrap-grid.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ url('/resources/assets/vendor/swiper/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ url('/resources/assets/slicknav/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{ url('/resources/assets/css/mainAdmin.css')}}">
    <link rel="stylesheet" href="{{ url('/resources/assets/css/mediaq.css')}}">
    <link rel="stylesheet" href="{{ url('/resources/assets/css/admin.framework7.bundle.min.css')}}">
    <link rel="stylesheet" href="{{ url('/resources/assets/css/bootstrap-utilities.rtl.min.css')}}">
    <link rel="stylesheet" href="{{ url('/resources/assets/css/datatables.min.css')}}">

    <link rel="stylesheet" href="{{ url('/resources/assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ url('/resources/assets/js/jquery.min.js')}}">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="{{ url('/resources/assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{url('/resources/assets/vendor/swiper/js/swiper.min.js')}}"></script>
    <link rel="icon" type="image/png" href="{{ url('/resources/assets/images/part.png')}}">
</head>
<body>

<div class="container-fluid">
        <ul class="nav nav-tabs" id="nav-tabs">
                <li class="nav-item" id="adminDashboardHome">
                    <a class="nav-link" aria-current="page" href="{{url('adminDashboard')}}"> <i class="fa fa-home fa-lg"></i> صفحه نخست  </a>
                </li>
                <li class="nav-item" id="adminDashboardForm">
                    <a class="nav-link" href="{{url('registrationForm')}}"> <i class="fa fa-list fa-lg" aria-hidden="true"></i> فورم ثبت نام    </a>
                </li>
                <li class="nav-item" id="adminDashboardFinace">
                    <a class="nav-link" href="{{url('adminDashboardFinance')}}" > <i class="fa fa-chart-line fa-lg"> </i>گزارش مالی   </a>
                </li>
                <li class="nav-item" id="adminDashboardFinace">
                    <a class="nav-link" href="{{url('docsList')}}" > <i class="fa fa-list fa-lg"> </i>  لیست اسناد  </a>
                </li>
        </ul>
</div>
    
    @yield('content')

    

<script src="{{url('/resources/assets/slicknav/jquery.slicknav.min.js')}}"></script>
<script src="{{url('/resources/assets/js/jquery.datatable.min.js')}}"></script>
<script src="{{url('/resources/assets/vendor/jquery.countdown.min.js')}}"></script>
<script defer src="{{url('/resources/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('/resources/assets/js/sweetalert.min.js')}}"></script>


<script src="{{url('/resources/assets/vendor/persianumber.min.js')}}"></script>
<script src="{{url('/resources/assets/vendor/elevatezoom.js')}}"></script>
<script src="{{url('/resources/assets/js/script.js') }}"></script>
<script src="{{url('/resources/assets/js/bootstrap.min.js') }}"></script>
<script src="{{url('/resources/assets/js/datatables.min.js') }}"></script>
<script src="{{url('/resources/assets/js/datatable.fixedheader.min.js') }}"></script>
<script src="{{url('/resources/assets/js/datatable-responsive.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

     <script>
	var currentUrl = window.location.pathname;
    
	if (currentUrl == '\/adminDashboard') {
		$("#adminDashboardHome").addClass("activeLinks");
        $("#adminDashboardForm").removeClass("activeLinks");
        $("#adminDashboardFinace").removeClass("activeLinks");
	}
    if (currentUrl == '\/registrationForm') {
		$("#adminDashboardForm").addClass("activeLinks");
        $("#adminDashboardHome").removeClass("activeLinks");
        $("#adminDashboardFinace").removeClass("activeLinks");
	}
    if (currentUrl == '\/adminDashboardFinance') {
		$("#adminDashboardFinace").addClass("activeLinks");
        $("#adminDashboardForm").removeClass("activeLinks");
        $("#adminDashboardHome").removeClass("activeLinks");
	}
     </script>
</body>
</html>
