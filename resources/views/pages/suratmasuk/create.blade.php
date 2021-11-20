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
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->

                    <div class="card">
                        <div class="card-header">
                            Tambah Surat Masuk
                        </div>
                        <div class="card-body">
                            @if ($message = session()->get('gagal'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Gagal!</strong> {{$message}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            @endif

                            <form action="{{ route('surat_masuk.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Dari</label>
                                    <input type="email" name="email_dari" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Kepada</label>
                                    <input type="email" name="email_kepada" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Nomor Surat</label>
                                    <input type="text" name="nomor_surat" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Subject</label>
                                    <textarea name="subject" id="" class="form-control" cols="30" rows="10" name="subject"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">File</label>
                                    <input type="file" name="file" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                                </div>
                            </form>
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
