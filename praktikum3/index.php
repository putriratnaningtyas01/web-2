<?php
require_once("function/CallPage.php");
callpage("navbar");
if (isset($_GET['page'])) {
    callpage($_GET['page']);
} else {
    callpage("home");
}
callpage("footer");


?>