@extends('admin.layouts.app')
@section('title')
      PROJET
@endsection

@section('header')
   

<style type="text/css">
  .uppercase{
    text-transform: uppercase;
    font-size: 25px;
    font-weight: bold;
    color: red;
  }


/*panel*/
.panel {
    border: none;
    box-shadow: none;
}

.panel-heading {
    border-color:#eff2f7 ;
    font-size: 16px;
    font-weight: 300;
}

.panel-title {
    color: #2A3542;
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 0;
    margin-top: 0;
    font-family: 'Open Sans', sans-serif;
}

/*product list*/

.prod-cat li a{
    border-bottom: 1px dashed #d9d9d9;
}

.prod-cat li a {
    color: #3b3b3b;
}

.prod-cat li ul {
    margin-left: 30px;
}

.prod-cat li ul li a{
    border-bottom:none;
}
.prod-cat li ul li a:hover,.prod-cat li ul li a:focus, .prod-cat li ul li.active a , .prod-cat li a:hover,.prod-cat li a:focus, .prod-cat li a.active{
    background: none;
    color: #ff7261;
}

.pro-lab{
    margin-right: 20px;
    font-weight: normal;
}

.pro-sort {
    padding-right: 20px;
    float: left;
}

.pro-page-list {
    margin: 5px 0 0 0;
}

.product-list img{
    width: 100%;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
}

.product-list .pro-img-box {
    position: relative;
}
.adtocart {
    background: #fc5959;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    color: #fff;
    display: inline-block;
    text-align: center;
    border: 3px solid #fff;
    left: 45%;
    bottom: -25px;
    position: absolute;
}

.adtocart i{
    color: #fff;
    font-size: 25px;
    line-height: 42px;
}

.pro-title {
    color: #5A5A5A;
    display: inline-block;
    margin-top: 20px;
    font-size: 16px;
}

.product-list .price {
    color:#fc5959 ;
    font-size: 15px;
}

.pro-img-details {
    margin-left: -15px;
}

.pro-img-details img {
    width: 100%;
}

.pro-d-title {
    font-size: 16px;
    margin-top: 0;
}

.product_meta {
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    padding: 10px 0;
    margin: 15px 0;
}

.product_meta span {
    display: block;
    margin-bottom: 10px;
}
.product_meta a, .pro-price{
    color:#fc5959 ;
}

.pro-price, .amount-old {
    font-size: 18px;
    padding: 0 10px;
}

.amount-old {
    text-decoration: line-through;
}

.quantity {
    width: 120px;
}

.pro-img-list {
    margin: 10px 0 0 -15px;
    width: 100%;
    display: inline-block;
}

.pro-img-list a {
    float: left;
    margin-right: 10px;
    margin-bottom: 10px;
}

.pro-d-head {
    font-size: 18px;
    font-weight: 300;
}

</style>


@endsection
@section('content')

 <div class="content-header" style="margin-top: 0px;padding: 0px 0px ">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">AFFICHE UN PROJET</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/project')}}">Liste des projets</a></li>
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
              <h3 class="card-title col-md-6">Afficher le projet <span style="color: red;font-size: 20px"> {{$project->project_name}}</span></h3>
            </div>

        <div class="col-md-12">
            <section class="panel">
                <div class="panel-body row">
                    <div class="col-md-6">
                        <div class="pro-img-details">
                            <img src="{{asset('/image_principale/'.$project->image_principale)}}" alt="{{$project->project_name}}" style="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="pro-d-title">
                            <a href="#" class="" style="font-size: 20px">
                                {{$project->name}}
                            </a>
                        </h4>
                        <p>
                           {{$project->description}}
                        </p>
                        <div class="product_meta">
                            <span class="posted_in"> <strong>Categorie:</strong> <a rel="tag" href="#">{{$project->category->category}}</a>, </span>
                            
                              <span class="tagged_as"><strong>DUREE:</strong> <a rel="tag" href="#">{{
                                  $project->duree}}</a></span>
                              <span class="tagged_as"><strong>LIEN:</strong> <a rel="tag" href="#">{{$project->lien}}</a></span>
                              <span class="tagged_as"><strong>TECHNOLOGIE(s) UTILISE(s):</strong> <a rel="tag" href="#">{{$project->tech_use}}</a></span>
                                         
                             
                    </div>
                        
                    </div>
                </div>
            </section>
        </div>

          </div>
        </div>
      </div>
    </section>
       <div class="container row">
                      @foreach($images as $image)
                    <div class="col-md-3 col-lg-3">
                       <img src="{{asset($image->image)}}" style="width: 200px;height: 150px;float: center">
                    </div>
                    @endforeach
                    </div>
      
    
  
 
@endsection
@section('footer')

@endsection