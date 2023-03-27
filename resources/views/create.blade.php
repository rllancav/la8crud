@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Agregar Games
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
      <form method="post" action="{{ route('games.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">Game Nombre:</label>
              <input type="text" class="form-control" name="nombre"/>
          </div>
          <div class="form-group">
              <label for="cases">Precio :</label>
              <input type="text" class="form-control" name="precio"/>
          </div>
		    <div class="form-group">
              <label for="cases">Descuento :</label>
              <input type="text" class="form-control" name="descuento" />
          <button type="submit" class="btn btn-primary">Add Game</button>
      </form>
  </div>
</div>
@endsection