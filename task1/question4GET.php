<?php
echo 'Hello there, General' . htmlspecialchars($_GET["name"]) . '!';
#User enters name through url, adding '?name=ENTERNAME' after php script
?>
