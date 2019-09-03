<?php
    $apikey='AIzaSyBU1lZtClzanCeW37ILQ2UB70X-VatLSps';
    $videoID='wCSOKiIasN0';
   $dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=$videoID&key=$apikey");
   $duration = json_decode($dur, true);
     foreach ($duration['items'] as $vidTime) 
     { 
         $vTime= $vidTime['contentDetails']['duration'];
    
     }
     echo $vTime;
     print_r( $duration);

?>