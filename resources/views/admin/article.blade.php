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
    <div class="right_col" role="main">
        <!-- page -->




    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Articles</h2>
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

                        @if(!empty($articles))
                            {{$articles->links()}}

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>TITRE</th>
                                        <th>CATEGORIE</th>
                                        <th>DATE DE PUBLICATION</th>
                                        <th>DATE DE L'EVENEMENT</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                        @foreach($articles as $article)

                                            <td><a href="{{route('admin.article.edit', [$article->id])}}">{{$article->titre}}</a></td>


                                            <td><a href="{{route('admin.article.edit', [$article->id])}}">{{$article->categorie}}</a></td>

                                            <td>{{$article->created_at}}</td>
                                            <td>{{$article->date_event}}</td>
                                            <td>
                                                <div>
                                                <a class="btn btn-dark" href="{{route('admin.article.edit', [$article->id])}}"> edit </a>

                                                </div>
                                            </td>

                                            <td>
                                                <form class="delete" action="{{route('admin.article.destroy',[$article->id])}}" method="post">
                                                    {{method_field('DELETE')}}
                                                    {{csrf_field()}}
                                                    <input type="submit" class="btn btn-danger" value="supprimer"></form>
                                            </td>

                                            <td>
                                                <form action="{{route('admin.publish.update', [$article->id])}}" method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('PUT')}}

                                                    @if($article->status == "published")

                                                        <input type="hidden" value="unpublished"   name="status">

                                                        <input type="submit" class="btn btn-success"  value="Dépublier">

                                                    @else

                                                        <input type="hidden" value="published" name="status">

                                                        <input type="submit" class="btn btn-dark"  value="Publier">

                                                    @endif
                                                </form>
                                            </td>

                                    </tr>
                                    @endforeach


                                    @else
                                        <p>Aucun article</p>
                                    @endif

                                    </tbody>
                                </table>
                                <p>{{$articles->links()}}</p>
                            </div>



                    </form>
                </div>
            </div>
        </div>
    </div>


        <!-- /page -->
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
