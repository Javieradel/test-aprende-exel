
<?php
function determineCt($ip){

#$ip = $_SERVER['REMOTE_ADDR'];

$dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

//echo "<pre>".var_dump($dataArray->geoplugin_countryName)."</pre>";

//echo "Hola visitante desde: ".$dataArray["geoplugin_countryName"];

return $dataArray->geoplugin_countryName;
}
function extractDataCountrys(){
    
    $dataArray = json_decode(file_get_contents("https://restcountries.eu/rest/v2/all?callingCodes;alpha2Code"));
    //print_r($dataArray);
    return $dataArray;
}
function extractDataCountry($country){
    
    $dataArray = json_decode(file_get_contents("https://restcountries.eu/rest/v2/name/$country?fields=name;flag;callingCodes;alpha2Code"));
    //print_r($dataArray);
    
    return $dataArray;
}
 ?>
 
