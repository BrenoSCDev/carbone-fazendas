@extends('layouts.main')

@section('title')
  Nova Empresa
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
                <p class="mb-0">Nova Empresa</p>
                <!-- <button class="btn btn-primary btn-sm ms-auto">Settings</button> -->
              </div>
            </div>
            <form action="{{ route('empresas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <p class="text-uppercase text-sm">Informações da Empresa</p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nome</label>
                        <input class="form-control" type="text" value="" placeholder="Nome da Empresa" name="name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">CRECI</label>
                        <input class="form-control" type="text" value="" placeholder="CRECI" name="creci">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Email</label>
                        <input class="form-control" type="text" value="" placeholder="Nome da Empresa" name="email">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Identificador</label>
                        <input class="form-control" type="text" value="" placeholder="Identificador da Empresa" name="identificador">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">CNPJ</label>
                        <input class="form-control" type="text" value="" placeholder="CNPJ" name="cnpj">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Telefone</label>
                        <input class="form-control" type="text" value="" placeholder="Telefone" name="telefone">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Telefone WhatsApp</label>
                        <input class="form-control" type="text" value="" placeholder="Telefone WhatsApp" name="telefone_wpp">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Endereço</label>
                        <input class="form-control" type="text" value="Endereço" name="address">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">UF</label>
                        <select class="form-control" name="uf">
                            <option>(Selecione)</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AM">AM</option>
                            <option value="AP">AP</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MG">MG</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="PR">PR</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SE">SE</option>
                            <option value="SP">SP</option>
                            <option value="TO">TO</option>
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
                        <input class="form-control" type="text" value="" placeholder="CEP" name="cep">
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
      output.src = reader.result;
      output.style.display = 'block';
    };
    reader.readAsDataURL(event.target.files[0]);
  }

  $(document).ready(function(){
    $('input[name="cnpj"]').mask('00.000.000/0000-00');
    $('input[name="telefone"]').mask('(00) 00000-0000');
    $('input[name="telefone_wpp"]').mask('(00) 00000-0000');
    $('input[name="cep"]').mask('00000-000');
  });

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
            }
        });
    } else {
        $("#divcidade").hide();
    }

  });
</script>
@endsection