@extends('layouts.app')

@section('content')
    <div class="container bg-blue-500 text-white p-6 rounded-lg mb-6 mt-6 mx-auto">
        <h1 class="text-4xl font-bold mb-2">Selamat Datang di Dashboard Artikel</h1>
        <p class="text-lg">Temukan artikel-artikel terbaru dan menarik di sini!</p>
    </div>

    <div class="relative mx-auto">
        <div class="container mx-auto mb-4 mt-10 flex items-center">
            <div class="w-full lg:w-2/1">
                <form id="searchForm" method="GET" action="{{ route('dashboard') }}">
                    <div class="lg:flex items-center">
                        <input type="text" name="search" placeholder="Search..."
                            class="lg:mr-2 px-4 py-2 border bg-primary border-secondary rounded-b-2xl focus:outline-none focus:border-secondary flex-1 mb-2 lg:mb-0">
                    </div>
                </form>
            </div>
        </div>


        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="container grid grid-cols-1 gap-6 mx-auto">
            @foreach ($articles as $article)
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $article->gambar) }}" alt="{{ $article->judul }}"
                            class="w-full h-48 object-cover rounded-lg">
                    </div>
                    <h2 class="text-xl font-bold mb-2">{{ $article->judul }}</h2>
                    <h2 class="text-xl font-bold mb-2">Author : {{ $article->user->name }}</h2>
                    <h1 class="text-sm mb-2">{{ $article->kategori }}</h1>
                    <p class="text-gray-700 mb-4">{{ Str::limit($article->konten, 100) }}</p>
                    <a href="{{ route('show', $article->id) }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Lihat
                        Selengkapnya</a>
                </div>
            @endforeach

        </div>
        <div class="container mt-12 mx-auto">
            <button type="button"
                class="w-fit flex items-center px-4 py-2 bg-gray-200 text-black rounded-md hover:bg-primary focus:outline-none "><a
                    href="{{ route('artikel') }}">Tambah Data</a>

                <svg class="h-4 w-4 inline-block ml-1 -mt-0.3" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m-6-6h12">
                    </path>
                </svg>
            </button>
        </div>

        <div class="container mt-12 mx-auto">
            <h2 class="text-3xl font-bold mb-6">Artikel Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($latestArticles as $article)
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $article->gambar) }}" alt="{{ $article->judul }}"
                                class="w-full h-48 object-cover rounded-lg">
                        </div>
                        <h2 class="text-xl font-bold mb-2">{{ $article->judul }}</h2>
                        <h2 class="text-xl font-bold mb-2">Author : {{ $article->user->name }}</h2>
                        <h1 class="text-sm mb-2">{{ $article->kategori }}</h1>
                        <p class="text-gray-700 mb-4">{{ Str::limit($article->konten, 100) }}</p>
                        <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Lihat
                            Selengkapnya</a>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
