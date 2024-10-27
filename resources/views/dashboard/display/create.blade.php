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
                            <br>
                            <div class="button">
                                <a href="{{ route('dashboard.display.index') }}" class="btn cur-p btn-danger"><i
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
                                                <h2>Tambah Display</h2>
                                            </div>
                                        </div>
                                        <form action='{{ route('dashboard.display.store') }}' method='post'
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Gambar 1<span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" name="display1" value="{{ old('display1') }}"
                                                        class="file-upload-default">
                                                    <div class="col-sm-9">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Gambar 2<span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" name="display2" value="{{ old('display2') }}"
                                                        class="file-upload-default">
                                                    <div class="col-sm-9">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Gambar 3<span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" name="display3" value="{{ old('display3') }}"
                                                        class="file-upload-default">
                                                    <div class="col-sm-9">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Gambar 4<span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" name="display4" value="{{ old('display4') }}"
                                                        class="file-upload-default">
                                                    <div class="col-sm-9">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Keterangan <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" name="keterangan" rows="5" cols="30">{{ old('keterangan') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" name="submit" class="btn btn-success"
                                                    style="margin-bottom: 2%">
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
                        @include('dashboard.footer')
                    </div>
                    <!-- end dashboard inner -->
                </div>
            </div>
        </div>
        <!-- jQuery -->
    @endsection
