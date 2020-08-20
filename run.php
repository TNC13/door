<?php

echo ("OPEN");
$command = 'python motor.py';
exec($command, $output);
header("Location: access.php");