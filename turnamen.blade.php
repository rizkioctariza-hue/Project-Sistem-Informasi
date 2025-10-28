<x-layout title="Turnamen">
  <section class="text-center mb-12">
    <h2 class="text-4xl font-bold mb-3">Turnamen <span class="text-blue-400">E-Sport 2025</span></h2>
    <p class="text-gray-400">Jadwal kompetisi bergengsi yang akan digelar tahun ini.</p>
  </section>

  <div class="space-y-6 max-w-3xl mx-auto">
    @foreach([
      ['name' => 'Valorant Champions Tour', 'date' => '12–18 November 2025', 'location' => 'Tokyo, Jepang'],
      ['name' => 'Mobile Legends World Championship (M5)', 'date' => '3–10 Desember 2025', 'location' => 'Jakarta, Indonesia'],
      ['name' => 'PUBG Mobile Global Championship', 'date' => '15–20 Desember 2025', 'location' => 'Seoul, Korea Selatan']
    ] as $tournament)
      <div class="bg-gray-800/70 p-6 rounded-lg shadow-lg border border-gray-700 hover:border-blue-500/40 transition">
        <h3 class="text-2xl font-semibold text-blue-400">{{ $tournament['name'] }}</h3>
        <p class="text-sm text-gray-300 mt-2">📅 {{ $tournament['date'] }}<br>📍 {{ $tournament['location'] }}</p>
      </div>
    @endforeach
  </div>
</x-layout>
