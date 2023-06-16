<?php

namespace App\Http\Controllers;
use App\Models\Magang;
use App\Models\Profil;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $magang = Magang::all()->count();
        $user = Profil::all()->count();
        $magangnot = Magang::where('status','pending')->count();
        return view('admin.index',compact('magang','user','magangnot'));
    }
}
