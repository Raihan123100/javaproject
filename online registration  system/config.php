<?php
class DatabaseConnection{
	public function __construct(){ 
	 global $pdo;
		try{

 $pdo =new pdo('mysql:host=localhost;dbname=oopreg1','root','123100');
}
catch(PDOException $e){
exit('Database error');
}
}
}
?>