<title>Dashboard - About</title>
@extends('layouts.template')
@section('content')
   <!-- header start -->
    {{-- @include('dashboard.source') --}}
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
               <div class="midde_cont">
                <div class="container-fluid">
                   <div class="row column_title">
                      <div class="col-md-12">
                         <div class="page_title">
                            <h2>About Us</h2>
                         </div>
                      </div>
                   </div>
                   <div class="button">
                   <a href="{{route ('about.create')}}" class="btn cur-p btn-info"><i class="fa fa-plus"></i>  Tambah Data</a>
                 </div>
                 <br>
                   <!-- row -->
                   <div class="row">

                      <div class="col-md-12">
                         <div class="white_shd full margin_bottom_30">
                            <div class="full graph_head">
                               <div class="heading1 margin_0">
                                  <h2>About Us</h2>
                               </div>
                            </div>
                            <div class="table_section padding_infor_info">
                               <div class="table-responsive-sm">
                                  <table class="table">
                                     <thead>
                                        <tr>
                                           <th>Gambar 1</th>
                                           <th>Gambar 2</th>
                                           <th>Gambar 3</th>
                                           <th>Gambar 4</th>
                                           <th>Tentang Hotel</th>
                                           <th>Action</th>
                                        </tr>
                                    </thead>
                                    @forelse ($abouts as $a)

                                     <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ url('storage'). '/'.$a->thumbabout1 }}" alt="gambar1" style="width: 100px; height: 100px">
                                            </td>
                                            <td>
                                                <img src="{{ url('storage'). '/'.$a->thumbabout2 }}" alt="gambar2" style="width: 100px; height: 100px">
                                            </td>
                                            <td>
                                                <img src="{{ url('storage'). '/'.$a->thumbabout3 }}" alt="gambar3" style="width: 100px; height: 100px">
                                            </td>
                                            <td>
                                                <img src="{{ url('storage'). '/'.$a->thumbabout4 }}" alt="gambar4" style="width: 100px; height: 100px">
                                            </td>
                                           <td>{{$a->slugabout}}</td>
                                           <td><button type="button" class="btn cur-p btn-warning"><i class="fa fa-edit"></i></button></td>
                                        </tr>
                                     </tbody>
                                     @empty
                                     <div class="alert alert-danger">
                                        Tidak ada About.
                                    </div>
                                     @endforelse
                                  </table>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- footer -->
                <div class="container-fluid">
                   <div class="footer">
                      <p>Copyright © 2024 Designed by Parodit. Just Learning.</p>
                   </div>
                </div>
             </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      @endsection
