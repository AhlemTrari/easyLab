@extends('layouts.frontOffice')
		  <!-- start banner Area -->

	@section('banner')
	<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Nos équipes				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Accueil   </a>  <span class="fas fa-angle-right"></span>  <a href="about.html">   equipes</a></p>
						</div>	
					</div>
				</div>
		</section>
	@endsection

	@section('content')
			<section class="course-details-area ">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 left-contents">
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Présentation</div>
	                                <div class="jq-tab-title" data-tab="2">Equipes de recherche</div>
	                                
	                            </div>
	                            <div class="jq-tab-content-wrapper">
	                                <div class="jq-tab-content active" data-tab="1">
	                                    
	                                    	<div class="container">


	                                    	<div class="row">
	                                    			<p>
	                                    		Le LRI, Laboratoire Mixte de Recherche de l'Université de Tlemcen, est un laboratoire de recherche en informatique se consacrant à la modélisation et la résolution de problèmes fondamentaux motivés par les applications, ainsi qu'à la mise en oeuvre et la validation des solutions au travers de partenariats académiques comme le département de Mathématique et de Physique Electronique.
												Les axes fédérateurs sont :
												Sûreté, sécurité, fiabilité ;
												Science des données, intelligence et optimisation ; 
												Systèmes communicants.
												Le LRI répond à ces challenges à différents niveaux thématiques au sein des 3 départements.
												 
									
											</div>
											<div class="row col-md-12">
												<div class="feature-img">
												<img class="img-fluid" src="lab.jpg" alt="">
												</div>
											</div>
	                                    	
	                                    
	                                    
	                                   
                     				 </div>
	                                </div>
	                                <div class="jq-tab-content" data-tab="2">
	                                   <section class="upcoming-event-area section-gap">
											<div class="container">					
												<div class="row">
													<div class="col-12 col-md-2 thumb">
													<img class="img-fluid" src="s.png" alt="">
													</div>
													<div class="detials col-12 col-md-4">
													
													<a href="detailEquipes.html"><h2>SIDK</h2></a>
													<p><h4>Système d'information et de connaissance</h4></p>
													</div>
													<div class="col-12 col-md-2 thumb">
													<img class="img-fluid" src="c.jpg" alt="">
													</div>
													<div class="detials col-12 col-md-4">
													
													<a href="detailEquipes.html"><h2>ILS</h2></a>
													<p><h4>Ingénierie logicielle sécurisée</h4></p>
													</div>
												</div>
												<div class="row"><p></p></div>
												
												<div class="row">
													<div class="col-12 col-md-2 thumb">
													<img class="img-fluid" src="{{asset('RSD.jpeg')}}">
													</div>
													<div class="detials col-12 col-md-4">
													<p></p>
													<a href="detailEquipes.html"><h2>RSDS</h2></a>
													<p><h4>Réseau, service distribués et systèmes</h4></p>
													</div>
													<div class="col-12 col-md-2 thumb">
													<img class="img-fluid" src="{{asset('IA.jpg')}}" alt="">
													</div>
													<div class="detials col-12 col-md-4">
													
													<a href="detailEquipes.html"><h2>IA</h2></a>
													<p><h4>Intelligence artificielle</h4></p>
													</div>
																												
												</div>
												<div class="row"><p></p></div>

												
											</div>
										
										
										
	                                </div>

	                            </div>
	                        </div>
						</div>
						
					</div>
				</div>	
			</section>
			@endsection
					