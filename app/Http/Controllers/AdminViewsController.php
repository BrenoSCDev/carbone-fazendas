<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Empresa;
use App\Models\SobreNos;
use App\Models\ContatoPage;
use App\Models\HomePage;

class AdminViewsController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function EmpresaPages()
    {
        $home = HomePage::where('empresa_id', Auth::user()->empresa_id)->first();
        $sobrenos = SobreNos::where('empresa_id', Auth::user()->empresa_id)->first();
        $contato = ContatoPage::where('empresa_id', Auth::user()->empresa_id)->first();
        
        return view('admin.pages.index',
            [
                'home' => $home,
                'sobrenos' => $sobrenos,
                'contato' => $contato
            ]
        );
    }
}
