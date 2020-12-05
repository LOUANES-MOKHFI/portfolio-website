@extends('layouts.app')
@section('title')
ACCUEIL
@endsection
@section('header')
@endsection


@section('content')
         <!-- Start Personal Area -->
        <section id="personal-area">
            <div class="personal-main">
                <div class="personal-single">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <!-- Personal Text -->
                                <div class="personal-text">
                                    <div class="my-info">
                                        <h1>Louanes - DEveloppement</h1>
                                        <h2 class="cd-headline clip is-full-width">
                                           Une proffessional
                                           <span class="cd-words-wrapper">
                                               <!--b class="is-visible">UI/UX DESIGNER</b-->
                                               <b class="is-visible">équipe de développement</b>
                                               <!--b>Creative Director</b-->
                                            </span>
                                        </h2>
                                        <div class="button">
                                            <a href="{{route('about')}}" class="btn primary shine"><i class="fa fa-rocket"></i>A propos</a>
                                            <a href="{{route('portfolio')}}" class="btn shine"><i class="fa fa-briefcase"></i>Nos Projets</a>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Personal Text -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Personal Area -->
        
        <!-- Start About Me -->
        
        <!--/ End About Me -->  
        
        <!-- Start Service -->
        <section id="my-service" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h1><span>Nos</span> Service<i class="fa fa-rocket"></i></h1>
                            <p>{{getsetting()->site_name}} vous proposer plusieur services à vous<p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach(All_Services() as $service)
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
        <!--/ End Service -->
        
        <!-- Start portfolio -->
      
        <!--/ End portfolio -->
        
        <!-- Start Count Down -->
        <section id="countdown" class="section" data-stellar-background-ratio="0.3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Single Count -->
                        <div class="single-count">
                            <i class="fa fa-tasks"></i>
                            <h2><span class="count">{{All_project()->count()}}</span></h2>
                            <p>Projets réalisée</p>
                        </div>
                        <!--/ End Single Count -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Single Count -->
                        <div class="single-count">
                            <i class="fa fa-users"></i>
                            <h2><span class="count">{{All_project()->count()}}</span></h2>
                            <p>Clients satisfait</p>
                        </div>
                        <!--/ End Single Count -->
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Single Count -->
                        <div class="single-count active">
                            <i class="fa fa-clock-o"></i>
                            <h2><span class="count">10</span>/jour</h2>
                            <p>heurs de travaille</p>
                        </div>
                        <!--/ End Single Count -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Count Down -->
        
        <!-- Start Timeline-->
      
        <!--/ End Timeline -->
        
        <!-- Start Pricing Table -->
        
        <!--/ End Pricing Table -->
        
        <!-- Start Testimonials -->
        <!--section id="testimonials" class="section" data-stellar-background-ratio="0.3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h1><span>les avis des</span> clients<i class="fa fa-star"></i></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-carousel">
                            <div class="single-testimonial">
                                <div class="testimonial-content">
                                    <i class="fa fa-quote-left"></i>
                                    <p>Vestibulum scelerisque, turpis a imperdiet consectetur, est turpis sollicitudin lorem, ac scelerisque libero velit nec odio. Aliquam nunc eros, ultricies non consequat at, porttitor at ante. Etiam lorem erat, vulputate nec pellentesque ut, tempor vel nisi. Suspendisse porta sem vel mauris semper consequat. Proin id aliquet felis. Aliquam justo augue, aliquet id vulputate ut, ultricies non orci.</p>
                                </div>
                                <div class="testimonial-info">
                                    <img src="http://via.placeholder.com/270x300" class="img-circle" alt="">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h6>Shakil Hossain<span>Web Developer</span></h6>
                                </div>          
                            </div>
                            <div class="single-testimonial">
                                <div class="testimonial-content">
                                    <i class="fa fa-quote-left"></i>
                                    <p>Vestibulum scelerisque, turpis a imperdiet consectetur, est turpis sollicitudin lorem, ac scelerisque libero velit nec odio. Aliquam nunc eros, ultricies non consequat at, porttitor at ante. Etiam lorem erat, vulputate nec pellentesque ut, tempor vel nisi. Suspendisse porta sem vel mauris semper consequat. Proin id aliquet felis. Aliquam justo augue, aliquet id vulputate ut, ultricies non orci.</p>
                                </div>
                                <div class="testimonial-info">
                                    <img src="http://via.placeholder.com/270x300" class="img-circle" alt="">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <h6>Rimon Hossain<span>Web Designer</span></h6>
                                </div>          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section-->
        <!--/ End Testimonials -->
        
        <!-- Start Blog -->
        <!--section id="blog" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h1><span>Dernier</span> Blog<i class="fa fa-pencil"></i></h1>
                            <p><p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-carousel">     
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="http://via.placeholder.com/1200x800" alt="" class="img-responsive">
                                    <div class="blog-link">
                                        <a href="blog-single.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="date">
                                        <div class="day"><span>20</span>Jan</div>
                                        <div class="year">2017</div>
                                    </div>
                                    <h2><a href="blog-single.html">Creative Portfolio template</a></h2>
                                    <div class="meta">
                                        <span><i class="fa fa-user"></i>By admin</span>
                                        <span><i class="fa fa-comments"></i>45 comments</span>
                                        <span><i class="fa fa-eye"></i>5k views</span>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available. Donec libero ante, tempus vitae lacus a, sollicitudin ultrices augue. Sed bibendum ligula lectus, eget malesuada mauris.  </p>
                                    <a href="blog-single.html" class="btn">Read more<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>                      
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="http://via.placeholder.com/1200x800" alt="" class="img-responsive">
                                    <div class="blog-link">
                                        <a href="blog-single.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="date">
                                        <div class="day"><span>28</span> Jun</div>
                                        <div class="year">2017</div>
                                    </div>
                                    <h2><a href="blog-single.html">Creative Onepage template</a></h2>
                                    <div class="meta">
                                        <span><i class="fa fa-user"></i>By admin</span>
                                        <span><i class="fa fa-comments"></i>15 comments</span>
                                        <span><i class="fa fa-eye"></i>1k views</span>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available. Donec libero ante, tempus vitae lacus a, sollicitudin ultrices augue. Sed bibendum ligula lectus, eget malesuada mauris.  </p>
                                    <a href="blog-single.html" class="btn">Read more<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>                      
                          
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="http://via.placeholder.com/1200x800" alt="" class="img-responsive">
                                    <div class="blog-link">
                                        <a href="blog-single.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="date">
                                        <div class="day"><span>1</span> July</div>
                                        <div class="year">2017</div>
                                    </div>
                                    <h2><a href="blog-single.html">Onepage Portfolio Website</a></h2>
                                    <div class="meta">
                                        <span><i class="fa fa-user"></i>By admin</span>
                                        <span><i class="fa fa-comments"></i>450 comments</span>
                                        <span><i class="fa fa-eye"></i>33k views</span>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available. Donec libero ante, tempus vitae lacus a, sollicitudin ultrices augue. Sed bibendum ligula lectus, eget malesuada mauris.  </p>
                                    <a href="blog-single.html" class="btn">Read more<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>                      
                           
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="http://via.placeholder.com/1200x800" alt="" class="img-responsive">
                                    <div class="blog-link">
                                        <a href="blog-single.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="date">
                                        <div class="day"><span>20</span>Jan</div>
                                        <div class="year">2017</div>
                                    </div>
                                    <h2><a href="blog-single.html">Creative Portfolio template</a></h2>
                                    <div class="meta">
                                        <span><i class="fa fa-user"></i>By admin</span>
                                        <span><i class="fa fa-comments"></i>45 comments</span>
                                        <span><i class="fa fa-eye"></i>5k views</span>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available. Donec libero ante, tempus vitae lacus a, sollicitudin ultrices augue. Sed bibendum ligula lectus, eget malesuada mauris.  </p>
                                    <a href="blog-single.html" class="btn">Read more<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>                      
                          
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="http://via.placeholder.com/1200x800" alt="" class="img-responsive">
                                    <div class="blog-link">
                                        <a href="blog-single.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="date">
                                        <div class="day"><span>28</span> Jun</div>
                                        <div class="year">2017</div>
                                    </div>
                                    <h2><a href="blog-single.html">Creative Onepage template</a></h2>
                                    <div class="meta">
                                        <span><i class="fa fa-user"></i>By admin</span>
                                        <span><i class="fa fa-comments"></i>15 comments</span>
                                        <span><i class="fa fa-eye"></i>1k views</span>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available. Donec libero ante, tempus vitae lacus a, sollicitudin ultrices augue. Sed bibendum ligula lectus, eget malesuada mauris.  </p>
                                    <a href="blog-single.html" class="btn">Read more<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>                      
                           
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="http://via.placeholder.com/1200x800" alt="" class="img-responsive">
                                    <div class="blog-link">
                                        <a href="blog-single.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="date">
                                        <div class="day"><span>1</span> July</div>
                                        <div class="year">2017</div>
                                    </div>
                                    <h2><a href="blog-single.html">Onepage Portfolio Website</a></h2>
                                    <div class="meta">
                                        <span><i class="fa fa-user"></i>By admin</span>
                                        <span><i class="fa fa-comments"></i>450 comments</span>
                                        <span><i class="fa fa-eye"></i>33k views</span>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available. Donec libero ante, tempus vitae lacus a, sollicitudin ultrices augue. Sed bibendum ligula lectus, eget malesuada mauris.  </p>
                                    <a href="blog-single.html" class="btn">Read more<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>                      
                        </div>                      
                    </div>
                </div>
            </div>
        </section-->
        <!--/ End Blog -->  
        
        <!-- Start Call To Action -->
        <!--section id="call-action" class="section wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="call-action-main">
                            <h2>I'm Ready for your next project</h2>
                            <p>Nam eleifend, turpis ac laoreet tincidunt, arcu purus ultricies nisl, quis molestie nibh lacus et dui. Nunc efficitur turpis lorem, bibendum dictum libero ornare a. Proin quis metus massa. Aliquam erat volutpat. Nullam eu convallis arcu, sit amet pulvinar odio. Nulla facilisi. Nullam ac nibh ac lectus aliquet aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam sed ipsum non tortor posuere rutrum. </p>
                            <div class="button">
                                <a href="#" class="btn"><i class="fa fa-address-book"></i>Hire ME Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section-->
        <!--/ End Call To Action -->
        
        <!-- Start Contact -->
      
        <!--/ End Contact -->
        
        <!-- Start Clients -->
        <!--div id="clients" class="section" data-stellar-background-ratio="0.3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h1 style="color: white"><span>Fait nous </span>confiance<i class="fa fa-pencil"></i></h1>
                            <p><p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="clients-slider">
                          
                            <div class="single-clients">
                                <a href="#" target="_blank"><img src="/designe/user/images/clients-1.png" alt="#"></a>
                            </div>
                            
                            <div class="single-clients active">
                                <a href="#" target="_blank"><img src="/designe/user/images/clients-2.png" alt="#"></a>
                            </div>
                           
                            <div class="single-clients">
                                <a href="#" target="_blank"><img src="/designe/user/images/clients-3.png" alt="#"></a>
                            </div>
                           
                            <div class="single-clients">
                                <a href="#" target="_blank"><img src="/designe/user/images/clients-4.png" alt="#"></a>
                            </div>
                        
                            <div class="single-clients">
                                <a href="#" target="_blank"><img src="/designe/user/images/clients-5.png" alt="#"></a>
                            </div>
                           
                            <div class="single-clients">
                                <a href="#" target="_blank"><img src="/designe/user/images/clients-6.png" alt="#"></a>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div-->
        <!--/ End Clients -->
        
        <!-- Footer Top -->
        <section id="footer-top" class="section">
            <div class="container">
                <div class="row">
                    <!-- Single Widget -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="newslatter">
                            <h2><span>Inscription à la </span>newsletter</h2>
                            <p>Inscrivez-vous pour recevez les dernier mise à jour, dernier blog publiée.</p>
                        </div>
                         <div id="statusSubscribe" style="display: none;color: red"></div>
                        <form class="news-form" action="javascript:void(0);" type="post">
                                {{ csrf_field() }}
                            <input onfocus="enableSubscriber(); " type="email" placeholder="Adresse email" name="email" id="email" required="">
                            <button onclick="checkSubscriber();addSubscriber();" type="submit" id="btnSubmit" class="button primary"><i class="fa fa-paper-plane"></i></button>
                        </form> 
                    </div>
                    <!--/ End Single Widget -->
                </div>
            </div>
        </section>

        @endsection
        @section('footer')
