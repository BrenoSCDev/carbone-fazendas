@extends('layouts.client')

@section('links')
<link href="{{ asset('assets/css/client.css?v=1.3') }}" rel="stylesheet" />
@endsection

@section('content')
<section class="px-2 py-32 md:px-0">
  <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
    <div class="flex flex-wrap items-center sm:-mx-3">
      <div class="w-full md:w-1/2 md:px-3">
        <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
          <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
            <span class="block xl:inline">{{ $home->titulo }}</span>
          </h1>
          <p class="mx-auto text-base text-white sm:max-w-md lg:text-xl md:max-w-3xl">{{ $home->subtitulo }}</p>
          <div class="relative flex flex-col sm:flex-row sm:space-x-4">
            <a href="#_" class="flex items-center justify-center text-center w-full px-12 py-3 mb-3 font-bold text-lg text-white bg-[#04303B] rounded-md sm:mb-0 hover:bg-[#04303B] hover:text-[#E9E453] sm:w-auto" data-primary="indigo-600" data-rounded="rounded-md">
                Contato
            </a>
            <a href="#_" class="flex items-center justify-center text-center w-full px-12 py-3 mb-3 font-bold text-lg text-white bg-[#04303B] rounded-md sm:mb-0 hover:bg-[#04303B] hover:text-[#E9E453] sm:w-auto" data-primary="indigo-600" data-rounded="rounded-md">
                Fazendas
            </a>

            <!-- <div class="flex items-center px-6 py-1 text-white hover:bg-gray-200 hover:text-gray-600 contato-hidden">
                Tenha seu atendimento personalizado, entre em contato conosco
            </div> -->

          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-80 overflow-hidden rounded-lg md:h-[600px]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/Fazenda_Capoava%2C_Itu-SP%2C_Vladimir_Benincasa_14.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://img.freepik.com/fotos-premium/imagem-rural-em-uma-fazenda-com-portao-de-madeira-estrada-de-terra-sol-e-colinas-ao-fundo_337748-36.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://judicearaujo.com.br/blog/wp-content/uploads/2020/02/comprar-uma-fazenda.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS49OlVc3jTSvgbqaQSg3uiUFb6UMMToa2BoA&s" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWLsV4BIPM6_umYxEsKwZo7_kmRnf0S4FeUw&s" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="sec-mt-10 px-2 py-32 md:px-0">
  <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5 text-center relative">
    <span class="relative text-3xl font-bold tracking-tight text-[#E9E453]">
    <i class="fas fa-seedling"></i>
      Fazendas em destaque
    </span>
  </div>
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
</section>
<section class="sec-mt-10 px-2 py-32 md:px-0">
    <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5 text-center relative">
        <span class="relative text-3xl font-bold tracking-tight text-[#E9E453]">
        <i class="fas fa-seedling"></i>
        Biografia
        </span>
    </div>
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
        <iframe width="100%" height="540" src="https://www.youtube.com/embed/0gMpbwfYp2M" style="border-radius: 10px"
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen>
        </iframe>
    </div>
</section>
<section class="sec-mt-10 px-2 py-32 md:px-0">
    <div class="flex flex-col justify-center container items-center max-w-6xl px-8 mx-auto xl:px-5 text-center relative">
        <img src="{{asset('assets/img/main-logo.png')}}" class="img-logo-display" />
        <span class="relative text-2xl tracking-tight text-white mt-6">
            "{{ $home->subtitulo }}"
        </span>
    </div>
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">    
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
            <div class="overflow-hidden shadow-lg" style="border: 6px solid white; border-radius: 20px">
                <div class="flex flex-col justify-center text-center px-16 py-14 relative">
                <img src="{{asset('assets/img/sobrenos-icone.png')}}" style="height: 150px" />
                    <p class="text-white mt-4 font-bold text-2xl">
                        Sobre nós
                    </p>
                </div>
            </div>
            <div class="overflow-hidden shadow-lg" style="border: 6px solid white; border-radius: 20px">
                <div class="flex flex-col justify-center text-center px-16 py-14 relative">
                <img src="{{asset('assets/img/fazendas-icone.png')}}" style="height: 150px" />
                    <p class="text-white mt-4 font-bold text-2xl">
                        Fazendas
                    </p>
                </div>
            </div>
            <div class="overflow-hidden shadow-lg" style="border: 6px solid white; border-radius: 20px">
                <div class="flex flex-col justify-center text-center px-16 py-14 relative">
                <img src="{{asset('assets/img/arrede-conosco-icone.png')}}" style="height: 150px" />
                    <p class="text-white mt-4 font-bold text-2xl">
                        Arrede conosco
                    </p>
                </div>
            </div>
        </div>
    </div>
    
</section>

@endsection