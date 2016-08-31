@extends('layouts.master')


@section('main_container')

    <!-- page content -->

    <div>
    @if(!empty($articles))
        <div xmlns="http://www.w3.org/1999/html">
            <hr class="featurette-divider">
            @foreach($articles as $article)
                <div class="row featurette">
                    <div class="col-md-7">
                        <a href="{{url('article', $article->id)}}"><h2 class="featurette-heading">{{$article->titre}}</h2></a>
                        <p class="lead">{{$article->description}}</p>

                        @foreach($categories as $categorie)
                            @if($categorie->id == $article->article_categorie_id)
                                <a href="{{url('categorie', $categorie->id)}}">{{$categorie->titre}}</a>
                            @endif
                        @endforeach
                        {{$article->date_event}}

                        <a class="btn btn-default" href="{{url('article', $article->id)}}">lire la suite</a>
                    </div>


                    <div class="col-md-5">
                        @if(count($article->uri)>0)
                            <img class="featurette-image img-responsive" src="{{url('assets',['images', $article->uri])}}"/>
                        @endif
                    </div>


                    <div class="col-md-5">
                        @if(count($article->media)>0)
                        <img class="featurette-image img-responsive" src="{{url('assets',['images', $article->media->uri])}}"/>
                        @endif
                    </div>
                </div>
            @endforeach



            @else
                <p>Aucun article</p>
            @endif
        </div>

    </div>

        <!-- /page content -->





    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
@endsection

