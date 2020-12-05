@extends('admin.layouts.app')
@section('title')
      SERVICE
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">MODIFIER UN SERVICE</h1>
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
              <h3 class="card-title col-md-12">MODIFIER LE SERVICE  <span style="color: red">"{{$service->name}}"</span></h3>
             </div>
             <img src="{{asset('/icone/'.$service->icone)}}" style="width: 400px;height: 200px;float: center">
           {!!Form::open(['url' => '/admin/services/'.$service->id ,'method' => 'put', 'enctype'=>'multipart/form-data'])!!}
           <input type="hidden" name="id" value="{{$service->id}}">
                  <div class="col-md-12 form-group">
                      <label for="icone">ICONE DE SERVICE</label>
                      <input id="icone" type="file" class="form-control form-control-lg @error('icone') is-invalid @enderror" name="icone" autocomplete="icone" autofocus>

                          @error('icone')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="name">NOM DE SERVICE</label>
                      <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{$service->name}}" autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                   
                    <div class="col-md-12 form-group">
                      <label for="active">ETAT </label>
                      <input id="switcheryColor4" type="checkbox" class="switchery" data-color="success" @if( $service->active == '1' ) checked @endif name="active" value="1">


                          @error("active")
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                       <div class="col-md-12 form-group">
                      <label for="description">DESCRIPTION</label>
                      <textarea id="description" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" autocomplete="description" autofocus>
                        {{$service->description}}
                      </textarea>

                          @error('description')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                   
                  
                  </div>
                   <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                    {{ __('MODIFIER') }}
                                </button>
                        </div>
                    </div>
           {!!Form::close()!!}
            <!-- /.card-header -->
            <div class="card-body">
              
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('footer')

@endsection