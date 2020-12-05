@extends('layouts.app')
@section('title')
MES PROJETS
@endsection
@section('header')
<style type="text/css">
	.bbbootstrap {
		background-image: url('/designe/user/images/665092.jpg');
	background-size: cover;
	background-repeat: no-repeat;
	height: 300px;
	position:relative;
	background-position: center;
    padding: 40px;
    margin-bottom: 22px;
    color: #fff;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
    background-color: #2e9df7;
    -webkit-box-shadow: 0 15px 15px -15px rgba(0, 0, 0, 0.25) inset, 0 -15px 15px -15px rgba(0, 0, 0, 0.25) inset;
    box-shadow: 0 15px 15px -15px rgba(0, 0, 0, 0.25) inset, 0 -15px 15px -15px rgba(0, 0, 0, 0.25) inset
}
.h1{
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-orient: vertical;
	-webkit-box-direction: normal;
	-ms-flex-direction: column;
	flex-direction: column;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	width: 100%;
	height: 300px;
	font-size: 50px;
	text-align: center;
}
</style>
@endsection


@section('content')

 <div class="bbbootstrap">
     <div class="container">
        <h1 class="h1">MES PROJETS</h1>
     </div>
 </div>

  <section id="portfolio" class="section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h1><span>Mes</span> Projets<i class="fa fa-briefcase"></i></h1>
                            <p>Nous présentons ci-dessus nos défferents projets réalisées</p>
                        </div>
                    </div>
                </div>
                        
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- portfolio Nav -->
                        <div class="portfolio-nav">
                            <ul>
                                <li class="active" data-filter="*"><span>{{$projects->count()}}</span><i class="fa fa-tasks"></i>TOUT LES PROJETS</li>
                                @foreach($categories as $category)
                                <li data-filter=".{{$category->id}}"><span>{{$category->portfolio->count()}}</span><i class="fa fa-pencil"></i>{{$category->category}}</li>
                                @endforeach
                               
                            </ul>
                        </div>
                        <!--/ End portfolio Nav -->
                    </div>
                </div>
                        
                <div class="portfolio-inner">
                    <div class="row stylex">    
                        <div class="isotop-active container">
                            <!-- Single portfolio -->
                            @foreach($projects as $project)
                            <div class="mix {{$project->id_category}} col-md-4 col-sm-6 col-xs-12 col-fix ">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <img src="{{asset('/image_principale/'.$project->image_principale)}}" alt="{{$project->project_name}}" style="height: 300px" />
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><span>{{$project->category->category}}</span><a href="#">{{$project->project_name}}</a></h4>
                                        <p>{{Str::limit($project->description,255)}}</p>
                                        <div class="button">
                                            <a data-fancybox="gallery" href="{{asset('/image_principale/'.$project->image_principale)}}"><i class="fa fa-search"></i></a>
                                            <a href="{{$project->lien}}" target="_blank" class="primary"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--/ End portfolio -->                 
                            <!-- Single portfolio -->
                            
                            <!--/ End portfolio -->     
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Button -->
                    <div class="button">
                        <!--a href="portfolio-full-width.html" class="btn">More Portfolio<i class="fa fa-angle-double-right"></i></a-->
                    </div>
                    <!-- End Button -->
                </div>
            </div>
        </section>

@endsection
    
@section('footer')

@endsection
