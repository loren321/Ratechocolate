@extends('layouts.app')

@section('content')
<div class="col-md-12">
  <div class="container">
    <p class="h1 p-y-2">{{ $ratings[0]->chocolate->name }}</p>
    <p class="h2 p-y-2">by <a href="{{ route('manufacturer', ['manufacturer_id' => $ratings[0]->chocolate->manufacturer->id]) }}">{{ $ratings[0]->chocolate->manufacturer->name }}</a>, {{ $ratings[0]->chocolate->country }}</p>
    <p class="text-muted p-y-2" style="font-size:1.1rem">{{ $ratings[0]->chocolate->cocoa_percentage }}% cocoa | {{ $ratings[0]->chocolate->type->type }}</p>
  </div>
</div>
<div class="py-3">
  <div class="container">
    <div class="row hidden-md-up">
      @foreach($ratings as $rating)
      <div class="col-md-12 p-2">
        <div class="card p-3">
          <div class="card-block">
            <span>[X stars]</span>
            <span class="p-y-2">{{ $rating->created_at }} by <a href="{{ route('user', ['user_id' => $rating->author->id]) }}">{{ $rating->author['name'] }}</a></span>
            <p> {{ $rating->review_text }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
