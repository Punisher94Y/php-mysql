

Fadhlaoui Hazem




-- Question 2 : 
INSERT INTO `personnage` (`id`, `nom`, `espèce`, `âge`) VALUES (NULL, 'Bob', 'Eponge', '32')

-- Question 3 : 
SELECT p.nom as personnage,v.nom as voiture FROM `voiture` AS v INNER JOIN personnage as p ON v.id_personnage = p.id WHERE p.id = 1;

-- Question 3C :
SELECT plus le temps rip
