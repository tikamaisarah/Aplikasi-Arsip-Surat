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
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->

                    <div class="card">
                        <div class="card-header">
                            Surat keluar
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Dari</label>
                                    <input type="text" name="name" readonly value="{{ Auth::user()->email }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Kepada</label>
                                    <input type="email" name="" id="" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Subject</label>
                                    <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">File</label>
                                    <input type="file" name="" id="" class="form-control">
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
