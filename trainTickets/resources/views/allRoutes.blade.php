@extends('layout.layout')

@section('title')All Routes @endsection

@section('main_content')
    <h3 class="mt-5">All Routes</h3>
    @foreach($routes as $st)
        <ul>
            <li>
                <h5> Time leave:{{$st->time_leave}}, time arrive: {{$st->time_travelled}},
                    train:{{$st->train_id}} from {{$st->from}} to {{$st->to}}</h5>
            </li>
        </ul>
    @endforeach


@endsection
