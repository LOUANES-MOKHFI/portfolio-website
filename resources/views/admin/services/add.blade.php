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
            <h1 class="m-0 text-dark">AJOUTER UN SERVICES</h1>
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
              <h3 class="card-title col-md-12">AJOUTER UN SERVICES</h3>
             </div>
           {!!Form::open(['url' => '/admin/services' ,'method' => 'post', 'enctype'=>'multipart/form-data'])!!}
                    <div class="col-md-12 form-group">
                      <label for="icone">ICONE DE SERVICES</label>
                      <input id="icone" type="file" class="form-control form-control-lg @error('icone') is-invalid @enderror" name="icone" autocomplete="icone" autofocus>

                          @error('icone')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="name">NOM DE SERVICES</label>
                      <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                   
                    
                     
                    <div class="col-md-6 form-group">
                      <label for="active">ETAT </label>
                      <input id="switcheryColor4" type="checkbox" class="switchery" data-color="success" checked name="active" value="1">

                          @error("active")
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                       <div class="col-md-12 form-group">
                      <label for="description">DESCRIPTION</label>
                      <textarea id="description" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" autocomplete="description" autofocus>
                        {{ old('description') }}
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
                                    {{ __('AJOUTER') }}
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