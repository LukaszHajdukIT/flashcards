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
          <div class="text-white bg-second rounded px-3 py-3">
            <a class="d-block text-white text-decoration-none" href="{{ route('sets.show', $set->id) }}">{{ $set->name }}</a>
            <p class="mb-0">{{ $set->flashcards->count() }} terms</p>
          </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
