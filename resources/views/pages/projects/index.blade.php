@extends('layouts.dash')
@section('styles')
  <style>
    .btn-circle.btn-xl {
        width: 70px;
        height: 70px;
        padding: 10px 16px;
        border-radius: 35px;
        font-size: 24px;
        line-height: 1.33;
    }
    .btn-circle {
        width: 30px;
        height: 30px;
        padding: 6px 0px;
        border-radius: 15px;
        text-align: center;
        font-size: 12px;
        line-height: 1.42857;
    }
  </style>
@endsection
@section('content')
  <div class="container" style="height: 80%;">
    <div class="columns is-multiline">
      @foreach($projects as $project)
        <div class="column is-one-third">
          <div class="card">
            <header class="card-header">
              <p class="card-header-title">
              {{$project['name']}}
              </p>
              <button class="button is-outlined is-small mt-2 mb-2" disabled>{{strtoupper($project['visibility'])}}</button>
              <a href="#" class="card-header-icon" aria-label="favorite">
                <span class="icon">
                  <i class="fas fa-star" aria-hidden="true"></i>
                </span>
              </a>
              <a href="#" class="card-header-icon" aria-label="more options">
                <span class="icon">
                  <i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                </span>
              </a>
            </header>
            <div class="card-content">
              <div class="content">
                {{$project['description']}}
              </div>
            </div>
            <footer class="card-footer">
              <a href="/projects/{{$project->id}}/dashboard" class="card-footer-item">Dashboard</a>
              <a href="/projects/{{$project->id}}/files" class="card-footer-item">Files</a>
              <a href="/projects/{{$project->id}}/board" class="card-footer-item">Board</a>
            </footer>
          </div>
        </div>
      @endforeach
      {{ $projects->links('vendor.pagination.bulma-default') }}
    </div>
  </div>
@endsection
@section('scripts')
  <script>
  </script>
@endsection