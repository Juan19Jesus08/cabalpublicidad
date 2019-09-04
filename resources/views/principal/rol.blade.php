<?php
    $apikey='AIzaSyBU1lZtClzanCeW37ILQ2UB70X-VatLSps';
    $videoID='63QywBbmENw';
   $dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=$videoID&key=$apikey");
   $duration = json_decode($dur, true);
     foreach ($duration['items'] as $vidTime) 
     { 
         $vTime= $vidTime['contentDetails']['duration'];
    
     }
     //echo $vTime;
     $resultado="";
     $resultado =  str_replace("H", ":", $vTime);
     $resultado =  str_replace("M", ":", $resultado);
     $resultado=substr($resultado, 0, -1);
     $resultado=substr($resultado,  2 );


    echo "La cadena resultante es: " . $resultado;
     //print_r( $duration);

?>