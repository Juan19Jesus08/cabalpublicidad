<?php
   $dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=$vId&key=AIzaSyBU1lZtClzanCeW37ILQ2UB70X-VatLSps");
    $duration = json_decode($dur, true);
     foreach ($duration['items'] as $vidTime) 
     { 
         $vTime= $vidTime['contentDetails']['duration'];
    
     }


?>