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

class MagangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(): View
    {
        $magang = Magang::all();
        return view('admin.tabelmagang', compact('magang'));
    }
    
    public function create(): View
    {
        $user_id = Auth::user()->id;
         return view('admin.tambah_magang', compact('user_id'));
    }

    public function tambah(): View
    {
        $user_id = Auth::user()->id;
        $magang = Magang::where('user_id',$user_id)->get();
        return view('layouts.tambahmagang', compact('user_id','magang'));
    }
    
    public function show($id): View
    {
        $data_magang = Magang::findOrFail($id);
        return view('admin.detail_magang',compact('data_magang'));
    }

    public function simpan(Request $request): RedirectResponse
    {
        $this->validate($request,[
            'posisi'=>'required',
            'perusahaan'=>'required',
            'pendidikan'=>'required',
            'tipe'=>'required',
            'sertifikat'=>'required',
            'durasi'=>'required',
            'deadline'=>'required',
            'pengumuman'=>'required',
            'mulai_magang'=>'required',
            'provinsi'=>'required',
            'kabupaten'=>'required',
            'kontak'=> 'required',
            'link_daftar'=>'required',
            'status'=>'required',
        ]);

        Magang::create([
            'user_id'=>$request->id_user,
            'posisi' => $request->posisi,
            'perusahaan' => $request->perusahaan,
            'pendidikan' => $request->pendidikan,
            'tipe' => $request->tipe,
            'sertifikat' => $request->sertifikat,
            'durasi' => $request->durasi,
            'deadline' => $request->deadline,
            'pengumuman' => $request->pengumuman,
            'mulai_magang' => $request->mulai_magang,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'link_daftar' => $request->link_daftar,
            'kontak' => $request->kontak,
            'deskripsi' => $request->deskripsi,
            'status'=>$request->status
        ]);

        $status=$request->status;
        if($status=='publish'){
        Alert::success('Selamat', 'Data Berhasil Dipublish');
        }else if($status=='draft'){
            Alert::success('Selamat', 'Data Berhasil Disimpan di Draft');
        }else if($status=='pending'){
            Alert::success('Selamat', 'Data Berhasil Dikirim');
        }
        return redirect()->route('magang.tambah');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request,[
            'posisi'=>'required',
            'perusahaan'=>'required',
            'pendidikan'=>'required',
            'tipe'=>'required',
            'sertifikat'=>'required',
            'durasi'=>'required',
            'deadline'=>'required',
            'pengumuman'=>'required',
            'mulai_magang'=>'required',
            'provinsi'=>'required',
            'kabupaten'=>'required',
            'kontak'=> 'required',
            'link_daftar'=>'required',
            'status'=>'required',
        ]);

        Magang::create([
            'user_id'=>$request->id_user,
            'posisi' => $request->posisi,
            'perusahaan' => $request->perusahaan,
            'pendidikan' => $request->pendidikan,
            'tipe' => $request->tipe,
            'sertifikat' => $request->sertifikat,
            'durasi' => $request->durasi,
            'deadline' => $request->deadline,
            'pengumuman' => $request->pengumuman,
            'mulai_magang' => $request->mulai_magang,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'link_daftar' => $request->link_daftar,
            'kontak' => $request->kontak,
            'deskripsi' => $request->deskripsi,
            'status'=>$request->status
        ]);

        $status=$request->status;
        if($status=='publish'){
        Alert::success('Selamat', 'Data Berhasil Dipublish');
        }else if($status=='draft'){
            Alert::success('Selamat', 'Data Berhasil Disimpan di Draft');
        }else if($status=='pending'){
            Alert::success('Selamat', 'Data Berhasil Dikirim');
        }
        return redirect()->route('magang.index');
    }    

    public function ubah($id): View
    {
        $magang = Magang::findOrFail($id);
        return view('layouts.editmagang', compact('magang'));
    }

    public function change(Request $request, $id): RedirectResponse
    {
        $this->validate($request,[
            'posisi'=>'required',
            'perusahaan'=>'required',
            'pendidikan'=>'required',
            'tipe'=>'required',
            'sertifikat'=>'required',
            'durasi'=>'required',
            'deadline'=>'required',
            'pengumuman'=>'required',
            'mulai_magang'=>'required',
            'provinsi'=>'required',
            'kabupaten'=>'required',
            'kontak'=> 'required',
            'link_daftar'=>'required',
            'status'=>'required'
        ]);

        $magang = Magang::findOrFail($id);

        $magang->update([
            'user_id'=>$request->id_user,
            'posisi' => $request->posisi,
            'perusahaan' => $request->perusahaan,
            'pendidikan' => $request->pendidikan,
            'tipe' => $request->tipe,
            'sertifikat' => $request->sertifikat,
            'durasi' => $request->durasi,
            'deadline' => $request->deadline,
            'pengumuman' => $request->pengumuman,
            'mulai_magang' => $request->mulai_magang,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'link_daftar' => $request->link_daftar,
            'kontak' => $request->kontak,
            'deskripsi' => $request->deskripsi,
            'status'=>$request->status
        ]);
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect()->route('magang.tambah');
    }

    public function hapus($id): RedirectResponse
    {
        $magang = Magang::findOrFail($id);
        $magang->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->route('magang.tambah');
    }
    public function edit($id): View
    {
        $magang = Magang::findOrFail($id);
        return view('admin.edit_magang', compact('magang'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request,[
            'posisi'=>'required',
            'perusahaan'=>'required',
            'pendidikan'=>'required',
            'tipe'=>'required',
            'sertifikat'=>'required',
            'durasi'=>'required',
            'deadline'=>'required',
            'pengumuman'=>'required',
            'mulai_magang'=>'required',
            'provinsi'=>'required',
            'kabupaten'=>'required',
        ]);

        $magang = Magang::findOrFail($id);

        $magang->update([
            'posisi' => $request->posisi,
            'perusahaan' => $request->perusahaan,
            'pendidikan' => $request->pendidikan,
            'tipe' => $request->tipe,
            'sertifikat' => $request->sertifikat,
            'durasi' => $request->durasi,
            'deadline' => $request->deadline,
            'pengumuman' => $request->pengumuman,
            'mulai_magang' => $request->mulai_magang,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'deskripsi' => $request->deskripsi,
            'status'=>$request->status
        ]);
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect()->route('magang.index');
    }

    public function destroy($id): RedirectResponse
    {
        $magang = Magang::findOrFail($id);
        $magang->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->route('magang.index');

    }
}
