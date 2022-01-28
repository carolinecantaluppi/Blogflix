<x-layou>
    {{-- Form --}}
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h1>Modifica un Film</h1>
            <form class="showform" method="POST" action="{{route('movie.update')}}" enctype="multipart/form-data">
                @csrf   
                @method('put')    
                <div class="mb-3 mt-5">
                    <img src="{{Storage::url($movie->img)}}" alt="" width="100" height="100">  
                    <label for="exampleInputText" class="form-label">Immagine</label>
                    <input name="img" type="file" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titolo</label>
                    <input name="title" type="text" class="form-control" value="{{$movie->title}}">  
                </div>
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Descrizione</label>
                    <textarea name="body" class="form-control" rows="3">{{$movie->body}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Categoria</label>
                    <input name="category" type="text" class="form-control" value="{{$movie->category}}">  
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
                    <input name="authorname" type="text" class="form-control" value="{{$movie-['authorname']}}">  
                </div>
                <div class="btn-group btn-group-sm col-6 mx-auto">
                    <button class="btn btn-dark" type="submit">Modifica</button>
                </div>
            </form>
        </div>
    </div>
</x-layou>