<?php

namespace Validator;

use Entity\Dog;

class DogValidator
{
	public function validate(Dog $dog)
	{
		$errors = [];
		if (!$dog->getNom()) {
			$errors['name'] = 'le nom est obligatoire';
		} elseif (strlen($dog->getNom()) > 255) {
			$errors['name'] = 'le nom ne peut pas faire plus de 255 caractéres';
		}
		if ($dog->getAge() === null) {
			$errors['age'] = 'l\'age est obligatoire';
		} elseif ($dog->getAge() < 0) {
			$errors['age'] = 'l\'age ne peut pas etre négatif';
		}

		return $errors;
	}
}