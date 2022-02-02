<x-layout>
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
                  <label for="exampleInputEmail1" class="form-label">Nome dell'Autore</label>
                  <input name="authorname" type="text" class="form-control">  
                </div>
                <div class="mb-3">
                  <label for="exampleInputText" class="form-label">Descrizione</label>
                  <textarea name="body" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="category" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Animazione</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="category" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">Avventura</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="category" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">Azione</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="category" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">Commedia</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="category" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">Drammatico</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="category" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">Fantascienza</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="category" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">Mistero</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="category" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">Altra Categoria</label>
                  <label for="exampleInputEmail1" class="form-label"></label>
                  <input name="category" type="text" class="form-control">  
                </div>
  
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button class="btn btn-dark" type="submit">Invia</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</x-layou>