<?php 
	require 'scripts/mysql_database.php';
	$rooms = $database->getRoomData();
//	var_dump($rooms);
	if(isset($_POST['fname'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$room = $_POST['room_type'];
		$sql = "INSERT INTO custInfo(`firstname`,`lastname`,`email`,`phone`,`roomid`) VALUES ('$fname','$lname','$email','$phone','$room')";
		$database->query($sql);
		$flash_data = "Put here some message to show the reservation was successful";
	}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="master.css">
<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="js/jquery.infinitecarousel3.min.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.quovolver.js"></script>

 </head>
<body>
	<div class="main_wrapper1">
			<div id = "header"></div>
		<div id="Main_Nav">
			<div class="align">
				
				<ul class="nav">
				<li> <a href="#"> <span class ="toptext"> home</span> <span class ="bottomtext"> home</span></a></li>
				<li> <a href="#"> <span class ="toptext"> accomadations </span> <span class ="bottomtext"> View our rooms</span></a></li>
				<li> <a href="#"> <span class ="toptext"> Reservations </span> <span class ="bottomtext"> Book a room now</span></a></li>
				<li> <a href="#"> <span class ="toptext"> Gallery </span> <span class ="bottomtext"> take a look at our rooms</span></a></li>
				<li> <a href="#"> <span class ="toptext"> Contact Us</span> <span class ="bottomtext"> gives us a Call</span></a></li>
			</ul>

			</div>
			
		</div>

	</div>
	<div class="main_wrapper">
	
		<div class="slider-wrapper theme-default">
      <div id="slider" class="nivoSlider">
          <a href="#"><img src="images/8.jpg" alt=""  /></a>
          <img src="images/6.jpg" alt=""  />
          <img src="images/3.jpg" alt=""  />
          <img src="images/4.jpg" alt=""  />
          <img src="images/5.jpg" alt=""  />
          <img src="images/6.jpg" alt=""  />
          <img src="images/2.jpg" alt=""  />
          <img src="images/1.jpg" alt=""  />
          
        </div>
            
</div>
		<div id="mid_menu"><?php if(isset($flash_data)) echo $flash_data; ?></div>
		<div id="mid_content">
			<div id= "content_left">
				<h1> A Luxury guest house in Kampala,Uganda. </h1>
				<h2> Welcome to WHI Guest Services </h2>
				<p>  Discover a secret gem in the heart of Kampala. <br />
					<div>
						<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at odio ut felis euismod fringilla. Nunc dictum dolor elit, vitae tempor felis. Fusce blandit mattis sem nec tempor. Sed at convallis elit. Fusce congue, sem nec pretium tristique, velit elit auctor tellus, id pulvinar enim lacus eget sem. Mauris et nisl augue, sed porttitor orci. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
</p>

<p>
Maecenas purus nisl, ultrices et vulputate id, pretium eu velit. In in nibh quis elit pretium semper sed sed nibh. Fusce ac aliquet erat. Suspendisse eu eros sem. Nullam malesuada tempor ante ut tempor. Aliquam in ipsum augue. Nunc congue lectus at ligula sodales vehicula. Integer at augue turpis, nec dapibus tortor. Pellentesque vestibulum neque id felis dictum et faucibus est facilisis. Integer tempus, dolor id porttitor convallis, dolor justo dignissim purus, in eleifend leo leo eget est.  <br />
</p>

<p> 
Morbi adipiscing turpis in ligula consequat venenatis ac et augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris scelerisque libero nec sem facilisis et placerat lorem ultricies. Duis rhoncus sollicitudin nisi, non venenatis nisi aliquam vitae. Maecenas adipiscing aliquet malesuada. Etiam nisi tortor, viverra quis laoreet sit amet, iaculis nec justo. Nunc imperdiet neque ut elit feugiat eget eleifend ligula posuere. Etiam varius faucibus nisi nec condimentum. Duis bibendum tortor nec massa congue porttitor.
</p>

Stay relaxed, stay productive, and stay in the heart of it all at our Bed and Breakfast.</p>

					</div>
					<div class="mini_footer">
						<ul>
							<li> <a href="#"> <img src="images/about.png"> </a> </li>
							<li> <a href="#"> <img src="images/contact.png"> </a> </li>
							<li> <a href="#"> <img src="images/gallery.png"> </a> </li>
						</ul>
					</div>

			</div>
			<div id= "content_right">
				<div id="reservation">
					<h4 class="header"> Make a reservation today </h4>
     <form action="index.php" method="post" enctype="multipart/form-data" id="quote"> 
             <p>
               <select name="room_type"> 
                 <option>Type of Room</option>
                 <?php foreach($rooms as $room){  ?>
                 <option value="<?php echo $room['id'] ?>"><?php echo $room['name'] ?></option>
                 <?php } ?>
               </select>  
               <label for="fname" >First Name</label> 
               <input id="fname" name="fname" type="text" />
               <label for="lname" >Last Name</label> 
               <input id="lname" name="lname" type="text" /> 
               <label for="Email_Address"> Email Address</label> 
               <input id="Email_Address" name="email" type="text" />                
               <label for="phone"> Phone Number</label> 
               <input id="phone" name="phone" type="text" />              
             </p>
             <p>
               <input id="submit_btn" class="button" name="submit" type="submit" value="Send" />
             </p>
             <p>&nbsp;</p>
     </form>

				</div>
				<div id="gallery">
					<h3> Gallery </h3>
					<div class="gallery">
						<a href="#"> <img src="images/gallery_bg1.png"></a>	
					</div>

					<div class="gallery2">
						<h4> women hospital international </h4>
						<a href="#"> <img src="images/logo-WHI.png"></a>	

					</div>
					
				</div>
			</div>
		</div>
	
	</div>
					<div id="footer"></div>
<script type="text/javascript" src="nivo-slider/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="nivo-slider/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
			effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
	        slices: 15, // For slice animations
	        boxCols: 8, // For box animations
	        boxRows: 4, // For box animations
	        animSpeed: 500, // Slide transition speed
	        pauseTime: 8000, // How long each slide will show
	        startSlide: 0, // Set starting Slide (0 index)
	        directionNav: true, // Next & Prev navigation
	        controlNav: false, // 1,2,3... navigation
	        controlNavThumbs: false, // Use thumbnails for Control Nav
	        pauseOnHover: true, // Stop animation while hovering
	        manualAdvance: false, // Force manual transitions
	        prevText: 'Prev', // Prev directionNav text
	        nextText: 'Next', // Next directionNav text
	        randomStart: false, // Start on a random slide
	        beforeChange: function(){}, // Triggers before a slide transition
	        afterChange: function(){}, // Triggers after a slide transition
	        slideshowEnd: function(){}, // Triggers after all slides have been shown
	        lastSlide: function(){}, // Triggers when last slide is shown
	        afterLoad: function(){} // Triggers when slider has loaded

        });
		
    });
    </script> 
    
    <script type="text/javascript">
	$(document).ready(function() {
		
		$('blockquote').quovolver();
		
	});
	</script>
</body>
</html>