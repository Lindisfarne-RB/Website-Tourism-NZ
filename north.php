<?php include "nav.php"; ?> <!-- linking php to get nav to in the north island page --> 

					<main class="box">
			
			
			<h2>North Island</h2>
			
			<p>
				In the north islands the main citys are Auckland, Wellington and Taupo.
			</p>
			
			<h3>
				<u>
				Auckland
				</u>
			</h3>
			<!-- showing pics of North Island -->
			<img src="img/auckland1.jpg" alt="Photo of city in auckland" height="420px" class="islandPic">
			<img src="img/auckland2.jpg" alt="The WestCity shopping centre in Henderson, Auckland" height="420px" class="islandPic">
			<p> <!-- about auckland -->
				Auckland is New Zealand’s most populous city and is a multi-cultural hub of food, music, arts and culture.<br>
				<br>
				Auckland offers an urban environment where most people live within half an hour of beautiful beaches, hiking trails and a dozen enchanting holiday islands.<br>
				Auckland is a shopaholic's paradise, with everything from top-end designers to open-air street markets.<br>
				Discover the diverse range of cafes and restaurants offering cuisine from around the globe and check out the buzzing nightlife of the central city.<br>
				Favourite spots include Wynyard Quarter, the Viaduct Harbour, the Britomart precinct and City Works Depot.
				</p>
			<br>

			<h3>
				<u>
				Taupo
				</u>
			</h3>
			<!-- showing pics of Taupo --> 
			<img src="img/taupo1.jpg" alt="Mine Bay Maori Rock Carvings, Taupō" height="420px" class="islandPic">
			<img src="img/taupo2.jpg" alt="Tourist adventure in Huka Falls with Huka falls river cruise in Taupo, New Zealand." height="420px" class="islandPic">
			<p> <!-- about taupo -->
				The beautiful Lake Taupō is about the size of Singapore.<br>
				<br>
				Taupō was created nearly two thousand years ago by a volcanic eruption so big it darkened the skies in Europe and China.<br>
				Visit the Craters of the Moon and you'll see evidence of the lake's fiery birth in the geysers, steaming craters and boiling mud pools.<br>
				At some of Taupō's beaches, swimmers and paddlers can enjoy warm, geothermal water currents. <br>
				<br>
				Taupō is a great lake for water-skiing, sailing and kayaking.<br>
				The Maori rock carvings at Mine Bay, which can only be seen from the water, make for a great boat trip or kayaking excursion.<br>
				The forests surrounding the lake offer hiking and mountain biking to suit all levels of experience.
				</p>
			<br>

						

			<h3>
				<u>
				Wellington
				</u>
			</h3>
			<!-- showing pics of Wellington --> 
			<img src="img/welling1.jpg" alt="Photo of city in auckland" height="420px" class="islandPic">
			<img src="img/welling2.jpg" alt="The WestCity shopping centre in Henderson, Auckland" height="420px" class="islandPic">
			<p> <!-- about wellington -->
				Situated at the southern end of the North Island, Wellington, New Zealand, was recently named "the coolest little capital in the world" by Lonely Planet.<br>
				<br>
				A must for any Lord of The Rings fan, Wellington, New Zealand is home to Peter Jackson's Weta Workshop and the Weta Cave, where you can get a behind-the-scenes look at movie making magic. <br>
				It’s also a great base for day tours to experience “Middle‑earth™” scenery. <br>
				<br>
				Surrounded by nature and fuelled by creative energy, Wellington is a compact city with a powerful mix of culture, history, nature and cuisine.<br>
				Fuel your visit with strong coffee and world-class craft beer – Wellingtonians are masters of casual dining, with plenty of great restaurants, night markets and food trucks.
				<br>
				On the waterfront itself you’ll find New Zealand’s national museum. Te Papa, as it’s colloquially known, means ‘our place’ and is one of the best interactive museums in the world.
				</p>
			<br>
</main>
		
		<aside class="box"> <!-- getting polling on the side -->
			<head>
				<script>
					function getVote(int) {
						var xmlhttp=new XMLHttpRequest();
						xmlhttp.onreadystatechange=function() {
							if (this.readyState==4 && this.status==200) {
								document.getElementById("poll").innerHTML=this.responseText;
							}
						}
						xmlhttp.open("GET","poll/north_vote.php?vote="+int,true);
						xmlhttp.send();
					}
				</script>
			</head>
			<body>
				<div id="poll">
					<h3>What island of new zealand do you like more?</h3>
					<form>
						North Island <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
						South Island <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
					</form>
				</div>
			</body>
			
			<img src="img/kiwi.png" alt="the skiwi" style="position: relative; float:right; top: 91.2%;">
		</aside>
		
	<?php include "bot.php"; ?> <!-- getting the footer in to north island page -->