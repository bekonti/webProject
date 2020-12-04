@extends('layout.layout')

@section('title')Sign up @endsection

@section('main_content')
{{--    @if(\Illuminate\Support\Facades\Auth::check())--}}
{{--        <h1>--}}
{{--            Authorized--}}
{{--        </h1>--}}
{{--    @else--}}
{{--        <h1>--}}
{{--            Unauthorized--}}
{{--        </h1>--}}
{{--    @endif--}}
    <div class="row">
        <div class="col-6 offset-3">
            <form action="{{route('signup')}}" method="post" novalidate>
                @csrf
                <div class="form-group">
                    <label for="email">Email адерес</label>
                    <input type="email" name="email"
                           class="form-control{{$errors->has('email') ? ' is-invalid' : ''}}"
                           id="email" placeholder="Введите email"
                           value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <small class="help-block text-danger">
                            {{ $errors->first('email') }}
                        </small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" name="password"
                           class="form-control{{$errors->has('password') ? ' is-invalid' : ''}}"
                           id="password" placeholder="Введите пароль">
                    @if($errors->has('password'))
                        <small class="help-block text-danger">
                            {{ $errors->first('password') }}
                        </small>
                    @endif
                </div>
                <div class="form-group">

                </div>

                <button type="submit" class="btn btn-primary w-100 m-0">Регистрация</button>

            </form>
        </div>

    </div>

@endsection
