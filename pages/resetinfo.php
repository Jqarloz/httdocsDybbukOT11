<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>
    </head>
    <style type="text/css">
    	body,html{
    		height: 100%;
    	}
    	.modal {
    		position: fixed;
    		top: 0;
    		left: 0;
    		width: 100%;
    		height: 100%;
    		background: rgba(0,0,0,.5);
    		display: none;
    	}
    	.container {
    		width: 50%;
    		max-height: 1000px;
    		margin: 0 auto;
    	}
    	article{
    		margin-top: 160px;
    		background: #FFF;
    		padding: 24px;
    		box-shadow: 0 1px 2px rgba(0,0,0,.9);
    	}
    	.bgimg {
		    background-image: url("<?PHP echo $layout_name; ?>/images/img/header3.jpg");
		    color: white;
		    font-family: "Courier New", Courier, monospace;
		    font-size: 25px;
		}
		.middle {
		    text-align: center;
		}
    </style>
    <body>
    	<div class="modal" id="Omodal1">
    		<div class="container">
    			<article>
    				<center><h2>Premio 1:</h2></center>
    				<table width="100%">
    					<tr>
    						<td align="right" valign="bottom"><img src="\images\items\tc.gif"></td>
    						<td align="center" valign="bottom"><h4>300 Premium Points</h4></td>
    					</tr>
    					<tr>
    						<td align="right" valign="bottom"><img src="\images\items\16101.gif"></td>
    						<td align="center" valign="bottom"><h4>Mes VIP</h4></td>
    					</tr>
    				</table>
    			</article>
    		</div>
    	</div>
    	<div class="modal" id="Omodal2">
    		<div class="container">
    			<article>
    				<center><h2>Premio 2:</h2></center>
    				<table width="100%">
    					<tr>
    						<td align="right" valign="bottom"><img src="\images\items\tc.gif"></td>
    						<td align="center" valign="bottom"><h4>200 Premium Points</h4></td>
    					</tr>
    					<tr>
    						<td align="right" valign="bottom"><img src="\images\items\9004.gif"></td>
    						<td align="center" valign="bottom"><h4>Semana VIP</h4></td>
    					</tr>
    				</table>
    			</article>
    		</div>
    	</div>
    	<div class="modal" id="Omodal3">
    		<div class="container">
    			<article>
    				<center><h2>Premio 3:</h2></center>
    				<table width="100%">
    					<tr>
    						<td align="right" valign="bottom"><img src="\images\items\tc.gif"></td>
    						<td align="center" valign="bottom"><h4>100 Premium Points</h4></td>
    					</tr>
    					<tr>
    						<td align="right" valign="bottom"><img src="\images\items\9004.gif"></td>
    						<td align="center" valign="bottom"><h4>Experience Card</h4></td>
    					</tr>
    				</table>
    			</article>
    		</div>
    	</div>

	    <div>
			<table>
				<tr><center><h2>Sistema Reset Dybbuk OT Server</h2></center></tr>
				<tr><p><b>Tiempo:</b> Cada 4 meses.</p></tr>
				<tr><p><b>Premios:</b> Solo a los 5 primeros HighLevel del server.</p></tr>
				<tr><p><center>El reset de cada cuatro meses solo afectara al LVL de todos los personajes, los skills e items no se perderan.</center></p></tr>
			</table>
			<table width="100%">
				<tr>
					<td align="center" colspan="2"><center><img src="<?PHP echo $layout_name; ?>/images/img/1.gif" ></center></td>
					<td align="center" colspan="2"><center><img src="<?PHP echo $layout_name; ?>/images/img/2.gif"></center></td>
					<td align="center" colspan="2"><center><img src="<?PHP echo $layout_name; ?>/images/img/3.gif"></center></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><center><a href="" id="modal1" class="btn">1° Premio</a></center></td>
					<td align="center" colspan="2"><center><a href="" id="modal2" class="btn">2° Premio</a></center></td>
					<td align="center" colspan="2"><center><a href="" id="modal3" class="btn">3° Premio</a></center></td>
				</tr>
			</table>
			<div class="bgimg">
				<div class="middle">
					<h4 style="font-size:30px;text-shadow: -2px -2px 1px #000, 2px 2px 1px #000, -2px 2px 1px #000, 2px -2px 1px #000;">Siguiente Reset:</h4>
					<hr width="300px">
					<b><p id="demo" style="font-size:30px;text-shadow: -2px -2px 1px #000, 2px 2px 1px #000, -2px 2px 1px #000, 2px -2px 1px #000;"></p></b>
				</div>
			</div>
	    </div>



    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript">
      	$(document).ready(function(){
			$('#modal1').click(function(){
				$('#Omodal1').toggle('slow');
			});
			$('#modal2').click(function(){
				$('#Omodal2').toggle('slow');
			});
			$('#modal3').click(function(){
				$('#Omodal3').toggle('slow');
			});
			$('.modal').click(function(){
				$(this).css({display: "none"});
			});
		});
      </script>
      <script>
		// Set the date we're counting down to
		var countDownDate = new Date("Jul 15, 2017 12:00:00").getTime();

		// Update the count down every 1 second
		var countdownfunction = setInterval(function() {

		    // Get todays date and time
		    var now = new Date().getTime();
		    
		    // Find the distance between now an the count down date
		    var distance = countDownDate - now;
		    
		    // Time calculations for days, hours, minutes and seconds
		    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		    
		    // Output the result in an element with id="demo"
		    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
		    + minutes + "m " + seconds + "s ";
		    
		    // If the count down is over, write some text 
		    if (distance < 0) {
		        clearInterval(countdownfunction);
		        document.getElementById("demo").innerHTML = "EXPIRED";
		    }
		}, 1000);
		</script>
    </body>
</html>