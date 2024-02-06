<?php
/**
 * Header & Footer Code Injection
 * https://mrna.ir
 */
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

function mrna_IP_flag_config() {
	return array(
    	"name" => "mrna Show Country Flag",
    	"description" => "Show Countrty Flag in Support Tickets",
    	"version" => "0.1",
    	"author" => "<a href='https://mrna.ir'>Mohammad Reza Nasari Asl</a>",
    	"language" => "english"
    );
}