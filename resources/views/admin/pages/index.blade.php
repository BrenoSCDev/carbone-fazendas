
@extends('layouts.main')

@section('title')
  Páginas de Apresentação
@endsection

@section('content')
   <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Tabela de Páginas</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Página</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">
                                <i class="fas fa-globe" style="margin-bottom; 5px"></i>
                                Página Principal
                              </h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                          @if ($home->status === 1)
                            <span class="badge badge-sm bg-gradient-success" style="width: 80px;">Ativa</span>
                          @else
                            <span class="badge badge-sm bg-gradient-danger" style="width: 80px;">Inativa</span>
                          @endif
                        </td>
                      <td class="align-middle">
                        <a href="{{ route('home.edit', [$home->id]) }}" class="text-secondary font-weight-bold text-xs" style="margin-right: 15px">
                          Editar
                        </a>
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs">
                          Visualizar
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">
                                <i class="fas fa-globe" style="margin-bottom; 5px"></i>
                                Sobre Nós
                              </h6>
                            </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                          @if ($sobrenos->status === 1)
                            <span class="badge badge-sm bg-gradient-success" style="width: 80px;">Ativa</span>
                          @else
                            <span class="badge badge-sm bg-gradient-danger" style="width: 80px;">Inativa</span>
                          @endif
                        </td>
                      <td class="align-middle">
                        <a href="{{ route('sobrenos.edit', [$sobrenos->id]) }}" class="text-secondary font-weight-bold text-xs" style="margin-right: 15px">
                          Editar
                        </a>
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs">
                          Visualizar
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">
                                <i class="fas fa-globe" style="margin-bottom; 5px"></i>
                                Contato
                              </h6>
                            </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                          @if ($contato->status === 1)
                            <span class="badge badge-sm bg-gradient-success" style="width: 80px;">Ativa</span>
                          @else
                            <span class="badge badge-sm bg-gradient-danger" style="width: 80px;">Inativa</span>
                          @endif
                        </td>
                      <td class="align-middle">
                        <a href="{{ route('contato.edit', [$contato->id]) }}" class="text-secondary font-weight-bold text-xs" style="margin-right: 15px">
                          Editar
                        </a>
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs">
                          Visualizar
                        </a>
                      </td>
                    </tr>
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
        document.querySelector('.nav-link-pages').classList.add('active');
    };
  </script>
@endsection