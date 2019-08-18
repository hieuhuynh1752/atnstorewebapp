<?php
	function latests_product_head(){
		$db = getDB();// Connect to database
		$query ="SELECT * FROM products LIMIT 4";
		try {
			$statement = $db->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			$statement->closeCursor();
			return $result;
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}

	function latests_product_head1(){
		$db = getDB();// Connect to database
		$query ="SELECT * FROM products LIMIT 4, 4";
		try {
			$statement = $db->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			$statement->closeCursor();
			return $result;
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}

	function latests_product_head2(){
		$db = getDB();// Connect to database
		$query ="SELECT * FROM products LIMIT 8, 4";
		try {
			$statement = $db->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			$statement->closeCursor();
			return $result;
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}

	function latests_product_head3(){
		$db = getDB();// Connect to database
		$query ="SELECT * FROM products LIMIT 12, 4";
		try {
			$statement = $db->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			$statement->closeCursor();
			return $result;
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}

	function latests_product_tail(){
		$db = getDB();// Connect to database
		$query ="SELECT * FROM products ORDER BY rand() LIMIT 8";
		try {
			$statement = $db->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			$statement->closeCursor();
			return $result;
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}

	function latests_product_single(){
		$db = getDB();// Connect to database
		$query ="SELECT * FROM products ORDER BY rand() LIMIT 12";
		try {
			$statement = $db->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			$statement->closeCursor();
			return $result;
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}
?>