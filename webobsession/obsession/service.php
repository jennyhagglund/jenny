<?php


require_once "queryDb.php";


$search = $_GET["name"];


$data = getCustomers();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0">
		<link type="text/css" rel="stylesheet" href="mobile.css" media="(max-width: 451px)"/>
		<link type="text/css" rel="stylesheet" href="desktop.css" media="(min-width: 452px)"/>
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans+Condensed" />

									<title>Obsession</title>
	</head>
	<body>
	     
	    <div id="background">
		    <div id="trans"></div>
	    
	        <div id="header">
	    	
	    	    <div id="headerspace"> </div>
	    	    <div id="headerspace"> </div>
	    	    <div id="headerspace"> </div>
	    	    <div id="headerspace"> </div>
	    	    <div id="headerspace"> </div>
	    	    
	    	  	<div id="logo"><a href="book.php" class="hoverbooking">make a booking</a></div>	    	
	    	   <!--<div id="book"><a href="book.html">Book an Appointment</a></div>-->
	            <div id="nav"><a href="index.html">Home</a></div>
	            <div id="nav"><a href="service.php"><span style="text-decoration: underline; color: orange">Services</span></a></div>
				<div id="nav"><a href="gallery.html">Gallery</a></div>
				<div id="nav"><a href="event.php">Events</a></div>
	            <div id="nav"><a href="about.php">About</a></div>
	            <div id="nav"><a href="contact.php">Contact</a></div>
	            
	            <div id="icontop"><a href="contact.php"><img src="socialicons/phoneW.png" width="28"/></a></div>
	            <div id="headerspace"></div>
            </div> <!-- header -->
	
            <div class="servicebody">
                
                <div class="container1">
	 				<h1>Services</h1><br/>
	 				<div class="about1">
	 	 
	 	            <table>
                        <thead>
                            <tr></tr>
                            <tr>
                                <th>STYLE CUTS</th>
                                <th></th>
                                <th>COLOUR</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Stylist</td>
                                <td>$55</td> 
                                <td>Tint</td> 
                                <td>$55</td> 
                            </tr>
                            <tr>
                                <td>Senior Stylist</td>
                                <td>$65</td> 
                                <td>Semi-Permanent</td> 
                                <td>$55</td> 
                            </tr>
                            <tr>
                                <td>Director</td>
                                <td>$75</td> 
                                <td>Tints (ends/roots)</td> 
                                <td>$60</td> 
                            </tr>
                            <tr>
                                <td>Child (under13)</td>
                                <td>$25</td> 
                                <td>Parting/Masking</td> 
                                <td>$30</td> 
                            </tr>
                                <th>BLOW DRYS</th>
                                <th></th>
                                <th>HIGHLIGHTS</th>
                                <th></th>
                            <tr>
                                <td>Short</td>
                                <td>$24</td> 
                                <td>T-Section</td> 
                                <td>$70</td> 
                            </tr>
                            <tr>
                                <td>Medium</td>
                                <td>$26</td> 
                                <td>Half-Head</td> 
                                <td>$90</td> 
                            </tr>
                            <tr>
                                <td>Long</td>
                                <td>$29</td> 
                                <td>Full-Head</td> 
                                <td>$130</td> 
                            </tr>
                            <tr>
                                <td>Big 'n' Bouncy</td>
                                <td>$32</td> 
                                <td>Balayage</td> 
                                <td>$75</td> 
                            </tr>
                            <tr>
                                <td>Up-Style</td>
                                <td>from $45</td> 
                                <td>Colour Correction</td> 
                                <td>p.o.a.</td> 
                            </tr>
                        </tbody>
                    </table>
                  <!-- tablealign -->
	  	 			</div>
				</div>	  	<!-- aboutcontainer -->
	 	     
            </div>  <!-- servicebody -->
	  	
	        <div id="footer">
	    	
	            <div id="address"><h4>112 Edward  Street, Brisbane, CBD</h4></div>
	       
	            <div id="icon">
	               <img src="socialicons/fbW.png" width="25"/>
	               <img src="socialicons/insW.png" width="25"/>
	               <img src="socialicons/pinW.png" width="25"/>
	            </div>
	       
                <div id="copyright"><h4> &copy; 2016 Jenny Maria Hagglund</h4></div>
            </div> <!-- footer -->
	    </div> <!-- background -->
	
	    <div id="hiddenfooter">
		
		    <div class="row">
		    	<div class="col-2"></div>

			    <div class="col-4">
			        <h5>ABOUT</h5>
				    <p>Obsession is an award winning best hairdresser and hair salon located in Brisbane CBD. We offer luxury hairstyles, cuts and colours.</p>
				    <p>At Obsession hairdressing we strive to be fashion, forward in our approach to hair cutting, styling and colouring. We present to our clients exceptional personalised service with a focus on ensuring our clients leave the salon with fresh, beautiful and healthy hair.</p>
			    </div>
			
                <div class="col-2">
				    <h5>HOURS</h5>
				    <ul>
					    <li>Mon to Wed - 9am to 6pm</li>
					    <li>Thursday - 9am to 7.30pm</li>
					    <li>Friday - 9am to 8.30pm</li>
					    <li>Saturday - 9am to 5.30pm</li>
					    <li>Sunday <span style="font-weight:bold">Closed</span></li>
				    </ul>
			    </div>
			
            <div class="col-2">
				<h5>CONTACT</h5>
				<ul>
				    <li>HEAD OFFICE</li>
				    <li>112 EDWARD STREET,</li>
				    <li>BRISBANE, CBD, 4000</li>
				    <br/>
				    <li><span style="font-weight:bold">T 02 9380 2299</span></li>
				    <li><span style="font-weight:bold">F 02 9380 2833</span></li>
				    <li><span style="font-weight:bold">E info@obsession.com</span></li>
		        </ul>
			</div>
			
		    <div class="col-2"> </div>
			</div>  <!-- row -->
		</div>  <!-- hiddenfooter -->
	</body>
</html>