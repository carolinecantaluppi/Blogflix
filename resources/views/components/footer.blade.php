{{-- Footer --}}
<footer class="bg-light text-lg-start mt-5">
  <nav class="navbar navbar-light bg-white">
    <div class="container-fluid text-center justify-content-center" style="background-color: rgba(0, 0, 0, 0.2); text-align: center">
      {{-- Search --}}
      <div class="container-fluid offset-md-8 p-3">
        <form class="d-flex" action="{{ (isset($movies)) ? route('home') : (session('message')) }}" >
          <input value="" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Cerca</button>
        </form>
      </div>
      <h4 class="font-blog"> Blogflix</h4>
    </div>
    <div class="container-fluid text-center p-3 justify-content-center" style="background-color: rgba(0, 0, 0, 0.2); text-align: center">
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