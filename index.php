<!doctype html>
<html>
<head>
<?php include("inc/poker.php");?>
<meta charset="utf-8">
<title>Satoshi Poker</title>
<link href="poker.css" rel="stylesheet" type="text/css">
</head>	
<body>	
	<div id='main'>
		
		<div id='topBanner'>
	    <img src="imgs/sampleHeader.jpg" width="1018" height="61" alt=""/>
		</div>
		
		<div id="bannerAd">
	    <img src="imgs/leaderboardAD.jpg" width="728" height="90" alt=""/>
		</div>
		
	 	<div id='rightCol'>
		<img src="imgs/sidead.jpg" width="300" height="600">
		</div>
		
	 	<div id='game'>
			<table id="5card">
				<tr>
					<td><?php $dc1->displayCard();?></td>
					<td><?php $dc2->displayCard();?></td>
					<td><?php $dc3->displayCard();?></td>
					<td><?php $dc4->displayCard();?></td>
					<td><?php $dc5->displayCard();?></td>
				</tr>
			</table>
			
			<form>
				<textarea rows="10" cols="100">test text <?php echo is_flush($myHand); ?></textarea>
			</form>
		</div>
	</div>
</body>
</html>