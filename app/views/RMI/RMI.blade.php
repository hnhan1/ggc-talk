@extends('layout')

@section('content')
<div class="page-header">
      <h1>Rate My Internship!</h1> 
 </div>
       
  <div class="panel panel-default">
  <div class="panel-body">
    <a href="{{ action('RMIController@upload') }}" class="btn btn-primary">Rate Internship</a>
  </div>
</div>


 <div class="panel panel">
 
 @if ($internship->isEmpty())
    <p>There are no internships!</p>
  @else
     <table class="table table-stripped">
      <thead>
        <tr>
          <th>Company Name</th>
          <th>Position</th>
          <th>Started</th>
          <th>Compensation</th>
          <th>Hours Per Week</th>
          <th>Comments</th>
          <th>Challenge</th>
          <th>Networking</th>
          <th>Social</th>
          <th>Importance</th>
          <th>Experience</th>             
        </tr>
      </thead>
      <tbody> 
        @foreach($internship as $internship)
        <tr>
          <td>{{ $internship->companyName }}</td>
          <td>{{ $internship->position }}</td>
          <td>{{ $internship->started }}</td>
          <td>{{ $internship->compensation }}</td>
          <td>{{ $internship->hrPerWeek }}</td>
          <td>{{ $internship->comments }}</td>
          
          
          <td>{{ $internship->challenge }}</td>
          <td>{{ $internship->networking }}</td>
          <td>{{ $internship->social }}</td>
          <td>{{ $internship->importance }}</td>
          <td>{{ $internship->experience }}</td>
          
          
          
        </tr>
        @endforeach
        
      </tbody>
    </table>
  @endif



@stop
 </div>
