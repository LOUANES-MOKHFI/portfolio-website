@extends('layouts.app')
@section('title')
  A PROPOS
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
.tab-content{
    height: 400px;
}
</style>
@endsection


@section('content')
 <div class="bbbootstrap">
     <div class="container">
        <h1 class="h1">A PROPOS</h1>
     </div>
 </div>
 <section id="about-me" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 fix">
                        <!-- About Tab -->
                        <div class="tabs-main">
                            <!-- Tab Menu -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><span class="tooltips">QUI SOMMES NOUS</span><a href="#welcome" role="tab" data-toggle="tab"><i class="fa fa-user"></i></a></li>
                                <li role="presentation"><span class="tooltips">NOS COMPETANCES</span><a href="#skill" role="tab"  data-toggle="tab"><i class="fa fa-rocket"></i></a></li>
                                <li role="presentation"><span class="tooltips">POURQUOI NOUS</span><a href="#why" role="tab"  data-toggle="tab"><i class="fa fa-question"></i></a></li>
                                <li role="presentation"><span class="tooltips">NOTRE VISION</span><a href="#vision" role="tab"  data-toggle="tab"><i class="fa fa-graduation-cap"></i></a></li>
                            </ul>
                            <!--/ End Tab Menu -->
                            <div class="tab-content">
                                <!-- Single Tab -->
                                <div role="tabpanel" class="tab-pane fade in active" id="welcome">
                                    <div class="about-text">
                                        <h2 class="tab-title">QUI SOMMES NOUS ?</h2>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <!-- About Image -->
                                                <div class="single-image">
                                                    <img src="/designe/user/images/img.png" alt="{{getsetting()->site_name}}">
                                                </div>
                                            </div>
                                            <!-- End About Image -->
                                            <div class="col-md-8 col-sm-12 col-xs-12">
                                                <div class="content">
                                                    <p>Bienvenu chez nous, L-Développement est jeune équipe spécialisé dans la création de sites internet (site vitrine, site e-commerce, site de réservation), des applications.<br>
                                                    L-Développement vous propose le service Sponsorin sur les réseaux sociaux (facebook, messenger, instagram).</p>
                                                </div>
                                                <div class="social">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a><li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a><li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a><li>
                                                        <li><a href="#"><i class="fa fa-linkedin"></i></a><li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Single Tab -->
                                <!-- Single Tab -->
                                <div role="tabpanel" class="tab-pane fade" id="skill">
                                    <h2 class="tab-title">NOS COMPETANCES</h2>
                                    <div class="row">  
                                    @foreach($technologies as $tech)             
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <!-- Single Skill -->
                                            <div class="single-skill">
                                                <div class="skill-info">
                                                    <h4>{{$tech->name}}</h4>
                                                </div>
                                                <div class="progress">
                                                  <div class="progress-bar" role="progressbar" aria-valuenow="{{$tech->pourcentage}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$tech->pourcentage}}%;"><span>{{$tech->pourcentage}}</span></div>
                                                </div>
                                            </div>
                                            <!--/ End Single Skill -->
                                        </div>
                                        @endforeach
                                       
                                    </div>
                                </div>
                                <!--/ End Single Tab -->
                                <!-- Single Tab -->
                                <div role="tabpanel" class="tab-pane fade" id="why">
                                    <div class="about-text">
                                        <h2 class="tab-title">POURQUOI NOUS ?</h2>
                                        <div class="content">
                                            <p>i'm a responsive web developer. ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                            <p>creative web developer ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Single Tab -->
                                <!-- Single Tab -->
                                <div role="tabpanel" class="tab-pane fade" id="vision">
                                    <div class="about-text">
                                        <h2 class="tab-title">NOTRE VISION</h2>
                                        <div class="content">
                                            <p>my visition is ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                            <p>also i've perfect ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Single Tab -->
                            </div>
                        </div>
                        <!--/ End About Tab -->
                    </div>
                </div>
            </div>
        </section>     
 <br><br><br>
@endsection
    
@section('footer')

@endsection
