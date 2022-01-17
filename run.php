<?php
/*
    RAZEPEDIA
    https://github.com/mrzptra
    API BY RAZEPEDIA.MY.ID
*/

function cekrekening($bank, $norek){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://razepedia.my.id/api/ceknama_rek.php?bank='.$bank.'&norek='.$norek.'',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$respon = curl_exec($curl);

curl_close($curl);
$jsondata = json_decode($respon);
if($jsondata->status == "true"){
  echo "===================================\n";
  echo " Nama : ".$jsondata->data->atasnama."\n";
  echo " No Rekening : ".$jsondata->data->norek."\n";
  echo " Jenis BANK : ".$jsondata->data->bank."\n"run;
  echo "===================================\n";
}else{
  echo "===================================\n";
  echo " Error, Tidak ditemukan data atau server error \n";
  echo "===================================\n";
  }
}
print "====================================\n";
print "┏━━━┳━━━┳━━━━┳━━━┳━━━┳━━━┳━━━┳━━┳━━━┓\n";
print "┃┏━┓┃┏━┓┣━━┓━┃┏━━┫┏━┓┃┏━━┻┓┏┓┣┫┣┫┏━┓┃\n";
print "┃┗━┛┃┃╋┃┃╋┏┛┏┫┗━━┫┗━┛┃┗━━┓┃┃┃┃┃┃┃┃╋┃┃\n";
print "┃┏┓┏┫┗━┛┃┏┛┏┛┃┏━━┫┏━━┫┏━━┛┃┃┃┃┃┃┃┗━┛┃\n";
print "┃┃┃┗┫┏━┓┣┛━┗━┫┗━━┫┃╋╋┃┗━━┳┛┗┛┣┫┣┫┏━┓┃\n";
print "┗┛┗━┻┛╋┗┻━━━━┻━━━┻┛╋╋┗━━━┻━━━┻━━┻┛╋┗┛\n";
print "====================================\n";
echo "Masukkan Nama Bank ? \nInput : ";
$jenengbang = trim(fgets(STDIN));
echo "Masukkan Nomor Rekening ? \nInput : ";
$nomerrek = trim(fgets(STDIN));

$gasken = cekrekening($jenengbang, $nomerrek);
print $gasken;
