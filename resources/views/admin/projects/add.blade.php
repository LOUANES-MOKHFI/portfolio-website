@extends('admin.layouts.app')
@section('title')
     PROJET
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">AJOUTER UN PROJET</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/category')}}">Liste des endroits</a></li>
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
              <h3 class="card-title col-md-12">AJOUTER UN PROJET</h3>
             </div>
           {!!Form::open(['url' => '/admin/projects' ,'method' => 'post', 'enctype'=>'multipart/form-data'])!!}
                    <div class="col-md-12 form-group">
                      <label for="image_principale">PHOTO PEINCIPALE DE PROJET</label>
                      <input id="image_principale" type="file" class="form-control form-control-lg @error('image_principale') is-invalid @enderror" name="image_principale" autocomplete="image_principale" autofocus>

                          @error('image_principale')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="project_name">NOM DE PROJET</label>
                      <input id="project_name" type="text" class="form-control form-control-lg @error('project_name') is-invalid @enderror" name="project_name" value="{{ old('project_name') }}" autocomplete="project_name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="">CATEGORIE</label>
                      <select class="form-control form-control-lg" name="id_category">
                        <optgroup label="choisir une categorie">
                          @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category}}</option>
                          @endforeach
                        </optgroup>
                      </select>

                          @error('id_category')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    
                     <div class="col-md-6 form-group">
                      <label for="lien">LIEN</label>
                      <input id="lien" type="url" class="form-control form-control-lg @error('lien') is-invalid @enderror" name="lien" value="{{ old('lien') }}"  autocomplete="lien" autofocus>

                          @error('lien')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="duree">DUREE ( PAR JOUR/PAR HEURS)</label>
                      <input id="duree" type="text" class="form-control form-control-lg @error('duree') is-invalid @enderror" name="duree" value="{{ old('duree') }}"  autocomplete="duree" autofocus>

                          @error('duree')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                     <div class="col-md-12 form-group">
                      <label for="tech_use">TECHNOLOGIES UTILISEE</label>
                      <input id="tech_use" type="text" class="form-control form-control-lg @error('tech_use') is-invalid @enderror" name="tech_use" value="{{ old('tech_use') }}"  autocomplete="tech_use" autofocus>

                          @error('tech_use')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>

                    <div class="col-md-12 form-group">
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

                    <div class="col-md-12 form-group">
                      <label for="image">GALLERIES</label>
                      <input id="image" type="file" class="form-control form-control-lg @error('image') is-invalid @enderror" name="image[]" autocomplete="image[]" autofocus multiple>

                          @error('image')
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