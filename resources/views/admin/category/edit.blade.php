@extends('admin.layouts.app')
@section('title')
      Catégorie
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">MODIFIER UNE CATEGORIE</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/category')}}">Liste des categories</a></li>
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
              <h3 class="card-title col-md-12">MODIFIER LA CATEGORIE " <span style="color: red">{{$category->category}}"</span></h3>
             </div>
            <img src="{{asset('/categories/'.$category->image_principale)}}" style="width: 400px;height: 200px;float: center">
           {!!Form::open(['url' => '/admin/category/'.$category->id ,'method' => 'put' , 'enctype'=>'multipart/form-data'])!!}
            <input type="hidden" name="id" value="{{$category->id}}">
                  <div class="col-md-12 form-group">
                      <label for="image_principale">PHOTO PEINCIPALE DE CATEGORIE</label>
                      <input id="image_principale" type="file" class="form-control form-control-lg @error('image_principale') is-invalid @enderror" name="image_principale" autocomplete="image_principale" autofocus>

                          @error('image_principale')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="category">CATEGORIE</label>
                      <input id="category" type="text" class="form-control form-control-lg @error('category') is-invalid @enderror" name="category" value="{{ $category->category }}" required autocomplete="category" autofocus>

                          @error('category')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                      <div class="col-md-4 form-group">
                      <label for="prix">PRIX</label>
                      <input id="prix" type="text" class="form-control form-control-lg @error('prix') is-invalid @enderror" name="prix" value="{{ $category->prix }}"  autocomplete="prix" autofocus>

                          @error('prix')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="duree">DUREE</label>
                      <input id="duree" type="text" class="form-control form-control-lg @error('duree') is-invalid @enderror" name="duree" value="{{ $category->duree }}"  autocomplete="duree" autofocus>

                          @error('duree')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="description">DESCRIPTION</label>
                     <textarea id="description" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" >{{ $category->description }}</textarea>

                          @error('description')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                     <div class="col-md-12 form-group">
                      <label for="active">ETAT</label>
                      <input id="switcheryColor4" type="checkbox" class="switchery" data-color="success" @if( $category->active == '1' ) checked @endif name="active" value="1">

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