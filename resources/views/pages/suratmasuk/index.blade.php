@extends('layouts.master')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Surat Masuk</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                <div class="col-2">
                    <a href="{{ route('surat_masuk.create') }}" type="button" class="btn btn-block btn-primary">Tambah Surat masuk</a>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <div class=" d-flex justify-content-between" >
                            Daftar Surat Masuk
                            <button class="btn btn-success">Total Surat({{count($surat)}})</button>
                            </div>

                        </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Dari</th>
                                    <th>Kepada</th>
                                    <th>Nomor Surat</th>
                                    <th>Subject</th>
                                    <th>Aksi</th>
                                  </tr>
                              </tr>
                            </thead>
                            <tbody>

                                @foreach ($surat as $st )
                              <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $st->email_dari }}</td>
                                <td>{{ $st->email_kepada }}</td>
                                <td>{{ $st->nomor_surat }}</td>
                                <td>{{ $st->subject}}</td>
                                <td class="d-flex">
                                    <a href="{{ route('surat_masuk.show',$st->id) }}" class="mr-2 edit btn btn-primary ">Lihat</a>
                                    <form action="{{ route('surat_masuk.destroy', $st->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-block btn-danger" onclick="return confirm('Yakin untuk hapus data?')">Delete</button>
                                    </form>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>

                    </div>
                </div>
                    </div>
                    <!-- Small boxes (Stat box) -->

                    <!-- Main row -->
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    @endsection
