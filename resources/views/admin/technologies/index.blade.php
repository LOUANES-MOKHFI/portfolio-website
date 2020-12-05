@extends('admin.layouts.app')
@section('title')
      technologies
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Liste des technologies</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/technologies')}}">Liste des technologies</a></li>
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
              <h3 class="card-title col-md-2">Liste des technologies</h3>
             
             <div class="col-md-3 col-sm-12">
                <a href="{{url('/admin/technologies/create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Ajouter une technologie</a>
             </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="400">TECHNOLOGIES</th>
                  <th width="100">TYPE</th>   
                  <th width="100">POURCENTAGE</th>   
                  <th width="100">ETAT</th>                  
                  <th width="100">ACTION</th>
                </tr>
                </thead>
                <tbody>
                	@if(count($technologies) == 0)
                        <tr>
                        	<td colspan="5" style="color: red;font-weight: bold" align="center">LA LISTE DES TECHNOLOGIES EST VIDE</td>
                        </tr>
                	@else
                  @foreach($technologies as $tech)
                  
                <tr>
                  <td>{{$tech->name}}</td>
                  <td>{{$tech->type}}</td>
                  <td>{{$tech->pourcentage}}</td>
                  <td>{{$tech->getActive()}}</td>
                  <td>
                   
                    <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/admin/technologies/'.$tech->id.'/edit'}}"></a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <a class="btn btn-danger far fa-trash-alt" href="{{'/admin/technologies/'.$tech->id.'/delete'}}"></a>
                      
                  </td>
                </tr>
          
                 @endforeach
                 @endif
                </tbody>
                <tfoot>
                <tr>
                  <th width="400">TECHNOLOGIES</th>
                  <th width="100">TYPE</th>   
                  <th width="100">POURCENTAGE</th>   
                  <th width="100">ETAT</th>                  
                  <th width="100">ACTION</th>
                </tr>
                </tfoot>
              </table>
            </div>
            {{$technologies->links()}}
          </div>
        </div>
      </div>
    </section>
@endsection
@section('footer')

@endsection