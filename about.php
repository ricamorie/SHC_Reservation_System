<?php
session_start();
 
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<html>
	<head>
		<!-- Insert code for Title Icon and other descriptions for the website -->
		<title>About</title>
		<!-- Site Description -->
		<meta name="Description" content="An automated reservation syster for the Audio/Visual Services rendered by the Sacred Heart College of Lucena, Inc. developed by Richard Alphege A. Ravalo, RL" charset="UTF-8">
		<!-- Responsive site code -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
		<!-- Site Icon here -->
		<link rel="icon" href="images/262_files.ico" type="image/x-icon">
		<!-- CSS code here -->
		<link rel="stylesheet" href="styles/main.css">
		<link rel="stylesheet" href="styles/modal.css">
		<link rel="stylesheet" href="styles/style_about.css">
		<!-- JavaScript code here -->
	</head>
		<!-- Body Section Starts Here -->
	<body background="images/bgimage_1.png" id="bodybg">
		<!-- Reservation Pop-Up -->
		<div class="popup_res">
			<div id="id01" class="modal">
				<form class="modal-content animate" method="post" action="add.php">
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
					<li>
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
					<li id="active">
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

		<h1><b><u>About the site</u></b></h1>
		<div class="body-content">
			<span class="content">
				<blockquote> Audio-Visual Services has always been one of the in-demand functions of a library. Having various function room/viewing rooms in the institution will upgrade the processes and the overall function of the library. This website will bridge the gap in the reservation function of the viewing rooms of Sacred Heart College from the two divisions of the library department which are: Audio-Visual Room & the Integrated Basic Education Department.</blockquote>
			</span>

			<hr style="height: 2px; width: 95%; border-radius: 5px 5px 5px 5px; border: 1px solid black; background-color: black">
			
			<h2>About the Creator:</h2>
				<img src="images/creator_img.JPG" alt="Smile kahit mainit! :D">
			<span class="content_1">
				<article> <br>
					<b>Name:</b> Richard Alphege A. Ravalo, RL <br>
					<b>Age:</b> 23 years old <br>
					<b>Birthdate:</b> April 19, 1995 <br>
					<b>Address:</b> 629-A Cardinal Street, Goodyear Park Subdivision, Almanza Uno, Las Piñas City <br>
					<b>Contact Info:</b> raravalo@up.edu.ph <i>or</i> richard.ravalo@dlszobel.edu.ph <br>
					<b>Educational Attainment:</b> <br>
					<span style="margin-left: 40px;">
						Master of Library and Information Science <i>(ongoing)</i> <br>
					</span>
					<span style="margin-left: 40px">
						Bachelor of Library and Information Science <i>(2016)</i> <br>
					</span>

					<b>Schools Attended:</b> <br>
					<span style="margin-left: 40px;">
						Unversity of the Philippines - Diliman <i>(Graduate)</i> <br>
					</span>
					<span style="margin-left: 40px;">
						Manuel S. Enverga Univerity Foundation <i>(Undergraduate)</i>	
					</span>
				</article>
			</span>
		</div>

		<footer align="center">
			<big>&copy; Richard Alphege A. Ravalo, RL</big> | IBED - Junior Librarian | Sacred Heart College of Lucena, Inc. |
			(042) 710 3888 | (+63) 943 282 0995 | raravalo@up.edu.ph
		</footer>
		<!-- Live Reload Script -->
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	<!-- Body Section Ends Here -->
	</body>
</html>