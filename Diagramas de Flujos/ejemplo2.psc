Proceso Inicio
	//Declaracion e Inicialización de variables
	valorHora<-43000
	HorasTrabajadas<-40
	HorasLaboradasUsusario<-0
	HorasExtras<-0
	valorSalario<-0
	ValorHoraExtra<-0
	Escribir "ingrese cantidad de horas trabajadas"
	Leer HorasTrabajadas
	
	//Validar si el empleado laboró horas extras
	Si (HorasLaboradasUsusario > HorasTrabajadas) Entonces
		//Restamos para conocer cantidad de horas extras
		HorasExtras <- HorasLaboradasUsusario - HorasTrabajadas
		//Calcular el valor a pagar de las horas extras
		valorHorasExtras <- ((HorasExtras*HoraTrabajadas)*0.5)+(HorasExtras*valorHora)
		valorSalario <- HoraExtra + (HorasTrabajadas*valorHora)
		Escribir "Su salario es " , valorSalario
	
	Sino
		valorSalario <- HorasTrabajadas * valorHora
		Escribir "Su salario es " , valorSalario
	Fin Si
	
FinProceso
