<?php
	/*
	  
	  CONFIG - CHANGE THESE SETTINGS TO MATCH YOUR OWN
	  
	*/
	   
	$title = "My Blog, running on Edit app";
	$edit_account = "0e2974";
	$twitter_username = "14lox";
	$email_address = "dai@14lox.com";
	
	/* END OF CONFIG */
	
	
?>

<!doctype html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php echo $title ?></title>
		<link rel="stylesheet" href="style.css" type="text/css">
		
	</head>
	<body>
	<div id="wrapper">
	<header>
		<hgroup>
		<h1 class="logo"><?php echo $header ?></h1>
		<p><i>Running on <a href="http://app.byed.it" title="http://app.byed.it" target="_blank">Edit iPhone App</a> &bull; <a href="http://twitter.com/<?php echo $twitter_username ?>" target="_blank" title="http://twitter.com/<?php echo $twitter_username ?>">@<?php echo $twitter_username ?></a> &bull; <a href="mailto:<?php echo $email_address ?>" title="<?php echo $email_address ?>""><?php echo $email_address ?></a></i></p>
		</hgroup>	
	</header>	
		<section>
		<?php 
			$xml = simplexml_load_file('http://app.byed.it/'.$edit_account.'/feed');
	
			foreach ($xml->channel->item as $i)
			{
				echo "<div class='itemdiv'>";
				echo "<h2>", $i->title , "</h2>";
				echo "<article class=''>", $i->description , "</article>";
				echo "</div>";
			}
		?>

		</section>
	</div><!-- wrapper -->	
	</body>
</html>
