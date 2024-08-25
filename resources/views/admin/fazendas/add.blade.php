@extends('layouts.main')

@section('title')
  Nova Fazenda
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
                <p class="mb-0">Nova Fazenda</p>
                <!-- <button class="btn btn-primary btn-sm ms-auto">Settings</button> -->
              </div>
            </div>
            <form action="{{ route('fazendas.store') }}" method="POST" enctype="multipart/form-data" id="new-form">
                @csrf
                <div class="card-body">
                  <p class="text-uppercase text-sm">Informações da Fazenda</p>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nome</label>
                        <input class="form-control" type="text" value="" placeholder="Nome da Fazenda..." name="nome">
                      </div>
                    </div>
                    <div class="col-md-6">
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
                        <textarea class="form-control" type="text" value="" placeholder="Localização da Fazenda..." name="localizacao"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Descrição</label>
                        <textarea class="form-control" type="text" value="" placeholder="Descrição da Fazenda..." name="descricao"></textarea>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Quantos Hectares</label>
                        <input class="form-control" type="number" value="" placeholder="Quantos Hectares tem a Fazenda..." name="hectares">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Melhor Plantação</label>
                        <input class="form-control" type="text" value="" placeholder="Qual a melhor plantação para a Fazenda..." name="melhor_plantaçao">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Distância de Estrada de Chão</label>
                        <input class="form-control" type="number" value="" placeholder="Distância de Estrada de Chão até a Fazenda..." name="km_estrada_chao">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Riacho</label>
                        <select class="form-control" name="riacho">
                            <option selected disabled>( A Fazenda possui riacho? )</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Destaque</label>
                        <select class="form-control" name="destaque">
                            <option selected disabled>( Colocar Fazenda em destaque? )</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Preço</label>
                        <input class="form-control" type="text" value="" placeholder="R$0,00" name="preco" id="preco">
                      </div>
                    </div>
                  <hr class="horizontal dark">
                  <p class="text-uppercase text-sm">Imagens</p>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="imageUpload" class="form-control-label">Upload Capa da Fazenda</label>
                            <input type="file" class="form-control" id="imageUpload" name="capa" accept="image/*" onchange="previewImage(event)">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                        <img id="imagePreview" src="" alt="Preview" style="max-width: 200px; display: none;" />
                        </div>
                    </div>
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
                $("select[name='cidade'").html('');
                $("select[name='cidade'").html(data);
            }
        });
    } else {
        $("#divcidade").hide();
    }
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
</script>
@endsection