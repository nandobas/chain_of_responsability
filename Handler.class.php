<?php
abstract class Handler
{

      abstract public function handleRequest($request);

      abstract public function setSuccessor($nextVehicle);

}