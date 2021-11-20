<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SuratKeluar as Surat;
use App\Models\User;

class SuratKeluar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat_keluar = Surat::all();

        return view('pages.suratkeluar.index', compact('surat_keluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.suratkeluar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        if ($request->file('file')) {
            $data['file'] = $request->file('file')->store('file', 'public');
        }

        $surat = Surat::create($data);
        return redirect()->route('surat_keluar.index');
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
        $surat = Surat::findOrFail($id);
        return view('pages.suratkeluar.show', compact('surat'));
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
        $surat = Surat::findOrFail($id);
        return view('pages.suratkeluar.edit', compact('surat'));
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
        $surat = Surat::findOrFail($id);
        $data = $request->all();

        if ($request->file('file')) {
            $data['file'] = $request->file('file')->store('file', 'public');
        }

        $surat->update($data);
        return redirect()->route('surat_keluar.index');
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
        $data = Surat::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }

    public function download($id)
    {
        $data = Surat::find($id)->file;
        return response()->download(storage_path('app/public/' . $data));
    }
}
