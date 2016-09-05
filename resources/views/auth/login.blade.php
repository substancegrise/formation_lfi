@extends('layouts.logintheme')

@push('meta')
< meta name="csrf-token" content="{{ csrf_token() }}" />
@endpush

@push('stylesheets')

<!--FONT -->
<link href="{{ asset("css/latofonts.css") }}" rel="stylesheet">
<link href="{{ asset("css/latostyle.css") }}" rel="stylesheet">
<!--CSS-->
<link rel="stylesheet" href="css/style.css" media="screen">
<link rel="stylesheet" href="" media="print">

@endpush

@section('main_container')
    <body class="logintheme">
    <section class="content ">
        <div class="conteneurlog">
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
        </div>
    </section>
    </body>
@endsection