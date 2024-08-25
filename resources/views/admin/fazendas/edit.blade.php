@extends('layouts.main')

@section('links')
<style>
        .preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .preview {
            position: relative;
            display: inline-block;
            width: 100px;
            height: 100px;
            border: 1px solid #ccc;
            border-radius: 4px;
            overflow: hidden;
        }
        .preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .remove-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }
    </style>
@endsection

@section('title')
  Editar Fazenda
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
                <p class="mb-0">Editar Fazenda: {{ $fazenda->nome }}</p>
                <!-- <button class="btn btn-primary btn-sm ms-auto">Settings</button> -->
              </div>
            </div>
            <form action="{{ route('fazendas.do.edit', ['fazenda' => $fazenda->id]) }}" method="POST" enctype="multipart/form-data" id="new-form">
                @csrf
                <div class="card-body">
                  <p class="text-uppercase text-sm">Informações da Fazenda</p>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nome</label>
                        <input class="form-control" type="text" value="{{ $fazenda->nome }}" placeholder="Nome da Fazenda..." name="nome">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">UF</label>
                        <select class="form-control" name="uf">
                            <option>(Selecione)</option>
                            <option value="AC" {{ $fazenda->uf === "AC" ? 'selected' : '' }}>AC</option>
                            <option value="AL" {{ $fazenda->uf === "AL" ? 'selected' : '' }}>AL</option>
                            <option value="AM" {{ $fazenda->uf === "AM" ? 'selected' : '' }}>AM</option>
                            <option value="AP" {{ $fazenda->uf === "AP" ? 'selected' : '' }}>AP</option>
                            <option value="BA" {{ $fazenda->uf === "BA" ? 'selected' : '' }}>BA</option>
                            <option value="CE" {{ $fazenda->uf === "CE" ? 'selected' : '' }}>CE</option>
                            <option value="DF" {{ $fazenda->uf === "DF" ? 'selected' : '' }}>DF</option>
                            <option value="ES" {{ $fazenda->uf === "ES" ? 'selected' : '' }}>ES</option>
                            <option value="GO" {{ $fazenda->uf === "GO" ? 'selected' : '' }}>GO</option>
                            <option value="MA" {{ $fazenda->uf === "MA" ? 'selected' : '' }}>MA</option>
                            <option value="MG" {{ $fazenda->uf === "MG" ? 'selected' : '' }}>MG</option>
                            <option value="MS" {{ $fazenda->uf === "MS" ? 'selected' : '' }}>MS</option>
                            <option value="MT" {{ $fazenda->uf === "MT" ? 'selected' : '' }}>MT</option>
                            <option value="PA" {{ $fazenda->uf === "PA" ? 'selected' : '' }}>PA</option>
                            <option value="PB" {{ $fazenda->uf === "PB" ? 'selected' : '' }}>PB</option>
                            <option value="PE" {{ $fazenda->uf === "PE" ? 'selected' : '' }}>PE</option>
                            <option value="PI" {{ $fazenda->uf === "PI" ? 'selected' : '' }}>PI</option>
                            <option value="PR" {{ $fazenda->uf === "PR" ? 'selected' : '' }}>PR</option>
                            <option value="RJ" {{ $fazenda->uf === "RJ" ? 'selected' : '' }}>RJ</option>
                            <option value="RN" {{ $fazenda->uf === "RN" ? 'selected' : '' }}>RN</option>
                            <option value="RO" {{ $fazenda->uf === "RO" ? 'selected' : '' }}>RO</option>
                            <option value="RR" {{ $fazenda->uf === "RR" ? 'selected' : '' }}>RR</option>
                            <option value="RS" {{ $fazenda->uf === "RS" ? 'selected' : '' }}>RS</option>
                            <option value="SC" {{ $fazenda->uf === "SC" ? 'selected' : '' }}>SC</option>
                            <option value="SE" {{ $fazenda->uf === "SE" ? 'selected' : '' }}>SE</option>
                            <option value="SP" {{ $fazenda->uf === "SP" ? 'selected' : '' }}>SP</option>
                            <option value="TO" {{ $fazenda->uf === "TO" ? 'selected' : '' }}>TO</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Cidade</label>
                        <select class="form-control" name="cidade">
                            <option selected disabled>( Selecione um estado para prosseguir )</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Localização</label>
                        <textarea class="form-control" type="text" placeholder="Localização da Fazenda..." name="localizacao">
                          {{ $fazenda->localizacao }}
                        </textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Descrição</label>
                        <textarea class="form-control" type="text" placeholder="Descrição da Fazenda..." name="descricao">
                          {{ $fazenda->descricao }}
                        </textarea>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Quantos Hectares</label>
                        <input class="form-control" type="number" value="{{ $fazenda->hectares }}" placeholder="Quantos Hectares tem a Fazenda..." name="hectares">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Melhor Plantação</label>
                        <input class="form-control" type="text" value="{{ $fazenda->melhor_plantaçao }}" placeholder="Qual a melhor plantação para a Fazenda..." name="melhor_plantaçao">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Distância de Estrada de Chão</label>
                        <input class="form-control" type="number" value="{{ $fazenda->km_estrada_chao }}" placeholder="Distância de Estrada de Chão até a Fazenda..." name="km_estrada_chao">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Riacho</label>
                        <select class="form-control" name="riacho">
                            <option selected disabled>( A Fazenda possui riacho? )</option>
                            <option value="1" {{ $fazenda->riacho === 1 ? 'selected' : '' }}>Sim</option>
                            <option value="0" {{ $fazenda->riacho === 0 ? 'selected' : '' }}>Não</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Destaque</label>
                        <select class="form-control" name="destaque">
                            <option selected disabled>( Colocar Fazenda em destaque? )</option>
                            <option value="1" {{ $fazenda->destaque === 1 ? 'selected' : '' }}>Sim</option>
                            <option value="0" {{ $fazenda->destaque === 0 ? 'selected' : '' }}>Não</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Preço</label>
                        <input class="form-control" type="text" value="{{ $fazenda->preco }}" placeholder="R$0,00" name="preco" id="preco">
                      </div>
                    </div>
                  <hr class="horizontal dark">
                  <p class="text-uppercase text-sm">Imagens</p>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="imageUpload" class="form-control-label">Upload da Capa Fazenda</label>
                              <input type="file" class="form-control" id="imageUpload" name="capa" accept="image/*" onchange="previewImage(event)">
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              @if ($fazenda->capa)
                                  <img style="width: 250px; height: 200px; border-radius: 5px;" id="fazendacapa"
                                      src="{{ url('storage/images/'.$fazenda->capa) }}">
                              @endif
                              <img id="imagePreview" src="" alt="Preview" style="width: 250px; height: 200px; border-radius: 5px; display: none;" />
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="galleryUpload" class="form-control-label">Upload da Galeria da Fazenda</label>
                              <input type="file" id="fileInput" multiple accept="image/*" name="galeria[]">
                              <div class="preview-container" id="previewContainer"></div>
                          </div>
                      </div>
                  </div>

                  <!-- Hidden input to store the selected files -->
                  <input type="hidden" id="hiddenFileInput" name="galeria" multiple>
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-sm col-md-2" type="submit">Salvar Fazenda</button>
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
      var oldimg = document.getElementById('fazendacapa');
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

  function formatarMoeda(valor) {
      valor = valor + "";
      valor = parseInt(valor.replace(/[\D]+/g, ""));

      if (isNaN(valor)) {
          return "";
      }

      if (valor < 10) {
          // Se o valor tiver apenas 1 dígito, adiciona um zero à esquerda
          valor = "0,0" + valor;
      } else if (valor < 100) {
          // Se o valor tiver 2 dígitos, adiciona um zero à esquerda
          valor = "0," + valor;
      } else {
          valor = valor + "";
          valor = valor.replace(/([0-9]{2})$/g, ",$1");

          if (valor.length > 6) {
              valor = valor.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
          }
      }

      return valor;
  }

  $("#preco").on("keyup", function (event) {
      let valorAtual = event.target.value;
      valorAtual = formatarMoeda(valorAtual);
      event.target.value = valorAtual;
  });

  function stringToFloat(str) {
      str = str.replaceAll(".", "");
      str = str.replace(",", ".");
      return str;
  }

  $("#new-form").on("submit", function (e) {
      e.preventDefault();
      var vl = $("#preco").val();
      newvl = stringToFloat(vl);
      $("#preco").val(newvl);
      $(this).off("submit");
      this.submit();
  });

  function formatarFloat(num) {
    num = num.toFixed(2);
    var partes = num.split(".");
    var inteiros = partes[0];
    var decimais = partes[1];

    inteiros = inteiros.replace(/\B(?=(\d{3})+(?!\d))/g, ".");

    return inteiros + "," + decimais;
  }

  $(function() {
    var valor = $('#preco').val();
    valor = formatarFloat(parseFloat(valor));
    $('#preco').val(valor);
  });

  var firstload = true;

  $(function() {
    $("select[name='uf']").trigger("change");
  });

  $("select[name='uf']").change(function() {
    var uf = $(this).val();
    if (uf != 'AA') {
        $.ajax({
            url: "/cidades/getByUf/" + uf,
            method: 'GET',
            dataType: 'html',
            success: function(data) {
                $("select[name='cidade'").html('');
                $("select[name='cidade'").html(data);
                if (firstload) {
                  $("select[name='cidade']").val("{{ $fazenda->cidade }}");
                  firstload = false;
                }
            }
        });
    }
  });
