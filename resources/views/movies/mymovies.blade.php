<x-layout>

  {{-- Error messsage --}}
  <div class="container row offset-md-3">
    <div class="col-12 col-md-6">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif  
    </div>
  </div>
  
  <div class="container row offset-md-3">
    <div class="col-12 col-md-6">
      @if (session('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
      @endif
    </div>
  </div>
  

  {{-- Show/Hide Button --}}
  <div class="container offset-md-2">
    <p>
      <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Inserire film
      </button>
    </p>
    <div class="collapse {{(isset($selectedmovie->id)) ? 'show' : ''}}" id="collapseExample">
      <div class="card card-body shadow-lg p-3 mb-5 bg-body rounded" style="width: 50rem; justify-content: center">
        {{-- Form --}}
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <form class="showform" method="POST" action="{{ (isset($selectedmovie->id)) ? route('movieedit', ['id'=>$selectedmovie['id']]) : route('moviecreate') }}" enctype="multipart/form-data">
              @csrf       
              <div class="mb-3 mt-5">
                <label for="exampleInputText" class="form-label">Immagine</label>
                <input name="img" type="file" class="form-control">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titolo</label>
                <input name="title" value="{{$selectedmovie->title ?? ''}}" type="text" class="form-control">  
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome dell'Autore</label>
                <input name="authorname" value="{{$selectedmovie->authorname ?? ''}}" type="text" class="form-control">  
              </div>
              <div class="mb-3">
                <label for="exampleInputText" class="form-label">Descrizione</label>
                <textarea name="body" value="" class="form-control" rows="3">{{$selectedmovie->body ?? ''}}</textarea>
              </div>
              <div class="form-check">
                <input class="form-check-input" value="{{$selectedmovie->Animazione ?? ''}}" type="checkbox" name="Animazione">
                <label class="form-check-label" for="flexCheckDefault">Animazione</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" value="{{$selectedmovie->Avventura ?? ''}}" type="checkbox" name="Avventura">
                <label class="form-check-label" for="flexCheckChecked">Avventura</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" value="{{$selectedmovie->Azione ?? ''}}" type="checkbox" name="Azione">
                <label class="form-check-label" for="flexCheckChecked">Azione</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" value="{{$selectedmovie->Commedia ?? ''}}" type="checkbox" name="Commedia">
                <label class="form-check-label" for="flexCheckChecked">Commedia</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" value="{{$selectedmovie->Drammatico ?? ''}}" type="checkbox" name="Drammatico">
                <label class="form-check-label" for="flexCheckChecked">Drammatico</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" value="{{$selectedmovie->Fantascienza ?? ''}}" type="checkbox" name="Fantascienza">
                <label class="form-check-label" for="flexCheckChecked">Fantascienza</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" value="{{$selectedmovie->Mistero ?? ''}}" type="checkbox" name="Mistero">
                <label class="form-check-label" for="flexCheckChecked">Mistero</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" value="{{$selectedmovie->AltraCategoria ?? ''}}" type="checkbox" name="category">
                <label class="form-check-label" for="flexCheckChecked">Altra Categoria</label>
                <label for="exampleInputEmail1" class="form-label"></label>
                <input name="category" value="{{$selectedmovie->category ?? ''}}" type="text" class="form-control">  
              </div>
              <div class="d-grid gap-2 col-6 mx-auto mt-3">
                <button class="btn btn-dark" type="submit">Invia</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5" style="text-align: start">
    <h3>I miei film:</h3>
  </div>

  {{-- Card --}}
  <div class="container mt-5">
    <div class="row">
      @forelse($movies as $movie)
        @if ($movie['user']['id'] === Auth::id())                     
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card card-edit rounded shadow-sm border-0">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="{{Storage::url($movie['img'])}}" alt="series pictures" width="100%" height="300">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bolder" style="text-align: center">{{$movie['title']}}</h5>  
                <h6 class="fst-italic">{{$movie['category']}}</h6>
                <h6 class="fst-italic">{{$movie['authorname']}}</h6>  
                <p class="card-text text-truncate fw-lighter lh-base">{{$movie['body']}}</p>
                <a href="{{route('moviedetail', ['id'=>$movie['id']])}}" class="btn btn-sm btn-dark justify-content-center">Leggi</a>
                <a href="{{route('mymovies', ['movie'=>$movie['id']])}}" class="btn btn-sm btn-warning justify-content-center">Modifica</a>
                {{-- <a href="{{route('movieupdate', ['id'=>$movie['id']])}}" class="btn btn-sm btn-warning">Modifica</a> --}}
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <form method="POST" action="{{route('moviedelete', ["id"=>$movie['id']])}}">
                    @csrf
                    <button type="submit" class="btn btn-group btn-sm btn-danger">Elimina</button>
                  </form>
                </div>
                <p class="card-text mt-3"><small class="text-muted">Da: {{$movie['user']['name']}}, {{$movie->created_at->format('d/m/Y H:m')}}</small></p>  
              </div>      
            </div>
          </div>
        @endif
      @empty
      <h2 style="text-align: center">Non ci sono film.</h2>
      @endforelse
    </div>
  </div>
</x-layout>