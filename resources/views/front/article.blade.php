@extends('layouts.master')

@section('main_container')

    <h2>{{$articles->titre}}</h2>
    <div class="content">
        {{$articles->date_event}}
        <br>{{$articles->description}}
        <br><img src="{{url('assets',['images', $articles->uri])}}"/>
        @foreach($categories as $categorie)
            @if($categorie->id == $articles->article_categorie_id)
                <a href="{{url('categorie', $categorie->id)}}">{{$categorie->titre}}</a>
            @endif
        @endforeach
        <br>{{$articles->content}}
    </div>
    <div class="col-md-5">
        @if(count($articles->media)>0)
            <img class="featurette-image img-responsive" src="{{url('assets',['images', $articles->media->uri])}}"/>
        @endif
    </div>

@endsection