<?php

while(true) {
	sleep(10);
$getdata = json_decode(file_get_contents("http://www.oppo.com/en/supports/after-sales/ImeiCheck/check_result?ino=867458031".rand(500000,999999).""));
$imei = $getdata->imei;
$status  = $getdata->devname;
$tanggal  = $getdata->senddate;
if($status == "F5ID"){
$hasil = "F5ID";
$imei1 = $imei;
$tanggal1  = $tanggal;
} else {
$hasil = "INVALID";
$imei1 = $imei;
$tanggal1  = "INVALID";
}
print "\n";
print ''.$imei1.' | '.$hasil.' | '.$tanggal1.'';
}
//{"flag":1,"imei":"867458031974993","devname":"F5ID","senddate":"2017-11-14 11:58:07"}
//{"flag":1,"imei":"867458031895057","devname":"F5ID","senddate":"2017-11-14 11:53:40"}
//{"flag":1,"imei":"867458031556352","devname":"F5ID","senddate":"2017-11-15 12:44:30"}
//{"flag":1,"imei":"867458031502794","devname":"F5ID","senddate":"2017-11-11 21:08:13"}
//Febrian Ardi Pangestu
//6282225972849
//anditunet@gmail.com