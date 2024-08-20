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
                   <div class="row">

                      <div class="col-md-12">
                         <div class="white_shd full margin_bottom_30">
                            <div class="full graph_head">
                               <div class="heading1 margin_0">
                                  <h2>Custom About Us</h2>
                               </div>
                            </div>
                            @if (session()->has('success'))
    <div class="alert alert-success d-flex" role="alert">
        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-2 h-2 fill-current m-0.5" viewBox="0 0 256 256"><rect width="50" height="50" fill="none"></rect><path d="M128,24A104,104,0,1,0,232,128,104.2,104.2,0,0,0,128,24Zm49.5,85.8-58.6,56a8.1,8.1,0,0,1-5.6,2.2,7.7,7.7,0,0,1-5.5-2.2l-29.3-28a8,8,0,1,1,11-11.6l23.8,22.7,53.2-50.7a8,8,0,0,1,11,11.6Z"></path></svg> --}}
        <span class="ml-2 font-semibold">
            Sukses:
        </span>
        <span class="ml-1">
            {{ session()->get('success') }}
        </span>
    </div>
@endif
                            <form action='{{ route('about.store')}}' method='post' enctype="multipart/form-data">
                              @csrf
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gambar 1<span class="text-danger">*</span></label>
                                    <input type="file" name="thumbabout1" value="{{ old('thumbabout1')}}" class="file-upload-default">
                                    <div class="col-sm-9">
                              <!-- error message untuk title -->
                              @error('thumbabout1')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                                    </div>
                                  </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Gambar 2<span class="text-danger">*</span></label>
                                  <input type="file" name="thumbabout2" value="{{ old('thumbabout2')}}" class="file-upload-default">
                                  <div class="col-sm-9">
                            <!-- error message untuk title -->
                            @error('thumbabout2')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                                  </div>
                                </div>
                          </div>

                          <div class="col-md-12">
                           <div class="form-group row">
                               <label class="col-sm-3 col-form-label">Gambar 3<span class="text-danger">*</span></label>
                               <input type="file" name="thumbabout3" value="{{ old('thumbabout3')}}" class="file-upload-default">
                               <div class="col-sm-9">
                         <!-- error message untuk title -->
                         @error('thumbabout3')
                             <div class="alert alert-danger mt-2">
                                 {{ $message }}
                             </div>
                         @enderror
                               </div>
                             </div>
                       </div>

                       <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gambar 4<span class="text-danger">*</span></label>
                            <input type="file" name="thumbabout4" value="{{ old('thumbabout4')}}" class="file-upload-default">
                            <div class="col-sm-9">
                      <!-- error message untuk title -->
                      @error('thumbabout4')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                      @enderror
                            </div>
                          </div>
                    </div>

                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Tentang Hotel <span class="text-danger">*</span></label>
                              <div class="col-sm-9">
                                  <textarea class="form-control" name="slugabout" rows="5" cols="30">{{ old('slugabout')}}</textarea>
                              <!-- error message untuk kode -->
                              @error('slugabout')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
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
