<?
include '../Model/Model.php';
?>
<?
$list_of_courses = get_courses();
$bclock = (!empty($_GET['bclock'])) ? $_GET['bclock'] :'';
$courses_name = find_by_bclock($bclock);
?>
<?
include '../Views/Views.php';
?>