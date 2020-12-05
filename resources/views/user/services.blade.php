@extends('layouts.app')
@section('title')
MES SERVICES
@endsection

@section('header')
<style type="text/css">
    .table-list li{
        font-size: 20px;
        font-weight: bold;
    }
    .thumbnail {
    position: relative;
    padding: 0px;
    margin-bottom: 20px;
}

.thumbnail > h4 {
    padding: 7px 5px 0px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.thumbnail h4 .info {
    position: absolute;
    top: 0px;
    right: 0px;
    font-size: 0.6em;
    padding-left: 15px;
    border-top-right-radius: 3px;
    border-bottom-left-radius: 4px;
    border-radius: 0px;
    border-bottom-left-radius: 5px;
    cursor:  pointer;
}

.thumbnail h4 .info > span {
    margin-right: 10px;   
}

.thumbnail img {
    width: 100%;
}
.thumbnail a.btn {
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
}
</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection


@section('content')

  <section id="personal-area1" >
            <div class="personal-main">
                <div class="personal-single">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- Personal Text -->
                                <div class="personal-text">
                                    <div class="my-info">
                                        
                                    </div>
                                </div>
                                <!--/ End Personal Text -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section id="my-service" class="section" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h1><span>Nos</span> Services<i class="fa fa-rocket"></i></h1>
                            <p>{{getsetting()->site_name}} vous proposer plusieur services à vous<p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
                        <!-- Single Service -->
                        <div class="single-service" style="height: 250px">
                            <p align="center"><img src="{{asset('/icone/'.$service->icone)}}" alt="{{$service->name}}" style="height: 55px;width: 55px"></p>
                            <h2>{{$service->name}}</h2>
                            <p>{{$service->description}}</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    @endforeach
                </div>
            </div>
</section>

<div class="container">
    <div class="row">
        <h2 class="text-center section-title">Création des sites web </h2>
        <hr/>
    </div>
    <div class="row">
        @foreach($categories as $cat)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <h4>
                    {{$cat->category}}
                </h4>
                <img src="{{asset('/categories/'.$cat->image_principale)}}" alt="{{$cat->category}}" style="height: 230px">

                <p style="height: 200px;margin-top: 20px;font-size: 17px" align="left">{{$cat->description}}</p>
                
                <a href="#" class="btn btn-info col-xs-12" role="button" style="font-size: 17px;font-weight: bold;color: red">
                @if($cat->prix == null)
                    selon votre cahier de charge
                @else
                    A partir de {{$cat->prix}}
                @endif</a>
                <div class="clearfix"></div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="container">
        <p class="text-center" style="font-size: 22px">
            paiement : 30% d’acompte pour commencer, puis 70% restants lorsque vous serez 100% satisfait.
        </p>
    </div>
</div>

 <section id="pricing" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h1><span>Service</span> Sponsoring<i class="fa fa-history"></i></h1>
                            <p>Nous vous proposons le service de publicité sur facebook sponsorisé nous vous épargnons des efforts nous étudions soigneusement le ciblage et vous donnons les meilleurs résultats. nous excellons dans nos relations avec: la vitesse et la crédibilité dans chacune des présentations suivante<p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Single Table -->
                    <div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
                        <div class="single-table">
                            <!-- Table Head -->
                            <div class="table-head">
                                <h2 class="title">Basic</h2>
                                <div class="price">
                                    <p class="amount"><span>1600 </span>DA</p>
                                </div>
                                <i class="fa fa-gift"></i>
                            </div>
                            <!-- Table List -->
                            <ul class="table-list">
                                <li>10.000 - 29.000 Vues</li>
                                <li>1-4 jours</li>
                            </ul>
                            <!-- Table Bottom -->
                            <div class="table-bottom">
                            </div>
                        </div>
                    </div>
                    <!-- End Single Table-->
                    <!-- Single Table -->
                    <div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
                        <div class="single-table active">
                            <!-- Table Head -->
                            <div class="table-head">
                                <h2 class="title">Standard</h2>
                                <div class="price">
                                    <p class="amount"><span>3000</span> DA</p>
                                </div>
                                <i class="fa fa-gift"></i>
                            </div>
                            <!-- Table List -->
                            <ul class="table-list">
                               <li>23.000 - 66.000 Vues</li>
                                <li>1-9 jours</li>
                            </ul>
                            <!-- Table Bottom -->
                            <div class="table-bottom">
                            </div>
                        </div>
                    </div>
                    <!-- End Single Table-->
                    <!-- Single Table -->
                    <div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.8s">
                        <div class="single-table">
                            <!-- Table Head -->
                            <div class="table-head">
                                <h2 class="title">Premium</h2>
                                <div class="price">
                                    <p class="amount"><span>7000</span> DA</p>
                                </div>
                                <i class="fa fa-gift"></i>
                            </div>
                            <!-- Table List -->
                            <ul class="table-list">
                                <li>50.000 - 150.000 Vues</li>
                                <li>1-12 jours</li>
                            </ul>
                            <!-- Table Bottom -->
                            <div class="table-bottom">
                            </div>
                        </div>
                    </div>
                    <!-- End Single Table-->
                </div>  
            </div>  
        </section>     
@endsection
    
@section('footer')
<script type="text/javascript">
    $(document).ready( function() {
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
@endsection
