<?php
error_reporting(0);

//give you all information you want
if (isset($_GET['all_info_i_want'])) {
    
}

if (isset($_GET['file'])) {
    // if (preg_match('/all_info_u_want/i', $_GET['file']))
    $file = "/var/www/html/" . $_GET['file'];
    //really baby include
    include($file);
}
?>
