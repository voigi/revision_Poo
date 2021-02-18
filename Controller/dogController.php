<?php

$action = htmlspecialchars($_GET['action']);
switch ($action) {
	case 'create':

		$name = htmlspecialchars($_POST['name']);
		$age = htmlspecialchars($_POST['age']);
		break;
	case 'read':
		break;
	case 'update':
		break;
	case 'delete':
		break;
	default:
		break;
}