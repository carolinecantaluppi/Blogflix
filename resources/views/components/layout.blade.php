<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- CSS --}}
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Blogflix</title>
</head>
<body>
    
  <x-navbar/>

  {{$slot}}

  <x-footer/>

  {{-- JavaScripts --}}
  <script src="{{asset('js/app.js')}}"></script>
</body>
</html>