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
                    <div class=" mt-5 col-4 mx-auto">
                        <button type="submit" class="btn btn-dark">Invia</button>
                    </div>
                </form>
            </div>
        </div>
       
        {{-- Card --}}
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    @forelse($movie as $movie)
                    <div class="col-lg-6 col-sm-6">
                        <div class="card mt-5">  {{-- style="width: 18rem --}}
                            <img src="{{Storage::url($movie->img)}}" class="card-img-top" alt="...">   
                            <div class="card-body">
                                <h5 class="card-title">{{$movie['title']}}</h5>  
                                <p class="card-text">{{$movie['body']}}</p>
                                <h6>{{$movie['category']}}</h6>
                                <h6>{{$movie['authorname']}}</h6>  
                                <div class="btn-group btn-group-sm col-4 mx-auto">
                                    <a href="{{route('moviedetail', ['key'=>$loop->index])}}" class="btn btn-dark mx-auto">Dettaglio</a>
                                </div>
                                {{-- <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <button type="submit" id="showHideButton" class="btn btn-outline-dark" for="btnradio2">Modifica</button>
                            
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                <button type="submit" id="showHideButton" class="btn btn-outline-dark" for="btnradio3">Elimina</button> --}}

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

</x-layout>