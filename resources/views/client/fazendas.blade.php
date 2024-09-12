@extends('layouts.client')

@section('links')
<style>
    body {
        background: linear-gradient(90deg, rgba(20,74,68,1) 18%, rgba(2,140,71,1) 100%);
    }
</style>
@endsection

@section('content')
<div class="sec-mt-10 px-2 py-16 md:px-0">
  <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5 text-center relative">
    <span class="relative text-3xl font-bold tracking-tight text-[#E9E453]">
    <i class="fas fa-seedling"></i>
      Fazendas disponíveis
    </span>
  </div>
  <div class="mt-8 max-w-screen-xl mx-auto px-5 sm:px-10 md:px-16">
  <h2 class="text-[#E9E453] text-xl font-bold mb-4">
    <i class="fas fa-filter mr-1"></i> Filtros
  </h2>
  <form>
      <div class="flex flex-col md:flex-row sm:flex-row gap-3">
        <div class="flex flex-col">
          <label for="uf" class="text-[#E9E453] font-semibold mb-2">Estado</label>
          <select name="uf" id="uf" class="appearance-none border border-[#E9E453] bg-[#144A44] text-[#E9E453] rounded-md p-2 sm:w-64 w-full text-center">
            <option value="" class="text-[#E9E453]" selected disabled>Buscar por estado</option>
            <option value="AC" class="text-[#E9E453]">Acre</option>
            <option value="AL" class="text-[#E9E453]">Alagoas</option>
            <option value="AP" class="text-[#E9E453]">Amapá</option>
            <option value="AM" class="text-[#E9E453]">Amazonas</option>
            <option value="BA" class="text-[#E9E453]">Bahia</option>
            <option value="CE" class="text-[#E9E453]">Ceará</option>
            <option value="DF" class="text-[#E9E453]">Distrito Federal</option>
            <option value="ES" class="text-[#E9E453]">Espírito Santo</option>
            <option value="GO" class="text-[#E9E453]">Goiás</option>
            <option value="MA" class="text-[#E9E453]">Maranhão</option>
            <option value="MT" class="text-[#E9E453]">Mato Grosso</option>
            <option value="MS" class="text-[#E9E453]">Mato Grosso do Sul</option>
            <option value="MG" class="text-[#E9E453]">Minas Gerais</option>
            <option value="PA" class="text-[#E9E453]">Pará</option>
            <option value="PB" class="text-[#E9E453]">Paraíba</option>
            <option value="PR" class="text-[#E9E453]">Paraná</option>
            <option value="PE" class="text-[#E9E453]">Pernambuco</option>
            <option value="PI" class="text-[#E9E453]">Piauí</option>
            <option value="RJ" class="text-[#E9E453]">Rio de Janeiro</option>
            <option value="RN" class="text-[#E9E453]">Rio Grande do Norte</option>
            <option value="RS" class="text-[#E9E453]">Rio Grande do Sul</option>
            <option value="RO" class="text-[#E9E453]">Rondônia</option>
            <option value="RR" class="text-[#E9E453]">Roraima</option>
            <option value="SC" class="text-[#E9E453]">Santa Catarina</option>
            <option value="SP" class="text-[#E9E453]">São Paulo</option>
            <option value="SE" class="text-[#E9E453]">Sergipe</option>
            <option value="TO" class="text-[#E9E453]">Tocantins</option>
          </select>
        </div>
        
        <div class="flex flex-col">
          <label for="cidade" class="text-[#E9E453] font-semibold mb-2">Cidade</label>
          <select name="cidade" id="cidade" class="appearance-none border border-[#E9E453] bg-[#144A44] text-[#E9E453] rounded-md p-2 sm:w-64 w-full text-center">
            <option value="" class="text-[#E9E453]" selected disabled>Selecione um estado</option>
          </select>
        </div>
        
        <div class="flex flex-col justify-end">
          <button type="submit" class="sm:w-64 w-full bg-[#E9E453] text-[#144A44] font-bold py-2 rounded-md hover:bg-white focus:outline-none">
            Enviar
          </button>
        </div>
      </div>
    </div>
  </form>



  <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
    @foreach ($fazendas as $fazenda)
        <div class="rounded overflow-hidden shadow-lg">
            <a href="#"></a>
            <div class="relative">
                <a href="#">
                    <img class="w-full" style="height: 250px"
                    src="{{ url("storage/images/{$fazenda->capa}") }}"
                        alt="Imagem de {{$fazenda->nome}}">
                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                </a>
                @if ($fazenda->destaque === 1)
                    <div class="text-xs absolute top-0 right-0 bg-[#04303B] px-2 text-white rounded-full h-8 w-8 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-[#04303B] transition duration-500 ease-in-out">
                        <i class="fas fa-star"></i>
                    </div>
                @endif
            </div>
            <div class="px-6 py-4 bg-white relative">
                <a href="#"
                class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out">
                    {{ $fazenda->nome }}
                </a>
                <span class="absolute top-0 right-0 mt-4 mr-6 bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded">
                    R$ {{number_format($fazenda->preco, 2, ',', '.')}}
                </span>
                <p class="text-gray-500 text-sm text-limit mt-4">
                    {{ $fazenda->descricao }}
                </p>
            </div>
            <div class="px-6 py-4 flex flex-row justify-center items-center bg-white">
            <a href="#_" style="width: 100%"
                class="flex items-center justify-center text-center w-full px-12 py-1 mb-3 font-bold text-lg text-white bg-[#04303B] rounded-md sm:mb-0 hover:bg-white hover:text-[#04303B] hover:border-[#04303B] hover:border-2 sm:w-auto"
                data-rounded="rounded-md">
                    Veja Mais
                </a>
            </div>
        </div>
    @endforeach
    </div>
</div>

@endsection

@section('scripts')
<script>
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
        }
    });
</script>
@endsection