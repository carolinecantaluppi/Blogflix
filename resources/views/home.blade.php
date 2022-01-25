<x-layout>
    <x-slot name="title">Film</x-slot>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-md-6 offset-md-3 text-center">
                <h1>Tutti Film</h1>
            </div>
        </div>

        
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('home')}}" enctype="multipart/form-data">
                    @csrf       
                    <div class="mb-3 mt-5">
                        <label for="exampleInputEmail1" class="form-label">Inserisci il titolo dell film</label>
                        <input type="text" class="form-control" name="title">  
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Inserisci l'immagine del film</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Descrizione dell film</label>
                        <textarea name="body" class="form-control" rows="3"></textarea>
                    </div>
                    <div class=" mt-5 col-4 mx-auto">
                        <button type="submit" class="btn btn-primary">Invia</button>
                    </div>
                </form>
            </div>
        </div>
       
        
        <div class="row mt-5">
            @forelse($movie as $movie)
            <div class="col-12 col-md-4 ">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($movie->img)}}" class="card-img-top" alt="...">   
                    <div class="card-body">
                        <h5 class="card-title">{{$movie['title']}}</h5>  
                        <h6>{{$movie->user['name']}}</h6>  
                        <p class="card-text">{{$movie['body']}}
                            @if ($loop->first)
                            This is the first iteration.
                            @endif
                            @if($loop->last)
                            This is the last iteration.
                            @endif
                        </p>
                        <div class="btn-group btn-group-sm col-4 mx-auto">
                            <a href="{{route('home', ['key'=>$loop->index])}}" class="btn btn-primary">Dettaglio</a>
                        </div>
                    </div>
                </div>
            </div>  
            @empty
            <h2>Non ci sono film.</h2>
            @endforelse
        </div>
    </div>

</x-layout>