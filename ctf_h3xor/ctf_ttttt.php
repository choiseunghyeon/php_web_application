<?php
function generateRandomString($length = 32) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
while(1){
  $var = generateRandomString();
  if(md5($var)=='0e34213413'){
    echo $var;
    break;
  }
}

 ?>
if(md5(sVfMpo5axzo6wJAdOL9yYCbodHVn3rxv)=='0e2342342'){
  echo strlen(sVfMpo5axzo6wJAdOL9yYCbodHVn3rxv).'good job';
}



sVfMpo5axzo6wJAdOL9yYCbodHVn3rxv
