@extends('layouts.blank')

@push('stylesheets')
<!-- iCheck -->
<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<!-- jVectorMap -->
<link href="css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>
@endpush

@section('main_container')

    <!-- page content -->

    <form action="{{route('admin.article.update', [$article->id])}}" method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}
        {{method_field('PUT')}}

    <div class="right_col" role="main">
        <!-- page -->



    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{$article->titre}}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">



                            <p> l'ensemble des éléments compotant une * sont obligatoire</p>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Titre<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input   id="titre"
                                             type="text"
                                             name="titre"
                                             value="{{$article->titre}}"
                                             class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            @if($errors->has('titre'))
                                <span class="admin_error">
                                {{$errors->first('titre')}}
                                </span>
                            @endif


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input   id="description"
                                             type="text"
                                             name="description"
                                             value="{{$article->description}}"
                                             class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            @if($errors->has('description'))
                                <span class="admin_error">
                                {{$errors->first('description')}}
                                </span>
                            @endif


                        <div class="item form-group">
                            <p><label class="control-label col-md-3 col-sm-3 col-xs-12" for="date_event">Date Event *</label>{{$article->date_event}}</p>
                            <input id="date_event" type="date" name="date_event" value="{{$article->date_event}}">
                            </div>
                            @if($errors->has('date_event'))
                                <span class="admin_error">
                                 {{$errors->first('date_event')}}
                             </span>
                            @endif


                            <p><label for="content">content texte *</label></p>
                            <textarea rows="10" cols="60" id="content" name="content">{{$article->content}}</textarea>

                            @if($errors->has('content'))
                                <span class="admin_error">
        {{$errors->first('content')}}
    </span>
                            @endif

                            <p><label for="status">status *</label></p>
                            <input {{$article->status=='published'? 'checked' : ''}} type="radio" name="status" value="published"> published
                            <input {{$article->status=='unpublished'? 'checked' : ''}} type="radio" name="status" value="unpublished">
                            unpublished


                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                @endif
                            </ul>

                            <div>
                                <h3> IMAGES </h3>
                                @if($article->uri)
                                    <img src="{{url('assets', ['images', $article->uri])}}" alt="{{$article->uri}}">
                                    <br><input type="checkbox" name="delete_picture"> supprimer
                                @endif
                                <br>(modifier/ajouter): <input type="file" name="picture" value="" id="picture"> Ajouter une image


                            </div>


                            <div>
                                <h3> IMAGES 2 </h3>

                                @if(count($article->media)>0)
                                    <img class="featurette-image img-responsive" src="{{url('assets',['images', $article->media->uri])}}"/>
                                    <br><input type="checkbox" name="delete_picture"> supprimer
                                @endif
                                <br>(modifier/ajouter): <input type="file" name="picture2" value="" id="picture2"> Ajouter une image

                            </div>

                            <p><input type="submit"></p>

                    </form>
                </div>
            </div>
        </div>
    </div>

        <!-- /page -->
    </div>
    <!-- /page content -->

    <!-- footer content -->
        </form>
    <footer>
        <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
@endsection
