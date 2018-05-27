<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<html>
	<head>
		<!-- Insert code for Title Icon and other descriptions for the website -->
		<title>SHC A/V Service</title>
		<!-- Site Description -->
		<meta name="Description" content="An automated reservation syster for the Audio/Visual Services rendered by the Sacred Heart College of Lucena, Inc. developed by Richard Alphege A. Ravalo, RL" charset="UTF-8">
		<!-- Responsive site code -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
		<!-- Site Icon here -->
		<link rel="icon" href="images/262_files.ico" type="image/x-icon">
		<!-- CSS code here -->
		<link rel="stylesheet" href="styles/main.css">
		<link rel="stylesheet" href="styles/modal.css">
		<!-- JavaScript code here -->
	</head>
	<!-- Body Section Starts Here -->
	<body background="images/bgimage_1.png" id="bodybg" style="margin-top: 35px;">
		<!-- Reservation Pop-Up -->			<div id="id01" class="modal">
				<form class="modal-content animate" method="post" action="pages/add.php">
					<div class="container">
						<label><b>Date of Reservation:</b></label>
						<input name="res_date" type="date" required autofocus style="font-weight: bold; font-size: 16px; width: 150px">
						<span class="selection">
							<label><b>Viewing Room:</b></label>
							<select name="viewing_room" id="selector">
								<option> - - Select Viewing Room - - </option>
								<option value="AVR - VR 1">AVR - Viewing Room 1</option>
								<option value="AVR - VR 2">AVR - Viewing Room 2</option>
								<option value="AVR - VR 3">AvR - Viewing Room 3</option>
								<option value="AVR - VR 4">AVR - Viewing Room 4</option>
								<option value="AVR - VR 5">AVR - Viewing Room 5</option>
								<option value="AVR - VR 6">AVR - Viewing Room 6</option>
								<option value="IBED - VR 1">IBED - Viewing Room 1</option>
								<option value="IBED - VR 2">IBED - Viewing Room 2</option>
								<option value="IBED - VR 3">IBED - Viewing Room 3</option>
							</select>
						</span>
						<fieldset>
							<legend>Reservation Info:</legend>
							<span id="name">
								<label><b>Name:</b></label>
								<input name="namer" type="text" placeholder="Enter Name" id="namer"required>
								<label><b>Teacher/Professor:</b></label>
								<input type="text" placeholder="Teacher/Professor's Name" name="teacher" required>
							</span>
						<br><br>
							<span class="resinfo"">
								<label style="font-size: 18px"><b>Date:</b></label>
								<input name="date_start" type="date" required style="margin-right: 10px; width: 120px"> to <input type="date" name="date_end" required style="margin-left: 10px">
							</span>

							<span class="resinfo">
								<label style="font-size: 18px"><b>Time:</b></label>
								<input name="time_start" type="time" required style="margin-right: 10px"> to <input type="time" name="time_end" required style="margin-left: 10px">
							</span>
						<br><br>
						<hr style="width: 95%; height: 2">
							<div id="modal-bottom">
								<label><b>Equipment Needed:</b></label><br><br>
									<span class="equips_1">
										<input type="checkbox" name="mic" value="Microphone">Microphone <br>
										<input type="checkbox" name="dvd" value="DVD Player">DVD Player <br>
										<input type="checkbox" name="globe" value="Globes">Globes
									</span>

									<span class="equips_2">
										<input type="checkbox" name="karaoke" value="Karaoke">Karaoke <br>
										<input type="checkbox" name="cd" value="CD Player">CD Player <br>
										<input type="checkbox" name="maps" value="maps">Maps
									</span>

									<span class="equips_3">
										<input type="checkbox" name="proj" value="Projector">Projector <br>
										<input type="checkbox" name="opaque" value="Opaque Projector">Opaque Projector <br>
										<input type="checkbox" name="charts" value="Charts">Charts
									</span>

									<span class="equips_4">
										<input type="checkbox" name="comp" value="Computer">Computer <br>
										<input type="checkbox" name="cass" value="Cassette Player">Cassette Player <br>
										<input type="checkbox" name="model" value="Models">Models
									</span>
							</div>
							<br>
							<label><b>Remarks:</b></label> <br>
							<textarea id="notes" cols="115" rows="3" name="remarks" placeholder="Purpose of Reservation/Number of Students/Other Concerns"></textarea>
						</fieldset>
					</div>

					<div class="container" style="background-color: #f1f1f1">
						<button class="btn" type="submit">Save</button><button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn">Cancel</button>
					</div>
				</form>
			</div>
			<script>
				var modal = document.getElementById('id01');
				window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = "none";
					}
				}
			</script>
		</div>

		<!-- Navigation List -->
		<nav class="nav-list">
			<div class="nav-page">
				<ul>
					<li id="active">
						<a href="index.php">Home</a>
					</li>
					<li class="dropdown">
						<a href="avr_viewroom_1.php" class="dropbtn">Reservations</a>
							<!--<div class="dropdown-content">
								<p>Audio Visual Room:</p>
									<a href="pages/avr_viewroom_1.html">Viewing Room 1</a>
									<a href="pages/avr_viewroom_2.html">Viewing Room 2</a>
									<a href="pages/avr_viewroom_3.html">Viewing Room 3</a>
									<a href="pages/avr_viewroom_4.html">Viewing Room 4</a>
									<a href="pages/avr_viewroom_5.html">Viewing Room 5</a>
									<a href="pages/avr_viewroom_6.html">Viewing Room 6</a>
								<p>Integrated Basic Education Department:</p>
									<a href="pages/ibed_viewroom_1.html">Viewing Room 1</a>
									<a href="pages/ibed_viewroom_2.html">Viewing Room 2</a>
									<a href="pages/ibed_viewroom_3.html">Viewing Room 3</a>
							</div>-->

					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="faqs.php">FAQs</a>
					</li>
					<li>
						<a>|| &nbsp; &nbsp; Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to our site.</a>
					</li>
					<li>
						<a style="background-color: red;" href="goodbye.php"> Log Out</a>
					</li>
				</ul>
				<button onclick="document.getElementById('id01').style.display='block'" id="resbtn">Reserve</button>
			</div>
		</nav>
		
		<!-- Slideshow container -->
		<div class="slideshow-container">
			<!-- Full-width images with number and caption text -->
			<div class="mySlides fade">
				<img src="images/slide/img01.JPG" style="width:100%;">
				<div class="text">Viewing Room 1</div>
			</div>
			<div class="mySlides fade">
				<img src="images/slide/img02.JPG" style="width:100%;">
				<div class="text">Viewing Room 2</div>
			</div>
			<div class="mySlides fade">
				<img src="images/slide/img03.JPG" style="width:100%;">
				<div class="text">Viewing Room 3</div>
			</div>
			<div class="mySlides fade">
				<img src="images/slide/img04.JPG" style="width:100%;">
				<div class="text">Viewing Room 4</div>
			</div>
			<div class="mySlides fade">
				<img src="images/slide/img05.JPG" style="width:100%;">
				<div class="text">Viewing Room 5</div>
			</div>
			<div class="mySlides fade">
				<img src="images/slide/img06.JPG" style="width:100%;">
				<div class="text">Viewing Room 6</div>
			</div>
			
			<div class="mySlides fade">
				<img src="images/slide/img07.JPG" style="width:100%;">
				<div class="text">Viewing Room 7</div>
			</div>
		</div>
	<br>
		<!-- The dots/circles -->
		<div style="text-align:center;">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
			<span class="dot" onclick="currentSlide(5)"></span>
			<span class="dot" onclick="currentSlide(6)"></span>
			<span class="dot" onclick="currentSlide(7)"></span>
		</div>
		<!-- Javascript for Image Slider -->
		<script src="scripts/main.js"></script>

		<!-- Footer -->
		<footer style="display: none;">
			<big>&copy; Richard Alphege A. Ravalo, RL</big> | IBED - Junior Librarian | Sacred Heart College of Lucena, Inc. |
			(042) 710 3888 | (+63) 943 282 0995 | raravalo@up.edu.ph
		</footer>	
		<!-- Live Reload Script -->
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	<!-- Body Section Ends Here -->
	</body>
</html>