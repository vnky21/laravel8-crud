<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //

    public function index()
    {
        $data = [ 'title' => "Barang",
                  'barang' => Barang::all()];
        return view('guest.index', $data);
    }
}
