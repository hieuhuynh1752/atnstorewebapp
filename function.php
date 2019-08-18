<?php 
	function getDB(){
		try {
			$dbc = parse_url(getenv("DATABASE_URL"));
   			$pdo = new PDO("pgsql:" . sprintf(
        	"host=ec2-107-22-238-217.compute-1.amazonaws.com;port=5432;user=bmrlbiyrzmjzir;password=abd4bf8a966d95d972d40e56c70b26f7d79492bf119f19630b59c72685007b8c;dbname=ddsg2vt3pgj067",
        	$dbc["host"],
        	$dbc["port"],
        	$dbc["user"],
        	$dbc["pass"],
        	ltrim($dbc["path"], "/")));
        	return $pdo;					
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error connecting to database".$error_message; 
		}
	}

	function get_categories(){
		$db = getDB();// Connect to database
		$query ="SELECT * FROM categories";
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

	function add_category($categoryName, $description){
			$db = getDB();// Connect to database
			$query ="INSERT INTO public.categories(categoryname, description)
                VALUES ('?','?');";
			try {
				$statement = $db->prepare($query);
				$statement->bindParam(1,$categoryName);
				$statement->bindParam(2,$description);
				$statement->execute();
				$statement->closeCursor();			
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo "Error execute query statement:".$error_message; 
			}
		}
	

	function get_category_by_id($categoryID){
		$db = getDB();// Connect to database
		$query ="SELECT * FROM public.categories 
				WHERE categoryID=? 
				ORDER BY categoryID";
		try {
			$statement = $db->prepare($query);
			$statement->bindParam(1,$categoryID);
			$statement->execute();
			$result = $statement->fetch();
			$statement->closeCursor();
			return $result;
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}

	function delete_category_by_id($categoryID){
		$db = getDB();// Connect to database
		$query ="DELETE  FROM public.categories 
				WHERE categoryID=?";
		try {
			$statement = $db->prepare($query);
			$statement->bindParam(1,$categoryID);
			$statement->execute();			
			$statement->closeCursor();		
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}
	}

	function update_category($categoryID,$categoryName,$description){
		$db = getDB();// Connect to database
		$query ="UPDATE public.categories
				SET  categoryName =?,
					 description=?					 
				WHERE categoryID=?";
		try {
			$statement = $db->prepare($query);			
			$statement->bindParam(1,$categoryName);
			$statement->bindParam(2,$description);			
			$statement->bindParam(3,$categoryID);
			$statement->execute();			
			$statement->closeCursor();		
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Error execute query statement:".$error_message; 
		}


	}

	function get_invoice(){
		$db = getDB();// Connect to database
		$query ="SELECT * FROM public.invoice";
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