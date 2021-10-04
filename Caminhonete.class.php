<?php

class Caminhonete extends Handler
{
	private $successor;
	public function setSuccessor($nextVehicle)
	{
		$this->successor = $nextVehicle;
	}
	public function handleRequest($request)
	{
		if($request->getWeight() < 3000) {
			print("Uma caminhonete é boa para locomover: " . $request->getWeight() . "\n");
		} else if(!is_null($this->successor)) {
			$this->successor->handleRequest($request);
		}
	}
}