@extends('layouts.master')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"></h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <div class=" d-flex justify-content-between" >
                            Surat Masuk
                            <button class="btn btn-success">Total Surat({{count($surat)}})</button>
                            </div>

                        </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th style="width: 10px">#</th>
                                <th>Pengirim</th>
                                <th>Subjek</th>
                                <th>File</th>
                              </tr>
                            </thead>
                            <tbody>

                                @foreach ($surat as $st )
                              <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $st->email_dari }}</td>
                                <td>{{ $st->subject}}</td>
                                {{-- <td><span class="badge bg-danger">Raport.pdf</span></td> --}}
                                <td>
                                    @if($st->file==null)
                                    <button class="btn btn-block btn-secondary">Tidak ada file</button>
                                    @else
                                    <a href="/surat_masuk/download/{{$st->id}}" class="btn btn-block btn-success">Download</a>

                                    @endif
                                </td>
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
