<?php

function connect(){
	//connection id for mysql
	$servername = "mysql-service";
	$username = "root";
	$password = "password";
	$dbname = "weeb";

	//Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	return $conn;
}

function disconnect($current_connection){
	$current_connection->close();
}

function get_anime(){
	$sql_connect = connect();//
	$sql_query = "SELECT * FROM anime";//

	//
	$sql_query_result = $sql_connect->query($sql_query);

	disconnect($sql_connect);//

	return $sql_query_result;
}

function display_anime(){
	$anime_list = get_anime();

	if ($anime_list->num_rows > 0) {
		$result = $anime_list;
	} else {
		$result = "Warning : Data base is empty, 0 result found.";
	}

	return $result;
}
?>
