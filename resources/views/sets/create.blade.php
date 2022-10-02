@extends('layouts.app');

@section('content')
  <section class="create-set">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form id="create-set-form" class="create-set-form" action="" method="post">
            <div class="mb-3">
              <input type="text" class="form-control" name="name" placeholder="Enter the name">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control"name="description" placeholder="Enter the description">
            </div>
            <button type="submit" class="btn btn-primary">Create!</button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
