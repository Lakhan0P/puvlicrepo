<?php



//https://m.youtube.com/watch?v=uOknLNTNf3Y
//https://youtu.be/uOknLNTNf3Y




//FREE WORKING API BY [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘]

error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');

require 'function.php';

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
  extract($_GET);
}
function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}


function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
function xcodeproxy()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = xcodeproxy();

//https://youtu.be/DeTUN9lLTo8
$separa2 = explode("|", $lista);
$separa = explode("&", $lista);
//echo "<br>";
 $ql = $separa2[1];
$ano = $separa[2];
//echo$cvv = $separa[3]; //Also Url

var_dump($ql);
var_dump($separa2);
var_dump($lista);
echo     "<br>";
// echo     <b>Lista : var_dump($separa);
echo     '<b>Video_Id : ' . $uri . '';
echo     "<br>";



echo " <hr> ";



// https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=55&playlistId=PLu0W_9lII9agiCUZYRsvtGTXdxkzPyItg&key=AIzaSyCZMaXIy8VsjqLjmSLGNPevax8_I2BSJgE 
// pageToken=
// content-length: 103558602


$url = "$separa[0]";

    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);

    $youtube_id = $match[1];

echo $youtube_id;


// https://www.youtube.com/watch?v=Rek0NWPCNOc&list=PLfqMhTWNBTe3H6c9OGXb5_6wcc1Mca52n&index=2&t=1923s

echo " <hr> ";





switch ($ql) {

  case '128':

    $fty = 'mp3';
    $fql = '128';
    echo '<b>Your Quality : ' . $fql . '';
    break;


  case '360':

    $fty = 'mp4';
    $fql = '360';
    echo '<b>Your Quality : ' . $fql . '';
    break;

  case '240':

    $fty = 'mp4';
    $fql = '240';
    echo '<b>Your Quality : ' . $fql . '';
    break;


  case '480':

    $fty = 'mp4';
    $fql = '480';
    echo '<b>Your Quality : ' . $fql . '';
    break;


  case '720':
    $fty = 'mp4';
    $fql = '720';
    echo '<b>Your Quality : ' . $fql . '';
    break;

  case '1080p+HFR':

    $fty = 'mp4';
    $fql = '1080p+HFR';
    echo '<b>Your Quality : ' . $fql . '';
    break;



  default:

    $fty = 'mp4';
    $fql = '480';
    echo '<b>Your ERROR Quality : ' . $fql . '';

    break;
}


// var_dump($url);

$b = explode("|", $br);
$aa = $b[0];
$bb = $b[1];
$cc = $b[2];
$dd = $b[3];
"<br>";
$aa = "$aa";

//1080p+HFR
//128,mp3

//720

////////////////////////////===[Randomizing Details Api]

////////////////////////////===[Luminati Details]

$username = 'Put Zone Username Here';
$password = 'Put Zone Password Here';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';

////////////////////////////===[For Authorizing Cards]

//$uri= 'clGqR8OZACY';
//https://m.youtube.com/watch?v=uOknLNTNf3Y
//https://youtu.be/uOknLNTNf3Y


$uri = $youtube_id;


$ch = curl_init();
/////////========Luminati
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
////////=========Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://www.y2mate.com/mates/analyze/ajax');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'origin: https://www.y2mate.com',
  'referer: https://www.y2mate.com/youtube/' . $uri . '',
  'user-agent: Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mobile Safari/537.36',
  'accept: */*',
  'x-requested-with: XMLHttpRequest',
  'sec-fetch-site: same-site'
));
//'user-agent: #'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D' . $uri . '&q_auto=1&ajax=1');

$Pista = curl_exec($ch);


//$mesi = multiexplode(array("video_extractor"), $Pista)[0];
//echo $id = trim(strip_tags(getStr($mesi,'var k__id',';')));


$mesi = multiexplode(array("video_extractor"), $Pista)[0];
$iid = trim(strip_tags(getStr($mesi, 'var k__id = \"', '\"')));

//echo $mes = multiexplode(array("<", "|", ""), $Pista)[51];

//echo $id = trim(strip_tags(getStr($mesi,'var k__id',';')));

