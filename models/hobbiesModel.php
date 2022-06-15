<?php

require_once MODELS . "/helper/dbConnection.php";

function get()
{
    $query = conn()->prepare("SELECT id, name, type
    FROM hobbies;");

    try {
        $query->execute();
        $hobbies = $query->fetchAll();
        return $hobbies;
    } catch (PDOException $e) {
        return [];
    }
}