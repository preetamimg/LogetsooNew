<?php
$get_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$arr = explode("?", $get_url, 2);
$actual_link = $arr[0];
if ($_SERVER["HTTP_HOST"] == "localhost") {
   define('iii', 'http://localhost/logestoo_frontend_ui/');
} else if ($_SERVER['HTTP_HOST'] == '192.168.1.50') {
   define('iii', 'http://192.168.1.50/jitendra/logestoo_frontend_ui/');
} else {
   define('iii', 'https://frontendui.logestoodev.co.in/');
}
