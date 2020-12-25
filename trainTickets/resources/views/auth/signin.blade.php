@extends('layout.layout')

@section('title')Sign up @endsection

@section('main_content')
{{--    @if(\Illuminate\Support\Facades\Auth::check())--}}
{{--       <h1>--}}
{{--           Authorized--}}
{{--       </h1>--}}
{{--    @else--}}
{{--        <h1>--}}
{{--            Unauthorized--}}
{{--        </h1>--}}
{{--    @endif--}}
    <div class="row">
        <div class="col-6 offset-3">
            @if(session('email_or_pass_error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('email_or_pass_error') }}
                </div>
            @endif


            <form action="{{route('signin')}}" method="post" novalidate>
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email"
                           class="form-control{{$errors->has('email') ? ' is-invalid' : ''}}"
                           id="email" placeholder="insert email"
                           value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <small class="help-block text-danger">
                            {{ $errors->first('email') }}
                        </small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password"
                           class="form-control{{$errors->has('password') ? ' is-invalid' : ''}}"
                           id="password" placeholder="insert password">
                    @if($errors->has('password'))
                        <small class="help-block text-danger">
                            {{ $errors->first('password') }}
                        </small>
                    @endif
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="checkbox" name="remember_me">
                    <label class="form-check-label" for="checkbox">Remember me</label>
                    <label class="float-right">not signed up? <a href="{{route('signup')}}" class="btn btn-outline-warning">Sign UP</a></label>
                </div>
                <button type="submit" class="btn btn-warning w-100 m-0">Войти</button>
            </form>
        </div>

    </div>

@endsection
