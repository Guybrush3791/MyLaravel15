
@extends('layouts.base')

@section('content')

  @include('comps.album')
  @include('comps.albums')

  <div id="app">

    <h3>CENTER OF WORLD</h3>

    <albums />
  </div>

@endsection
