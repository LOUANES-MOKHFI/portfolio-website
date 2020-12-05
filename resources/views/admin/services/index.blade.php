@extends('admin.layouts.app')
@section('title')
      SERVICES
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Liste des services</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/services')}}">Liste des services</a></li>
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
              <h3 class="card-title col-md-2">Liste des services</h3>
             
             <div class="col-md-3 col-sm-12">
                <a href="{{url('/admin/services/create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Ajouter un service</a>
             </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="100">ICONE</th>
                  <th width="200">NOM DE service</th>
                  <th width="100">ETAT</th>
                  <th width="100">ACTION</th>
                </tr>
                </thead>
                <tbody>
                	@if(count($services) == 0)
                        <tr>
                        	<td colspan="5" style="color: red;font-weight: bold" align="center">LA LISTE DES SERVICES EST VIDE</td>
                        </tr>
                	@else
                  @foreach($services as $service)
                  
                <tr>
                  <td><img style="height: 100px;width: 120px" src="{{asset('/icone/'.$service->icone)}}"></td>
                  <td>{{$service->name}}</td>
                  <td>{{$service->getActive()}}</td>
                  <td>
                    <a class="btn btn-info fa fa-eye-slash" href="{{'/admin/services/'.$service->id}}"></a>
                    <a class="btn btn-warning fa fa-btn fa-edit" href="{{'/admin/services/'.$service->id.'/edit'}}"></a>
                        {{ csrf_field()}}
                        {{ method_field('DELETE') }}
                        <a class="btn btn-danger far fa-trash-alt" href="{{'/admin/services/'.$service->id.'/delete'}}"></a>
                  </td>
                </tr>
          
                 @endforeach
                 @endif
                </tbody>
                <tfoot>
                <tr>
                  <th width="100">ICONE</th>
                  <th width="200">NOM DE service</th>
                  <th width="100">ETAT</th>
                  <th width="100">ACTION</th>
                </tr>
                </tfoot>
              </table>
            </div>
            {{$services->links()}}
          </div>
        </div>
      </div>
    </section>
@endsection
@section('footer')

@endsection