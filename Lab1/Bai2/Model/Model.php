
<?
 function get_courses() {
    // global $courses;
    include 'Data.php';
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
    // global $courses;
    include 'Data.php';
    return array_key_exists($bclock, $courses)?$courses[$bclock]:"Invalid course";
}
?>