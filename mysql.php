<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

print "server: $server <br>";
print "username: $username <br>";
print "password: $password <br>";
print "db: $db <br>";
?>
