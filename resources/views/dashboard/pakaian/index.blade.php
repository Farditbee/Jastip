<title>Dashboard - Pakaian</title>
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
                                        <h2>Pakaian</h2>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- row -->
                            @include('landing.layouts.alert')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="white_shd full margin_bottom_30">
                                        <div class="full graph_head">
                                            <div class="heading1 margin_0">
                                                <h2>Pakaian</h2>
                                            </div>
                                            <div class="button" style="float: right;">
                                                <a href="{{ route('dashboard.pakaian.create')}}"
                                                    class="btn cur-p btn-info"><i class="fa fa-plus"></i> Tambah</a>
                                            </div>
                                        </div>
                                        <div class="table_section padding_infor_info">

                                            <div class="table-responsive-sm">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Gambar</th>
                                                            <th>Nama Pakaian</th>
                                                            <th>Kategori</th>
                                                            <th>Size</th>
                                                            <th>Harga</th>
                                                            <th>Stok</th>
                                                            <th>Keterangan</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    @forelse ($pakaian as $pkn)
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $pkn->gambar_pakaian }}</td>
                                                                <td>{{ $pkn->nama_pakaian }}</td>
                                                                <td>{{ $pkn->kategori->nama_kategori }}</td>
                                                                <td>{{ $pkn->size }}</td>
                                                                <td>{{ $pkn->harga }}</td>
                                                                <td>{{ $pkn->stok }}</td>
                                                                <td>{{ $pkn->keterangan }}</td>
                                                                <form
                                                                    onsubmit="return confirm('Ingin menghapus Data ini ? ?');"
                                                                    action="#" method="POST">
                                                                    <td>
                                                                        <a href="#"
                                                                            class="btn cur-p btn-warning" style="color: white"><i
                                                                                class="fa fa-edit"></i></a>
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn cur-p btn-danger"><i
                                                                                class="fa fa-trash menu-icon"></i></button>
                                                                    </td>
                                                                </form>
                                                            </tr>
                                                        </tbody>
                                                    @empty
                                                        <div class="alert alert-danger">
                                                            Tidak ada Data.
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
                                <p>Copyright © 2024 Designed by Farditt. Just Learning.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end dashboard inner -->
                </div>
            </div>
        </div>
        <!-- jQuery -->
    @endsection
