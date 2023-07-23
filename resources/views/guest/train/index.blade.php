@extends('layouts.app')

@section('title','Trains list')

@section('main-section')
  <h1>trains</h1>
  <ul>
    <li>
      @foreach ($trainList as $train)
        
      @endforeach
    </li>
  </ul>
@endsection