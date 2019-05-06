<?php
	#CLASE:
	// una clase es un modelo que se utiliza para crear objetos que comparten un mismo 
	comportamiento, estado o identidad.
	clase Automovil{
		//PROPIEDADES SON LAS CARACTERISTICAS QUE PUEDE TENER UN OBJETO

		public $marca;
		public modelo;
		
		//METODOS: ES EL ALGORITMO ASOCIADO A UN OBJETOQUE INDICA LA CAPACIDAD DE LO QUE ESTE PUEDE HACER,	
		LA UNICA DIFERENCIA ENTRE EL METODO Y FUNCION ES QUE LLAMAMOS AL METODO A FUNCIONES DE UNA CLASE EN (POO),
		MIENTRAS QUE LLAMAMOS FUNCIONES A LOS ALGORITMOS DE LA PROGRAMACION ESTRUCTURADA.

		public function mostrar(){
			echo "<p> hola, soy un $this->marca, modelo $this-> modelo</p>";
		}
	}

	//OBJETOS: es una entidad provista de metodos o mensajes a los cuales responde 
	propiedades con valores concretos.

	$a = new Automovil()
	$a-> marca = "Chevrolet";
	$a-> modelo = "Chevy";
	$a-> mostrar();


	//principios de la POO que se cumplen en este mensaje
	//1. ABSTRACCION: nuevos tipos de datos(el quieras lo creas)
	//2. ENCAPSULACION: Organiza el codigo en grupos logicos 
	//3. OCULTAMIENTO: oculta detalles de implementacion y expone solo los detalles que sean necesarios, para el resto del sistema
	//
?>