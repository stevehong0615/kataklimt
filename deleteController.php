<?php

require_once("database.php");

$delete=$_POST['delete'];
$delete_sql = "DELETE FROM album WHERE id =".$delete;
mysqli_query($conn, $delete_sql);

?>