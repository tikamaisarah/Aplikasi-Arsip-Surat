<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use DateTime;


class Laporan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $surat_masuk_bulan = SuratMasuk::selectRaw('MONTH(created_at) AS Bulan, MONTHNAME(created_at) AS BulanFull')->distinct()->get();
        $surat_masuk_tahun = SuratMasuk::selectRaw('YEAR(created_at) AS Tahun')->distinct()->get();

        $surat_keluar_bulan = SuratKeluar::selectRaw('MONTH(created_at) AS Bulan, MONTHNAME(created_at) AS BulanFull')->distinct()->get();
        $surat_keluar_tahun = SuratKeluar::selectRaw('YEAR(created_at) AS Tahun')->distinct()->get();

        if($request->session()->has('laporan')){
            $laporan = $request->session()->get('laporan');
            $bulan_full = $request->session()->get('bulan');
            $bulan_num = $request->session()->get('bulan_num');
            $jenis = $request->session()->get('jenis');

            // return response()->json($laporan);
            return view('pages.laporan.index',[
                'laporan' => $laporan,
                'bulan_full' => $bulan_full,
                'bulan_num' => $bulan_num,
                'jenis' => $jenis,
                'masuk_bulan' => $surat_masuk_bulan,
                'masuk_tahun' => $surat_masuk_tahun,
                'keluar_bulan' => $surat_keluar_bulan,
                'keluar_tahun' => $surat_keluar_tahun,
            ]);
        }

        return view('pages.laporan.index', [
            'masuk_bulan' => $surat_masuk_bulan,
            'masuk_tahun' => $surat_masuk_tahun,
            'keluar_bulan' => $surat_keluar_bulan,
            'keluar_tahun' => $surat_keluar_tahun,

        ]);
    }

    public function tampilkanLaporanMasuk(Request $request){
        $tahun = $request->input('tahun');
        $bulan = $request->input('bulan');
        $dateObj = DateTime::createFromFormat('!m', $bulan);
        $bulan_full = $dateObj->format('F');

        $masuk_tampilkan = SuratMasuk::select('*')->whereMonth('created_at', '=', $bulan)->whereYear('created_at', '=', $tahun)->get();

        // session dimulai
        $request->session()->put('laporan', $masuk_tampilkan);
        $request->session()->put('bulan', $bulan_full);
        $request->session()->put('bulan_num', $bulan);
        $request->session()->put('tahun', $tahun);
        $request->session()->put('jenis', 'Surat Masuk');
        // return response()->json($masuk_tampilkan);
        return redirect()->route('laporan.index');
    }

    public function tampilkanLaporanKeluar(Request $request){
        $tahun = $request->input('tahun');
        $bulan = $request->input('bulan');
        $dateObj = DateTime::createFromFormat('!m', $bulan);
        $bulan_full = $dateObj->format('F');

        $masuk_tampilkan = SuratKeluar::whereMonth('created_at', '=', $bulan)->whereYear('created_at', '=', $tahun)->get();

        // session dimulai
        $request->session()->put('laporan', $masuk_tampilkan);
        $request->session()->put('bulan', $bulan_full);
        $request->session()->put('bulan_num', $bulan);
        $request->session()->put('tahun', $tahun);
        $request->session()->put('jenis', 'Surat Keluar');
        // return response()->json($bulan);
        return redirect()->route('laporan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
