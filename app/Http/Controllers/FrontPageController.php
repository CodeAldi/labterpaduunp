<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontPageController extends Controller
{
    // menu beranda start
    function Beranda() : View {
        // menampilkan halaman beranda
        $beritas = Berita::all();
        return view('front.beranda',['beritas'=>$beritas]);
    }
    // menu beranda end

    // menu profile start
    function Sejarah() : View {
        // menampilkan halaman sejarah singkat
        return view('front.profile.sejarah');
    }
    function VisiMisiTujuan() : View {
        // menampilkan halaman visi misi dan tujuan
        return view('front.profile.visi');
    }
    function StrukturOrganisasi() : View {
        // menampilkan halaman struktur organisasi
        return view('front.profile.struktur');
    }
    // menu profile end

    // menu informasi pengujian start
    function Tarik(): View
    {
        // menampilkan halaman pengujian tarik
        return view('front.informasi-pengujian.tarik');
    }
    function Tekan(): View
    {
        // menampilkan halaman kuat tekan
        return view('front.informasi-pengujian.tekan');
    }
    function Batubara(): View
    {
        // menampilkan halaman batu bara
        return view('front.informasi-pengujian.batubara');
    }
    function Xrd(): View
    {
        // menampilkan halaman xrd
        return view('front.informasi-pengujian.xrd');
    }
    function Kekerasan(): View
    {
        // menampilkan halaman kekerasan bahan
        return view('front.informasi-pengujian.kekerasan');
    }
    function Halal(): View
    {
        // menampilkan halaman kekerasan bahan
        return view('front.informasi-pengujian.halal');
    }
    // menu informasi pengujian end

    // menu tentang kami start
    function Laboratorium() : View {
        // menampilkan halaman laboratorium
        return view('front.tentang-kami.laboratorium');
    }
    function Fasilitas() : View {
        // menampilkan halaman fasilitas
        return view('front.tentang-kami.fasilitas');
    }
    function Galeri() : View {
        // menampilkan halaman galeri
        return view('front.tentang-kami.galeri');
    }
    // menu tentang kami end

    // menu hubungi kami start
    function Hubungi(): View
    {
        // menampilkan halaman hubungi kami
        return view('front.hubungi-kami.hubungi');
    }
    // menu hubungi kami end

    // menu halaman download start
    function Download() : View {
        return view('front.download.download');
    }
    // menu halaman download end

    // menu halaman download start
    function Alur() : View {
        return view('front.alur');
    }
    // menu halaman download end

    // pindah halaman untuk tombol login dan register
    function pindahLogin(){
        return redirect()->away('https://labterpadu.unp.ac.id/console/');
    }
}
