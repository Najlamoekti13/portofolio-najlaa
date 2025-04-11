@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-indigo-900 via-black to-purple-900 text-white p-8">
    <div class="max-w-4xl mx-auto text-center space-y-8">
        <h1 class="text-4xl font-bold">Selamat Datang di Portofolio Saya!</h1>

        <div class="flex justify-center">
            <img src="{{ asset('images/foto-najlaa.jpg') }}" alt="Foto Najlaa" class="w-48 h-48 rounded-full border-4 border-white shadow-lg">
        </div>

        <section>
            <h2 class="text-2xl font-semibold mb-2">👩🏻‍🚀 Siapa Saya?</h2>
            <p class="text-lg">Saya seorang Mahasiswa CS. Nama saya <strong>Najlaa'biba Zaima Moekti</strong>. Saya tertarik dengan Robotic, Space, Pure Science, dan Physics.</p>
            <p class="text-lg"> Birth Date: <strong>19-09-2005</strong></p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold mb-2">🚀 Proyek Terbaru</h2>
            <ul class="space-y-2">
                <li>🌌 Proyek 1 - Portofolio website</li>
                <li>🛰️ Proyek 2 - UI Interaktif</li>
                <li>🌠 Proyek 3 - Blog Personal</li>
            </ul>
        </section>

        <a href="{{ route('projects.index') }}" class="inline-block mt-6 bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-4 rounded-xl shadow-md transition">Lihat Semua Project</a>
    </div>
</div>
@endsection
