<x-layout title="Tim E-Sport">
  <section class="text-center mb-12">
    <h2 class="text-4xl font-bold mb-3">Tim E-Sport <span class="text-blue-400">Terbaik Dunia</span></h2>
    <p class="text-gray-400">Kenali tim-tim legendaris di dunia kompetisi E-Sport global.</p>
  </section>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach([
      ['name'=>'Fnatic','logo'=>'https://upload.wikimedia.org/wikipedia/en/2/2b/Fnatic_logo.svg','games'=>'Valorant, CS2, LoL'],
      ['name'=>'EVOS Esports','logo'=>'https://upload.wikimedia.org/wikipedia/en/7/7f/EVOS_Esports_logo.svg','games'=>'MLBB, PUBG Mobile'],
      ['name'=>'Team Liquid','logo'=>'https://upload.wikimedia.org/wikipedia/en/e/e1/Team_Liquid_logo.svg','games'=>'Dota 2, CS2, Valorant'],
    ] as $team)
      <div class="bg-gray-800/70 p-6 rounded-xl text-center border border-gray-700 hover:border-purple-500/40 transition">
        <img src="{{ $team['logo'] }}" class="mx-auto w-24 h-24 object-contain mb-4">
        <h3 class="text-lg font-semibold">{{ $team['name'] }}</h3>
        <p class="text-sm text-gray-400">Game: {{ $team['games'] }}</p>
      </div>
    @endforeach
  </div>
</x-layout>
