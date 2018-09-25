<?php
/**
 * Created by PhpStorm.
 * User: vince
 * Date: 25/09/18
 * Time: 09:52
 */

// src/Controller/ItemController.php
require __DIR__ . '/../Model/ItemManager.php';

$items = selectAllItems();

require __DIR__ . '/../View/item.php';
