<?php
defined('lab2') or die('Access denied');
$view = isset($_GET['view']) ? $_GET['view'] : 'main';
require_once TEMPLATE.'index.php';