@extends('layouts.app')

@section('content')
  <section>
    <div class="container">

      @if (session('status'))
        <div class="row">
          <div class="col-12">
            <div class="alert alert-success">
              <p>{{ session('status') }}</p>
            </div>
          </div>
        </div>
      @endif

      <div class="row">
        <div class="col-12">
          <a class="btn btn-success" href="{{ route('sets.create') }}">Create a new set</a>
        </div>
      </div>
    </div>
  </section>

  <section class="pt-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3>Your sets</h3>
        </div>
      </div>
      <div class="row">
        @foreach (\App\Models\Set::all() as $set)
          <div class="col-md-4">
            <a class="d-block text-white bg-secondary rounded px-3 py-3 mb-0" href="#">{{ $set->name }}</a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
