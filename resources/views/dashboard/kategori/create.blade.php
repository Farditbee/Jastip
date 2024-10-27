<title>Dashboard - Kategori/create</title>
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
                                <div class="col-md-12">
                                    <div class="white_shd full margin_bottom_30">
                                        <div class="full graph_head">
                                            <div class="heading1 margin_0">
                                                <h2>Tambah Kategori</h2>
                                            </div>
                                        </div>
                                        <div class="table_section padding_infor_info">
                                            <div class="table-responsive-sm">
                                                <form action='#' method='post' enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Nama Kategori <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name=""
                                                                    id="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" name="submit" class="btn btn-success"
                                                            style="margin-bottom: 2%">
                                                            <i class="fa fa-upload mr-2"></i>
                                                            <span>Simpan</span>
                                                        </button>
                                                    </div>
                                                </form>
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
