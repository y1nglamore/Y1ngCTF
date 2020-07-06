<?php
error_reporting(0);
if (isset($_POST['rubic'])) {
    echo file_get_contents("html_src_index_1.html");
} else echo file_get_contents("html_src_index_2.html");