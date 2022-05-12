<?php include "nav.php"; ?> <!-- linking php to get nav to in the main page --> 

		
<div style="grid-area:slideshow;"> <!-- slideshow grid --> 
<div class="siema">
<img src="img/slide1.png" width="100%" style="margin: auto">
<img src="img/slide2.png" width="100%" style="margin: auto">
<img src="img/slide3.png" width="100%" style="margin: auto">
</div>
</div>
<script src="siema.min.js"></script>	<!-- external javascript to make a slideshow --> 
<script>
  const s = new Siema({loop: true});
</script>
<script>
start();
function start(){
s.next(); 
setTimeout(start,4000); 
}
window.addEventListener("keydown", function (event) {
  if (event.defaultPrevented) {
    return; // Do nothing if the event was already processedl
  }

  switch (event.key) {
    case "ArrowLeft":
      s.prev();
      break; 
    case "ArrowRight":
      s.next();
      break;
    default:
      return; // Quit when this doesn't handle the key event.
  }

  // Cancel the default action to avoid it being handled twice
  event.preventDefault();
}, true);
</script>
			
					<main class="box"> <!-- main page conetent -->  
			
			
			<h2>Home</h2>
			
			<p>
				Start exploring and make your ‘NZ must do’ bucket list a reality.
			</p>
			
			<p>
				Across New Zealand, you can find everything from untamed wilderness to rich culture. Find inspiration in towering mountains and mist-cloaked fjords.<br>
				Serenity in golden beaches curled around quiet bays. New friends in small towns with big doses of laid-back charm.
			</p>
			
			<div>
				
				Tourism in New Zealand comprises an important sector of the national economy – it directly contributed NZ$16.2 billion (or 5.8%) of the country's GDP in the year ended March 2019.[2] In 2016 tourism supported 188,000 full-time-equivalent jobs (nearly 7.5% of New 					Zealand's workforce). The flow-on effects of tourism indirectly contribute a further 4.3% of GDP (or NZ$9.8 billion).<br>
				Despite the country's geographical isolation, spending by international tourists accounted for 17.1% of New Zealand's export earnings (nearly NZ$12 billion). International and domestic tourism contributed, in total, NZ$34 billion to New Zealand's economy every year as of 2017.[3]

				New Zealand markets itself abroad as a "clean, green" adventure-playground (Tourism New Zealand's main marketing slogan, "100% Pure New Zealand", reflects this) with typical tourist destinations being nature areas such as Milford Sound, Abel Tasman National Park and the Tongariro Alpine Crossing; while activities such as bungee jumping or whale watching exemplify typical tourist attractions, often[quantify] marketed primarily to individual and small-group travellers.<br> Australia is by far the largest source of New Zealand's international tourists (about 45%), due to its close proximity (3-4 hours by plane) and traditional good relations. Mainland China, the United States and the United Kingdom are the next three largest markets.
				
			</div>
			
		</main>
		
		<aside class="box"> <!-- voting system --> 
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
			
		</aside>
		

	<?php include "bot.php"; ?> <!-- getting the footer in to main page -->