<title>Dashboard - Pakaian/create</title>
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
                                <a href="{{ route('dashboard.pakaian.index') }}" class="btn cur-p btn-danger"><i
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
                                                <h2>Tambah Pakaian</h2>
                                            </div>
                                        </div>
                                        <div class="full padding_infor_info">
                                            <div class="table_row">
                                                <div class="table-responsive">
                                                    <form action='#' method='post'
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Foto Pakaian<span
                                                                        class="text-danger">*</span></label>
                                                                <div class="col-sm-9">
                                                                    <input type="file" name="gambar_pakaian"
                                                                        class="form-control"
                                                                        value="{{ old('gambar_pakaian') }}"
                                                                        class="file-upload-default">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Nama Pakaian<span
                                                                        class="text-danger">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control"
                                                                        name="nama_Pakaian" id="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Kategori<span
                                                                        class="text-danger">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <select name="kategori_id" id="kategori_id"
                                                                        class="form-control">
                                                                        <option value="">~Pilih Kategori~</option>
                                                                        @foreach ($kategori as $ktg)
                                                                            <option value="{{ $ktg->id }}">
                                                                                {{ $ktg->nama_kategori }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Size<span
                                                                        class="text-danger">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <select class="js-example-basic-multiple" name="size[]" id="size" multiple="multiple">
                                                                        <option value="S">S</option>
                                                                        <option value="M">M</option>
                                                                        <option value="L">L</option>
                                                                        <option value="XL">XL</option>
                                                                        <option value="XXL">XXL</option>
                                                                        <option value="XXXL">XXXL</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Harga<span
                                                                        class="text-danger">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <input type="number" class="form-control"
                                                                        name="harga" id="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Stok<span
                                                                        class="text-danger">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <input type="number" class="form-control"
                                                                        name="stok" id="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Keterangan<span
                                                                        class="text-danger">*</span></label>
                                                                <div class="col-sm-12">
                                                                    <input type="text" class="form-control"
                                                                        name="Keterangan" id="">
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
                        </div>
                        <!-- footer -->
                        @include('dashboard.footer')
                    </div>
                    <!-- end dashboard inner -->
                </div>
            </div>
        </div>
        <!-- jQuery -->

        <script>
            document.addEventListener('DOMContentLoaded', function () {
            const element = document.getElementById('size');
            const choices = new Choices(element, {
                removeItemButton: true,
                searchEnabled: true,
                placeholderValue: 'Pilih ukuran',
                allowHTML: true,
            });
        });
        </script>

    @endsection
