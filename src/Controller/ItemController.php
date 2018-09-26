<?php
/**
 * Created by PhpStorm.
 * User: vince
 * Date: 25/09/18
 * Time: 09:52
 */
namespace Controller;
// src/Controller/ItemController.php
use Model\ItemManager;

class ItemController{

    public function index()
    {

    }
}

$items = new ItemManager();
$items = $items->selectAllItems();

require __DIR__ . '/../View/item.php';
