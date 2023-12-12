<?php
    include "PHP/header.php";
?>

<!DOCTYPE html>
<html lan="'en">
    <head><!-- Basic -->
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Mount_Bee_Home</title>
        <link rel="stylesheet" href="CSS/index.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
        <script src="homepage.js"></script>


        <!-- Start page body part --> 
        
        <div class="bodymain"> 
        <div class="container">
	
            <input type="radio" id="i1" name="images" checked />
            <input type="radio" id="i2" name="images" />
            <input type="radio" id="i3" name="images" />
            <input type="radio" id="i4" name="images" />
            <input type="radio" id="i5" name="images" />	
            
            <div class="slide_img" id="one">			
                    
                <img  src="IMAGES/index/01.jpg" >
                    
            </div>
            
            <div class="slide_img" id="two">
                
                <img  src="IMAGES/index/02.jpg" >
                    
                        
                
            </div>
                    
            <div class="slide_img" id="three">
                <img  src="IMAGES/index/03.jpg" >	
                    

            </div>
        
            <div class="slide_img" id="four">
                <img  src="IMAGES/index/04.jpg" >	
                    
                        
            </div>
        
            <div class="slide_img" id="five">
                <img  src="IMAGES/index/05.jpg" >	
                    
                       
        
            </div>
           
            <div id="nav_slide">
                <label for="i1" class="dots" id="dot1"></label>
                <label for="i2" class="dots" id="dot2"></label>
                <label for="i3" class="dots" id="dot3"></label>
                <label for="i4" class="dots" id="dot4"></label>
                <label for="i5" class="dots" id="dot5"></label>
            </div>
                
        </div>
    </div>
    



    <div class="paragraph">
        <p>Mount Bee is one of the finest five-star Colombo hotels located in-between Galle Face Green, 
            the World Trade Centre and the Dutch Hospital Precinct, we welcome you to The Mount Bee Hotel in Colombo. 
            With easy access to your shopping, 
            entertainment and business needs, we will ensure your stay is perfect and your experiences are complete.</p>
    </div>

<!-- Start QT -->
	<div class="qt-box qt-background">
	    <div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	
	<!-- End QT -->


    <!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>welcome to The Mount Bee Hotel, Come, delight & breathe an air of luxury at the Mount Bee!</h2>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="IMAGES/index/07.jpg">
							<img class="img-fluid" src="IMAGES/index/07.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="IMAGES/index/08.jpg">
							<img class="img-fluid" src="IMAGES/index/08.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="IMAGES/index/09.jpg">
							<img class="img-fluid" src="IMAGES/index/09.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="IMAGES/index/10.jpg">
							<img class="img-fluid" src="IMAGES/index/10.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="IMAGES/index/11.jpg">
							<img class="img-fluid" src="IMAGES/index/11.jpg" alt="Gallery Images">
						</a>
					</div> 
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="IMAGES/index/12.jpg">
							<img class="img-fluid" src="IMAGES/index/12.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->

    <!-- start review -->
    
	            <div class="reviewtitle">
						<h2>"What you think about us"</h2>
						
					</div>
				<div class="reviewcontent">
                        <h5 class="reviewname">Paul Mitchel</strong></h5>
								
                        <p class="reviewname1">"Awesome location,excellent choice of food across a diverse range of cuisine,
                            courteous and friendly staff, strong systems in place, fast check-in and checkout ..
                            all in all a home away from home experience.,"
                        </p>
                    
                    
                        <h5 class="reviewname">Steve Fonsi</strong></h5>
                        
                        <p class="reviewname1">"They offer delicious food, good customer service. 
                            Good surroundings. Front facing the Galle Face green. Located in an urban area in Sri Lanka.
                            Luxury hotel with good food. Perfect location for weddings as well."
                        </p>
                    
                    
                        <h5 class="reviewname">Daniel vebar</strong></h5>
                        
                        <p class="reviewname1">The best hotel I’ve ever been privileged enough to stay at. Gorgeous building, 
                            and it only gets more breathtaking when you walk in. High quality rooms (there was even a tv by the shower), 
                            and high quality service. Also, they are one of few hotels that allow people under 21 to book a reservation.</p>
                    
                
                    </div>

						
					
        <!-- end review -->
<!-- end page body part --> 

	
    </body>
</html>

<?php
    include "PHP/footer.php";
?>