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
        <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="surat-masuk-tabs" data-toggle="pill"
                            href="#custom-surat-masuk-tabs" role="tab" aria-controls="custom-surat-masuk-tabs"
                            aria-selected="true">Surat Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="surat-keluar-tabs" data-toggle="pill" href="#custom-surat-keluar-tabs"
                            role="tab" aria-controls="custom-surat-keluar-tabs" aria-selected="false">Surat Keluar</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                    <div class="tab-pane fade show active" id="custom-surat-masuk-tabs" role="tabpanel"
                        aria-labelledby="surat-masuk-tabs">
                        <form action="/laporan/tampilkan-laporan-masuk" method="POST">
                            @csrf
                            <h4>Cetak Laporan Surat Masuk</h4>
                            <div class="row">
                                <div class="form-group col-2">
                                    <label>Bulan</label>
                                    <select class="form-control select2 " style="width: 100%;" id="bulan" name="bulan">
                                        @foreach ($masuk_bulan as $item )
                                        <option value="{{$item->Bulan}}">{{$item->BulanFull}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-2">
                                    <label>Tahun</label>
                                    <select class="form-control select2" style="width: 100%;" id="tahun" name="tahun">
                                        @foreach ($masuk_tahun as $item )
                                        <option value="{{$item->Tahun}}">{{$item->Tahun}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="mt-3 btn btn-primary">Tampilkan</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="custom-surat-keluar-tabs" role="tabpanel"
                        aria-labelledby="surat-keluar-tabs">
                        <form action="/laporan/tampilkan-laporan-keluar" method="POST">
                            @csrf
                            <h4>Cetak Laporan Surat Keluar</h4>
                            <div class="row">
                                <div class="form-group col-2">
                                    <label>Bulan</label>
                                    <select class="form-control select2 " style="width: 100%;" id="bulan" name="bulan">
                                        @foreach ($keluar_bulan as $item )
                                        <option value="{{$item->Bulan}}">{{$item->BulanFull}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-2">
                                    <label>Tahun</label>
                                    <select class="form-control select2" style="width: 100%;" id="tahun" name="tahun">
                                        @foreach ($keluar_tahun as $item )
                                        <option value="{{$item->Tahun}}">{{$item->Tahun}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="mt-3 btn btn-primary">Tampilkan</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        @if (isset($laporan))
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-center">
                    <h4>Laporan {{$jenis}} Bulan {{$bulan_full}}</h4>
                </div>

            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Dari</th>
                            <th>Kepada</th>
                            <th>Nomor Surat</th>
                            <th>Subject</th>
                            <th>Tanggal</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($laporan as $item )
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->email_dari }}</td>
                            <td>{{ $item->email_kepada }}</td>
                            <td>{{ $item->nomor_surat }}</td>
                            <td>{{ $item->subject}}</td>
                            <td>{{ date('Y-m-d', strtotime($item->created_at))}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        @endif
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
