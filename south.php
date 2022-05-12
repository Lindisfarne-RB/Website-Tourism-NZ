<?php include "nav.php"; ?> <!-- linking php to get nav to in the south island page --> 

			<main class="box"> <!-- main content --> 
			
			
			<h2>South Island</h2>
			
			<p>
				The south islands the main attractions are in Christchurch, Queenstown and Milford Sound.
			</p>
			
			<h3>
				<u>
				Christchurch
				</u>
			</h3> 
			<!-- showing pics of christchruch --> 
			<img src="img/christ1.jpg" alt="Street Art" height="420px" style="padding : 10px;border-radius: 25px;">
			<img src="img/christ2.jpg" alt="Southern Alps from helicopter" height="420px" style="padding : 10px;border-radius: 25px;">
			<p> <!-- about christchruch -->
				The regions of Christchurch are set against the majestic backdrops of both alps and ocean.<br>
				<br>
				The main feature of scenery in the South Island is mountains. Not to mention the fun activities such as skiing and snowboarding.<br>
				The Southern Alps mountain range is the backbone of the island, stretching for roughly 500 kilometres from Wanaka to Arthur's Pass.<br>
				The highest mountain in New Zealand, Aoraki/Mount Cook, soars to 3,724 metres. Mount Cook is one of New Zealand's greatest natural features.<br>
				The pyramid-shaped peak entices both day walkers and keen climbers.<br>
				To get a glimpse of New Zealand's tallest mountain, you can visit Aoraki/Mount Cook National Park for a day walk or even an overnight trip to the famous Mueller's Hut. 
				<br>
				After the devastating earthquakes in 2011, Christchurch was rebuilt as a more creative and funky urban centre.<br>
				Wander through the streets admiring the colourful murals that tell stories of the city's resilience and indomitable spirit. 
				</p>
			<br>

			<h3>
				<u>
				Queenstown
				</u>
			</h3>
			<!-- showing pics of Queenstown --> 
			<img src="img/queen1.jpg" alt="Photo of Queenstown and lake in winter" height="420px" style="padding : 10px;border-radius: 25px;">
			<img src="img/queen2.jpg" alt="Photo of people riding down luge." height="420px" style="padding : 10px;border-radius: 25px;">
			<p> <!-- about queenstown -->
				Queenstown is one of New Zealand’s most exciting destinations. Surrounded by towering mountains, positioned on the edge of a lake, Queenstown is a hub of adventure.<br>
				<br>
				Enjoy an iconic Queenstown experience and take the Queenstown Gondola(opens in new window) up 450 metres up to Bob's Peak.<br>
				From the top, enjoy panoramic views of the aptly named The Remarkables mountain range and Lake Wakatipu.<br>
				Try your hand at the Queenstown Luge(opens in new window) and zoom down the course of banked corners, tunnels and dippers.<br>
				<br>
				Lake Wakatipu is Queenstown’s crown jewel. Upon arriving in Queenstown, you will undoubtedly notice the huge lake the town sits adjacent to.<br>
				Back in the day, it was used as one of the main methods for transport, but today it is most famous for its size, beauty, and setting which leave visitors in awe.
				</p>
			<br>

						

			<h3>
				<u>
				Mildford Sound
				</u>
			</h3>
			<!-- showing pics of Mildford Sound --> 
			<img src="img/sound1.jpg" alt="Photo of city in auckland" height="420px" style="padding : 10px;border-radius: 25px;">
			<img src="img/sound2.jpg" alt="The WestCity shopping centre in Henderson, Auckland" height="420px" style="padding : 10px;border-radius: 25px;">
			<p> <!-- about mildford sound -->
				Situated on the west coast of the South Island, Milford Sound is where plunging cliffs and raging waterfalls meet inky dark waters. This is New Zealand's wild side at its absolute best.<br>
				<br>
				Famously described by Rudyard Kipling as the 'eighth wonder of the world', Milford Sound was carved by glaciers during the ice ages.<br>
				<br>
				Breathtaking in any weather, the fiord's cliffs rise vertically from the dark waters, mountain peaks scrape the sky and waterfalls cascade downwards from as high as 1000 metres.<br>
				<br>
				Milford Sound and Fiordland's land-before-time landscapes are best explored by kayak. If you're lucky, you might even spot a bottlenose dolphin or fur seal.<br>
				Kayaking offers paddlers an unforgettable opportunity to see the region's spectacular fiords at sea level as well as explore untouched waterways and lakes.
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
		

	<?php include "bot.php"; ?> <!-- getting the footer in to south island page -->