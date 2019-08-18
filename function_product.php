<?php
	function get_products(){
		$db = getDB();// Connect to database
		$query ="SELECT * FROM public.products";
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
	
	function get_product_by_id($productID){
		$db = getDB();// Connect to database
		$query ="SELECT * FROM public.products 
				WHERE productid='?';";
		try {
			$statement = $db->prepare($query);
			$statement->bindParam(1,$productID);
			$statement->execute();
			$result = $statement->fetch();
			$statement->closeCursor();
			return $result;
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}

	function get_product_by_categoryid($categoryID){
		if ($categoryID==1) {
			$db = getDB();// Connect to database
		$query ="SELECT * FROM public.products 
				WHERE categoryID=1 LIMIT 12";
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

		elseif ($categoryID==2){
			$db = getDB();// Connect to database
		$query ="SELECT * FROM public.products 
				WHERE categoryID=2";
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
		else {
			$db = getDB();// Connect to database
		$query ="SELECT * FROM public.products 
				WHERE categoryID=3";
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
	}

	function add_product($productName,$categoryID,$price, $description,$image){
		$db = getDB();// Connect to database
		$query ="INSERT INTO public.products(productName, categoryID, price, description, image)
				VALUES (?,?,?,?,?)";
		try {
			$statement = $db->prepare($query);
			$statement->bindParam(1,$productName);
			$statement->bindParam(2,$categoryID);
			$statement->bindParam(3,$price);
			$statement->bindParam(4,$description);
			$statement->bindParam(5,$image);
			$statement->execute();
			$statement->closeCursor();			
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}

	function update_product($productID,$productName,$categoryID,$price, $description,$image){
		$db = getDB();// Connect to database
		$query ="UPDATE public.products
				SET  productName =?,
					 categoryID=?,
					 price=?,
					 description=?,
					 image=?					 
				WHERE productID=?";
		try {
			$statement = $db->prepare($query);		
			$statement->bindParam(1,$productName);
			$statement->bindParam(2,$categoryID);	
			$statement->bindParam(3,$price);
			$statement->bindParam(4,$description);
			$statement->bindParam(5,$image);
			$statement->bindParam(6,$productID);
			$statement->execute();			
			$statement->closeCursor();		
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}
function delete_product($productID){
		$db = getDB();// Connect to database
		$query ="DELETE  FROM public.products 
				WHERE productID=?";
		try {
			$statement = $db->prepare($query);
			$statement->bindParam(1,$productID);
			$statement->execute();			
			$statement->closeCursor();		
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}
	
function search_product($search_value){
		$db = getDB();// Connect to database
		$search = '%'.$search_value.'%';
		$query ="SELECT *  FROM public.products 
				WHERE productName LIKE $search";
		try {
			$statement = $db->prepare($query);
			$statement->bindParam(1,$search_value);
			$statement->execute();			
			$statement->closeCursor();		
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}	
?>