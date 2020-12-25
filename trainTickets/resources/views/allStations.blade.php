@extends('layout.layout')

@section('title')All Stations @endsection

@section('main_content')
    <h3 class="mt-5">All Stations</h3>
    @foreach($stations as $st)
        <ul>

            <li>
                <h3>{{$st->name}}</h3>

            </li>
        </ul>


    @endforeach


@endsection
