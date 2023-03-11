<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade\Pdf;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){

        $data = [
            "title" => "Barang",
            "barang" => Barang::all()
        ];
        return view('barang.index',$data);
    }

    public function create(){
        $data = [
            "title" => "Barang"
        ];
        return view('barang.create',$data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_barang'     => 'required',
            'jenis_barang'     => 'required',
            'stok'   => 'required',
            'harga'   => 'required',
        ]);

        $barang = Barang::create([
            'nama_barang'     => $request->nama_barang,
            'jenis_barang'     => $request->jenis_barang,
            'stok'   => $request->stok,
            'harga' => $request->harga
        ]);

        if($barang){
            //redirect dengan pesan sukses
            return redirect()->route('barang.index')->with(['success' => 'Data Barang Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('barang.index')->with(['error' => 'Data Barang Gagal Disimpan!']);
        }
    }

    public function edit(Barang $barang)
    {
        $data = [
            "title" => "Barang",
            "barang" => $barang
        ];
        return view('barang.edit', $data);
    }

    public function update(Request $request, Barang $barang)
    {
        $this->validate($request, [
            'nama_barang'     => 'required',
            'jenis_barang'     => 'required',
            'stok'   => 'required',
            'harga'   => 'required',
        ]);

        $barang = $barang->findOrFail($barang->id);

        $barang->update([
            'nama_barang'     => $request->nama_barang,
            'jenis_barang'     => $request->jenis_barang,
            'stok'   => $request->stok,
            'harga' => $request->harga
        ]);

        if($barang){
            //redirect dengan pesan sukses
            return redirect()->route('barang.index')->with(['success' => 'Data Barang Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('barang.index')->with(['error' => 'Data Barang Gagal Diupdate!']);
        }

    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        if($barang){
            //redirect dengan pesan sukses
            return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('barang.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function cetakPdf()
    {
        $dataBarang = Barang::all();

        $pdf = PDF::loadview('laporan.cetaklaporan',[ 'barang' => $dataBarang])->setpaper('A4', 'potrait');
        return $pdf->stream('Data_Barang.pdf');
    }
}
