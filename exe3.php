<?php
class MyUserClass{
	public function getUserList(){
		$dbconn = new DatabaseConnection('localhost','user','password');
		if(!$dbconn){
		  echo "Erro na conexão com o banco de dados";
		}
		else{
			$results = $dbconn->query('select name from user');
			
			if(!$results){
			  echo "Erro na execução da consulta";
			}
			else{
				sort($results);
				return $results;
			}
		}
	}		
}

?>