<script type="text/javascript">
        function checkSubscriber(){
            var email = $("#email").val();
            $.ajax({
               type:'post',
               url:'/check-subscriber-email',
               data:{email:email},
               success:function(response){
                if(response == "exist"){

                    $("#statusSubscribe").show();
                     $("#btnSubmit").hide();
                    $("#statusSubscribe").html("<span style='color:red;'>cette Adress email est existe</span>");
                }else{
                    $("#statusSubscribe").show();
                    $()
                    $("#statusSubscribe").html("<font style='color:green;'>Votre Adress email est Ajouter avec succees</font>");
                }
               },
               error:function(response){
              //  alert('error');
               }
            });
        }

        function addSubscriber(){
            var email = $("#email").val();
            $.ajax({
               type:'post',
               url:'/add-subscriber-email',
               data:{email:email},
               success:function(response){
                if(response == "exist"){

                    $("#statusSubscribe").show();
                     $("#btnSubmit").hide();
                    $("#statusSubscribe").html("<span style='color:red;'>cette Adress email est existe</span>");
                }else if(response == "Enregistre"){
                    $("#statusSubscribe").show();
                    
                    $("#statusSubscribe").html("<font style='color:green;'>Votre Adress email est Ajouter avec succees</font>");
                }
               },
               error:function(response){
              //  alert('error');
               }
            });
        }

        function enableSubscriber(){
            $("#btnSubmit").show();
            $("#statusSubscribe").hide();
        }
    </script>
        @endsection
