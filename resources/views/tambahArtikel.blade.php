@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl md:text-4xl font-bold text-center text-gray mb-8 bg-primary p-4">Tambah Artikel Baru</h1>

    <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-lg shadow-md">
        @csrf

        <div class="mb-4">
            <label for="judul" class="block text-gray-700 font-bold mb-2">Judul Artikel:</label>
            <input type="text" name="judul" id="judul" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="artikel" class="block text-sm font-medium text-gray-700">Artikel</label>
            <input type="text" name="artikel" id="artikel" class="mt-1 p-2 block w-full h-36 shadow-sm sm:text-sm border border-gray-300 rounded-md large-input" required>
        </div>

        <div class="mb-4">
            <label for="gambar" class="block text-gray-700 font-bold mb-2">Gambar Artikel:</label>
            <input type="file" name="gambar" id="gambar" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="kategori" class="block text-gray-700 font-bold mb-2">Kategori Artikel:</label>
            <input type="text" name="kategori" id="kategori" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
        </div>

        <input type="hidden" name="user_id" value="{{ Auth::id() }}">

        <div class="flex justify-between items-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah Artikel</button>
            <a href="{{ route('dashboard') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Batal</a>
        </div>
    </form>
</div>
@endsection