echo '<hr>';
echo $iid;
echo '<hr>';
// echo "<button onclick="myFunction()">Click me</button> ";
echo '<hr>';


$ch = curl_init();
/////////========Luminati
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
////////=========Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://www.y2mate.com/mates/convert');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  'origin: https://www.y2mate.com',
  'referer: https://www.y2mate.com/youtube/' . $uri . '',
  'user-agent: Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mobile Safari/537.36',
  'accept: */*',
  'x-requested-with: XMLHttpRequest',
  'sec-fetch-site: same-site'
));
//'user-agent: #'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=youtube&_id=' . $iid . '&v_id=' . $uri . '&ajax=1&token=&ftype=' . $fty . '&fquality=' . $fql . '');

$Lista = curl_exec($ch);


$mes = multiexplode(array("<", "|", ""), $Lista)[4];
echo '<hr>';
echo $token = trim(strip_tags(getStr($mes, 'href=\"', '\"')));

//echo '<hr>';

//echo $mes = multiexplode(array("<", "|", ""), $Pista)[4];

echo '<hr>';



//{"status":"success","result":" <div class=\"tabs row\"> <div class=\"col-xs-12 col-sm-5 col-md-5\"> <div class=\"thumbnail cover\"> <a href=\"javascript:void(0);\" rel=\"nofollow\" class=\"video-thumbnail\"> <img src=\"https:\/\/i.ytimg.com\/vi\/czliqnWC6bQ\/0.jpg\" alt=\"Youtube downloader thumbnail\"> <\/a> <div class=\"caption text-left\"> <b>Boys transformation|Poor to rich guy| Boys attitude status |Part-10<\/b> <\/div> <\/div> <div class=\"hidden-md hidden-lg\"> <div id=\"M826034ScriptRootC1351211\"><\/div> <script src=\"https:\/\/jsc.adskeeper.com\/y\/2\/y2mate.com.1351211.js\" async><\/script> <\/div> <\/div> <div class=\"col-xs-12 col-sm-7 col-md-7\"> <ul class=\"nav nav-tabs\"> <li class=\"active\"> <a href=\"#mp4\" data-toggle=\"tab\">Video<\/a> <\/li> <li> <a href=\"#mp3\" data-toggle=\"tab\">mp3<\/a> <\/li> <li class=\"\"> <a href=\"#audio\" data-toggle=\"tab\">Audio<\/a> <\/li> <\/ul> <div class=\"tab-content\"> <div class=\"tab-pane fade active in\" id=\"mp4\"> <table class=\"table table-bordered\"> <thead> <tr> <th>Resolution<\/th> <th>FileSize<\/th> <th>Download<\/th> <\/tr> <\/thead> <tbody> <tr> <td> <a href=\"#\" rel=\"nofollow\"> 1080p (.mp4) <span class=\"label label-primary\"><small>full-HD<\/small><\/span><\/a> <\/td> <td>36 MB<\/td> <td class=\"txt-center\"> <a href=\"javascript:void(0)\" rel=\"nofollow\" type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#progress\" data-ftype=\"mp4\" data-fquality=\"1080\"> <i class=\"glyphicon glyphicon-download-alt\"><\/i>&nbsp; Download <\/a> <\/td> <\/tr> <tr> <td> <a href=\"#\" rel=\"nofollow\"> 720p (.mp4) <span class=\"label label-primary\"><small>m-HD<\/small><\/span><\/a> <\/td> <td>12.8 MB<\/td> <td class=\"txt-center\"> <a href=\"javascript:void(0)\" rel=\"nofollow\" type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#progress\" data-ftype=\"mp4\" data-fquality=\"720p\"> <i class=\"glyphicon glyphicon-download-alt\"><\/i>&nbsp; Download <\/a> <\/td> <\/tr> <tr> <td> <a href=\"#\" rel=\"nofollow\"> 480p (.mp4)<\/a> <\/td> <td>8.2 MB<\/td> <td class=\"txt-center\"> <a href=\"javascript:void(0)\" rel=\"nofollow\" type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#progress\" data-ftype=\"mp4\" data-fquality=\"480\"> <i class=\"glyphicon glyphicon-download-alt\"><\/i>&nbsp; Download <\/a> <\/td> <\/tr> <tr> <td> <a href=\"#\" rel=\"nofollow\"> 360p (.mp4)<\/a> <\/td> <td>10.1 MB<\/td> <td class=\"txt-center\"> <a href=\"javascript:void(0)\" rel=\"nofollow\" type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#progress\" data-ftype=\"mp4\" data-fquality=\"360\"> <i class=\"glyphicon glyphicon-download-alt\"><\/i>&nbsp; Download <\/a> <\/td> <\/tr> <tr> <td> <a href=\"#\" rel=\"nofollow\"> 240p (.mp4)<\/a> <\/td> <td>4.6 MB<\/td> <td class=\"txt-center\"> <a href=\"javascript:void(0)\" rel=\"nofollow\" type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#progress\" data-ftype=\"mp4\" data-fquality=\"240p\"> <i class=\"glyphicon glyphicon-download-alt\"><\/i>&nbsp; Download <\/a> <\/td> <\/tr> <tr> <td> <a href=\"#\" rel=\"nofollow\"> 144p (.mp4)<\/a> <\/td> <td>3.7 MB<\/td> <td class=\"txt-center\"> <a href=\"javascript:void(0)\" rel=\"nofollow\" type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#progress\" data-ftype=\"mp4\" data-fquality=\"144p\"> <i class=\"glyphicon glyphicon-download-alt\"><\/i>&nbsp; Download <\/a> <\/td> <\/tr> <tr> <td> <a href=\"#\" rel=\"nofollow\"> 144p (.3gp)<\/a> <\/td> <td>MB<\/td> <td class=\"txt-center\"> <a href=\"javascript:void(0)\" rel=\"nofollow\" type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#progress\" data-ftype=\"3gp\" data-fquality=\"144p\"> <i class=\"glyphicon glyphicon-download-alt\"><\/i>&nbsp; Download <\/a> <\/td> <\/tr> <\/tbody> <\/table> <\/div> <div class=\"tab-pane fade\" id=\"mp3\"> <table class=\"table table-bordered\"> <thead><tr><th>File type<\/th><th>FileSize<\/th><th>Download<\/th><\/tr><\/thead> <tbody> <tr> <td> <a href=\"#\" rel=\"nofollow\"> .mp3 (128kbps)<\/a> <\/td> <td>2.3 MB<\/td> <td class=\"txt-center\"> <a href=\"javascript:void(0);\" id=\"process_mp3_a\" rel=\"nofollow\" type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#progress\" data-ftype=\"mp3\" data-fquality=\"128\"> <i class=\"glyphicon glyphicon-download-alt\"><\/i>&nbsp; Download <\/a> <\/td> <\/tr> <\/tbody> <\/table> <\/div> <div class=\"tab-pane fade\" id=\"audio\"> <table class=\"table table-bordered\"> <thead> <tr> <th>File type<\/th> <th>FileSize<\/th> <th>Download<\/th> <\/tr> <\/thead> <tbody> <tr> <td> <a href=\"#\" rel=\"nofollow\"> .mp3 (128kbps)<\/a> <\/td> <td>2.3 MB<\/td> <td class=\"txt-center\"> <button id=\"process_mp3_2\" class=\"btn btn-success hidden\" onclick=\"checkToken();\"> <i class=\"glyphicon glyphicon-download-alt\"><\/i>&nbsp; Download<\/button> <a href=\"javascript:void(0);\" id=\"dbtn-mp3128\" rel=\"nofollow\" type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#progress\" data-ftype=\"mp3\" data-fquality=\"128\"> <i class=\"glyphicon glyphicon-download-alt\"><\/i>&nbsp; Download<\/a> <\/td> <\/tr> <\/tbody> <\/table> <\/div> <\/div> <div class=\"hidden-md hidden-lg\"> <div id=\"M826034ScriptRootC1351213\"><\/div> <script src=\"https:\/\/jsc.adskeeper.com\/y\/2\/y2mate.com.1351213.js\" async><\/script> <\/div> <\/div> <div class=\"clearfix\"><\/div> <\/div> <input type=\"hidden\" data-id=\"czliqnWC6bQ\" data-extractor=\"youtube\" data-service=\"youtube\" id=\"video_status\"> <script type=\"text\/javascript\"> var k_data_vid = \"czliqnWC6bQ\"; var k_data_vtitle = \"Boys transformation|Poor to rich guy| Boys attitude status |Part-10\"; var k__id = \"627b3793f99cc58f2e8b4568\"; var video_service = \"youtube\"; var video_extractor = \"youtube\"; <\/script> "}

