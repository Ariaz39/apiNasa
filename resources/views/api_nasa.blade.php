@extends('base')

@section('content')

<div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand">NASA API</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                  <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                        <a class="nav-link" href="#">Astronomy Picture of the Day</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Earth Polychromatic Imaging Camera (EPIC)</a>
                  </li>
                  </ul>
            </div>
      </nav>
      <div class="jumbotron">
            <h1 class="display-4 text-center">API NASA</h1>
            <div class="form-group">
            {{-- <input type="text" class="form-control" name="search" aria-describedby="helpId" placeholder="Search in NASA API"> --}}
            <button type="submit" id="search" class="btn btn-primary" data-otro="{{route('apiNasa')}}">Ver imagen del dia</button>
            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
            </div>
            <div id="content" class="mt-3"></div>
            <div id="contentImg" class="mt-3"></div>
            
      </div>    
</div>

@endsection