@extends('layouts.app')

@section('content')
<div class="col-md-12">
  <div class="container">
    <p class="h1 p-y-2"><small>ratings by </small>{{ $user->name }}</p>
    <p class="text-muted p-y-2" style="font-size:1.1rem">[X] ratings</p>
  </div>
</div>
<div class="py-3">
  <div class="container">
    <div class="row hidden-md-up">
      @foreach($user->ratings as $rating)
      <div class="col-md-12 p-2 chocolate-card">
        <div class="card p-3">
          <div class="card-block">
            <h3 class="card-title py-1">
            <a href="{{ route('chocolate.ratings',  ['chocolate_id' => $rating->chocolate->id]) }}">{{ $rating->chocolate->name }}</a>
              <small>by <a href="{{ route('manufacturer', ['chocolate_id' => $rating->chocolate->manufacturer->id]) }}">{{ $rating->chocolate->manufacturer->name }}</a></small>
              <small class="text-muted">{{ $rating->chocolate->cocoa_percentage }}% cocoa</small>
            </h3>
            <span>[X stars]</span>
            <span class="p-y-2">{{ $rating->created_at }}</span>
            <p> {{ $rating->review_text }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
