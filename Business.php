<?php
	
class Business
{
	//Typehinting, Person states that there must be a Person object used here
	public function __construct(Staff $staff) 
	{
		$this->staff = $staff;
	}

	public function hire(Person $person) 
	{
		$this->staff->add($person);
	}
}

class Staff
{
	protected $members = [];

	public function add(Person $person) 
	{
		$this->members[] = $person;;
	}
}

class Person
{
	protected $name;

	public function __construct($name) 
	{
		$this->name = $name;
	}
}

$Brendan = new Person("Brendan Jackson!");

$Staff = new Staff(); 

$Brendans_company = new Business($Staff);
