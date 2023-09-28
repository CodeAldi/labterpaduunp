<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view('backend.admin.kategori-berita.index',['kategoris'=>$kategoris]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required'
        ]);
        $kategori = new Kategori;
        $nama_kategori = $request->nama;
        $slug = preg_replace("/\s+/","-",$nama_kategori);
        $validator = Validator::make(['slug'=>$slug],[
            'slug' => 'unique:kategoris'
        ]);
        if($validator->fails()){
            Session::flash('error', 'Kategori Tidak Boleh Sama !');
            return redirect()->route('admin.dashboard.berita.kategori-berita.all');
        }
        $kategori->nama_kategori = $nama_kategori;
        $kategori->slug = $slug;
        $kategori->save();
        Session::flash('success', 'Kategori Baru Berhasil  Ditambahkan');
        return redirect()->route('admin.dashboard.berita.kategori-berita.all');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $validated = $request->validate([
            'nama' => 'required'
        ]);
        $nama_kategori = $request->nama;
        $slug = preg_replace("/\s+/", "-", $nama_kategori);
        $validator = Validator::make(['slug' => $slug], [
            'slug' => 'unique:kategoris'
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Kategori sudah ada !');
            return redirect()->route('admin.dashboard.berita.kategori-berita.all');
        }
        $kategori->nama_kategori = $nama_kategori;
        $kategori->slug = $slug;
        $kategori->save();
        Session::flash('success', 'Kategori Berhasil Diupdate');
        return redirect()->route('admin.dashboard.berita.kategori-berita.all');
        // dd('update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        Session::flash('success', 'Kategori berhasil dihapus');
        return redirect()->route('admin.dashboard.berita.kategori-berita.all');
        // dd('berhasil masuk ke destroy',$kategori);
    }
}