// echo '<script>window.open("' . $token . '","_blank")</script>';

sleep(2);


if (strpos($token, 'file')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $uri . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ FILE DOWNLOADING SUCCESS FULL♛ </span></br>';
} elseif (strpos($token, 'googlevideo')) {
  echo '<span class="badge badge-success">#Aprovada</span> <span class="badge badge-success">✓</span> <span class="badge badge-success">' . $uri . '</span> <span class="badge badge-info">✓</span> <span class="badge badge-info"> ★ FILE DOWNLOADING SUCCESS FULL♛ </span></br>';
  
} else {
  echo '<span class="new badge red">#Reprovadas</span> <span class="new badge red">✕</span> <span class="new badge red">' . $uri . '</span> <span class="new badge red">✕</span> <span class="badge badge-info"> ★ Site Error [𝗧𝗘𝗔𝗠 𝗫𝗖𝗢𝗗𝗘] ♛</span> </br>';
}

curl_close($ch);
ob_flush();


/*
$ch = curl_init();
/////////========Luminati
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
////////=========Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https:\/\/dl146.y2mate.com\/?file=M3R4SUNiN3JsOHJ6WWQ2a3NQS1Y5ZGlxVlZIOCtyZ0hxdlFBL2xzQk5JVmluOFlDNTdEd2FQcGtCNGxFN0tpTFBmZGd6SFhzVk9PL2UwU3JnN1lJZXppc3g0SnQ4Z244dUw0U2ZPMVFZam5LME1XTXRBTlh3a3pTWCtyb081a2RTMFZlaGd0RitoUzI4NldNNlFXMnZtMzU0VXVLWUNFMW9qb2ZOYWlWbzdsUjJuemZldlhobHNJam9EYkxwOGh2aTdYUGtnTDY1S01NNFBOUGYyZE5UTVFGaVlxNzB1Q1k0MEFjajhRMTlBdWhzZkt2RkpzaEZhaWJKR1ltYUhaZnZMKytEMEpZM0N3RS9USHRvZlozdWpkUk43Tmp0V2EyclE9PQ%3D%3D
');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  
  'user-agent: Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mobile Safari/537.36',
  'accept: ',
  'x-requested-with: XMLHttpRequest',
  'Content-type: video/mp4',
  
  // It will be called video.flv
  'Content-Disposition: attachment; filename="video.mp4',
  
  // The PDF source is in original.flv
  
  'sec-fetch-site: same-site'));
  //'user-agent: #'));
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
//curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=youtube&_id='.$iid.'&v_id='.$uri.'&ajax=1&token=&ftype=mp4&fquality=480');



/*
// Initialize a file URL to the variable
$url =
'https:\/\/dl146.y2mate.com\/?file=M3R4SUNiN3JsOHJ6WWQ2a3NQS1Y5ZGlxVlZIOCtyZ0hxdlFBL2xzQk5JVmluOFlDNTdEd2FQcGtCNGxFN0tpTFBmZGd6SFhzVk9PL2UwU3JnN1lJZXppc3g0SnQ4Z244dUw0U2ZPMVFZam5LME1XTXRBTlh3a3pTWCtyb081a2RTMFZlaGd0RitoUzI4NldNNlFXMnZtMzU0VXVLWUNFMW9qb2ZOYWlWbzdsUjJuemZldlhobHNJam9EYkxwOGh2aTdYUGtnTDY1S01NNFBOUGYyZE5UTVFGaVlxNzB1Q1k0MEFjajhRMTlBdWhzZkt2RkpzaEZhaWJKR1ltYUhaZnZMKytEMEpZM0N3RS9USHRvZlozdWpkUk43Tmp0V2EyclE9PQ%3D%3D
';
readfile('original.mp4');
// Use basename() function to return the base name of file
$file_name = basename($url);

// Use file_get_contents() function to get the file
// from url and use file_put_contents() function to
// save the file by using base name
if (file_put_contents($file_name, file_get_contents($url)))
{
  echo "File downloadeding successfully";
}
else
{
  echo "File downloading failed.";
}
*/



