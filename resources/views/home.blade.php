<x-layout>
    <x-slot name="title">Blogflix</x-slot>

    <div class="container">

        {{-- Alert message --}}
        <div class="row mt-5">
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

        {{-- Carousel --}}
        {{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            @forelse($movie as $movie)
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{Storage::url($movie['img'])}}" class="d-block w-100" alt="...">
              </div>
            </div>
            @empty
                <h2 style="text-align: center">...</h2>
            @endforelse
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div> --}}

        {{-- Card --}}
        <div class="container mt-5">
            <div class="row">
                @forelse($movie as $movie)
                <div class="col-lg-6 col-sm-6">
                    <div class="card h-100 mt-5 card-border">  {{-- style="width: 18rem --}}
                        <img src="{{Storage::url($movie['img'])}}" class="" alt="...">   
                        <div class="card-body">
                            <h5 class="card-title">{{$movie['title']}}</h5>  
                            <p class="card-text">{{$movie['body']}}</p>
                            <h6>{{$movie['category']}}</h6>
                            <h6>{{$movie['authorname']}}</h6>  
                            <div class="btn-group btn-group-sm col-6 mx-auto">
                                <a href="{{route('moviedetail', ['key'=>$loop->index])}}" class="btn btn-dark mx-auto">Dettaglio</a>
                            </div>
                            {{-- <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                            <button type="submit" id="showHideButton" class="btn btn-outline-dark" for="btnradio2">Modifica</button>
                        
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                            <button type="submit" id="showHideButton" class="btn btn-outline-dark" for="btnradio3">Elimina</button> --}}
                        </div>
                        {{-- <div class="card-footer">
                            <small class="text-muted">Last updated...</small>
                        </div> --}}
                    </div>
                </div>  
                @empty
                <h2 style="text-align: center">Non ci sono film.</h2>
                @endforelse
            </div>
        </div>
    </div>
    
    {{-- Pagination --}}
    <nav class="mt-5" aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
    </nav>

</x-layout>