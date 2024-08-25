<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Empresa;
use App\Models\SobreNos;
use App\Models\ContatoPage;
use App\Models\HomePage;

class ClientViewController extends Controller
{
    public function home($emp)
    {       
        $empresa = Empresa::where('identificador', $emp)->first();
        $home = HomePage::where('empresa_id', $empresa->id)->first();
        $sobrenos = SobreNos::where('empresa_id', $empresa->id)->first();
        $contato = ContatoPage::where('empresa_id', $empresa->id)->first();

        return view('client.home',
            [
                'empresa' => $empresa,
                'home' => $home,
                'sobrenos' => $sobrenos,
                'contato' => $contato
            ]
        );
    }
}
