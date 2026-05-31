<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PensilController extends Controller
{
    public function index()
    {
        $pensil = DB::table('pensil')->paginate(10);

        return view('pensil.index', ['pensil' => $pensil]);
    }

    public function tambah()
    {
        return view('pensil.tambah');
    }

    public function store(Request $request)
    {
        DB::table('pensil')->insert([
            'merkpensil' => $request->merk,
            'stockpensil' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/pensil');
    }

    public function edit($id)
    {
        $pensil = DB::table('pensil')->where('kodepensil', $id)->get();
        return view('pensil.edit', ['pensil' => $pensil]);
    }

    public function update(Request $request)
    {
        DB::table('pensil')->where('kodepensil', $request->id)->update([
            'merkpensil' => $request->merk,
            'stockpensil' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/pensil');
    }

    public function hapus($id)
    {
        DB::table('pensil')->where('kodepensil', $id)->delete();
        return redirect('/pensil');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $pensil = DB::table('pensil')
            ->where('merkpensil', 'like', "%".$cari."%")
            ->paginate(10)
            ->withQueryString();

        return view('pensil.index', ['pensil' => $pensil]);
    }
}
