<?php

echo ("CLOSED");
$command = 'python close.py';
exec($command, $output);
header("Location: access.php");