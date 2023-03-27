@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar Games  
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('games.update', $game->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Game Nombre:</label>
              <input type="text" class="form-control" name="nombre" value="{{ $game->nombre }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Game Precio :</label>
              <input type="text" class="form-control" name="precio" value="{{ $game->precio }}"/>
          </div>
		   <div class="form-group">
              <label for="cases">Game Descuento :</label>
              <input type="text" class="form-control" name="descuento" value="{{ $game->descuento }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
  </div>
</div>
@endsection