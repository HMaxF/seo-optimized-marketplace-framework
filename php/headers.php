<?php

// cache for 1 hour = 3600 seconds, 1 hour is good enough
header("Cache-Control: public, max-age=3600");

// Tells Cloudflare it's okay to cache compressed versions
header("Vary: Accept-Encoding"); 

// DO NOT use session_start() because CloudFlare can not serve with cache 
?>
