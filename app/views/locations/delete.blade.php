@extends('layout')

@section('content')
  <div class="page-header">
      <h1>Delete {{ $internship->name }} <small>you sure?</small></h1>
  </div>
  
  <form action="{{ action('RMIController@handleDelete') }}" method="post" role="form">
    
    <input type="hidden" name="internship" value="{{ $internship->id }}" />
    <input type="submit" class="btn btn-danger" value="Yes" />
    <a href="{{ action('RMIController@showList') }}" class="btn btn-default">No way, Jose!</a>
    
  </form>

@stop
