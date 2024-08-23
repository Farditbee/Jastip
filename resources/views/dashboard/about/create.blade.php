<title>Dashboard - About/create</title>
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
                   {{-- <div class="row column_title">
                      <div class="col-md-12">
                         <div class="page_title">
                            <h2>Custom About Us</h2>
                         </div>
                      </div>
                   </div> --}}
                   <br>
                  <div class="button">
                  <a href="{{ route('about.index')}}" class="btn cur-p btn-danger"><i class="fa fa-chevron-left"></i>  Kembali</a>
                  </div>
                  <br>
                   <!-- row -->
                   @include('landing.layouts.alert')
                   <div class="row">

                      <div class="col-md-12">
                         <div class="white_shd full margin_bottom_30">
                            <div class="full graph_head">
                               <div class="heading1 margin_0">
                                  <h2>Custom About Us</h2>
                                </div>
                            </div>
                            <form action='{{ route('about.store')}}' method='post' enctype="multipart/form-data">
                              @csrf
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gambar 1<span class="text-danger">*</span></label>
                                    <input type="file" name="thumbabout1" value="{{ old('thumbabout1')}}" class="file-upload-default">
                                    <div class="col-sm-9">
                              <!-- error message untuk title -->
                              {{-- @error('thumbabout1')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror --}}
                                    </div>
                                  </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Gambar 2<span class="text-danger">*</span></label>
                                  <input type="file" name="thumbabout2" value="{{ old('thumbabout2')}}" class="file-upload-default">
                                  <div class="col-sm-9">
                            <!-- error message untuk title -->
                            {{-- @error('thumbabout2')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror --}}
                                  </div>
                                </div>
                          </div>

                          <div class="col-md-12">
                           <div class="form-group row">
                               <label class="col-sm-3 col-form-label">Gambar 3<span class="text-danger">*</span></label>
                               <input type="file" name="thumbabout3" value="{{ old('thumbabout3')}}" class="file-upload-default">
                               <div class="col-sm-9">
                         <!-- error message untuk title -->
                         {{-- @error('thumbabout3')
                             <div class="alert alert-danger mt-2">
                                 {{ $message }}
                             </div>
                         @enderror --}}
                               </div>
                             </div>
                       </div>

                       <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gambar 4<span class="text-danger">*</span></label>
                            <input type="file" name="thumbabout4" value="{{ old('thumbabout4')}}" class="file-upload-default">
                            <div class="col-sm-9">
                      <!-- error message untuk title -->
                      {{-- @error('thumbabout4')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                      @enderror --}}
                            </div>
                          </div>
                    </div>

                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Keterangan <span class="text-danger">*</span></label>
                              <div class="col-sm-9">
                                  <textarea class="form-control" name="slugabout" rows="5" cols="30">{{ old('slugabout')}}</textarea>
                              <!-- error message untuk kode -->
                              {{-- @error('slugabout')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror --}}
                              </div>
                            </div>
                          </div>

                          <div class="col-12 d-flex justify-content-end">
                           <button type="submit" name="submit" class="btn btn-success" style="margin-bottom: 2%">
                               <i class="fa fa-upload mr-2"></i>
                               <span>Upload</span>
                           </button>
                           </div>

                        </form>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- footer -->
                <div class="container-fluid">
                   <div class="footer">
                      <p>Copyright © 2024 Designed by Paridot. Just Learning.</p>
                   </div>
                </div>
             </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      @endsection
