@extends('admin.layouts.app')
@section('title')
      TECHNOLOGIES
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">MODIFIER UNE TECHNOLOGIE</h1>
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
              <h3 class="card-title col-md-12">MODIFIER LA TECHNOLOGIE " <span style="color: red">{{$technologies->name}}"</span></h3>
             </div>
           {!!Form::open(['url' => '/admin/technologies/'.$technologies->id ,'method' => 'put'])!!}
                  <div class="row">
                     <div class="col-md-4 form-group">
                    <label for="name">TECHNOLOGIES</label>
                      <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ $technologies->name }}" required autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="type">TYPE</label>
                      <select name="type" class="form-control form-control-lg">
                        <optgroup label="type">
                          <option value="backend">BACK-END</option>
                          <option value="frontend">FRONT-END</option>
                        </optgroup>
                      </select>

                          @error('type')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="pourcentage">POURCENTAGE</label>
                      <input id="pourcentage" type="text" class="form-control form-control-lg @error('pourcentage') is-invalid @enderror" name="pourcentage" value="{{ $technologies->pourcentage }}" required autocomplete="pourcentage" autofocus>

                          @error('pourcentage')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                     <div class="col-md-12 form-group">
                      <label for="active">ETAT</label>
                      <input id="switcheryColor4" type="checkbox" class="switchery" data-color="success" @if( $technologies->active == '1' ) checked @endif name="active" value="1">

                          @error("active")
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