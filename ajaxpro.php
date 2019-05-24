<?php


// require('db_config.php');
@ define (DB_USER, "root");
@ define (DB_PASSWORD, "");
@ define (DB_DATABASE, "dropdown");
@ define (DB_HOST, "localhost");


$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

   $sql = "SELECT * FROM demo_cities
         WHERE state_id LIKE '%".$_GET['id']."%'"; 


   $result = $mysqli->query($sql);


   $json = [];
   while($row = $result->fetch_assoc()){
        $json[$row['id']] = $row['name'];
   }


   echo json_encode($json);
?>