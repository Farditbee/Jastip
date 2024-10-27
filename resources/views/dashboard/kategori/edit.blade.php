<title>Dashboard - Kategori/edit</title>
@extends('layouts.template')
@section('content')
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
                            <br>
                            <div class="button">
                                <a href="{{ route('dashboard.kategori.index') }}" class="btn cur-p btn-danger"><i
                                        class="fa fa-chevron-left"></i> Kembali</a>
                            </div>
                            <br>
                            <!-- row -->
                            @include('landing.layouts.alert')
                            <div class="row">
                                <!-- invoice section -->
                                <div class="col-md-12">
                                   <div class="white_shd full margin_bottom_30">
                                      <div class="full graph_head">
                                         <div class="heading1 margin_0">
                                            <h2>Edit Kategori</h2>
                                         </div>
                                      </div>
                                      <div class="full padding_infor_info">
                                         <div class="table_row">
                                            <div class="table-responsive">
                                                <form action='{{ route('dashboard.kategori.update', $kategori->id)}}' method='post' enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Nama Kategori <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" name="nama_kategori" id="" value="{{ old('nama_kategori', $kategori->nama_kategori) }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" name="submit" class="btn btn-success"
                                                            style="margin-bottom: 2%">
                                                            <i class="fa fa-upload mr-2"></i>
                                                            <span>Update</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                        </div>
                        <!-- footer -->
                        @include('dashboard.footer')
                    </div>
                    <!-- end dashboard inner -->
                </div>
            </div>
        </div>
        <!-- jQuery -->
    @endsection
