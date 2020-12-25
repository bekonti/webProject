@extends('layout.layout')

@section('title')Train @endsection

@section('main_content')
    <form action="{{ route('addTrain') }}" method="post" class="col-6 offset-3"> @csrf
        <h4>Train</h4>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label>Number</label>
            <input type="number" class="form-control" id="number" name="number">
        </div>
        <div class="form-group">
            <label>Places</label>
            <input type="number" class="form-control" id="places" name="places">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
