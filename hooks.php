<?php
use WHMCS\Config\Setting;


add_hook('ClientAreaPageViewTicket', 1, 'ip_flag');


function ip_flag($vars) {


 $base_url = Setting::getValue('SystemURL');

    // if ($vars['templatefile'] == 'viewticket') {
    if ($vars['templatefile'] == 'viewticket') {

        $output = [];

        foreach ($vars['ascreplies'] as $index => $replies) {

            foreach ($replies as $k => $v) {

                if ($k == 'ipaddress') {
                    
                    if (!empty($v)){    
                       $ip_url = $base_url.'/modules/addons/mrna_IP_flag/ip.php?ip='. $v;
                       $homepage = file_get_contents($ip_url);
                       
                    //   require_once(ABSPATH.'tst.php');
    
                      //$v = false;
                      $v = $v . ' ' . '<img src="https://extreme-ip-lookup.com/img/flags/'.trim(strtolower($homepage)). '.png" style="position:relative;top:-2px;left:2px;margin-bottom:-4px;" border="0" height="20" width="20">';
    
                    }
                    
                }

                $output['ascreplies'][$index][$k] = $v;
            }
        }

        foreach ($vars['descreplies'] as $index => $replies) {

            foreach ($replies as $k => $v) {

                if ($k == 'ipaddress') {
                    
                    if (!empty($v)){    
                       $ip_url = $base_url.'/modules/addons/mrna_IP_flag/ip.php?ip='. $v;
                       $homepage = file_get_contents($ip_url);
                       
                    //   require_once(ABSPATH.'tst.php');
    
                      //$v = false;
                      $v = $v . ' ' . '<img src="https://extreme-ip-lookup.com/img/flags/'.trim(strtolower($homepage)). '.png" style="position:relative;top:-2px;left:2px;margin-bottom:-4px;" border="0" height="20" width="20">';
    
                    }
                    
                }

                $output['descreplies'][$index][$k] = $v;
            }
        }
            file_put_contents('/home/devmaralhost/public_html/modules/addons/kn_header_footer_injection/output2.txt', print_r($output,true));

        return $output;
    }
}


?>