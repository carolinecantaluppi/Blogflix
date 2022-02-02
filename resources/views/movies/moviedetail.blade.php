<x-layout>

    {{-- Card --}}
    <div class="container mt-5">
        <div class="row">
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-body rounded">
                <img src="{{Storage::url($movie['img'])}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bolder" style="text-align: center">{{$movie['title']}}</h5>  
                    <h6 class="fst-italic">{{$movie['category']}}</h6>
                    <h6 class="fst-italic">{{$movie['authorname']}}</h6>  
                    <p class="card-text fw-lighter lh-base">{{$movie['body']}}</p>
                    <p class="card-text"><small class="text-muted">By: {{$movie['user']['name']}}</small></p>
                </div>
            </div>
            <div class="btn btn-sm col-6 mx-auto" style="justify-content: end">
                <a href="{{route('moviedetail', ['id'=>$movie['id']])}}" class="btn btn-dark mx-auto">^</a>
            </div>
        </div>
    </div>
    
</x-layout>