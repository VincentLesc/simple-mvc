<?php
/**
 * Created by PhpStorm.
 * User: vince
 * Date: 25/09/18
 * Time: 09:52
 */

// src/Model/ItemManager.php
require __DIR__ . '/../../app/db.php';

// récupération de tous les items
function selectAllItems() :array
{
    $pdo = new \PDO(DSN, USER, PASS);
    $query = "SELECT * FROM item";
    $res = $pdo->query($query);
    return $res->fetchAll();
}