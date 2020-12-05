@extends('layouts.app')
@section('title')
 CONTACT
@endsection

@section('header')
<style type="text/css">
    .invalid-feedback{
        font-size: 12px;
        color: red;
    }
    #footer{
        margin-top: 100px;
    }
        .bbbootstrap {
        background-image: url('/designe/user/images/contact.jpg');
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
.section-title{
    margin-top: 0px;
}
</style>
@endsection


@section('content')
<div class="bbbootstrap">
    
</div>
@include('layouts.flash_msg')
<section id="contact" class="section">
            <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title b">
                            <h1><span>Contactez</span> Nous<i class="fa fa-star"></i></h1>
                            <p>Pour tout renseignement sur la création et le référencement d’un site internet, pour obtenir un devis gratuit pour votre projet web, ou pour plus d’informations sur le sponsoring Facebook contactez-nous.</p>
                        </div>
                    </div>
               </div>
                <div class="row" >
                    <!-- Contact Form -->
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.4s">
                        {!! Form::open(['url'=>'/contact', 'method'=>'POST' , 'class'=>'form'])!!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder=" Nom et prénom" value="{{old('name')}}">
                                         @error('name')
                                        
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Objet" value="{{old('subject')}}">
                                @error('subject')
                                        
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
                                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" rows="6" placeholder="Message " >{{old('message')}}</textarea>
                                        @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group button"> 
                                        <button type="submit" class="button primary"><i class="fa fa-send"></i>Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                    <!--/ End Contact Form -->
                    <!-- Contact Address -->
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.8s">
                        <div class="contact">
                            <!-- Single Address -->
                            <div class="single-address">
                                <i class="fa fa-phone"></i> 
                                <div class="title">
                                    <h4>Télèpphone</h4>
                                    <p>0{{getsetting()->site_phone}}</p>
                                </div>
                            </div>
                            <!--/ End Single Address -->
                            <!-- Single Address -->
                            <div class="single-address">
                                <i class="fa fa-envelope"></i> 
                                <div class="title">
                                    <h4>Adress Email</h4>
                                    <p>{{getsetting()->site_email}}</p>
                                </div>
                            </div>
                            <!--/ End Single Address -->
                            <!-- Single Address -->
                            <div class="single-address">
                                <i class="fa fa-map"></i> 
                                <div class="title">
                                    <h4>Adress</h4>
                                    <p>{{getsetting()->adress}}</p>
                                </div>
                            </div>
                            <!--/ End Single Address -->
                        </div>
                    </div>
                    <!--/ End Contact Address -->
                </div>
            </div>
</section>

@endsection
    
@section('footer')

@endsection
