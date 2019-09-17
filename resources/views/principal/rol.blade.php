<?php

$apikey='AIzaSyBU1lZtClzanCeW37ILQ2UB70X-VatLSps';
		$videoID='JRd0RroEzEw';
	   $dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=$videoID&key=$apikey");
	   $duration = json_decode($dur, true);
		 foreach ($duration['items'] as $vidTime) 
		 { 
			 $vTime= $vidTime['contentDetails']['duration'];
		
         }
         echo $vTime;

?>

<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/JRd0RroEzEw" frameborder="0" allow="accelerometer; autoplay; gyroscope; picture-in-picture" allowfullscreen></iframe>