<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Empresa;
use App\Models\SobreNos;
use App\Models\ContatoPage;
use App\Models\HomePage;

class PagesController extends Controller
{
    public function editHomePage(HomePage $home)
    {
        if(!$home) {
            abort(404, 'Página não encontrada');
        }
        if(Auth::user()->empresa_id === $home->empresa_id) {
            return view('admin.pages.edit-home', ['home' => $home]);
        }
        abort(403);
    }
    
    public function editContatoPage(ContatoPage $contato)
    {
        if(!$contato) {
            abort(404, 'Página não encontrada');
        }
        if(Auth::user()->empresa_id === $contato->empresa_id) {
            return view('admin.pages.edit-contato', ['contato' => $contato]);
        }
        abort(403);
    }
    
    public function editSobreNos(SobreNos $sobrenos)
    {
        if(!$sobrenos) {
            abort(404, 'Página não encontrada');
        }
        if(Auth::user()->empresa_id === $sobrenos->empresa_id) {
            return view('admin.pages.edit-sobrenos', ['sobrenos' => $sobrenos]);
        }
        abort(403);
    }
    
    public function doEditHomePage(HomePage $home, Request $request)
    {
        if(!$home) {
            abort(404, 'Página não encontrada');
        }
        if(Auth::user()->empresa_id === $home->empresa_id) {
            $home->titulo = $request->titulo;
            $home->subtitulo = $request->subtitulo;
            $home->status = $request->status;
            $home->save();

            return redirect()->route('pages')->with('success', 'Página editada com sucesso!');
        }
        abort(403);
    }

    public function doEditContatoPage(ContatoPage $contato, Request $request)
    {
        if(!$contato) {
            abort(404, 'Página não encontrada');
        }
        if(Auth::user()->empresa_id === $contato->empresa_id) {
            $contato->status = $request->status;
            $contato->save();

            return redirect()->route('pages')->with('success', 'Página editada com sucesso!');
        }
        abort(403);
    }

    public function doEditSobreNos(SobreNos $sobrenos, Request $request)
    {
        if(!$sobrenos) {
            abort(404, 'Página não encontrada');
        }
        if(Auth::user()->empresa_id === $sobrenos->empresa_id) {
            $sobrenos->texto = $request->texto;
            $sobrenos->status = $request->status;
            $sobrenos->save();

            return redirect()->route('pages')->with('success', 'Página editada com sucesso!');
        }
        abort(403);
    }
}
