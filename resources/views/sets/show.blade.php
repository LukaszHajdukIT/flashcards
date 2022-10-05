@extends('layouts.app')

@section('content')
  <section class="single-set">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>{{ $set->name; }}</h1>
          <p>{{ $set->description; }}</p>
        </div>
      </div>
    </div>
  </section>

  <section class="flashcards">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Your flashcards</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mb-3">
          <a class="btn btn-primary" href="#">Create or delete flashcards</a>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="d-flex bg-first py-3">
            <div class="term px-3 w-50">
              term
            </div>
            <div class="definition border-start px-3 w-50">
              definition
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
