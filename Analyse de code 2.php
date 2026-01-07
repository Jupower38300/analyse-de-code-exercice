<?php

function createUser($name, $email) { // Bien le nom de la fonction / fonction courte / un seul rôle

    $db = new PDO('mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD']); // Ne pas mettre  les données de connexion en dur (faut en .env)

    $sql = "INSERT INTO users VALUES (null, $name, $email)"; // Utiliser des requêtes préparées pour éviter les injections SQL
    $db->query($sql); // Ne pas utiliser query pour les opérations d'insertion, utiliser prepare et execute

    return true; // Retourner une valeur significative / besoin de plus d'informations sur le succès de l'opération
}
