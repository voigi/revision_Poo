<?php

namespace DAO;

use Entity\Dog;
use Exception;
use PDO;

class DogDao
{
	private $PDO;

	public function __construct()
	{
		try {
			$this->PDO = new PDO('mysql:dbname=veto', 'root', '');
			

		} catch (Exception $e) {
			echo 'Exception lors de connexion à la bdd';
			die();
		}

	}

	public function insert(Dog $dog)
	{
		$sql = "INSERT INTO dog (name,age)
        VALUES (:name,:age)";
		$statement = $this->PDO->prepare($sql);
		$statement->execute([
			'name' => $dog->getNom(),
			'age' => $dog->getAge()
		]);
		$dog->setId($this->PDO->lastInsertId());
	}
	public function getById(int $id)
	{
		$sql =" SELECT * FROM dog WHERE id=:id";
		$statement = $this->PDO->prepare($sql);
		$statement->execute([
			'id'=>$id
		]);
		$data = $statement->fetch(PDO::FETCH_ASSOC);

		return $this->transformRowToObject($data);

	}

  private function transformRowToObject(array $row){
	$dog=new Dog();
	$dog->setAge($row['age']);
	$dog->setNom($row['name']);
	return $dog;
  }
}