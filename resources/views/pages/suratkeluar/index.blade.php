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
                        <div class="card-header">
                            <div class=" d-flex justify-content-between" >
                            Daftar Surat Keluar
                            <button class="btn btn-success">Total Surat({{count($surat_keluar)}})</button>
                            </div>

                        </div>
                        <div class="card-body">
                            <table class="table table-bordered ">
                                <thead>
                                  <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Dari</th>
                                    <th>Kepada</th>
                                    <th>Nomor Surat</th>
                                    <th>Subject</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($surat_keluar as $st)
                                        <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $st->email_dari}}</td>
                                        <td>{{ $st->email_kepada}}</td>
                                        <td>{{ $st->nomor_surat}}</td>
                                        <td>{{ $st->subject}}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('surat_keluar.show',$st->id) }}" class="mr-2 edit btn btn-primary ">Lihat</a>
                                            <form action="{{ route('surat_keluar.destroy', $st->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin untuk hapus data?')">Delete</button>
                                        </form>

                                        </td>
                                        </tr>
                                    @endforeach
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