//var_dump($mes);
/*

function get_dataa($url) {
  $ch = curl_init();
  $timeout = 5;
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
  curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}

echo $variableee = get_dataa($token);
*/

//var_dump($variableee);
//echo  $variableee[624];
////Uncomment this section fo







//echo  $output[624];
////Uncomment this section for using 2req////////////////////////===[For Charging Cards]-[If U Want To Charge Your Card Uncomment And Add Site]







/*



https://www.y2mate.com/mates/convert


:authority: www.y2mate.com
:method: POST
:path: /mates/convert
:scheme: https
accept: **
accept-encoding: gzip, deflate, br
accept-language: en
content-length: 95
content-type: application/x-www-form-urlencoded; charset=UTF-8
cookie: _gid=GA1.2.1804387591.1664545161; _ga_K8CD7CY0TZ=GS1.1.1664613434.13.1.1664614778.0.0.0; _ga=GA1.1.369596284.1654594946
origin: https://www.y2mate.com
referer: https://www.y2mate.com/youtube/czliqnWC6bQ
sec-ch-ua: "Google Chrome";v="105", "Not)A;Brand";v="8", "Chromium";v="105"
sec-ch-ua-mobile: ?1
sec-ch-ua-platform: "Android"
sec-fetch-dest: empty
sec-fetch-mode: cors
sec-fetch-site: same-origin





type=youtube&_id=627b3793f99cc58f2e8b4568&v_id=czliqnWC6bQ&ajax=1&token=&ftype=mp4&fquality=480




{"status":"success","result":"<script type=\"text\/javascript\">$(\"#process-waiting\").css(\"display\",\"none\"),\"undefined\"!=typeof iWorker&&(clearInterval(iWorker),iWorker=void 0);<\/script>\r\n<div class=\"form-group has-success has-feedback\">\r\n    <a href=\"https:\/\/dl253.y2mate.com\/?file=M3R4SUNiN3JsOHJ6WWQ2a3NQS1Y5ZGlxVlZIOCtyZ0dsOHdwakFReEFLVmZvSUk5MnVXMEtzWkJIcWdBMzhHMkhwVkcvRDNRT3RlZUtVU3J1WUUxQ1hLVjQ5OHByRHZLdUowMFdOMWtSVjNJbXZTM3gyRkozVitsYnBiQUJld1FhMzUzcG45ejBqS2JrYlNHbnd6M3BtbTRwVWpHUGdJSG9tOU9iOVBSdE0xdTFuUEhadWJxNUxOVHJ4ZWd0c0laeXI2UXBGV3d4TGN4NWZWYkdFRnNZNWxQM0k3ODB2V1I5QkZQMU05Tmd4ejIvYVMxRDRRd1FmUFBMbUFvYTNaUCt2bXlXQmxL\" rel=\"nofollow\" type=\"button\" class=\"btn btn-success btn-file\">\r\n        <i class=\"glyphicon glyphicon-download-alt\"><\/i>&nbsp; Download .mp4    <\/a>\r\n<\/div>"}



*/




