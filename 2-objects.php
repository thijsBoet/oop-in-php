<?php

class Team
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function name()
	{
		return $this->name;
	}

	public function members()
	{;
	}

	public function add($name)
	{
		$this->members[] = $name;
	}

	public function cancel()
	{;
	}

	public function manager()
	{;
	}
}

$acme = new Team('Acme');
$acme->add('John Joe');

var_dump($acme->name());