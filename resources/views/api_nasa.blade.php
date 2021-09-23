@extends('base')

@section('content')

<div class="row">
      
      <h1 class="display-4 text-center">API NASA</h1>
      <div class="form-group">
            <button type="submit" id="search" class="btn btn-primary" data-otro="{{route('apiNasa')}}">Ver imagen del dia</button>
      </div>
      <div id="content" class="mt-3"></div>
      <div id="contentImg" class="mt-3"></div>
              
</div>

@endsection