<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    function Index() : View {
        $berita = Berita::count();
        $today = Carbon::now()->isoFormat('D MMMM Y');
        return view('backend.admin.index',[
            'today'=>$today,
            'berita'=>$berita
        ]);
    }


}
