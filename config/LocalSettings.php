<?php
 
$callingurl = strtolower($_SERVER['REQUEST_URI']); //get the calling url
 
if ( strpos( $callingurl, 'test', 0) ) {
        require_once( 'LocalSettings-test.php' );
}
else {
        require_once( 'LocalSettings-prod.php' );
}