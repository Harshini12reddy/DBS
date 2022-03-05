<?php
ob_start();
$action = $_GET['action'];
include 'manager_class.php';
$crud = new Action();

if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'address'){
	$logout = $crud->address();
	if($save)
		echo $save;
}
if($action == 'save_individual'){
	$save = $crud->save_individual();
	if($save)
		echo $save;
}
if($action == 'save_appointment'){
	$save = $crud->save_appointment();
	if($save)
		echo $save;
}
if($action == 'get_appointment'){
	$get = $crud->get_appointment();
	if($get)
		echo $get;
}
if($action == 'update_appointment'){
	$update = $crud->update_appointment();
	if($update)
		echo $update;
}
if($action == 'delete_appointment'){
	$delete = $crud->delete_appointment();
	if($delete)
		echo $delete;
}	echo $delete;
}
if($action == 'save_settings'){
	$save = $crud->save_settings();
	if($save)
		echo $save;
}
if($action == 'submit_appointment'){
	$save = $crud->submit_appointment();
	if($save)
		echo $save;
}
