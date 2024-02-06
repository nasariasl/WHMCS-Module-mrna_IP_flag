<?php

$IP = $_GET['ip'] ;
// $IP =  $v;
require_once("geoip2.phar");
use GeoIp2\Database\Reader;
// City DB
$reader = new Reader('GeoLite2-City.mmdb');
$record = $reader->city($IP);
// $record = $reader->city('185.165.116.14');

// or for Country DB
// $reader = new Reader('/path/to/GeoLite2-Country.mmdb');
// $record = $reader->country($_SERVER['REMOTE_ADDR']);
// print($record->country->isoCode . "\n");
// print($record->country->name . "\n");
// print($record->country->names['zh-CN'] . "\n");
// print($record->mostSpecificSubdivision->name . "\n");
// print($record->mostSpecificSubdivision->isoCode . "\n");
// print($record->city->name . "\n");
// print($record->postal->code . "\n");
// print($record->location->latitude . "\n");
// print($record->location->longitude . "\n");
// print_r($record);
// function country2flag(string $countryCode): string

// {
//     return (string) preg_replace_callback(
//         '/./',
//         static fn (array $letter) => mb_chr(ord($letter[0]) % 32 + 0x1F1E5),
//         $countryCode
//     );
// }
//echo country2flag($record->country->isoCode); // 🇵🇱

/*<img src="https://extreme-ip-lookup.com/img/flags/<?php echo strtolower($record->country->isoCode); ?>.png" style="position:relative;top:-2px;left:2px;margin-bottom:-4px;" border="0" height="20" width="20">*/
echo $record->country->isoCode;
?>
