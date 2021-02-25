<?php

function cambia($data){
preg_match("/([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})/", $data, $minhadata);
$adata=$minhadata[3]."-".$minhadata[2]."-".$minhadata[1];
return $adata;
}

?>