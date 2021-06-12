<?php

namespace App\Http\Controllers;

use App\Imports\DokterImport;
use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Excel;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = Dokter::all();

        return view('dokter0078', ['dokter' => $dokter]);
    }

    public function import_excel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_dokter di dalam folder public
        $file->move('file_dokter', $nama_file);

        // import data
        Excel::import(new DokterImport, public_path('/file_dokter/' . $nama_file));

        // notifikasi dengan session
        Session::flash('sukses', 'Data Dokter Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('/');
    }
}
