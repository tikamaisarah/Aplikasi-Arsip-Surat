@extends('layouts.master')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Surat Keluar</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                <div class="col-2">
                    <a href="{{ route('surat_keluar.create') }}" type="button" class="btn btn-block btn-primary">Tambah Surat keluar</a>
                </div>

            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">

                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->



                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Kepada</th>
                                    <th>Subject</th>
                                    <th style="width: 60px">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                </tbody>
                              </table>
                        </div>
                    </div>

                    <!-- Main row -->
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @endsection
