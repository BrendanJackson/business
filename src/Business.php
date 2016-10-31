<?php

namespace My_company;

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

	public function get_staff_members() 
	{
		return $this->staff->get_members();
	}
}