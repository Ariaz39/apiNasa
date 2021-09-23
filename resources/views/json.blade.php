@extends('base')

@section('content')

<div class="row">
      
      <h1 class="display-4 text-center">API NASA</h1>
      <div class="form-group">
            <button type="submit" id="list" class="btn btn-primary" data-otro="{{route('apiJson')}}">Listar registros</button>
      </div>
      <div id="content" class="mt-3">
            <div class="row" id="tarjeta">
                                    
            </div>
      </div>
              
</div>

@endsection