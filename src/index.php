<?php

declare(strict_types=1);

//phpinfo();

//echo "Hello World";

$connection = mysqli_connect('mysql', 'root', 'root');

$connection->query('CREATE DATABASE `lemp_docker`');