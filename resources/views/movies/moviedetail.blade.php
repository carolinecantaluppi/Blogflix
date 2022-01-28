<x-layout>
    <x-slot name="title">Blogflix</x-slot>

    {{-- Card --}}
    <div class="container mt-5">
        <div class="row">
            @forelse($movie as $movie)
                <div class="card mb-3">
                    <img src="{{Storage::url($movie['img'])}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            @empty
            <h2 style="text-align: center">Non ci sono più dettagli.</h2>
            @endforelse
            <div class="btn-group btn-group-sm col-6 mx-auto">
                <a href="{{route('home', ['key'=>$loop['index']])}}" class="btn btn-dark mx-auto">Torna indietro</a>
            </div>
        </div>
    </div>
    
</x-layout>