#Eliminar 
DELETE FROM trainers
WHERE id = 5;

#Eliminar todos los registros de una tabla
DELETE FROM trainers;

#Vaciar tabla
TRUNCATE trainers;

#Transacciones:

BEGIN;

DELETE FROM trainers
WHERE id > 2;

ROLLBACK;

SELECT t.name AS name_trainer, p.name AS name_pokemon, p.type AS type_pokemon
FROM trainers AS t, pokemons AS p
WHERE t.id = p.trainer_id 
AND p.type = "Agua" OR p.type = "Fuego"
ORDER BY t.name ASC;

SELECT t.name as name_trainer, COUNT(p.id) AS number_pokemons
FROM pokemons AS p, trainers AS t
WHERE t.id =  p.trainer_id
GROUP BY t.name;

#INNER JOIN
#name_trainer | name_gym | #name_pokemon

SELECT name_trainer,name_gym,name_pokemon
FROM gyms INNER JOIN trainers
ON gym_id = trainer_id INNER JOIN pokemons
ON trainer_id = id_pokemons
ORDER BY id ASC;

 SELECT trainers.name AS Name_trainer,gyms.name AS name_Gym,pokemons.name AS Name_Pokemons
 FROM gyms INNER JOIN trainers
 ON gyms.id = trainers.gym_id INNER JOIN pokemons
 ON trainers.id = pokemons.trainer_id
 ORDER BY trainers.id;

#LEFT JOIN
 SELECT COUNT(pokemons.id) AS Number_Pokemons,trainers.name AS Name_trainer,gyms.name AS name_Gym
 FROM gyms LEFT JOIN trainers
 ON gyms.id = trainers.gym_id LEFT JOIN pokemons
 ON trainers.id = pokemons.trainer_id
 GROUP BY trainers.id;

#RIGHT JOIN
 SELECT trainers.name AS Name_trainer,gyms.name AS name_Gym,pokemons.name as name_pokemon
 FROM gyms RIGHT JOIN trainers
 ON gyms.id = trainers.gym_id RIGHT JOIN pokemons
 ON trainers.id = pokemons.trainer_id AND trainer_id = 1
 ORDER BY trainers.name;

#JOIN
 SELECT trainers.name AS Name_trainer,gyms.name AS name_Gym,pokemons.name as name_pokemon
 FROM gyms JOIN trainers
 ON gyms.id = trainers.gym_id JOIN pokemons
 ON trainers.id = pokemons.trainer_id AND trainer_id = 1
 ORDER BY trainers.name;

 #UNION (unir consultas)
 SELECT name FROM trainers
 UNION
 SELECT name FROM gyms
 UNION
 SELECT name FROM pokemons;

#VISTAS (VIEWS)
CREATE VIEW num_pokemons AS 
 SELECT COUNT(pokemons.id) AS Number_Pokemons,trainers.name AS Name_trainer,gyms.name AS name_Gym
 FROM gyms LEFT JOIN trainers
 ON gyms.id = trainers.gym_id LEFT JOIN pokemons
 ON trainers.id = pokemons.trainer_id
 GROUP BY trainers.id;