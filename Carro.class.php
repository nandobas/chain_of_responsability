<?php 

class Carro extends Handler
{
	private $successor;
	public function setSuccessor($nextVehicle)
	{
	$this->successor = $nextVehicle;
	}
	public function handleRequest($request)
	{
		if($request->getWeight() < 1500) {
			print("Um carro é o suficiente para locomover: " . $request->getWeight() . "\n");
		} else if(!is_null($this->successor)) {
			$this->successor->handleRequest($request);
		}
	}
}