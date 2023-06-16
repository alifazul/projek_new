<?php

namespace App\Http\Controllers;
Use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateProfileRequest;
use Auth;

class PasswordController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        return view('auth.edit');
    }

    /**
 * @param UpdatePasswordRequest $request
 * @return \Illuminate\Http\RedirectResponse
 */
public function update(UpdatePasswordRequest $request)
{
    $request->user()->update([
        'password' => Hash::make($request->get('password'))
    ]);
    Alert::success('Berhasil','Password berhasil diubah');
    return redirect()->route('user.password.edit');
}
}