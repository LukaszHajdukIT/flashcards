@extends('layouts.app');

@section('content')
  <section class="create-set">
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
            <button type="submit" class="btn btn-primary">Create!</button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