</script>
<!-- <script>
    const fileInput = document.getElementById('fileInput');
    const previewContainer = document.getElementById('previewContainer');
    let selectedFiles = [];

    fileInput.addEventListener('change', handleFileSelect);

    function handleFileSelect(event) {
        const files = Array.from(event.target.files);

        files.forEach((file, index) => {
            if (!selectedFiles.includes(file)) {
                selectedFiles.push(file);
                createPreview(file, index);
            }
        });
    }

    function createPreview(file, index) {
        const reader = new FileReader();
        reader.onload = (e) => {
            const previewDiv = document.createElement('div');
            previewDiv.classList.add('preview');
            previewDiv.setAttribute('data-index', index);

            const img = document.createElement('img');
            img.src = e.target.result;
            previewDiv.appendChild(img);

            const removeBtn = document.createElement('button');
            removeBtn.classList.add('remove-btn');
            removeBtn.textContent = 'x';
            removeBtn.onclick = () => removeFile(index);
            previewDiv.appendChild(removeBtn);

            previewContainer.appendChild(previewDiv);
        };
        reader.readAsDataURL(file);
    }

    function removeFile(index) {
        selectedFiles = selectedFiles.filter((_, i) => i !== index);
        renderPreviews();
    }

    function renderPreviews() {
        previewContainer.innerHTML = '';
        selectedFiles.forEach((file, index) => createPreview(file, index));
    }

    $('#new-form').on("submit", function(e) {
      e.preventDefault();
      console.log('Files ready for submission:', selectedFiles);
    })
</script> -->
@endsection