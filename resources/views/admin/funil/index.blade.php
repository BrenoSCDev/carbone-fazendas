
@extends('layouts.main')

@section('links')
    <link href="../assets/css/funil.css" rel="stylesheet" />
@endsection

@section('title')
  Funil de Vendas
@endsection

@section('content')
    <div class="kanban-board">
        <div class="kanban-column" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Aguardando Contato</h2>
            <div class="kanban-item" id="item1" draggable="true" ondragstart="drag(event)">
                <h3>Cliente 1</h3>
                <p>Telefone: (62) 98888-7777</p>
                <p>Email: cliente1@empresa.com</p>
            </div>
            <div class="kanban-item" id="item2" draggable="true" ondragstart="drag(event)">
                <h3>Cliente 2</h3>
                <p>Telefone: (62) 98888-7777</p>
                <p>Email: cliente2@empresa.com</p>
            </div>
        </div>
        <div class="kanban-column" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Contato Realizado</h2>
            <div class="kanban-item" id="item3" draggable="true" ondragstart="drag(event)">
                <h3>Cliente 3</h3>
                <p>Telefone: (62) 98888-7777</p>
                <p>Email: cliente3@empresa.com</p>
            </div>
        </div>
        <div class="kanban-column" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Negociação</h2>
            <div class="kanban-item" id="item4" draggable="true" ondragstart="drag(event)">
                <h3>Cliente 4</h3>
                <p>Telefone: (62) 98888-7777</p>
                <p>Email: cliente4@empresa.com</p>
            </div>
        </div>
        <div class="kanban-column" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Venda Ganha</h2>
            <div class="kanban-item" id="item5" draggable="true" ondragstart="drag(event)">
                <h3>Cliente 5</h3>
                <p>Telefone: (62) 98888-7777</p>
                <p>Email: cliente5@empresa.com</p>
            </div>
        </div>
        <div class="kanban-column" ondrop="drop(event)" ondragover="allowDrop(event)">
            <h2>Descarte</h2>
            <div class="kanban-item" id="item6" draggable="true" ondragstart="drag(event)">
                <h3>Cliente 6</h3>
                <p>Telefone: (62) 98888-7777</p>
                <p>Email: cliente5@empresa.com</p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="../assets/js/funil.js"></script>
@endsection