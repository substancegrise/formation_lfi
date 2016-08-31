@extends('layouts.master')

@section('main_container')

    <form action="{{url('login')}}" method="post">

        {{csrf_field()}}

        <p><label for="name">Username</label>
            <input type="text" name="name" value="{{old('name')}}">
            @if($errors->has('name')) <span>{{$erros->first('name')}}</span>@endif
        </p>
        <p><label for="password">Password</label>
            <input type="password" name="password">
            @if($errors->has('password')) <span>{{$erros->first('password')}}</span>@endif
        </p>
        <p><input type="checkbox" name="remember"> se souvenir de moi</p>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <p><input type="submit"></p>
    </form>

@endsection