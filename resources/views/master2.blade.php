
<!DOCTYPE html>
<html>

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dream Hotel Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('css/app2.css')}}">
  <style>
    .skin-blue .sidebar-menu > li.activea > a:hover {
    border-left-color: #3c8dbc;}

    .skin-blue .sidebar-menu > li.activea > a:hover {
    color: #ffffff;
    background: #1e282c;
}

  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <div class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b>H</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Dream</b>Hotel</span>
    </div>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a class="sidebar-toggle"  data-toggle="push-menu">
        <img src="{{asset('images/aa.png')}}" style="width:20px;height:20px;">
      </a>

      <div class="container">
          <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav">
                  &nbsp;
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  <!--@if (Auth::guest())-->
                      <li><a href="{{ route('login') }}">Login</a></li>

                 <!-- @else
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>
-->
                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                  <!--@endif-->
              </ul>
          </div>
      </div>
      <!-- Navbar Right Menu -->
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"style="font-size:20px;color:white">Dashboard</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{url('Aroom')}}"><i class="fa fa-link"></i> <span>rooms</span></a></li>
        <li class="activea"><a href="{{URL::to('fun_pdf')}}"><i class="fa fa-link"></i> <span> customers feedback </span></a></li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <strong style="font-size:20px">DreamHotel</strong>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>

  </aside>
  <div class="control-sidebar-bg"></div>
</div>

<script src="{{asset('tw/js/app.js')}}"></script>
<script>
 $('#update').on('show.bs.modal', function (event) {
   var button = $(event.relatedTarget) // Button tha t triggered the modal
   var room = button.data('room') // Extract info from data-* attributes
   var price = button.data('myprice') // Extract info from data-* attributes
   var roomid=button.data('roomid')
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
   var modal = $(this)
   modal.find('.modal-title').text('New message to ' + recipient)
   modal.find('.modal-body #roomType').val(room)
   modal.find('.modal-body #Price').val(price)
   modal.find('.modal-body #roomid').val(roomid)
})
</script>
</body>
</html>
