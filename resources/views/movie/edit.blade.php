<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            @if ($errors->any())
            <div class="alert alert-danger col-6 text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-12 col-md-8 text-white text-color">
         <h2 class="display-4 text-center">Inserisci il tuo film preferito:</h2>
         <form method="post" action="{{route('movie.update', compact('movie'))}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="email" name="title" class="form-control" id="title" aria-describedby="titleHelp" value="{{$movie->title}}">
  </div>
  <div class="mb-3">
    <label for="director" class="form-label">Regista</label>
    <input type="email" name="director" class="form-control" id="director" aria-describedby="directorHelp" value="{{$movie->director}}">
  </div>
  <div class="mb-3">
    <label for="year" class="form-label">Anno di uscita</label>
    <input type="email" name="year" class="form-control" id="year" aria-describedby="yearHelp" value="{{$movie->year}}">
  </div>
  <div class="mb-3">
    <label for="img" class="form-label">Poster</label>
    <input type="file" name="img" class="form-control" id="img" aria-describedby="imgHelp">
  </div>
  <div class="mb-3">
    <label for="plot" class="form-label">Trama</label>
    <textarea name="plot" id="" cols="30" rows="10" class="form-control">{{$movie->plot}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Inserisci il tuo film</button>
</form>
            </div>
        </div>
    </div>
</x-layout>