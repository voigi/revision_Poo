<?php

namespace Entity;

class Dog
{
	private $id;

	private $nom;

	private $age;

	/**
	 * Get the value of id
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @return self
	 */
	public function setId($id) : self
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get the value of nom
	 */
	public function getNom()
	{
		return $this->nom;
	}

	/**
	 * Set the value of nom
	 *
	 * @return self
	 */
	public function setNom($nom) : self
	{
		$this->nom = $nom;

		return $this;
	}

	/**
	 * Get the value of age
	 */
	public function getAge()
	{
		return $this->age;
	}

	/**
	 * Set the value of age
	 *
	 * @return self
	 */
	public function setAge($age) : self
	{
		$this->age = $age;

		return $this;
	}
}