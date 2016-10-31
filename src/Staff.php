<?php

namespace My_company;


class Staff
{
	protected $members = [];

	public function add(Person $person) 
	{
		$this->members[] = $person;;
	}

	public function __construct($members = []) 
	{
		$this->members = $members;
	}

	public function get_members() 
	{
		return $this->members;
	}
}