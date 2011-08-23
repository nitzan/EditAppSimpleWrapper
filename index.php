<html>
	<head>
		<title>Blog by Edit</title>
		<link rel="stylesheet" href="style.css" type="text/css">
		
	</head>
	<body>
	<div id="wrapper" class="column4">
	<header>
	
		<h1 class="logo">Edit Feed</h1>
		<p><i>Running on <a href="http://appbyedit.co.uk">Edit iPhone App</a> &bull; <a href="http://twitter.com/TWITTER">@TWITTER</a> &bull; <a href="mailto:EMAIL">EMAIL</a></i></p>
			
	</header>	
		<section>
		<?php 
    $xml = simplexml_load_file('http://appbyedit.co.uk/{USER ID}/feed');
	
	foreach ($xml->channel->children() as $i) {
       
       echo "<article class=''>", $i->description , "</article>";

       
    }

		?>

</section>
	</div><!-- wrapper -->

	</body>
</html>
