
@extends('layouts.main')

@section('title')
  Fazendas
@endsection

@section('content')
   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
          <div class="card-header pb-0 d-flex" style="justify-content: space-between">
              <h6>Tabela de Fazendas</h6>
              <a href="{{route('fazendas.nova')}}" class="btn btn-sm btn-primary btn-lg mb-0">
                <i class="fas fa-seedling  text-sm" style="margin-right: 5px"></i>
                Nova Fazenda
            </a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fazenda</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Valor</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cadastro</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($fazendas as $fazenda)  
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="{{ url("storage/images/{$fazenda->capa}") }}" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ $fazenda->nome }}</h6>
                              <p class="text-xs text-secondary mb-0">{{ $fazenda->uf . " " . "-" . " " . $fazenda->cidade }}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0 text-success">{{'R$' . ' ' . number_format($fazenda->preco, 2, ',', '.')}}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          @if ($fazenda->status === 1)
                            <span class="badge badge-sm bg-gradient-success" style="width: 80px;">Ativa</span>
                          @elseif ($fazenda->status === 2)
                          <span class="badge badge-sm bg-gradient-info" style="width: 80px;">Vendida</span>
                          @else
                            <span class="badge badge-sm bg-gradient-danger" style="width: 80px;">Inativa</span>
                          @endif
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{ date_format($fazenda->created_at, 'd/m/Y') }}</span>
                        </td>
                        <td class="align-middle">
                          <a href="{{ route('fazenda.edit', [$fazenda->id]) }}" class="text-secondary font-weight-bold text-xs" style="margin-right: 15px">
                            Editar
                          </a>
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs">
                            Visualizar
                          </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('scripts')
  <script>
    window.onload = function() {
      document.querySelector('.nav-link-fazendas').classList.add('active');
    };
  </script>
@endsection