#consultar todos los registros
SELECT * FROPM pokemons;

#Consultar un solo campo
SELECT name FROM pokemons;

#Consultar diferentes campos
SELECT name,speed FROM pokemons;

#Consultar valores distintos
SELECT DISTINCT type FROM pokemons;

#Consultar registro como criterio especifico
SELECT name ,strength FROM pokemons WHERE strength > 500;

SELECT *  FROM pokemons WHERE strength >  1000;

SELECT * FROM pokemons WHERE type = 'agua' OR type = 'electrico';

SELECT * FROM pokemons WHERE type = 'agua' AND speed > 80 ;

SELECT * FROM pokemons WHERE stamina BETWEEN 200 AND 300;

#Ordenar acendente
SELECT * FROM pokemons ORDER BY strength;
SELECT * FROM pokemons ORDER BY strength ASC;

#Ordenar descendente
SELECT * FROM pokemons ORDER BY strength DESC;

SELECT * FROM pokemons WHERE speed > 100 ORDER BY speed DESC;

#Limit y en que fila comienza
SELECT * FROM pokemons LIMIT 10;

SELECT * FROM pokemons LIMIT 5 OFFSET 10;

SELECT * FROM pokemons LIMIT 10, 5;

#Buscar (LIKE)
#Mostrar resultados que inician con 'A'
SELECT *
FROM pokemons
WHERE type
LIKE 'A%';
#Mostrar resultados que terminen con 'L'
SELECT *
FROM pokemons
WHERE type
LIKE '%L';
#Mostrar resultados que contengan 'ma'
SELECT *
FROM pokemons
WHERE name
LIKE '%ma%';
#Mostrar resultados que contengan 'Pikachu'
SELECT *
FROM pokemons
WHERE name
LIKE 'P_k_c_u';
#Mostrar resultados que no contengan 'ma'
SELECT *
FROM pokemons
WHERE name
NOT LIKE '%ma%';
#Mostrar resultados con varios valores 'IN'
SELECT *
FROM pokemons
WHERE type
IN ('Fuego','Electrico');
#Mostrar resultados dentro de un rango (BETWEEN)
SELECT * 
FROM pokemons 
WHERE speed
 BETWEEN 90 AND 100;