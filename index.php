<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lier's</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
	<link href="css/main.css" rel="stylesheet">
	 <link href="css/responsive.css" rel="stylesheet">
     <!-- Link to Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	 <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    
  </head>
  <body class="homepage">   
    <!-- Header Section Start -->
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <a class="navbar-brand" href="index.html">Lier's.</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                <!-- <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="blog.html">Blog</a></li>  -->
                        <li><a href="contact-us.php">Contact</a></li>                        
                        <li><a href="login.php">login</a></li>   
                        <li><a href="REg.php">REg</a></li>   

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header>
	<!-- Header Section End -->


    <!-- Slider Section Start -->
	<div class="slider">
		<div class="container">
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="images/lawyer-team.png" class="img-responsive" alt=""> 
					   </div>
					   <div class="item">
							<img src="images/lawyer-team.png" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/lawyer-team.png" class="img-responsive" alt=""> 
					   </div> 
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
		</div>
	</div>
    <!-- Slider Section End -->
    
    
    <!-- Features Ssection Start -->
    <section id="feature">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Features</h2>
                <p class="lead">We offer a wide range of legal services tailored to meet the needs of individuals and businesses. Whether you're seeking advice on your legal rights, need representation in court, or require assistance in drafting important legal documents, we are here to help. Our experienced team is dedicated to providing expert legal solutions for every situation.</p>
            </div>
    
            <div class="row">
                <div class="features">
                    <!-- Expert Legal Advice -->
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-balance-scale yellow-icon"></i> <!-- Icon for Legal Advice -->
                            <h2>Expert Legal Advice</h2>
                            <h3>Providing guidance on legal rights and responsibilities.</h3>
                        </div>
                    </div><!--/.col-md-4-->
    
                    <!-- Court Representation -->
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-gavel yellow-icon"></i> <!-- Icon for Court Representation -->
                            <h2>Court Representation</h2>
                            <h3>Advocating for clients in legal proceedings.</h3>
                        </div>
                    </div><!--/.col-md-4-->
    
                    <!-- Document Drafting -->
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-file-signature yellow-icon"></i> <!-- Icon for Document Drafting -->
                            <h2>Document Drafting</h2>
                            <h3>Preparing contracts, wills, and other legal documents.</h3>
                        </div>
                    </div><!--/.col-md-4-->
    
                    <!-- Dispute Resolution -->
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments-dollar yellow-icon"></i> <!-- Icon for Dispute Resolution -->
                            <h2>Dispute Resolution</h2>
                            <h3>Facilitating mediation and arbitration for effective solutions.</h3>
                        </div>
                    </div><!--/.col-md-4-->
    
                    <!-- Compliance Guidance -->
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-shield-alt yellow-icon"></i> <!-- Icon for Compliance Guidance -->
                            <h2>Compliance Guidance</h2>
                            <h3>Helping clients navigate complex legal regulations.</h3>
                        </div>
                    </div><!--/.col-md-4-->
    
                    <!-- Research and Investigation -->
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-search yellow-icon"></i> <!-- Icon for Research and Investigation -->
                            <h2>Research and Investigation</h2>
                            <h3>Conducting thorough legal research to support cases.</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section>
    <!-- Features Ssection End -->
    
            
    <!--  Recent Cases Ssection Start -->        	
    <section id="recent-cases">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Recent Cases</h2>
                <p class="lead">Explore some of the recent cases we have successfully handled for our clients.</p>
            </div>
    
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="case-wrap">
                        <h3><a href="#">Corporate Litigation</a></h3>
                        <p>Successfully represented a client in a high-profile corporate dispute, resulting in a favorable settlement.</p>
                    </div>
                </div>
    
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="case-wrap">
                        <h3><a href="#">Family Law</a></h3>
                        <p>Helped resolve a complex divorce case with equitable division of assets and child custody agreements.</p>
                    </div>
                </div>
    
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="case-wrap">
                        <h3><a href="#">Criminal Defense</a></h3>
                        <p>Defended a client against serious charges, resulting in an acquittal.</p>
                    </div>
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section>     
    <!--  Recent Cases Ssection End -->
              

    <!-- Our Expertise Ssection Start -->
    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    <div class="expertise">
                        <h2>Our Expertise</h2>
                        <p>We specialize in delivering exceptional legal services across a wide range of practice areas to protect your rights and interests.</p>
    
                        <ul class="list-group">
                            <li class="list-group-item">
                                <strong>Corporate Law:</strong> Comprehensive legal guidance for businesses.
                            </li>
                            <li class="list-group-item">
                                <strong>Family Law:</strong> Compassionate representation in divorce, custody, and more.
                            </li>
                            <li class="list-group-item">
                                <strong>Criminal Defense:</strong> Strong advocacy to safeguard your freedom.
                            </li>
                            <li class="list-group-item">
                                <strong>Real Estate Law:</strong> Expertise in transactions and disputes.
                            </li>
                            <li class="list-group-item">
                                <strong>Estate Planning:</strong> Plan for the future with wills, trusts, and more.
                            </li>
                        </ul>
                    </div>
                </div><!--/.col-sm-6-->
    
                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <h2>Why Choose Us?</h2>
                        <div class="panel-group" id="accordion1">
                            <div class="panel panel-default">
                                <div class="panel-heading active">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                            Experienced Professionals
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseOne1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        Our team has decades of combined experience in delivering outstanding results for our clients.
                                    </div>
                                </div>
                            </div>
    
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                            Client-Centric Approach
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        We prioritize understanding your needs and crafting tailored legal solutions.
                                    </div>
                                </div>
                            </div>
    
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                            Proven Track Record
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseThree1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Our history of successful cases speaks to our dedication and skill in the legal field.
                                    </div>
                                </div>
                            </div>
    
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                            Transparent Communication
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseFour1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        We keep you informed every step of the way, ensuring clarity and confidence in our process.
                                    </div>
                                </div>
                            </div>
                        </div><!--/#accordion1-->
                    </div>
                </div><!--/.col-sm-6-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section> 
    <!-- Our Expertise Ssection End -->

    <!-- Bottom Section Start -->
    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>About Us</h3>
                        <ul>
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Meet Our Team</a></li>
                            <li><a href="#">Our Mission</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
    
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Legal Services</h3>
                        <ul>
                            <li><a href="#">Family Law</a></li>
                            <li><a href="#">Corporate Law</a></li>
                            <li><a href="#">Criminal Defense</a></li>
                            <li><a href="#">Real Estate Law</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
    
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Resources</h3>
                        <ul>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Case Studies</a></li>
                            <li><a href="#">Legal Updates</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
    
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Contact Us</h3>
                        <ul>
                            <li><a href="#">Request a Consultation</a></li>
                            <li><a href="#">Find Our Office</a></li>
                            <li><a href="#">Email Us</a></li>
                            <li><a href="#">Call Us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section>
    <!-- BottomSection End -->


	<!-- Top Bar Start -->
	<div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li> <!-- Email -->
                            <li><a href="#"><i class="fa fa-phone"></i></a></li>   <!-- Phone -->
                            <li><a href="#"><i class="fa fa-map-marker"></i></a></li> <!-- Location -->
                            <li><a href="#"><i class="fa fa-balance-scale"></i></a></li> <!-- Legal Icon -->
                            <li><a href="#"><i class="fa fa-file-text"></i></a></li> <!-- Documentation -->
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div>
    <!-- Top Bar Ended -->
    
	

    <!-- Footer Section Start -->
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2024 <a target="_blank" href="#" title="Law Firm Website">Lier.s</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Legal Team</a></li>
                        <li><a href="#">Contact</a></li>
                    
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
	<!-- Footer Section End-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>   
    <script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
  </body>
</html>