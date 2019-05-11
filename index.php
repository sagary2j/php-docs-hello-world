<?php

$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "mydrupalserver.mysql.database.azure.com", "myadmin@mydrupalserver", "deployit@123", "sampledb", 3306);

echo "Hello Sagar. You are Rockstar Baby!!!";
