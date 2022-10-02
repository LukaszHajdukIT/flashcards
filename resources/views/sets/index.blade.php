@extends('layouts.app')

@section('content')
  <section class="sets">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <a class="btn btn-success" href="{{ route('sets.create') }}">Create a new set</a>
        </div>
      </div>
    </div>
  </section>
@endsection
