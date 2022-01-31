<x-layout>
    {{-- Card --}}
    <div class="mt-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @forelse($movie as $movie)
            <div class="col-4">
              <div class="card rounded shadow-sm border-0">
                <img src="{{Storage::url($movie['img'])}}" class="" alt="..." width="100%" height="325">   
                  <div class="card-body">
                    <h5 class="card-title fw-bolder" style="text-align: center">{{$movie['title']}}</h5>  
                    <h6 class="fst-italic">{{$movie['category']}}</h6>
                    <h6 class="fst-italic">{{$movie['authorname']}}</h6>  
                    <p class="card-text text-truncate fw-lighter lh-base">{{$movie['body']}}</p>
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
</x-layout>