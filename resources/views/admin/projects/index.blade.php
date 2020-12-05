@extends('admin.layouts.app')
@section('title')
      projets
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Liste des projets</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/projects')}}">Liste des projets</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

    </div>
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
             <div class="card-header row">
              <h3 class="card-title col-md-2">Liste des projets</h3>
              <form class="card card-sm col-md-7" action="{{url('/admin/search_projects')}}" method="get">
        {{ csrf_field()}}
         <div class=" row no-gutters align-items-center">
             <div class="col-md-10 col-sm-12">
                 <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="projet.." name="project">
             </div>
                                    <!--end of col-->
            <div class="col-md-2 col-sm-12">
                 <button class="btn btn-lg btn-info" type="submit" name="search">Rechercher</button>
             </div>
                                    <!--end of col-->
         </div>
     </form>
             <div class="col-md-3 col-sm-12">
                <a href="{{url('/admin/projects/create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Ajouter un projet</a>
             </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="200">NOM DE PROJET</th>
                  <th width="100">DUREE</th>
                  <th width="100">CATEGORIES</th>
                  <th width="100">ETAT</th>
                  <th width="100">ACTION</th>
                </tr>
                </thead>
                <tbody>
                	@if(count($projects) == 0)
                        <tr>
                        	<td colspan="5" style="color: red;font-weight: bold" align="center">LA LISTE DES PROJETS EST VIDE</td>
                        </tr>
                	@else
                  @foreach($projects as $project)
                  
                <tr>
                  <td>{{$project->project_name}}</td>
                  <td>{{$project->duree}}</td>
                  <td>{{$project->category->category}}</td>
                  <td>{{$project->getActive()}}</td>
                  <td>
                    <a class="btn btn-info fa fa-eye-slash" href="{{'/admin/projects/'.$project->id}}"></a>
                    <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/admin/projects/'.$project->id.'/edit'}}"></a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <a class="btn btn-danger far fa-trash-alt" href="{{'/admin/projects/'.$project->id.'/delete'}}"></a>
                  </td>
                </tr>
          
                 @endforeach
                 @endif
                </tbody>
                <tfoot>
                <tr>
                  <th width="200">NOM DE PROJET</th>
                  <th width="100">DUREE</th>
                  <th width="100">CATEGORIES</th>
                  <th width="100">ETAT</th>
                  <th width="100">ACTION</th>
                </tr>
                </tfoot>
              </table>
            </div>
            {{$projects->links()}}
          </div>
        </div>
      </div>
    </section>
@endsection
@section('footer')

@endsection