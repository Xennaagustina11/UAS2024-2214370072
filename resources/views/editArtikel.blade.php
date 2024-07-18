@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <div class="flex items-center mb-6">
            <a href="{{ route('dashboard') }}" class="text-black">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.707 10l5.147-5.146a.5.5 0 01.708.708L7.707 10l3.853 3.854a.5.5 0 01-.708.708l-5.147-5.146a.5.5 0 010-.708z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>

        <div class="w-full max-w-3xl mx-auto">
            <form action="{{ route('artikel.update', $article->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">Judul:</label>
                    <input type="text" id="judul" name="judul" value="{{ $article->judul }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="kategori" class="block text-gray-700 text-sm font-bold mb-2">Kategori:</label>
                    <input type="text" id="kategori" name="kategori" value="{{ $article->kategori }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="gambar" class="block text-gray-700 text-sm font-bold mb-2">Gambar:</label>
                    <input type="file" id="gambar" name="gambar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <img src="/storage/{{ $article->gambar }}" alt="Gambar Artikel" class="mt-2 w-full max-h-60 object-contain" style="max-width: 100%;">
                </div>

                <div class="mb-6">
                    <label for="deskripsi" class="block text-gray-700 text-sm font-bold mb-2">Artikel:</label>
                    <textarea id="deskripsi" name="artikel" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="5">{{ $article->artikel }}</textarea>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
