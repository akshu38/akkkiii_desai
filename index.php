<?php 
   include "connection.php";
if(isset($_POST['submit']))
{
   $name =  $_POST['contactName'];
   $email =  $_POST['contactEmail'];
   $subject = $_POST['contactSubject'];
   $message = $_POST['contactMessage'];

   $q1="INSERT INTO message (name,email,subject,message) VALUES ('".$name."','".$email."','".$subject."','".$message."')"; 
   $res1=mysqli_query($con,$q1);
   header('Location:index.php#contact');
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

   <meta charset="utf-8">
	<title>AKSHAY DESAI (Web Developer)</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
	<script src="js/modernizr.js"></script>
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
	         <li><a class="smoothscroll" href="#resume">Education And Skills</a></li>
            <li><a class="smoothscroll" href="#portfolio">Works</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">I'm Akshay Desai<hr></h1>
            <h3>I'm a <span>web-developer</span> creating awesome websites  and
            effective visual identities for companies of all sizes around the globe. Let's <a class="smoothscroll" href="#about">start scrolling</a>
            and learn more <a class="smoothscroll" href="#about">about me</a>.</h3>
            <hr />
            <ul class="social">
               <li><a href="#"><i class="fa fa-github"></i></a></li>
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="https://www.linkedin.com/in/akshay-desai-7179721a3"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="https://www.instagram.com/akshu_alex_38/"><i class="fa fa-instagram"></i></a></li>
            </ul>
            
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">

            <img src="images/profilepic.jpg" alt="" />

         </div>

         <div class="nine columns main-col">

            <h2>About Me</h2>

            <p>Hi, I`m  Akshay.  I`m  a  front-end  and  back-end  web  designer  and  developer. skilled  in  HTML, CSS,
               PHP,  JAVASCRIPT and MYSQL DATABASE . I  create  clean,  professional  and  functional  websites.
            </p><br>

            <div class="row">

               <div class="columns contact-details">

                  <h2>Contact Details</h2>
                  <p class="address">
						   <span>Akshay Desai</span><br>
						   <span>Chikuvadi , Nana Varachha<br>
						         Surat, India
                     </span><br>
						   <span> +91 7567952738 </span><br>
                     <span>akshaydesai0687@gmail.com</span>
					   </p>

               </div>
               <br><br>
               <div class="columns download">
                  <p>
                     <a href="#" class="button"><i class="fa fa-download"></i>DOWNLOAD C V </a>
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">

      <!-- Education
      ----------------------------------------------- -->
      <div class="row education">

         <div class="three columns header-col">
            <h1><span>Education</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

                  <h3>University of Life</h3>
                  <p class="info">Bachelor Of Computer Application(B.C.A.) <span>&bull;</span> <em class="date">April 2020</em><br>
                  <em class="date">Veer Narmad South Gujarat University</em></p>

               </div>

            </div> <!-- item end -->
         </br>
            <div class="row item">

               <div class="twelve columns">

                  <h3>School of Cool Designers</h3>
                  <p class="info">12th In Ashadeep Vidhayalay-3 <span>&bull;</span> <em class="date">March 2017</em></p>
               </div>

            </div> <!-- item end -->

         </div> <!-- main-col end -->

      </div> <!-- End Education -->


      <!-- Skills
      ----------------------------------------------- -->
      <div class="row skill">

         <div class="three columns header-col">
            <h1><span>Skills</span></h1>
         </div>

         <div class="nine columns main-col">
				<div class="bars">
				   <ul class="skills">
                  <li><span class="bar-expand css"></span><em>HTML</em></li>
                  <li><span class="bar-expand html5"></span><em>PHP</em></li>
					   <li><span class="bar-expand photoshop"></span><em>CSS</em></li>
                  <li><span class="bar-expand jquery"></span><em>javascript</em></li>
                  <li><span class="bar-expand html5"></span><em>MYSQL DATABASE</em></li>
                  <li><span class="bar-expand jquery"></span><em>PYTHON</em></li>
                  <li><span class="bar-expand jquery"></span><em>FLUTTER</em></li>
					</ul>
				</div><!-- end skill-bars -->
            
			</div> <!-- main-col end -->
      </div> <!-- End skills -->
   </section> <!-- Resume Section End-->


   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">
            <h1>6 month in serialcom infotech at php WEB DEVELOPER <br> 1-1-2021 TO 1-8-2021</h1>
            <!-- <h1>Check Out Some of My Works.</h1> -->

            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

          	   <!-- <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-01" title="">
                        <img alt="" src="images/portfolio/coffee.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5><br><br>HOTEL MANAGEMENT System</h5><br>
                              <p>Web development</p>
          					   </div>
                        </div> -->
                        <!-- <div class="link-icon"><i class="icon-plus"></i></div> -->
                     <!-- </a>

                  </div>
          		</div> -->

               <!-- <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-02" title="">
                        <img alt="" src="images/portfolio/console.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5><br><br>Data-Entry Software</h5><br>
                              <p>Web Development</p>
          					   </div>
                        </div> -->
                        <!-- <div class="link-icon"><i class="icon-plus"></i></div> -->
                     <!-- </a> -->

                  <!-- </div>
          		</div> -->

              
            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->


         <!-- Modal Popup
	      --------------------------------------------------------------- -->

         <div id="modal-01" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-coffee.jpg" alt="" />

		      <div class="description-box">
			      <h4>HOTEL MANAGEMENT SYSTEM</h4>
			      <p></p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Web design, Web development</span>
		      </div>

            <div class="link-box">
               <a href="hotel.php" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div>

          <div id="modal-02" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/modals/m-console.jpg" alt="" />

		      <div class="description-box">
			      <h4>SCI DATAENTRY SYSTEM</h4>
			      <p></p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Web Development</span>
		      </div>

            <div class="link-box">
               <a href="sci.php" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div>
      </div> <!-- row End -->

   </section> <!-- Portfolio Section End-->

   <!-- Contact Section
   ================================================== -->
   <section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>

            <div class="ten columns">

                  <p class="lead">PHP Web Developers are responsible for creating websites and applications for their clients. 
                  Typical example resumes for this job showcase duties like consulting with clients, writing and testing code, 
                  designing website elements, updating applications based on customer feedback, 
                  and overseeing project management.
                  </p>

            </div>

         </div>

         <div class="row">
         <div class="two columns"></div>
            <div class="eight columns">
               <div class="widget widget_contact">

                  <h4>Contact Me</h4>
                  <p class="address">
                     Akshay  R.  Desai  (Web Developer)<br>
                     Chikuvadi,  Nana Varachha,  Surat,  India<br>
                     <span>+91  7567952738</span><br>
                     <span>akshaydesai0687@gmail.com</span>
                  </p>

               </div>

               <!-- form -->
               <!-- <form action="" method="post" id="contactForm" name="contactForm">
					<fieldset> -->

                  <!-- <div>
						   <label for="contactName">Name <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactName" name="contactName" required>
                  </div> -->

                  <!-- <div>
						   <label for="contactEmail">Email <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactEmail" name="contactEmail" required>
                  </div> -->

                  <!-- <div>
						   <label for="contactSubject">Subject</label>
						   <input type="text" value="" size="35" id="contactSubject" name="contactSubject" required>
                  </div> -->

                  <!-- <div>
                     <label for="contactMessage">Message <span class="required">*</span></label>
                     <textarea cols="40" rows="4" id="contactMessage" name="contactMessage" required></textarea>
                  </div> -->

                  <!-- <div style="padding-left: 165px;">
                     <input type="submit"  class="submit" name="submit" style="background-color: #0F0F0F;">
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div> -->

					<!-- </fieldset>
				   </form> Form End -->

               <!-- contact-warning -->
               <!-- <div id="message-warning"> Error boy</div> -->
               <!-- contact-success -->
				   <!-- <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
				   </div> -->

            </div>


            <aside class="two columns footer-widgets">

               <div class="widget widget_tweets">

		         </div>

            </aside>

      </div>

   </section> <!-- Contact Section End-->


   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
               <li><a href="#"><i class="fa fa-github"></i></a></li>
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="https://www.linkedin.com/in/akshay-desai-7179721a3"><i class="fa fa-linkedin"></i></a></li>
               <li><a href=""><i class="fa fa-instagram"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>&copy; Copyright 2021</li>
               <li>Design by <a href="https://www.linkedin.com/in/akshay-desai-7179721a3">AKSHAY DESAI</a></li>   
            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>

</body>

</html>