<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Empresa;
use App\Models\User;

class UserController extends Controller
{
    public function profile(User $user)
    {
        if (Auth::user()->id === $user->id) {
            if (Auth::user()->role_id === 1) {
                $empresas = Empresa::all();
                return view('admin.profile', ['empresas' => $empresas, 'user' => $user]); 
            }
            return view('admin.profile', ['user' => $user]);
        }
        abort(404);
    }

    public function editProfile(User $user, Request $request)
    {
        $user->username = $request->username;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->telefone = $request->telefone;
        $user->email = $request->email;

        if($request->empresa_id){
            $user->empresa_id = $request->empresa_id;
        }

        if ($request->hasFile('profile') && $request->profile->isValid()) {
            $extension = $request->file('profile')->getClientOriginalExtension();
            $fileNameToStore =  'user' . substr($request->username, 5) . "." . $extension;
            $imagePath = $request->profile->storeAs('public/images', $fileNameToStore);
            $user->profile_pic = $fileNameToStore;
        }

        $user->save();
        return redirect()->back()->with('success', 'Perfil editado com sucesso!');
    }
}
