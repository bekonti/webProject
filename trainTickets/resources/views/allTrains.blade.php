@extends('layout.layout')

@section('title')All Trains @endsection

@section('main_content')
    <h3 class="mt-5">All Trains</h3>

    @foreach($trains as $st)
        <ul>
            <li>
                <h3> Name:{{$st->name}}, number: {{$st->number}}, places:{{$st->places}} </h3>
            </li>
        </ul>


    @endforeach


@endsection
