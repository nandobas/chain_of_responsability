<?php

class Client
{	
	public function __construct()
	{
		$carro = new Carro();
		$caminhonete = new Caminhonete();
		$caminhao = new Caminhao();

		$carro->setSuccessor($caminhonete);
		$caminhonete->setSuccessor($caminhao);

		// Gera e processa o carregamendo das requisições
		$request = new Request(1000);
		$carro->handleRequest($request);

		$request = new Request(2500);
		$carro->handleRequest($request);

		$request = new Request(4500);
		$carro->handleRequest($request);
	}
}