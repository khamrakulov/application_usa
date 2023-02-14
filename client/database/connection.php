<?php
const host = getenv(HOST);
const user = getenv(USER);
const password = getenv(PASSWORD);
const database = getenv(DATABASE);


$db = new mysqli(host, user, password, database);

if ($db->connect_errno) {
    echo "Failed to connect to MySQL:".$db->connect_error;
    exit();
}

?>