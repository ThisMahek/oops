<?php
// $int=curl_init();
// curl_setopt($int,CURLOPT_URL,"https://www.google.com/");
// curl_setopt($ch,CURLOTP_RETURNTRANSFER,true);
// curl_setopt($ch,CURLOTP_POSTFIELDS,true);
// curl_exec($int);
// curl_close($int);

//download image for others server
$url="https://img.freepik.com/free-photo/bird-colorful-colorful-flowers-generative-ai_206725-752.jpg?w=360&t=st=1687504701~exp=1687505301~hmac=f544cac144e61960fa9268088847549f9fd12e4ef369663b6dada27b04924afc";
$image="imagew3.jpg";   //jis name se image ko save krna hai
$fimage=fopen($image,'w+');
$ch=curl_init($url);
curl_setopt($ch,CURLOPT_URL,$fimage);
curl_setopt($ch,CURLOPT_TIMEOUT,1000);
curl_exec($ch);
curl_close($ch);
fclose($fimage);



?>