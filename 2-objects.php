<?php

class Team
{
	protected $name;
	protected $members = [];

	public function __construct($name, $members = [])
	{
		$this->name = $name;
		$this->members = $members;
	}

	public static function create(...$params)
	{
		return new static(...$params);
	}

	public function name()
	{
		return $this->name;
	}

	public function members()
	{
		return $this->members;
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

class Member
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function lastViewed()
	{;
	}
}

$acme = Team::create('Acme', [
	new Member('Sally Fields'),
	new Member('Burt Reynolds'),
]);
// $acme = new Team('Acme', [
// 	'Sally Fields',
// 	'Burt Reynolds'
// ]);

$acme->add('John Doe');
$acme->add('Jane Doe');

var_dump($acme->members());