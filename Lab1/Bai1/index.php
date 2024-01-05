<?php
echo "PC06843 - Lab 1.1 <br>";

 $courses = [
    "block 1" =>'Lập trình Web',
    "block 2" =>'Lập trình PHP1',
    "block 3" =>'Lập trình PHP2'
 ];

 
 // Mode

 /**
  * Hàm này dùng để lấy ra mảng tuần tự của khóa học
  *@return array
  *
  */

 function get_courses() {
    global $courses;

    return array_values($courses);
}
/**
 * @param string $bclock
 * 
 * Hàm này kiểm tra coi có cái khóa học gì đó hong
 * 
 * @return string
 */
function find_by_bclock($bclock) {
    global $courses;
    return array_key_exists($bclock, $courses)?$courses[$bclock]:"Invalid course";
}

$list_of_courses = get_courses();
$bclock = (!empty($_GET['bclock'])) ? $_GET['bclock'] :'';
$courses_name = find_by_bclock($bclock);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1.1</title>
</head>
<body>
    <h1><?= $courses_name ?></h1>
    <form action="">

    <select name="bclock" id="">
        <?php foreach($courses as $key => $value): ?>
        <option value="<?=$key ?>"><?= $value ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Tìm khóa học</button>
</body>
</html>