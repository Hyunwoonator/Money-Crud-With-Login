<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'ec2-3-222-127-167.compute-1.amazonaws.com');
define('DB_USERNAME', 'mhnrewtnjszpws');
define('DB_PASSWORD', '254dd1b3831b802e64dad1962fe999bf06c7b5229f1288b97a5c8af532bdac53');
define('DB_NAME', 'd94pp8sla59p3b');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$result = mysql_query("CREATE TABLE `users` (`id` int(11) NOT NULL, `username` varchar(50) NOT NULL, `password` varchar(255) NOT NULL, `created_at` datetime DEFAULT current_timestamp()) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

if ($result = $mysqli -> query("CREATE TABLE `users` (`id` int(11) NOT NULL, `username` varchar(50) NOT NULL, `password` varchar(255) NOT NULL, `created_at` datetime DEFAULT current_timestamp()) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;")) {
  //echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  $result -> free_result();
}

// Check connection 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

