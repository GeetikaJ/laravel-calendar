@extends('layout')
@section('content')
<form action="{{ route('calendar.store')}}" method="POST">
    @csrf
    <div class="row">

        <h2 class="text-center">Add Event</h2>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title of Event" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" required placeholder="Enter Event Detail..."></textarea>
        </div>

        <label for="description" class="form-label">Choose Event</label>

        <div class="col">
            <input type="date" class="form-control" name="event_date" required>
        </div>
        <div class="col">
            <input type="time" class="form-control" name="event_time" required>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Add Event</button>
        </div>
    </div>
</form>
@endsection