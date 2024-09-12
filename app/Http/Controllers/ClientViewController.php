<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Empresa;
use App\Models\SobreNos;
use App\Models\ContatoPage;
use App\Models\HomePage;
use App\Models\Fazenda;

class ClientViewController extends Controller
{
    public function home($emp)
    {       
        $empresa = Empresa::where('identificador', $emp)->first();
        $home = HomePage::where('empresa_id', $empresa->id)->first();
        $sobrenos = SobreNos::where('empresa_id', $empresa->id)->first();
        $contato = ContatoPage::where('empresa_id', $empresa->id)->first();
        $fazendas = Fazenda::where(['empresa_id' => $empresa->id, 'destaque' => 1])->get();

        return view('client.home',
            [
                'empresa' => $empresa,
                'home' => $home,
                'sobrenos' => $sobrenos,
                'contato' => $contato,
                'fazendas' => $fazendas
            ]
        );
    }

    public function sobrenos($emp)
    {
        $empresa = Empresa::where('identificador', $emp)->first();
        $home = HomePage::where('empresa_id', $empresa->id)->first();
        $sobrenos = SobreNos::where('empresa_id', $empresa->id)->first();
        $contato = ContatoPage::where('empresa_id', $empresa->id)->first();
     
        return view('client.sobrenos',
            [
                'empresa' => $empresa,
                'home' => $home,
                'sobrenos' => $sobrenos,
                'contato' => $contato,
            ]
        );
    }

    public function contato($emp)
    {
        $empresa = Empresa::where('identificador', $emp)->first();
        $home = HomePage::where('empresa_id', $empresa->id)->first();
        $sobrenos = SobreNos::where('empresa_id', $empresa->id)->first();
        $contato = ContatoPage::where('empresa_id', $empresa->id)->first();
     
        return view('client.contato',
            [
                'empresa' => $empresa,
                'home' => $home,
                'sobrenos' => $sobrenos,
                'contato' => $contato,
            ]
        );
    }

    public function fazendas($emp)
    {
        $empresa = Empresa::where('identificador', $emp)->first();
        $home = HomePage::where('empresa_id', $empresa->id)->first();
        $sobrenos = SobreNos::where('empresa_id', $empresa->id)->first();
        $contato = ContatoPage::where('empresa_id', $empresa->id)->first();
        $fazendas = Fazenda::where(['empresa_id' => $empresa->id])->get();
     
        return view('client.fazendas',
            [
                'fazendas' => $fazendas,
                'empresa' => $empresa,
                'home' => $home,
                'sobrenos' => $sobrenos,
                'contato' => $contato,
            ]
        );
    }
}
