<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Imports\PasiensImport;
use Maatwebsite\Excel\Facades\Excel;

class PasienController extends Controller
{
    public function index()
    {
        $pasien = Pasien::all();

        return view('pasien0078', ['pasien' => $pasien]);
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

        // upload ke folder file_Pasien di dalam folder public
        $file->move('file_pasien', $nama_file);

        // import data
        Excel::import(new PasiensImport, public_path('/file_pasien/' . $nama_file));

        // notifikasi dengan session
        Session::flash('sukses', 'Data Pasien Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('/');
    }
}
