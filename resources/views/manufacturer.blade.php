@extends('layouts.app')

@section('content')
<div class="col-md-12">
  <div class="container">
    <p class="h1 p-y-2"><small>Chocolates by </small>{{ $manufacturer->name }}</p>
  </div>
</div>
<div class="py-3">
  <div class="container">
    <div class="row hidden-md-up">
      @foreach($manufacturer->chocolates as $chocolate)
      <div class="col-md-4 p-2 chocolate-card">
        <div class="card p-3">
          <div class="card-block">
            <h4 class="card-title py-2">{{$chocolate->name}}</h4>
            <h6 class="card-subtitle text-muted py-2">{{ $chocolate->cocoa_percentage }}% cocoa</h6>
            <a href="{{ route('chocolate.ratings', ['chocolate_id' => $chocolate->id]) }}" class="card-link py-2 pr-2 float-left">{{ $chocolate->ratings->count() }} ratings</a>
            <span class="py-2 float-left"> Y average score</span>
            <a href="#" class="card-link float-right py-2">Make a rating</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
