<x-layout>

    <div class="container mt-5">
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
        <div class="mt-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              @forelse($movie as $movie)
                <div class="col-4">
                    <div class="card card-stretch">
                        <div class="card shadow-sm">
                            <img src="{{Storage::url($movie['img'])}}" class="" alt="..." width="100%" height="325">   
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align: center">{{$movie['title']}}</h5>  
                                    <p class="card-text" style="height:200px">{{$movie['body']}}</p>
                                    <h6>{{$movie['category']}}</h6>
                                    <h6>{{$movie['authorname']}}</h6>  
                                </div>      
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('moviedetail', ['key'=>$loop->index])}}" style="color: black">View</a>
                                    <small class="text-muted">9min</small>
                                </div>
                            </div>
                        </div>  
                      </div>
                      @empty
                      <h2 style="text-align: center">Non ci sono film.</h2>
                      @endforelse
                </div>
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