// $ch = curl_init();
// /////////========Luminati
// curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
// ////////=========Socks Proxy
// //curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
// curl_setopt($ch, CURLOPT_URL, '#');
// curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//   'Host: '#',    [If No Host Data On Site Dont Uncomment It]  
//   'accept: '#',
//   'content-type: #',
//   'cookie: #',   [If No Cookie Data On Site Dont Uncomment It]
//   'Origin: #',
//   'referer: #',
//   'Sec-Fetch-Mode: #',
// ));
// curl_setopt($ch, CURLOPT_POSTFIELDS, '#');

// $result = curl_exec($ch);
// $message = trim(strip_tags(getStr($result,'"message":"','"'))); 

////////////////////////////===[Card Response]



//////=========Comment Echo $result If U Want To Hide Site Side Response

///////////////////////////////////////////////===========xD========\\\\\\\\\\\\\\\


//https://youtu.be/DeTUN9lLTo8
//https://youtu.be/clGqR8OZACY

//$htmlContent = '<div class="my-con">Content</div>';
/*
$Liista = '<div class="my-con">Content goes here...</div>';

echo $cd= preg_match('/<div class="my-con">(.*?)<\/div>/s', $htmlContent, $match);


$Lisita = '{"status":"success","result":"<script type=\"text\/javascript\">$(\"#process-waiting\").css(\"display\",\"none\"),\"undefined\"!=typeof iWorker&&(clearInterval(iWorker),iWorker=void 0);<\/script>\r\n<div class=\"form-group has-success has-feedback\">\r\n    <a href=\"https:\/\/dl253.y2mate.com\/?file=M3R4SUNiN3JsOHJ6WWQ2a3NQS1Y5ZGlxVlZIOCtyZ0dsOHdwakFReEFLVmZvSUk5MnVXMEtzWkJIcWdBMzhHMkhwVkcvRDNRT3RlZUtVU3J1WUUxQ1hLVjQ5OHByRHZLdUowMFdOMWtSVjNJbXZTM3gyRkozVitsYnBiQUJld1FhMzUzcG45ejBqS2JrYlNHbnd6M3BtbTRwVWpHUGdJSG9tOU9iOVBSdE0xdTFuUEhadWJxNUxOVHJ4ZWd0c0laeXI2UXBGV3d4TGN4NWZWYkdFRnNZNWxQM0k3ODB2V1I5QkZQMU05Tmd4ejIvYVMxRDRRd1FmUFBMbUFvYTNaUCt2bXlXQmxL\" rel=\"nofollow\" type=\"button\" class=\"btn btn-success btn-file\">\r\n        <i class=\"glyphicon glyphicon-download-alt\"><\/i>&nbsp; Download .mp4    <\/a>\r\n<\/div>"}';

 $code= preg_match('/<a href=\"(.*?)"/', $DT, $match);





/*
$links = [
  "youtube.com/v/tFad5gHoBjY",
  "youtube.com/vi/tFad5gHoBjY",
  "youtube.com/?v=tFad5gHoBjY",
  "youtube.com/?vi=tFad5gHoBjY",
  "youtube.com/watch?v=tFad5gHoBjY",
  "youtube.com/watch?vi=tFad5gHoBjY",
  "youtu.be/tFad5gHoBjY",
  "http://youtu.be/qokEYBNWA_0?t=30m26s",
  "youtube.com/v/vidid",
  "youtube.com/vi/vidid",
  "youtube.com/?v=vidid",
  "youtube.com/?vi=vidid",
  "youtube.com/watch?v=vidid",
  "youtube.com/watch?vi=vidid",
  "youtu.be/vidid",
  "youtube.com/embed/vidid",
  "http://youtube.com/v/vidid",
  "http://www.youtube.com/v/vidid",
  "https://www.youtube.com/v/vidid",
  "youtube.com/watch?v=vidid&wtv=wtv",
  "http://www.youtube.com/watch?dev=inprogress&v=vidid&feature=related",
  "youtube.com/watch?v=7HCZvhRAk-M"
];

foreach($separa as $link){
  preg_match("#([\/|\?|&]vi?[\/|=]|youtu\.be\/|embed\/)([a-zA-Z0-9_-]+)#", $link, $matches);
  var_dump(end($matches));
}
*/

/*
echo $get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
*/

//var_dump($match);
//var_dump($DT);
//print_r($match);
echo '<hr>';
//echo  $messahge = trim(strip_tags(getStr($DT,'"status":"','"'))); 
//$token = trim(strip_tags(getStr($result,'"id": "','"')));


