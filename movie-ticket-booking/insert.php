$username = "anychart_user";
  $password = "password";  
  $host = "localhost";
  $database="local_db";
 
  
  $server = mysql_connect($host, $username, $password);
  $connection = mysql_select_db($database, $server);
 
 
  $myquery = "
    SELECT  * FROM  `data`
    ";
  $query = mysql_query($myquery);
 
  if ( ! $query ) {
    echo mysql_error();
    die;
  }
 
  echo json_encode($data);  
 
 
  mysql_close($server);
?>
