<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;
use Illuminate\Http\RedirectResponse;
use App\Models\Magang;
use Illuminate\View\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class LihatMagangController extends Controller
{
    public function lihat(): View
    {
        $magang = Magang::all();
        return view('carimagang', compact('magang'));
    }
}
