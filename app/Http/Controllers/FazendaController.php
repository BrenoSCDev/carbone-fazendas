<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Empresa;
use App\Models\Fazenda;

class FazendaController extends Controller
{
    public function index()
    {
        $fazendas = Fazenda::where('empresa_id', Auth::user()->empresa_id)->get();
        return view('admin.fazendas.index', ['fazendas' => $fazendas]);
    }

    public function add()
    {
        return view('admin.fazendas.add');
    }

    public function edit(Fazenda $fazenda)
    {
        if(!$fazenda) {
            abort(404, 'Fazenda não encontrada');
        }
        return view('admin.fazendas.edit', ['fazenda' => $fazenda]);
    }

    public function store(Request $request)
    {
        $fazenda = new Fazenda();
        $fazenda->nome = $request->nome;
        $fazenda->uf = $request->uf;
        $fazenda->cidade = $request->cidade;
        $fazenda->localizacao = $request->localizacao;
        $fazenda->hectares = $request->hectares;
        $fazenda->km_estrada_chao = $request->km_estrada_chao;
        $fazenda->riacho = $request->riacho;
        $fazenda->destaque = $request->destaque;
        $fazenda->preco = $request->preco;
        $fazenda->descricao = $request->descricao;
        $fazenda->melhor_plantaçao = $request->melhor_plantaçao;
        $fazenda->status = 1;
        $fazenda->empresa_id = Auth::user()->empresa_id;


        if ($request->hasFile('capa') && $request->capa->isValid()) {
            $extension = $request->file('capa')->getClientOriginalExtension();
            $fileNameToStore =  'fazenda' . substr($request->name, 5) . "." . $extension;
            $imagePath = $request->capa->storeAs('public/images', $fileNameToStore);
            $fazenda->capa = $fileNameToStore;
        }

        $fazenda->save();

        return redirect()->route('fazendas')->with('success', 'Fazenda criada com sucesso!');
    }

    public function doEdit(Fazenda $fazenda, Request $request)
    {
        dd($request);
        $fazenda->nome = $request->nome;
        $fazenda->uf = $request->uf;
        $fazenda->cidade = $request->cidade;
        $fazenda->localizacao = $request->localizacao;
        $fazenda->hectares = $request->hectares;
        $fazenda->km_estrada_chao = $request->km_estrada_chao;
        $fazenda->riacho = $request->riacho;
        $fazenda->destaque = $request->destaque;
        $fazenda->preco = $request->preco;
        $fazenda->descricao = $request->descricao;
        $fazenda->melhor_plantaçao = $request->melhor_plantaçao;
        $fazenda->status = 1;
        $fazenda->empresa_id = Auth::user()->empresa_id;


        if ($request->hasFile('capa') && $request->capa->isValid()) {
            $extension = $request->file('capa')->getClientOriginalExtension();
            $fileNameToStore =  'fazenda' . substr($request->name, 5) . "." . $extension;
            $imagePath = $request->capa->storeAs('public/images', $fileNameToStore);
            $fazenda->capa = $fileNameToStore;
        }

        $fazenda->save();

        return redirect()->route('fazendas')->with('success', 'Fazenda editada com sucesso!');
    }
}
