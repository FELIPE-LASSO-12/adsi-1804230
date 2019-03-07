Proceso salarioEquipoTrabajo
	cantidadEmpleados<-3
	valorHoraE<-43000
	valorHoraExtraE<-0
	cantidadHorasL<-40
	cantidadHorasE<-0
	cantHorasExtras<-0
	salarioIndividual<-0
	salarioTotalEmpleados<-0
	
	Para iteraciones<-1 Hasta cantidadEmpleados Con Paso 1 Hacer
		Escribir 	"Ingrese cantidad de horas laboradas"
		Leer cantidadHorasE
		
		Si (cantidadHorasE > cantidadHorasL) Entonces
			cantHorasExtras <-cantidadHorasE-cantidadHorasL
			Escribir "Usted laboro ", cantHorasExtras, " horas extras"
			
			valorHoraExtraE<-((cantHorasExtras * valorHoraE)*0.5)+(cantHorasExtras * valorHoraE)
			Escribir "El pago excedente por horas extras del empleado numero ", iteraciones, " Es de " valorHoraExtraE
			salarioIndividual<-valorHoraExtraE+(cantidadHorasL*valorHoraE)
			Escribir "El salario total corresponde a ", salarioIndividual
			salarioTotalEmpleados<-salarioTotalEmpleados + salarioIndividual
			Escribir "El salario total por todos los empleados es de " salarioTotalEmpleados
		Sino
			Escribir "No trabajo horas extra"
			salarioIndividual<-cantidadHorasL*valorHoraE
			Escribir "El salario total corresponde a ", salarioIndividual
			salarioTotalEmpleados<-salarioTotalEmpleados + salarioIndividual
			Escribir "El salario total por todos los empleados es de " salarioTotalEmpleados
		Fin Si

	Fin Para
FinProceso
