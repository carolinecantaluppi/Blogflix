<x-layout>
    <div class="container mt-5 justify-content-center">
        
        {{-- Error messsage --}}
        <div class="row">
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
        <div class="form-signing mt-5">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3">
                    <form method="POST" action="{{route("login")}}">   
                        <h4 style="text-align: center">Per favore accedi</h4>  
                        @csrf       
                        <div class="form-floating mt-3">
                            <label for="flotingInput" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="flotingInput">  
                        </div>
                        <div class="form-floating">
                            <label for="exampleInputText" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="flotingPassword">
                        </div>
                        <label class="mt-3" style="text-align: center">
                            <input type="checkbox" value="remember-me"> Ricordami
                        </label>
                        <button type="submit" class="w-100 btn btn-md btn-dark mt-3">Accedi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>