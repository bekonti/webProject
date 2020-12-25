@extends('layout.layout')

@section('title')Admin Page @endsection

@section('main_content')

    <div class="card col-6 offset-3 mt-5">
        <div class="card-body">
            <a class="btn btn-primary mt-2" href="{{route('addStation')}}">add Station</a>
            <a class="btn btn-primary mt-2" href="{{route('allStations')}}">all Stations</a>
            <br>
            <a class="btn btn-primary mt-2" href="{{route('addTrain')}}">add Train</a>
            <a class="btn btn-primary mt-2" href="{{route('allTrains')}}">all <Trai></Trai>ns</a>
            <br>
            <a class="btn btn-primary mt-2" href="{{route('addRoute')}}">add Route</a>
            <a class="btn btn-primary mt-2" href="{{route('allRoutes')}}">all Routes</a>

        </div>


    </div>

@endsection
