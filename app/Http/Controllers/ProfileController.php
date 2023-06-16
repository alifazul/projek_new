<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;
use Illuminate\Http\RedirectResponse;
use App\Models\Profil;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\UpdateProfileRequest;
use Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    use RegistersUsers;
    public function index(): View
    {
        $pengguna = Profil::all();
        return view('admin.tabelpengguna', compact('pengguna'));
    }
    

    public function create(): View
    {
        return view('admin.tambah_pengguna');
    }

    public function show($id): View
    {
        $user = Profil::findOrFail($id);
        return view('admin.detail_pengguna',compact('user'));
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request,[
            'nama'=>'required',
            'email'=>'required',
        ]);

        $pass = '12345678';

        $usern = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($pass)
        ]);
        $usern = $usern->assignRole('pengunjung');
        if($usern){
            $email = $request->email;
            $image = $request->file('image');
            if(empty($image)){
                $image=null;
            }else{
                $image->storeAs('public/image', $image->hashName());
                $image=$image->hashName();
            }
    
    
            $id_usern = User::where('email', $email)->get('id');
          foreach($id_usern as $id){
            $id = $id->id;
            Profil::create([
                'id_user'=>$id,
                'nama' => $request->nama,
                'email' => $request->email,
            ]);
          }
    
            Alert::success('Selamat', 'Data Berhasil Dikirim');
            return redirect()->route('user.index');
        }else{
            Alert::warning('Gagal', 'Data Gagal Dikirim');
        }
        
    }    
    /**
     * Show the update profile page.
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function editu(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user()
        ]);
    }
        /**
         * Update user's profile
         *
         * @param  UpdateProfileRequest $request
         * @return \Illuminate\Contracts\Support\Renderable
         */
        public function updateu(UpdateProfileRequest $request)
        {
            $request->user()->update(
                $request->all()
            );
            Alert::success('Berhasil', 'Data Berhasil Diubah');
            return redirect()->route('profile.edit');
        }
    public function edit($id): View
    {
        $user = Profil::findOrFail($id);
        return view('admin.edit_pengguna', compact('user'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $Profil = Profil::findOrFail($id);
        $id = User::where('id', $Profil->id_user);
        $id->delete();
        $Profil->delete();
        $pass=$request->pass;
        $email=$request->email;
        $usern = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($pass)
        ]);
        $usern = $usern->assignRole('pengunjung');
        $id_usern = User::where('email', $email)->get('id');
        foreach($id_usern as $id){
          $id = $id->id;
          Profil::create([
              'id_user'=>$id,
              'nama' => $request->nama,
              'email' => $request->email,
          ]);
        }
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect()->route('user.index');
    }
    public function profil(): View
    {
        $user_id = Auth::user()->id;
        return view('auth.profile', compact('user_id')); 
    }
    
    public function logprof(): View
    {
        $user_id = Auth::user()->id;
        return view('home', compact('user_id')); 
    }

    public function destroy($id): RedirectResponse
    {
        
        $Profil = Profil::findOrFail($id);
        $user = User::where('id', $Profil->id_user);
        $Profil->delete();
        $user->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->route('user.index');
    }
}
