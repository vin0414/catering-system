<?php
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','u942062804_root');
define('DB_PASS','!5&IqZayzw@&|RvV');
define('DB_NAME','u942062804_reservation');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>