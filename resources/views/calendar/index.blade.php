@extends('layout')
@section('content')

<div class="row  g-4">
    @if(session()->has('message'))
    <p class="alert alert-success">
        {{ session('message') }}
    </p>
    @endif
    <h2 class="text-center">Calendar Events</h2>
    @foreach($events as $event)
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">{{$event->summary}}</h5>
                <p class="card-text">{{$event->description ?? "N/A"}}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted"><strong>Started On:</strong> {{ date('d-m-Y H:i:s', strtotime($event->startDateTime)) }}</small><br>
                <small class="text-muted"><strong>Ended At:</strong> {{ date('d-m-Y H:i:s', strtotime($event->endDateTime)) }}</small>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection