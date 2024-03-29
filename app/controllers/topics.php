<?php 

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateTopic.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'topics';

$topics = selectAll($table);

$errors = array();
$id = '';
$name = '';
$description = '';

if(isset($_POST['add-topic']))
{
	adminOnly();
	$errors = validateTopic($_POST);
	if(count($errors) === 0 ) 
	{
		unset($_POST['add-topic']);
		$topic_id = create($table, $_POST);
		$_SESSION['message'] = 'Topic created successfully';
		$_SESSION['type'] = 'success';
		header('location: ' . BASE_URL . '/admin/topics/index.php');
		exit();	
	} else
	{
		$name = $_POST['name'];
		$description = $_POST['description'];
	}

	
}

if(isset($_GET['id'])) 
{
	$id = $_GET['id'];
	$topic = selectOne($table, ['ID' => $id]);
	$id = $topic['ID'];
	$name = $topic['name'];
	$description = $topic['Description'];
}

if(isset($_POST['update-topic']))
{
	adminOnly();
	$errors = validateTopic($_POST);
	if(count($errors) === 0 ) 
	{

		$id = $_POST['id'];
		unset($_POST['update-topic'], $_POST['id']);
		$topic_id = update($table, $id, $_POST);
		$_SESSION['message'] = 'Topic updated successfully';
		$_SESSION['type'] = 'success';
		header('location: ' . BASE_URL . '/admin/topics/index.php');
		exit();
	} 
	else
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$description = $_POST['description'];
	}
}

if(isset($_GET['del_id']))
{
	adminOnly();
	$id = $_GET['del_id'];
	$count = delete($table,$id);
	$_SESSION['message'] = 'Topic deleted successfully';
	$_SESSION['type'] = 'success';
	header('location: ' . BASE_URL . '/admin/topics/index.php');
	exit();
}