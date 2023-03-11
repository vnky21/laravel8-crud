<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    public function index()
    {
        $data = [ 'title' => "Dashboard",
                  'jumlah_data' => Barang::all()->count(),
                  'data_plastik' => Barang::where('jenis_barang','plastik')->count(),
                  'data_kaca' => Barang::where('jenis_barang','kaca')->count(),
                  'stok_kurang' => Barang::where('stok', '<', 50)->count()];
        return view('index', $data);
    }

    public function cetak()
    {
        $data = [ 'title' => "Laporan"];
        return view('laporan.index', $data);
    }


}
