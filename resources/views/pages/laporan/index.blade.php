@extends('layouts.master')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Laporan</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->

            <div class="container-fluid">
                <div class="card">
                    {{-- <div class="card-header">
                        <div class=" d-flex justify-content-between" >
                        Laporan Masuk
                        </div>

                    </div> --}}
                <div class="card-body">
                    <div class="form-group">
                        <label for="bulan">Bulan</label>
                        <select name="bulan" id="bulan">

                        </select>
                    </div>
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
