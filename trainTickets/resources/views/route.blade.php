@extends('layout.layout')

@section('title')Route @endsection

@section('main_content')

    <form action="{{ route('addRoute') }}" method="post" class="col-6 offset-3"> @csrf
        <h4>Train</h4>
        <div class="form-group">
            <label>Time leave</label>
            <input type="datetime-local" class="form-control" id="timeleave" name="timeleave">
        </div>
        <div class="form-group">
            <label>Time Travelled</label>
            <input type="datetime-local" class="form-control" id="timetravel" name="timetravel">
        </div>

        <div class="form-group">
            <label>Train</label>
            <select name="train_id" id="train_id">
                @foreach($train as $tr)
                    <option value="{{$tr->id}}">{{$tr->number}} - {{$tr->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>From</label>
            <select name="from" id="from">
                @foreach($stations as $station)
                    <option value="{{$station->id}}">{{$station->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>To</label>
            <select name="to" id="to">
                @foreach($stations as $station)
                    <option value="{{$station->id}}">{{$station->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>










@endsection
