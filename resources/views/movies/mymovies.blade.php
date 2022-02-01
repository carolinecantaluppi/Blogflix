<x-layout>

  {{-- Show/Hide Button --}}
  <div class="container offset-md-2">
    <p>
      <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Inserire film
      </button>
    </p>
    <div class="collapse" id="collapseExample">
      <div class="card card-body shadow-lg p-3 mb-5 bg-body rounded" style="width: 50rem; justify-content: center">
        {{-- Form --}}
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <form class="showform" method="POST" action="{{route('moviecreate')}}" enctype="multipart/form-data">
              @csrf       
              <div class="mb-3 mt-5">
                  <label for="exampleInputText" class="form-label">Immagine</label>
                  <input name="img" type="file" class="form-control">
              </div>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Titolo</label>
                  <input name="title" type="text" class="form-control">  
              </div>
              <div class="mb-3">
                  <label for="exampleInputText" class="form-label">Descrizione</label>
                  <textarea name="body" class="form-control" rows="3"></textarea>
              </div>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Categoria</label>
                  <input name="category" type="text" class="form-control">  
              </div>
              {{-- <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Default checkbox
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                  <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                  </label>
              </div> --}}
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nome dell'Autore</label>
                  <input name="authorname" type="text" class="form-control">  
              </div>
              <div class="d-grid gap-2 col-6 mx-auto">
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
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card rounded shadow-sm border-0">
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
              <p>{{$movie['user']['name']}}</p>
              <a href="{{route('moviedetail', ['id'=>$movie['id']])}}" class="btn btn-sm btn-dark justify-content-center">Leggi</a>
              @if ($movie['user']['id'] === Auth::id())                            
                <a href="{{route('movieupdate', compact('movie'))}}" class="btn btn-sm btn-warning">Modifica</a>
                <form method="POST" action="{{route('moviedelete', compact('movie'))}}">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-sm btn-danger">Elimina</button>
                </form>
              @endif
            </div>      
          </div>
        </div>
        @empty
        <h2 style="text-align: center">Non ci sono film.</h2>
      @endforelse
    </div>
  </div>

</x-layout>