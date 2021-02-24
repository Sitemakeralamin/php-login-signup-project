<?php

setcookie("CUSRPHP"," ",time()-(86400*7));

header("location: login.php");
?>