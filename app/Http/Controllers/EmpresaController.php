<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\SobreNos;
use App\Models\ContatoPage;
use App\Models\HomePage;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        return view('master.empresas.index', ['empresas' => $empresas]);
    }

    public function add()
    {
        return view('master.empresas.add');
    }

    public function edit(Empresa $empresa)
    {
        if(!$empresa) {
            abort(404, 'Empresa não encontrada');
        }
        return view('master.empresas.edit', ['empresa' => $empresa]);
    }

    public function store(Request $request)
    {
        $empresa = new Empresa();
        $empresa->name = $request->name;
        $empresa->creci = $request->creci;
        $empresa->identificador = $request->identificador;
        $empresa->uf = $request->uf;
        $empresa->city = $request->city;
        
        if ($request->hasFile('logo') && $request->logo->isValid()) {
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore =  'empresa' . substr($request->name, 5) . "." . $extension;
            $imagePath = $request->logo->storeAs('public/images', $fileNameToStore);
            $empresa->logo = $fileNameToStore;
        }

        $empresa->telefone_wpp = $request->telefone_wpp;
        $empresa->telefone = $request->telefone;
        $empresa->cep = $request->cep;
        $empresa->address = $request->address;
        $empresa->email = $request->email;
        $empresa->instagram = $request->instagram;
        $empresa->tiktok = $request->tiktok;
        $empresa->facebook = $request->facebook;
        $empresa->youtube = $request->youtube;
        $empresa->active = 1;

        if ($empresa->save()) {
            $home = new HomePage();
            $home->titulo = "";
            $home->subtitulo = "";
            $home->status = 1;
            $home->empresa_id = $empresa->id;
            $home->save();

            $contato = new ContatoPage();
            $contato->status = 1;
            $contato->empresa_id = $empresa->id;
            $contato->save();
            
            $sobrenos = new SobreNos();
            $sobrenos->texto = "";
            $sobrenos->status = 1;
            $sobrenos->empresa_id = $empresa->id;
            $sobrenos->save();
        }
        

        return redirect()->route('empresas')->with('success', 'Empresa criada com sucesso!');
    }

    public function doEdit(Empresa $empresa, Request $request)
    {
        $empresa->name = $request->name;
        $empresa->creci = $request->creci;
        $empresa->identificador = $request->identificador;
        $empresa->uf = $request->uf;
        $empresa->city = $request->city;
        $empresa->telefone_wpp = $request->telefone_wpp;
        $empresa->telefone = $request->telefone;
        $empresa->cep = $request->cep;
        $empresa->address = $request->address;
        $empresa->email = $request->email;
        $empresa->instagram = $request->instagram;
        $empresa->tiktok = $request->tiktok;
        $empresa->facebook = $request->facebook;
        $empresa->youtube = $request->youtube;
        $empresa->active = 1;

        if ($request->hasFile('logo')) {
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore = 'empresa' . substr($request->name, 5) . "." . $extension;        
            $imagePath = $request->file('logo')->storeAs('images', $fileNameToStore, 'public');            
            $empresa->logo = $fileNameToStore;
        }
        

        $empresa->save();

        return redirect()->route('empresas')->with('success', 'Empresa criada com sucesso!');
    }
}
