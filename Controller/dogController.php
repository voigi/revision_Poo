<?php

require_once '../autoload.php';
session_start();

use DAO\DogDao;
use Entity\Dog;
use Validator\DogValidator;

$action = htmlspecialchars($_GET['action']);

switch ($action) {
	case 'create':

		$name = htmlspecialchars($_POST['name']);
		$age = htmlspecialchars($_POST['age']);
        $age = intval($age);
		$dog = new Dog;
		$dog->setNom($name);
		$dog->setAge($age);

		$validator = new DogValidator;
		$errors = $validator->validate($dog);
		if (empty($errors)) {
			$dao = new DogDao();
			$dao->insert($dog);
			$id = $dog->getId();
			header("Location: dogController.php?action=details&id=$id");
		} else {
			$_SESSION['errors'] = $errors;
			header('Location:view/createDog.php');
		}
		break;
	case 'details':
		$id=intval($_GET['id']);
		$dao = new DogDao();
		$dog = $dao->getById($id);
		$_SESSION['dog']= $dog;
		header("Location:../view/detailDog.php");

		break;
	case 'list':
		break;
	case 'delete':
		break;
	default:
		break;
}