   <Title>Dashboard - Hotel Merdeka</Title>
   <!-- header start -->
    @extends('layouts.template')
    @section('content')
   <!-- header end -->
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            @include('dashboard.sidebar')
            <!-- end sidebar -->

            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               @include('dashboard.topbar')
               <!-- end topbar -->
               <!-- dashboard inner -->
               @include('dashboard.content')
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      @endsection

