<?php

class Caminhao extends Handler
{	
	private $successor;
	public function setSuccessor($nextVehicle)
	{
		$this->successor = $nextVehicle;
	}
	public function handleRequest($request)
	{
		if($request->getWeight() < 5000) {
			print("Um caminhão será bom para locomover o peso: " . $request->getWeight() . "\n");
		} else if(!is_null($this->successor)) {
			$this->successor->handleRequest($request);
		}
	}	
}