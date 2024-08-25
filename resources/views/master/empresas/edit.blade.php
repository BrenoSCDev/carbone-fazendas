@extends('layouts.main')

@section('title')
  {{ $empresa->name }}
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
                <p class="mb-0">Editar Empresa</p>
                <!-- <button class="btn btn-primary btn-sm ms-auto">Settings</button> -->
              </div>
            </div>
            <form action="{{ route('empresas.do.edit', ['empresa' => $empresa->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <p class="text-uppercase text-sm">Informações da Empresa</p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nome</label>
                        <input class="form-control" type="text" value="{{$empresa->name}}" placeholder="Nome da Empresa" name="name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">CRECI</label>
                        <input class="form-control" type="text" value="{{$empresa->creci}}" placeholder="CRECI" name="creci">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Email</label>
                        <input class="form-control" type="text" value="{{$empresa->email}}" placeholder="Nome da Empresa" name="email">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Identificador</label>
                        <input class="form-control" type="text" value="{{$empresa->identificador}}" placeholder="Identificador da Empresa" name="identificador">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">CNPJ</label>
                        <input class="form-control" type="text" value="{{$empresa->cnpj}}" placeholder="CNPJ" name="cnpj">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Telefone</label>
                        <input class="form-control" type="text" value="{{$empresa->telefone}}" placeholder="Telefone" name="telefone">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Telefone WhatsApp</label>
                        <input class="form-control" type="text" value="{{$empresa->telefone_wpp}}" placeholder="Telefone WhatsApp" name="telefone_wpp">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Endereço</label>
                        <input class="form-control" type="text" value="{{$empresa->address}}" name="address">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">UF</label>
                        <select class="form-control" name="uf">
                            <option>(Selecione)</option>
                            <option value="AC" {{ $empresa->uf === "AC" ? 'selected' : '' }}>AC</option>
                            <option value="AL" {{ $empresa->uf === "AL" ? 'selected' : '' }}>AL</option>
                            <option value="AM" {{ $empresa->uf === "AM" ? 'selected' : '' }}>AM</option>
                            <option value="AP" {{ $empresa->uf === "AP" ? 'selected' : '' }}>AP</option>
                            <option value="BA" {{ $empresa->uf === "BA" ? 'selected' : '' }}>BA</option>
                            <option value="CE" {{ $empresa->uf === "CE" ? 'selected' : '' }}>CE</option>
                            <option value="DF" {{ $empresa->uf === "DF" ? 'selected' : '' }}>DF</option>
                            <option value="ES" {{ $empresa->uf === "ES" ? 'selected' : '' }}>ES</option>
                            <option value="GO" {{ $empresa->uf === "GO" ? 'selected' : '' }}>GO</option>
                            <option value="MA" {{ $empresa->uf === "MA" ? 'selected' : '' }}>MA</option>
                            <option value="MG" {{ $empresa->uf === "MG" ? 'selected' : '' }}>MG</option>
                            <option value="MS" {{ $empresa->uf === "MS" ? 'selected' : '' }}>MS</option>
                            <option value="MT" {{ $empresa->uf === "MT" ? 'selected' : '' }}>MT</option>
                            <option value="PA" {{ $empresa->uf === "PA" ? 'selected' : '' }}>PA</option>
                            <option value="PB" {{ $empresa->uf === "PB" ? 'selected' : '' }}>PB</option>
                            <option value="PE" {{ $empresa->uf === "PE" ? 'selected' : '' }}>PE</option>
                            <option value="PI" {{ $empresa->uf === "PI" ? 'selected' : '' }}>PI</option>
                            <option value="PR" {{ $empresa->uf === "PR" ? 'selected' : '' }}>PR</option>
                            <option value="RJ" {{ $empresa->uf === "RJ" ? 'selected' : '' }}>RJ</option>
                            <option value="RN" {{ $empresa->uf === "RN" ? 'selected' : '' }}>RN</option>
                            <option value="RO" {{ $empresa->uf === "RO" ? 'selected' : '' }}>RO</option>
                            <option value="RR" {{ $empresa->uf === "RR" ? 'selected' : '' }}>RR</option>
                            <option value="RS" {{ $empresa->uf === "RS" ? 'selected' : '' }}>RS</option>
                            <option value="SC" {{ $empresa->uf === "SC" ? 'selected' : '' }}>SC</option>
                            <option value="SE" {{ $empresa->uf === "SE" ? 'selected' : '' }}>SE</option>
                            <option value="SP" {{ $empresa->uf === "SP" ? 'selected' : '' }}>SP</option>
                            <option value="TO" {{ $empresa->uf === "TO" ? 'selected' : '' }}>TO</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Cidade</label>
                        <select class="form-control" name="city">
                            <option>(Selecione)</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">CEP</label>
                        <input class="form-control" type="text" value="{{ $empresa->cep }}" placeholder="CEP" name="cep">
                      </div>
                    </div>
                  </div>
                  <hr class="horizontal dark">
                  <p class="text-uppercase text-sm">Redes Sociais</p>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">
                            <i class="fab fa-instagram"></i>
                            Instagram
                        </label>
                        <input class="form-control" type="text" value="" name="instagram" placeholder="Instagram">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">
                            <i class="fab fa-tiktok"></i>
                            TikTok
                        </label>
                        <input class="form-control" type="text" value="" name="tiktok" placeholder="TikTok">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">
                            <i class="fab fa-youtube"></i>
                            YouTube
                        </label>
                        <input class="form-control" type="text" value="" name="youtube" placeholder="YouTube">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">
                            <i class="fab fa-facebook"></i>
                            Facebook
                        </label>
                        <input class="form-control" type="text" value="" name="facebook" placeholder="Facebook">
                      </div>
                    </div>
                    <hr class="horizontal dark">
    
                    <!-- Image Upload with Preview -->
                    <!-- <div class="row"> -->
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="imageUpload" class="form-control-label">Upload Logo da Empresa</label>
                              <input type="file" class="form-control" id="imageUpload" name="logo" accept="image/*" onchange="previewImage(event)">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              @if ($empresa->logo)
                              <img style="width: 150px; height: 150px; border-radius: 5px;" id="empresalogo"
                                  src="{{ url("storage/images/{$empresa->logo}") }}">
                              @endif
                            <img id="imagePreview" src="" alt="Preview" style="max-width: 200px; display: none;" />
                            </div>
                        </div>
                    <!-- </div> -->
                     <div class="col-md-12">
                        <button class="btn btn-primary btn-sm col-md-2">Salvar Empresa</button>
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
<script>
  function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('imagePreview');
      var oldimg = document.getElementById('empresalogo');
      output.src = reader.result;
      output.style.display = 'block';
      oldimg.style.display = 'none';
    };
    reader.readAsDataURL(event.target.files[0]);
  }

  $(document).ready(function(){
    $('input[name="cnpj"]').mask('00.000.000/0000-00');
    $('input[name="telefone"]').mask('(00) 00000-0000');
    $('input[name="telefone_wpp"]').mask('(00) 00000-0000');
    $('input[name="cep"]').mask('00000-000');
  });

  $(function() {
    $("select[name='uf']").trigger("change");
  });

  var firstload = true;

  $("select[name='uf']").change(function() {
    var uf = $(this).val();
    if (uf != 'AA') {
        $.ajax({
            url: "/cidades/getByUf/" + uf,
            method: 'GET',
            dataType: 'html',
            success: function(data) {
                $("select[name='city'").html('');
                $("select[name='city'").html(data);
                if (firstload) {
                  $("select[name='city']").val("{{ $empresa->city }}");
                  firstload = false;
                }
            }
        });
    }
  });
</script>
@endsection