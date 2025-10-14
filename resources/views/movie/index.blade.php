<x-layout>
<div class="container-fluid movies">
<div class="row h-100 justify-content-center">
  <h2 class="text-white text-center text-color display-4">Tutti i film</h2>
   @forelse ($movies as $movie)
   <div class="col-12 col-md-4">
    <x-card :movie="$movie" />
</div>
    @empty
    <div class="col-12 d-flex justify-content-center">
      <h2 class="text-white text-center text-color">Nessun film in piattaforma</h2>
    </div>
    @endforelse
</div>
</div>

</x-layout>