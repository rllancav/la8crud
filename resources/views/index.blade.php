@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <td><a href="{{ route('games.create')}}" class="btn btn-primary">Nuevo</a></td>
     
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Game Nombre</td>
          <td>Game Precio</td>
		  <td>Game Descuento</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($games as $game)
        <tr>
            <td>{{$game->id}}</td>
            <td>{{$game->nombre}}</td>
            <td>{{$game->precio}}</td>  
			<td>{{$game->descuento}}</td>
			
            <td><a href="{{ route('games.edit', $game->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('games.destroy', $game->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection