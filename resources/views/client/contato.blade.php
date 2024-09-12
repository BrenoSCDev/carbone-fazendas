@extends('layouts.client')

@section('links')
    <link href="{{asset('assets/css/contato.css')}}" rel="stylesheet" />
@endsection

@section('content')
<div class="background-overlay"></div>
<div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md p-6 bg-[#144A44] rounded-lg shadow-md m-2">
        <h2 class="text-2xl font-bold mb-6 text-center text-white">Fale Conosco!</h2>
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-white font-semibold mb-2">Nome</label>
                <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-white font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="phone" class="block text-white font-semibold mb-2">Telefone</label>
                <input type="tel" id="phone" name="phone" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <button type="submit" class="w-full bg-[#E9E453] text-[#144A44] font-bold py-3 rounded-md hover:bg-white focus:outline-none">
                Enviar
            </button>
        </form>
    </div>
</div>
@endsection
