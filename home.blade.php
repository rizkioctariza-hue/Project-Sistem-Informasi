<x-layout title="Beranda">
  <section class="text-center py-16 bg-gradient-to-r from-indigo-900 via-purple-900 to-black rounded-2xl shadow-lg mb-12">
    <h1 class="text-5xl font-extrabold mb-4 text-white">Berita <span class="text-blue-400">E-Sport</span> Terbaru</h1>
    <p class="text-gray-300 max-w-2xl mx-auto text-base">
      Kabar terkini dari dunia kompetisi game profesional, turnamen internasional, dan prestasi tim favoritmu!
    </p>
  </section>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($news as $item)
      <article class="group bg-gray-800/70 rounded-2xl overflow-hidden border border-gray-700 hover:border-blue-500/50 hover:shadow-blue-500/30 transition-all duration-300">
        <img src="{{ $item->thumbnail }}" alt="{{ $item->title }}" class="w-full h-52 object-cover group-hover:scale-105 transition-transform duration-300">
        <div class="p-5">
          <h3 class="text-xl font-semibold mb-2">{{ $item->title }}</h3>
          <p class="text-sm text-gray-300 line-clamp-3">{{ $item->excerpt }}</p>
          <a href="/news/{{ $item->slug }}" class="inline-block mt-4 text-blue-400 hover:underline text-sm">Baca Selengkapnya →</a>
        </div>
      </article>
    @endforeach
  </div>

  <div class="text-center mt-16">
    <a href="/turnamen" class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full text-white font-semibold shadow hover:from-blue-700 hover:to-purple-700 transition">
      Lihat Jadwal Turnamen
    </a>
  </div>
</x-layout>
