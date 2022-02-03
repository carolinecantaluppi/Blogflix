{{-- Footer --}}
<footer class="bg-white text-lg-start mt-5">
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid text-center justify-content-center" style="text-align: center">
      {{-- Search --}}
      <div class="container-fluid p-3"> 
        <form class="d-flex offset-md-8" action="{{route('home')}}" >
          <input name="search" value="" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Cerca</button>
        </form>
        <h4 class="font-blog-footer"> Blogflix</h4>
      </div>
    </div>
    <div class="container-fluid text-center p-3 justify-content-center font-copy">
       © 2022 Copyright
    </div>
    
  </nav>
  <div class="container row">
    @if (session('message'))
    <div class="alert alert-info" role="alert">
      Nessun risultato trovato.
    @endif
  </div>
</footer>