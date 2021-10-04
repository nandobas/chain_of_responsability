<?php

class Request
{
	private $weight;
	public function __construct($weight)
	{
		$this->weight = $weight;
	}
	public function getWeight()
	{
		return $this->weight;
	}
}