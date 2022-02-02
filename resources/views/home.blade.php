<x-layout>

  {{-- Carousel --}}
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      @forelse($movies as $movie)
      <div class="carousel-item {{$loop->first ? 'active' : ''}}"> 
        <img src="{{Storage::url($movie['img'])}}" class="d-block w-100" alt="..." width="700px" height="700px">
      </div>
      @empty
        <h2 style="text-align: center">Non ci sono film.</h2>
      @endforelse
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  {{-- Title --}}
  <div class="container mt-5" style="text-align: start">
    <h3>Ultimi posts:</h3>
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
              <a href="{{route('moviedetail', ['id'=>$movie['id']])}}" class="btn btn-sm btn-dark justify-content-center">Leggi</a>
              <p class="card-text mt-3"><small class="text-muted">By: {{$movie['user']['name']}}</small></p>
            </div>      
          </div>
        </div>
        @empty
        <h2 style="text-align: center">Non ci sono film.</h2>
      @endforelse
    </div>
  </div>

  <!-- Pagination -->
  <nav class="my-4" aria-label="...">
    <ul class="pagination pagination-sm justify-content-center">
      <li class="page-item">
        <a class="page-link text-dark" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
      <li class="page-item" aria-current="page">
        <a class="page-link text-dark" href="#">2 <span class="sr-only"></span></a>
      </li>
      <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link text-dark" href="#">Next</a>
      </li>
    </ul>
  </nav>

</x-layout>