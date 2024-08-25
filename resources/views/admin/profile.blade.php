  
@extends('layouts.main')

@section('title')
  Meu Perfil
@endsection

@section('content')
  <!-- <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div> -->
  <div class="main-content position-relative" style="margin-top: -200px">
    <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="{{ url("storage/images/{$user->profile_pic}") }}" alt="profile_image" class="w-100 h-100 shadow-sm" style="border-radius: 50%">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {{ Auth::user()->username }}
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                {{ Auth::user()->empresa ? Auth::user()->empresa->name : "" }}
              </p>
            </div>
          </div>
          <!-- <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="ni ni-app"></i>
                    <span class="ms-2">App</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="ni ni-email-83"></i>
                    <span class="ms-2">Messages</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="ni ni-settings-gear-65"></i>
                    <span class="ms-2">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
          <form action="{{ route('profile.edit', ['user' => Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
          @csrf
              <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                  <p class="mb-0">Editar Perfil</p>
                  <!-- <button class="btn btn-primary btn-sm ms-auto">Settings</button> -->
                </div>
              </div>
              <div class="card-body">
                <p class="text-uppercase text-sm">Dados Pessoais</p>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nome de Usuário</label>
                      <input class="form-control" type="text" value="{{ Auth::user()->username }}" name="username">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nome</label>
                      <input class="form-control" type="text" value="{{ Auth::user()->name }}" name="name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Sobrenome</label>
                      <input class="form-control" type="text" value="{{ Auth::user()->lastname }}" name="lastname">
                    </div>
                  </div>
                </div>
                <hr class="horizontal dark">
                <p class="text-uppercase text-sm">Dados de Contato</p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Email</label>
                      <input class="form-control" type="email" value="{{ Auth::user()->email }}" name="email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Telefone</label>
                      <input class="form-control" type="text" value="{{ Auth::user()->telefone }}" name="telefone">
                    </div>
                  </div>
                </div>
                @if (Auth::user()->role_id === 1)
                  <hr class="horizontal dark">
                  <p class="text-uppercase text-sm">Empresas</p>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Empresas</label>
                        <select class="form-control" name="empresa_id">
                            @foreach ($empresas as $empresa)
                                <option value="{{ $empresa->id }}">
                                    {{ $empresa->name }}
                                </option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                @endif
                <hr class="horizontal dark">
                <p class="text-uppercase text-sm">Foto de Perfil</p>
                <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                        <label for="imageUpload" class="form-control-label">Upload de Foto de Perfil</label>
                        <input type="file" class="form-control" id="imageUpload" name="profile" accept="image/*" onchange="previewImage(event)">
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                      <img id="imagePreview" src="" alt="Preview" style="max-width: 200px; display: none;" />
                      </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button class="btn btn-primary btn-sm col-md-2">Salvar Perfil</button>
                </div>
            </form>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <img src="../assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                  <a href="javascript:;">
                    <img src="{{ url("storage/images/{$user->profile_pic}") }}" class="rounded-circle img-fluid border border-2 border-white" style="border-radius: 100%; height: 150px; width: 150px">
                  </a>
                </div>
              </div>
            </div>
            <!-- <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
              <div class="d-flex justify-content-between">
                <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
                <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i class="ni ni-collection"></i></a>
                <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
                <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i class="ni ni-email-83"></i></a>
              </div>
            </div> -->
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <!-- <div class="d-flex justify-content-center">
                    <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">22</span>
                      <span class="text-sm opacity-8">Friends</span>
                    </div>
                    <div class="d-grid text-center mx-4">
                      <span class="text-lg font-weight-bolder">10</span>
                      <span class="text-sm opacity-8">Photos</span>
                    </div>
                    <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">89</span>
                      <span class="text-sm opacity-8">Comments</span>
                    </div>
                  </div> -->
                </div>
              </div>
              <div class="text-center mt-4">
                <h5>
                  {{ Auth::user()->name . " " . Auth::user()->lastname  }}
                </h5>
                <div class="h6 font-weight-300">
                <i class="fas fa-envelope"></i>
                {{ Auth::user()->email }}
                </div>
                <div class="h6 font-weight-300">
                <i class="fas fa-phone"></i>
                {{ Auth::user()->telefone }}
                </div>
                <div class="h6 mt-4">
                  {{ Auth::user()->empresa ? Auth::user()->empresa->name : "" }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection

@section('scripts')
  <script>
    window.onload = function() {
      document.querySelector('.nav-link-profile').classList.add('active');
    };

    function previewImage(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('imagePreview');
        output.src = reader.result;
        output.style.display = 'block';
      };
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
@endsection