@extends('layout.layout')

@section('title')Station @endsection

@section('main_content')


    <form action="{{ route('addStation') }}" method="post" class="col-6 offset-3"> @csrf
        <h4>Station</h4>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Add Station</button>
    </form>








@endsection
