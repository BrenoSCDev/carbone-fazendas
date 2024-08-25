@extends('layouts.main')

@section('title')
  Editar Página Principal
@endsection

@section('content')
  <!-- <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div> -->
  <div class="main-content position-relative">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Editar Página: Página Principal</p>
                <!-- <button class="btn btn-primary btn-sm ms-auto">Settings</button> -->
              </div>
            </div>
            <form action="{{ route('home.do.edit', ['home' => $home->id]) }}" method="POST" enctype="multipart/form-data" id="new-form">
                @csrf
                <div class="card-body">
                  <p class="text-uppercase text-sm">Informações da Página</p>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Titulo</label>
                        <input class="form-control" type="text" value="{{ $home->titulo }}" placeholder="Insira o titulo principal da página..." name="titulo">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Subtitulo</label>
                        <input class="form-control" type="text" value="{{ $home->subtitulo }}" placeholder="Insira o subtitulo da página..." name="subtitulo">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">{{ $home->status === 1 ? 'Desativar' : 'Reativar' }}</label>
                        <select class="form-control" name="status">
                            <option value="1" {{ $home->status === 1 ? 'selected' : '' }}>Ativar</option>
                            <option value="0" {{ $home->status === 0 ? 'selected' : '' }}>Desativar</option>
                        </select>
                      </div>
                    </div>

                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Imagens</p>

                    <div class="col-md-12">
                        <button class="btn btn-primary btn-sm col-md-2" type="submit">Salvar Página</button>
                    </div>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection

@section('scripts')

@endsection