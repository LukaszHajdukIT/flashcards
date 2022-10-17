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
          <a class="btn btn-primary" href="{{ route('flashcards.create') }}">Create or delete flashcards</a>
        </div>
      </div>
      @foreach ($set->flashcards as $flashcard)
        <div class="row">
          <div class="col-12 py-2">
            <div class="d-flex bg-first py-3">
              <div class="term px-3 w-50">
                {{ $flashcard->term }}
              </div>
              <div class="definition border-start px-3 w-50">
                {{ $flashcard->definition }}
              </div>
              <form class="flashcard-delete-form" action="{{ route('flashcards.destroy', $flashcard->id) }}" method="post">
                @csrf
                <input type="hidden" name="set_id" value="{{ $set->id }}">
                <button type="submit" class="btn btn-danger">X</button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>
  <section class="create-flashcard pt-3">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form id="create-flashcard-form" class="create-flashcard-form" action="{{ route('flashcards.store') }}" method="post">
            @csrf
            <div class="mb-3">
              <textarea class="form-control" name="term" placeholder="Enter the term"></textarea>
            </div>
            <div class="mb-3">
              <textarea class="form-control"name="definition" placeholder="Enter the definition"></textarea>
            </div>
            <input type="hidden" name="set_id" value="{{ $set->id }}">
            <button type="submit" class="btn btn-primary">Create!</button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
