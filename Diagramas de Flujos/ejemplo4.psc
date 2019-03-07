Proceso Ejercicio4
	Escribir "Ingrese su genero"
	Escribir "F: Mujer"
	Escribir "M: Hombre"
	Leer genero
		
		
	Si((genero = "F")O(genero = "f")) Entonces
			Escribir "El usuario es una mujer"
		Sino
			Si ((genero = "M")O(genero = "m")) Entonces
				Escribir "El usuario es un hombre"
			Sino
				Escribir "El usuario ingreso opción invalida"
			Fin Si
		FinSi	
	FinProceso